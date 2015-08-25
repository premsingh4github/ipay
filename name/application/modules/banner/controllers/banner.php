<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * banner controller
 */
class banner extends Front_Controller
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
		$this->load->model('banner_model', null, true);
		$this->lang->load('banner');
		

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

		$records = $this->banner_model->find_all();

		Template::set('records', $records);
		Template::render();
	}
         public function time_check(){
            $data = $_GET;
            $records = $this->banner_model->find_all();
            Template::set('data', $data);            
            Template::set('records', $records);            
            Template::render('ajax'); 
        }
	//--------------------------------------------------------------------



}