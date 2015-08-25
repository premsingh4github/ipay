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

		$this->auth->restrict('Banner.Content.View');
		$this->load->model('banner_model', null, true);
		$this->lang->load('banner');
		
		Template::set_block('sub_nav', 'content/_sub_nav');

		Assets::add_module_js('banner', 'banner.js');
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
					$result = $this->banner_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('banner_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('banner_delete_failure') . $this->banner_model->error, 'error');
				}
			}
		}

		
                $config['base_url'] = site_url('admin/content/banner/index');
                $config['total_rows'] = $this->banner_model->count_all();
                $config['per_page'] = 10;
                $config['num_links'] = 5;
                $config['uri_segment'] = 5;
                
                $records  = $this->banner_model->limit($config['per_page'],$this->uri->segment($config['uri_segment']))->find_all();
                $this->pagination->initialize($config);
		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Banner');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a Banner object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Banner.Content.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_banner())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('banner_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'banner');

				Template::set_message(lang('banner_create_success'), 'success');
				redirect(SITE_AREA .'/content/banner');
			}
			else
			{
				Template::set_message(lang('banner_create_failure') . $this->banner_model->error, 'error');
			}
		}
		Assets::add_module_js('banner', 'banner.js');

		Template::set('toolbar_title', lang('banner_create') . ' Banner');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of Banner data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('banner_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/banner');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Banner.Content.Edit');

			if ($this->save_banner('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('banner_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'banner');

				Template::set_message(lang('banner_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('banner_edit_failure') . $this->banner_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Banner.Content.Delete');

			if ($this->banner_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('banner_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'banner');

				Template::set_message(lang('banner_delete_success'), 'success');

				redirect(SITE_AREA .'/content/banner');
			}
			else
			{
				Template::set_message(lang('banner_delete_failure') . $this->banner_model->error, 'error');
			}
		}
		Template::set('banner', $this->banner_model->find($id));
		Template::set('toolbar_title', lang('banner_edit') .' Banner');
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
	private function save_banner($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['ID'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['title']        = $this->input->post('banner_title');
		$data['subtitle']        = $this->input->post('banner_subtitle');
		$data['button_text']        = $this->input->post('banner_button_text');
		$data['button_icon']        = $this->input->post('banner_button_icon');
		$data['image']        = $this->input->post('banner_image');
		$data['url']        = $this->input->post('banner_url');
		$data['alt']        = $this->input->post('banner_alt');
		$data['position']   = $this->input->post('banner_position');
		$data['from']        = $this->input->post('banner_from');               
		$data['end_date']  = ($this->input->post('banner_end_date') == '')? 'XXX' : $this->input->post('banner_end_date');

		if ($type == 'insert')
		{
			$id = $this->banner_model->insert($data);

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
			$return = $this->banner_model->update($id, $data);
		}

		return $return;
	}
       public function status(){            
            if($D = $this->banner_model->find_by('ID',$this->uri->segment(5)) ){                
                $depart['status'] = ( $D->status == "1")? '0' : '1' ;                
                $this->db->where('ID',$D->ID);
                if($this->db->update('bf_banner',$depart)){
                    log_activity($this->current_user->id, lang('banner_act_edit_record') .': '. $D->ID .' : '. $this->input->ip_address(), 'banner');
                    Template::set_message(lang('banner_edit_success'), 'success');
                    redirect("admin/content/banner");
                }
                else{
                    Template::set_message(lang('banner_edit_failure') . $this->banner_model->error, 'error');
                }
            }
        }
	//--------------------------------------------------------------------


}