<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * content controller
 */
class content extends Admin_Controller
{

	//--------------------------------------------------------------------


	/**
	 * Constructor
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

		$this->auth->restrict('Menu.Content.View');
		$this->load->model('menu_model', null, true);
		$this->load->model('department/department_model', null, true);
		$this->lang->load('menu');		
		Template::set_block('sub_nav', 'content/_sub_nav');

		Assets::add_module_js('menu', 'menu.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		// Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');

			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$result = $this->menu_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('menu_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('menu_delete_failure') . $this->menu_model->error, 'error');
				}
			}
		}
                
//		$records = $this->menu_model->find_all();
                $config['base_url'] = site_url('admin/content/menu/index');
                $config['total_rows'] = $this->menu_model->count_all();
                $config['per_page'] = 10;
                $config['num_links'] = 5;
                $config['uri_segment'] = 5;
                $this->db->order_by('department_ID asc, position asc,added desc');
                $records  = $this->menu_model->limit($config['per_page'],$this->uri->segment($config['uri_segment']))->find_all();
                $this->pagination->initialize($config);
		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Menu');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a Menu object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Menu.Content.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_menu())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('menu_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'menu');

				Template::set_message(lang('menu_create_success'), 'success');
				redirect(SITE_AREA .'/content/menu');
			}
			else
			{
				Template::set_message(lang('menu_create_failure') . $this->menu_model->error, 'error');
			}
		}
                $departments = $this->department_model->find_all();
                Template::set('departments', $departments);
		Assets::add_module_js('menu', 'menu.js');

		Template::set('toolbar_title', lang('menu_create') . ' Menu');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of Menu data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('menu_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/menu');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Menu.Content.Edit');

			if ($this->save_menu('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('menu_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'menu');

				Template::set_message(lang('menu_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('menu_edit_failure') . $this->menu_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Menu.Content.Delete');

			if ($this->menu_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('menu_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'menu');

				Template::set_message(lang('menu_delete_success'), 'success');

				redirect(SITE_AREA .'/content/menu');
			}
			else
			{
				Template::set_message(lang('menu_delete_failure') . $this->menu_model->error, 'error');
			}
		}
                $menus = $this->menu_model->find_all();
                $departments = $this->department_model->find_all();
                Template::set('departments', $departments);
		Template::set('menu', $this->menu_model->find($id));
		Template::set('menus', $menus);
		Template::set('toolbar_title', lang('menu_edit') .' Menu');
		Template::render();
	}

	//--------------------------------------------------------------------

	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/**
	 * Summary
	 *
	 * @param String $type Either "insert" or "update"
	 * @param Int	 $id	The ID of the record to update, ignored on inserts
	 *
	 * @return Mixed    An INT id for successful inserts, TRUE for successful updates, else FALSE
	 */
	private function save_menu($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['parent_ID']        = $this->input->post('menu_parent_ID');
		$data['name']        = $this->input->post('menu_name');
		$data['url']        = $this->input->post('menu_url');
		$data['position']        = $this->input->post('position');
		
		$data['department_ID']        = $this->input->post('menu_department');

		if ($type == 'insert')
		{
			$data['status'] = '1';
                        $id = $this->menu_model->insert($data);

			if (is_numeric($id))
			{
				$return = $id;
			}
			else
			{
				$return = FALSE;
			}
		}
		elseif ($type == 'update')
		{
			$data['status'] = $this->input->post('menu_status');
                        $return = $this->menu_model->update($id, $data);
		}

		return $return;
	}
        public function status(){            
            if($D = $this->menu_model->find($this->uri->segment(5)) ){                
                $depart['status'] = ( $D->status == "1")? '0' : '1' ;                
                $this->db->where('id',$D->id);
               
                if($this->db->update('bf_menu',$depart)){
                    log_activity($this->current_user->id, lang('menu_act_edit_record') .': '. $D->ID .' : '. $this->input->ip_address(), 'menu');
                    Template::set_message(lang('menu_edit_success'), 'success');
                    redirect("admin/content/menu");
                }
                else{
                    Template::set_message(lang('menu_edit_failure') . $this->menu_model->error, 'error');
                }
            }
        }

	//--------------------------------------------------------------------


}