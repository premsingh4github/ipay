<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * forex controller
 */
class forex extends Front_Controller
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
		$this->load->model('forex_model', null, true);
		$this->lang->load('forex');
		

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
//die();
		$countries = $this->forex_model->find_all();
//		Template::set('countries', $$countries);
//		Template::render();
                return $this->load->view('forex/index');
	}

	//--------------------------------------------------------------------



}