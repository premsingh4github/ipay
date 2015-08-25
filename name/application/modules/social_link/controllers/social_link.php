<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * social_link controller
 */
class social_link extends Front_Controller
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

		$this->load->library('form_validation');
		$this->load->model('social_link_model', null, true);
		$this->lang->load('social_link');
		

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

		$records = $this->social_link_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------



}