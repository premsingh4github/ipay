<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * department controller
 */
class department extends Front_Controller
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
		$this->load->model('department_model', null, true);
		$this->load->model('tab/tab_model', null, true);
		$this->load->model('menu/menu_model', null, true);
		$this->load->model('steps/steps_model', null, true);
		$this->load->model('partner/partner_model', null, true);
		
		$this->lang->load('department');
		

		Assets::add_module_js('department', 'department.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{
            
                if($records = $this->department_model->find_by('slug',$this->uri->segment(3))){
                    $tabs = $this->general_model->find_all_by('bf_tab_department','department_ID',$records->ID);                    
//                    $steps = $this->steps_model->find_all_by(array('department'=>$records->ID,'status'=>'1'));                    
                    Template::set('records', $records);
                    Template::set('tabs', $tabs);
                    Template::render();
                }
              else{
                  redirect(base_url()); 
              } 
		
	}
        public function partner(){
            if($records = $this->department_model->find_by('slug',$this->uri->segment(3))){
                    $tabs = $this->general_model->find_all_by('bf_tab_department','department_ID',$records->ID);                    
                    $partners = $this->partner_model->find_all_by(array('status'=>'1'));                    
                    Template::set('records', $records);
                    Template::set('partners', $partners);
                    Template::set('tabs', $tabs);
                    Template::render();
                }
              else{
                  redirect(base_url()); 
              } 
        }
        public function contact(){
            if($records = $this->department_model->find_by('slug','remittance')){
                    $tabs = $this->general_model->find_all_by('bf_tab_department','department_ID',$records->ID);                    
                    $partners = $this->partner_model->find_all_by(array('status'=>'1'));                    
                    Template::set('records', $records);
                    Template::set('partners', $partners);
                    Template::set('tabs', $tabs);
                    
                    Template::render();
                }
              else{
                  redirect(base_url()); 
              } 
        }
        
	//--------------------------------------------------------------------



}