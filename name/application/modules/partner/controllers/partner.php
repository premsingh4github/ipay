<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * partner controller
 */
class partner extends Front_Controller
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
		$this->load->model('partner_model', null, true);
		$this->lang->load('partner');
		

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

		$records = $this->partner_model->find_all();

		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------



}