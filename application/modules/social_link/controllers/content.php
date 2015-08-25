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

		$this->auth->restrict('Social_Link.Content.View');
		$this->load->model('social_link_model', null, true);
		$this->lang->load('social_link');
		
		Template::set_block('sub_nav', 'content/_sub_nav');

		Assets::add_module_js('social_link', 'social_link.js');
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
					$result = $this->social_link_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('social_link_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('social_link_delete_failure') . $this->social_link_model->error, 'error');
				}
			}
		}

		
                $config['base_url'] = site_url('admin/content/social_link/index');
                $config['total_rows'] = $this->social_link_model->count_all();
                $config['per_page'] = 10;
                $config['num_links'] = 5;
                $config['uri_segment'] = 5;
                
                $records  = $this->social_link_model->limit($config['per_page'],$this->uri->segment($config['uri_segment']))->find_all();
                $this->pagination->initialize($config);
		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Social Link');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a Social Link object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Social_Link.Content.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_social_link())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('social_link_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'social_link');

				Template::set_message(lang('social_link_create_success'), 'success');
				redirect(SITE_AREA .'/content/social_link');
			}
			else
			{
				Template::set_message(lang('social_link_create_failure') . $this->social_link_model->error, 'error');
			}
		}
		Assets::add_module_js('social_link', 'social_link.js');

		Template::set('toolbar_title', lang('social_link_create') . ' Social Link');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of Social Link data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('social_link_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/social_link');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Social_Link.Content.Edit');

			if ($this->save_social_link('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('social_link_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'social_link');

				Template::set_message(lang('social_link_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('social_link_edit_failure') . $this->social_link_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Social_Link.Content.Delete');

			if ($this->social_link_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('social_link_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'social_link');

				Template::set_message(lang('social_link_delete_success'), 'success');

				redirect(SITE_AREA .'/content/social_link');
			}
			else
			{
				Template::set_message(lang('social_link_delete_failure') . $this->social_link_model->error, 'error');
			}
		}
		Template::set('social_link', $this->social_link_model->find($id));
		Template::set('toolbar_title', lang('social_link_edit') .' Social Link');
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
	private function save_social_link($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['id'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['name']        = $this->input->post('social_link_name');
		$data['icon']        = $this->input->post('social_link_icon');
		$data['url']        = $this->input->post('social_link_url');
		$data['alt']        = $this->input->post('social_link_alt');
		

		if ($type == 'insert')
		{
			$data['status'] = '1';
                        $id = $this->social_link_model->insert($data);

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
			$data['status']        = $this->input->post('social_link_status');
                        $return = $this->social_link_model->update($id, $data);
		}

		return $return;
	}
public function status(){            
            if($D = $this->social_link_model->find_by('ID',$this->uri->segment(5)) ){                
                $depart['status'] = ( $D->status == "1")? '0' : '1' ;                
                $this->db->where('id',$D->id);
                if($this->db->update('bf_social_link',$depart)){
                    log_activity($this->current_user->id, lang('social_link_act_edit_record') .': '. $D->id .' : '. $this->input->ip_address(), 'social_link');
                    Template::set_message(lang('social_link_edit_success'), 'success');
                    redirect("admin/content/social_link");
                }
                else{
                    Template::set_message(lang('social_link_edit_failure') . $this->social_link_model->error, 'error');
                }
            }
        }
	//--------------------------------------------------------------------


}