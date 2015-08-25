<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * pages controller
 */
class pages extends Front_Controller
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
		$this->load->model('pages_model', null, true);
                
		$this->lang->load('pages');
		

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

		
                
		if($records = $this->pages_model->find_by('slug',$this->uri->segment(3))){

		Template::set('records', $records);
		Template::render();
                }
                else{
                    redirect(base_url());
                }
	}

	//--------------------------------------------------------------------



}