<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * steps controller
 */
class steps extends Front_Controller
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
		$this->load->model('steps_model', null, true);
		$this->lang->load('steps');
		

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

		$records = $this->steps_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------



}