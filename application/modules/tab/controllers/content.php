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

		$this->auth->restrict('TAB.Content.View');
		$this->load->model('tab_model', null, true);
		$this->load->model('department/department_model', null, true);
		$this->lang->load('tab');
		 $departments = $this->department_model->find_all();

		Template::set('departments', $departments);
		Template::set_block('sub_nav', 'content/_sub_nav');

		Assets::add_module_js('tab', 'tab.js');
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
					$result = $this->tab_model->delete($pid);
                                        $this->db->delete('bf_tab_department', array('tab_ID' => $pid)); 
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('tab_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('tab_delete_failure') . $this->tab_model->error, 'error');
				}
			}
		}

//		$records = $this->tab_model->find_all();
                $config['base_url'] = site_url('admin/content/tab/index');
                $config['total_rows'] = $this->tab_model->count_all();
                $config['per_page'] = 10;
                $config['num_links'] = 5;
                $config['uri_segment'] = 5;
                
                $records  = $this->tab_model->limit($config['per_page'],$this->uri->segment($config['uri_segment']))->find_all();
                $this->pagination->initialize($config);
		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage TAB');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a TAB object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('TAB.Content.Create');

		if (isset($_POST['save']))
		{
                   
			if ($insert_id = $this->save_tab())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('tab_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'tab');

				Template::set_message(lang('tab_create_success'), 'success');
				redirect(SITE_AREA .'/content/tab');
			}
			else
			{
				Template::set_message(lang('tab_create_failure') . $this->tab_model->error, 'error');
			}
		}
                
		Assets::add_module_js('tab', 'tab.js');
               
		Template::set('toolbar_title', lang('tab_create') . ' TAB');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of TAB data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('tab_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/tab');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('TAB.Content.Edit');

			if ($this->save_tab('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('tab_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'tab');

				Template::set_message(lang('tab_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('tab_edit_failure') . $this->tab_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('TAB.Content.Delete');

			if ($this->tab_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('tab_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'tab');

				Template::set_message(lang('tab_delete_success'), 'success');

				redirect(SITE_AREA .'/content/tab');
			}
			else
			{
				Template::set_message(lang('tab_delete_failure') . $this->tab_model->error, 'error');
			}
		}
                $tab_dept = $this->general_model->find_all_by('bf_tab_department','tab_ID',$id);               
		Template::set('tab_dept', $tab_dept);
		Template::set('tab', $this->tab_model->find($id));
		Template::set('toolbar_title', lang('tab_edit') .' TAB');
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
	private function save_tab($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['ID'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['name']        = $this->input->post('tab_name');
                $data['video']        = $this->input->post('video');
                $data['information']        = $this->input->post('information');

		if ($type == 'insert')
		{
			$data['status'] = '1';
                        $id = $this->tab_model->insert($data);

			if (is_numeric($id))
			{
                            foreach ($this->input->post('department') as $value) {
                                $this->db->insert('bf_tab_department',array('tab_ID'=>$id,'department_ID'=>$value)); 
                            }
                           
                                $return = $id;
			}
			else
			{
				$return = FALSE;
			}
		}
		elseif ($type == 'update')
		{
			$data['status']        = $this->input->post('tab_status');
                        $return = $this->tab_model->update($id, $data);
                        $this->db->where('tab_ID', $id);
                        $this->db->delete('bf_tab_department'); 
                        foreach ($this->input->post('department') as $value) {
                                $this->db->insert('bf_tab_department',array('tab_ID'=>$id,'department_ID'=>$value)); 
                            }
		}

		return $return;
	}
        public function status(){            
            if($D = $this->tab_model->find_by('ID',$this->uri->segment(5)) ){                
                $depart['status'] = ( $D->status == "1")? '0' : '1' ;                
                $this->db->where('ID',$D->ID);
                if($this->db->update('bf_tab',$depart)){
                    log_activity($this->current_user->id, lang('tab_act_edit_record') .': '. $D->ID .' : '. $this->input->ip_address(), 'tab');
                    Template::set_message(lang('tab_edit_success'), 'success');
                    redirect("admin/content/tab");
                }
                else{
                    Template::set_message(lang('tab_edit_failure') . $this->tab_model->error, 'error');
                }
            }
        }

	//--------------------------------------------------------------------


}