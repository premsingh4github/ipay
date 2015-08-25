<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * tab controller
 */
class tab extends Front_Controller
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
		$this->load->model('tab_model', null, true);
		$this->lang->load('tab');
		

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

		$records = $this->tab_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------



}