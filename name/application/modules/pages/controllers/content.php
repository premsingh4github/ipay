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

		$this->auth->restrict('Pages.Content.View');
		$this->load->model('pages_model', null, true);
		$this->lang->load('pages');
		
		Template::set_block('sub_nav', 'content/_sub_nav');

		Assets::add_module_js('pages', 'pages.js');
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
					$result = $this->pages_model->delete($pid);
				}

				if ($result)
				{
					Template::set_message(count($checked) .' '. lang('pages_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('pages_delete_failure') . $this->pages_model->error, 'error');
				}
			}
		}

		$records = $this->pages_model->find_all();

		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage Pages');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a Pages object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Pages.Content.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this->save_pages())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('pages_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'pages');

				Template::set_message(lang('pages_create_success'), 'success');
				redirect(SITE_AREA .'/content/pages');
			}
			else
			{
				Template::set_message(lang('pages_create_failure') . $this->pages_model->error, 'error');
			}
		}
		Assets::add_module_js('pages', 'pages.js');

		Template::set('toolbar_title', lang('pages_create') . ' Pages');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of Pages data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('pages_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/pages');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Pages.Content.Edit');

			if ($this->save_pages('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('pages_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'pages');

				Template::set_message(lang('pages_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('pages_edit_failure') . $this->pages_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Pages.Content.Delete');

			if ($this->pages_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('pages_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'pages');

				Template::set_message(lang('pages_delete_success'), 'success');

				redirect(SITE_AREA .'/content/pages');
			}
			else
			{
				Template::set_message(lang('pages_delete_failure') . $this->pages_model->error, 'error');
			}
		}
		Template::set('pages', $this->pages_model->find($id));
		Template::set('toolbar_title', lang('pages_edit') .' Pages');
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
	private function save_pages($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['ID'] = $id;
		}

		// make sure we only pass in the fields we want
		
		$data = array();
		$data['name']        = $this->input->post('pages_name');
		$data['body']        = $this->input->post('pages_body');
                $data['description'] = $this->input->post('pages_description');
		
		$data['status']        = $this->input->post('pages_status');

		if ($type == 'insert')
		{
			$data['status'] = "active";
                        $data['slug']   = $this->general_model->create_slug('pages',$data['name']);
                        $id = $this->pages_model->insert($data);

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
			$data['status'] = $this->input->post('pages_status');
                        $return = $this->pages_model->update($id, $data);
		}

		return $return;
	}

	//--------------------------------------------------------------------


}