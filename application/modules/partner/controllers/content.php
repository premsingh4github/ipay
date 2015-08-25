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

		$this->auth->restrict('Partner.Content.View');
		$this->load->model('partner_model', null, true);
		$this->lang->load('partner');
		
		Template::set_block('sub_nav', 'content/_sub_nav');

		Assets::add_module_js('partner', 'partner.js');
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
					$result = $this->partner_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('partner_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('partner_delete_failure') . $this->partner_model->error, 'error');
				}
			}
		}

		$records = $this->partner_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Partner');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a Partner object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Partner.Content.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_partner())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('partner_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'partner');

				Template::set_message(lang('partner_create_success'), 'success');
				redirect(SITE_AREA .'/content/partner');
			}
			else
			{
				Template::set_message(lang('partner_create_failure') . $this->partner_model->error, 'error');
			}
		}
		Assets::add_module_js('partner', 'partner.js');

		Template::set('toolbar_title', lang('partner_create') . ' Partner');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of Partner data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('partner_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/partner');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Partner.Content.Edit');

			if ($this->save_partner('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('partner_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'partner');

				Template::set_message(lang('partner_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('partner_edit_failure') . $this->partner_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Partner.Content.Delete');

			if ($this->partner_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('partner_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'partner');

				Template::set_message(lang('partner_delete_success'), 'success');

				redirect(SITE_AREA .'/content/partner');
			}
			else
			{
				Template::set_message(lang('partner_delete_failure') . $this->partner_model->error, 'error');
			}
		}
		Template::set('partner', $this->partner_model->find($id));
		Template::set('toolbar_title', lang('partner_edit') .' Partner');
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
	private function save_partner($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['name']        = $this->input->post('partner_name');
		$data['logo']        = $this->input->post('partner_logo');
		$data['alt']        = $this->input->post('partner_alt');
		$data['url']        = $this->input->post('partner_url');
		$data['status']        = $this->input->post('partner_status');

		if ($type == 'insert')
		{
			$id = $this->partner_model->insert($data);

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
			$return = $this->partner_model->update($id, $data);
		}

		return $return;
	}
        public function status(){            
            if($D = $this->partner_model->find($this->uri->segment(5)) ){                
                $depart['status'] = ( $D->status == "1")? '0' : '1' ;                
                $this->db->where('id',$D->id);
                if($this->db->update('bf_partner',$depart)){
                    log_activity($this->current_user->id, lang('partner_act_edit_record') .': '. $D->id .' : '. $this->input->ip_address(), 'partner');
                    Template::set_message(lang('partner_edit_success'), 'success');
                    redirect("admin/content/partner");
                }
                else{
                    Template::set_message(lang('partner_edit_failure') . $this->partner_model->error, 'error');
                }
            }
        }

	//--------------------------------------------------------------------


}