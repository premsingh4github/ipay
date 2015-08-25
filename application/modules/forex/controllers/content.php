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

		$this->auth->restrict('Forex.Content.View');
		$this->load->model('forex_model', null, true);
		$this->lang->load('forex');
		
		Template::set_block('sub_nav', 'content/_sub_nav');

		Assets::add_module_js('forex', 'forex.js');
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
					$result = $this->forex_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('forex_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('forex_delete_failure') . $this->forex_model->error, 'error');
				}
			}
		}

//		$records = $this->forex_model->find_all();
                $config['base_url'] = site_url('admin/content/forex/index');
                $config['total_rows'] = $this->forex_model->count_all();
                $config['per_page'] = 10;
                $config['num_links'] = 5;
                $config['uri_segment'] = 5;                
                $records  = $this->forex_model->limit($config['per_page'],$this->uri->segment($config['uri_segment']))->find_all();
                $this->pagination->initialize($config);
		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Forex');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a Forex object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Forex.Content.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_forex())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('forex_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'forex');

				Template::set_message(lang('forex_create_success'), 'success');
				redirect(SITE_AREA .'/content/forex');
			}
			else
			{
				Template::set_message(lang('forex_create_failure') . $this->forex_model->error, 'error');
			}
		}
		Assets::add_module_js('forex', 'forex.js');

		Template::set('toolbar_title', lang('forex_create') . ' Forex');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of Forex data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('forex_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/forex');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Forex.Content.Edit');

			if ($this->save_forex('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('forex_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'forex');

				Template::set_message(lang('forex_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('forex_edit_failure') . $this->forex_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Forex.Content.Delete');

			if ($this->forex_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('forex_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'forex');

				Template::set_message(lang('forex_delete_success'), 'success');

				redirect(SITE_AREA .'/content/forex');
			}
			else
			{
				Template::set_message(lang('forex_delete_failure') . $this->forex_model->error, 'error');
			}
		}
		Template::set('forex', $this->forex_model->find($id));
		Template::set('toolbar_title', lang('forex_edit') .' Forex');
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
	private function save_forex($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['from_country']        = $this->input->post('forex_from_country');
		$data['from_currency']        = $this->input->post('forex_from_currency');
		$data['to_country']        = $this->input->post('forex_to_country');
		$data['to_currency']        = $this->input->post('forex_to_currency');
		

		if ($type == 'insert')
		{
			$data['status'] = '1' ;
                        $id = $this->forex_model->insert($data);

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
			$data['status'] = $this->input->post('forex_status');
                        $return = $this->forex_model->update($id, $data);
		}

		return $return;
	}
        public function status(){            
            if($D = $this->forex_model->find_by('id',$this->uri->segment(5)) ){                
                $depart['status'] = ( $D->status == "1")? '0' : '1' ;                
                $this->db->where('id',$D->id);
                if($this->db->update('bf_forex',$depart)){
                    log_activity($this->current_user->id, lang('department_act_edit_record') .': '. $D->id .' : '. $this->input->ip_address(), 'forex');
                    Template::set_message(lang('forex_edit_success'), 'success');
                    redirect("admin/content/forex");
                }
                else{
                    Template::set_message(lang('forex_edit_failure') . $this->forex_model->error, 'error');
                }
            }
        }
	//--------------------------------------------------------------------


}