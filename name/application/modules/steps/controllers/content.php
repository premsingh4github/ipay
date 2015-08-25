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

		$this->auth->restrict('STEPS.Content.View');
		$this->load->model('steps_model', null, true);
                $this->load->model('tab/tab_model');
		$this->lang->load('steps');
		
		Template::set_block('sub_nav', 'content/_sub_nav');

		Assets::add_module_js('steps', 'steps.js');
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
					$result = $this->steps_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('steps_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('steps_delete_failure') . $this->steps_model->error, 'error');
				}
			}
		}

		
		$config['base_url']   = site_url()."/admin/content/steps/index";
                $config['total_rows'] = $this->steps_model->count_all();                
                $config['per_page']   = 10;
                $config['num_links']   = 10;
                $config['uri_segment'] = 5;
                $limite = $this->uri->segment(5) ;
                $this->db->order_by('department asc, order asc');
                $records  = $this->steps_model->limit($config['per_page'],$this->uri->segment($config['uri_segment']))->find_all();
                $this->pagination->initialize($config);
		Template::set('records', $records);
		
		Template::set('toolbar_title', 'Manage STEPS');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a STEPS object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('STEPS.Content.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_steps())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('steps_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'steps');

				Template::set_message(lang('steps_create_success'), 'success');
				redirect(SITE_AREA .'/content/steps');
			}
			else
			{
				Template::set_message(lang('steps_create_failure') . $this->steps_model->error, 'error');
			}
		}
		Assets::add_module_js('steps', 'steps.js');
                
                $deparments = $this->tab_model->find_all();
                Template::set('deparments', $deparments);
		Template::set('toolbar_title', lang('steps_create') . ' STEPS');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of STEPS data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('steps_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/steps');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('STEPS.Content.Edit');

			if ($this->save_steps('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('steps_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'steps');

				Template::set_message(lang('steps_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('steps_edit_failure') . $this->steps_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('STEPS.Content.Delete');

			if ($this->steps_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('steps_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'steps');

				Template::set_message(lang('steps_delete_success'), 'success');

				redirect(SITE_AREA .'/content/steps');
			}
			else
			{
				Template::set_message(lang('steps_delete_failure') . $this->steps_model->error, 'error');
			}
		}
                $deparments = $this->tab_model->find_all();
                Template::set('deparments', $deparments);
		Template::set('steps', $this->steps_model->find($id));
		Template::set('toolbar_title', lang('steps_edit') .' STEPS');
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
	private function save_steps($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['ID'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['department']        = $this->input->post('steps_department');
		$data['step_title']        = $this->input->post('steps_step_title');
		$data['order']        = $this->input->post('steps_order');
		$data['information']        = $this->input->post('steps_information');
		$data['status']        = $this->input->post('steps_status');

		if ($type == 'insert')
		{
			$data['status']        = '1';
                        $id = $this->steps_model->insert($data);

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
			$data['status']        = $this->input->post('steps_status');
                        $return = $this->steps_model->update($id, $data);
		}

		return $return;
	}
        public function status(){            
            if($D = $this->steps_model->find_by('ID',$this->uri->segment(5)) ){                
                $depart['status'] = ( $D->status == "1")? '0' : '1' ;                
                $this->db->where('ID',$D->ID);
                if($this->db->update('bf_steps',$depart)){
                    log_activity($this->current_user->id, lang('steps_act_edit_record') .': '. $D->ID .' : '. $this->input->ip_address(), 'steps');
                    Template::set_message(lang('steps_edit_success'), 'success');
                    redirect("admin/content/steps");
                }
                else{
                    Template::set_message(lang('steps_edit_failure') . $this->steps_model->error, 'error');
                }
            }
        }

	//--------------------------------------------------------------------


}