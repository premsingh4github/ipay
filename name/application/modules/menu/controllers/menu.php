<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * menu controller
 */
class menu extends Front_Controller
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
		$this->load->model('menu_model', null, true);
		$this->load->model('department/department_model', null, true);
		$this->load->model('department/department_model', null, true);
		$this->lang->load('menu');
		

		Assets::add_module_js('menu', 'menu.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		$records = $this->menu_model->find_all();

		Template::set('records', $records);
		Template::render();
	}
        public function department_menu(){
           
            $menus = $this->menu_model->find_all_by('department_ID',$_POST['menu_department']);
            Template::set('menus',$menus);
            Template::render(); 
        }

	//--------------------------------------------------------------------



}