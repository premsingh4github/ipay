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

		$this->auth->restrict('Department.Content.View');
		$this->load->model('department_model', null, true);
		$this->lang->load('department');
		
		Template::set_block('sub_nav', 'content/_sub_nav');

		Assets::add_module_js('department', 'department.js');
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
					$result = $this->department_model->delete($pid);
                                        $this->db->delete('bf_tab_department', array('department_ID' => $pid));
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('department_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('department_delete_failure') . $this->department_model->error, 'error');
				}
			}
		}
                $config['base_url'] = site_url('admin/content/department/index');
                $config['total_rows'] = $this->department_model->count_all();
                $config['per_page'] = 10;
                $config['num_links'] = 5;
                $config['uri_segment'] = 5;
                
                $records  = $this->department_model->limit($config['per_page'],$this->uri->segment($config['uri_segment']))->find_all();
                $this->pagination->initialize($config);
//                $records = $this->department_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Department');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a Department object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Department.Content.Create');
                
		if (isset($_POST['save']))
		{ 
			if ($insert_id = $this->save_department())
			{   
				// Log the activity
				log_activity($this->current_user->id, lang('department_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'department');

				Template::set_message(lang('department_create_success'), 'success');
				redirect(SITE_AREA .'/content/department');
			}
			else
			{
				Template::set_message(lang('department_create_failure') . $this->department_model->error, 'error');
			}
		}
		Assets::add_module_js('department', 'department.js');

		Template::set('toolbar_title', lang('department_create') . ' Department');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of Department data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('department_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/department');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Department.Content.Edit');

			if ($this->save_department('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('department_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'department');

				Template::set_message(lang('department_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('department_edit_failure') . $this->department_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Department.Content.Delete');

			if ($this->department_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('department_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'department');

				Template::set_message(lang('department_delete_success'), 'success');

				redirect(SITE_AREA .'/content/department');
			}
			else
			{
				Template::set_message(lang('department_delete_failure') . $this->department_model->error, 'error');
			}
		}
		Template::set('department', $this->department_model->find($id));
		Template::set('toolbar_title', lang('department_edit') .' Department');
		Template::render();
	}
        public function status(){            
            if($D = $this->department_model->find_by('ID',$this->uri->segment(5)) ){                
                $depart['status'] = ( $D->status == "1")? '0' : '1' ;                
                $this->db->where('ID',$D->ID);
                if($this->db->update('bf_department',$depart)){
                    log_activity($this->current_user->id, lang('department_act_edit_record') .': '. $D->ID .' : '. $this->input->ip_address(), 'department');
                    Template::set_message(lang('department_edit_success'), 'success');
                    redirect("admin/content/department");
                }
                else{
                    Template::set_message(lang('department_edit_failure') . $this->department_model->error, 'error');
                }
            }
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
	private function save_department($type='insert', $id=0)
	{   
		if ($type == 'update')
		{
			$_POST['ID'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['name']        = $this->input->post('department_name');
		$data['image']        = $this->input->post('department_image');
//		$data['slug']        = $this->input->post('department_slug');
		$data['status']        = $this->input->post('department_status');
                $data['logo']        = $this->input->post('logo');
               
                
                

		if ($type == 'insert')
		{
			$data['status'] = '1';
                        
                        $data['slug'] = $this->general_model->create_slug('department',$data['name']);                        
                        $id = $this->department_model->insert($data);
                        
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
			$data['status']        = $this->input->post('department_status');
                        $return = $this->department_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------
    


}