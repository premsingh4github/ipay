<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * media controller
 */
class media extends Front_Controller
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
		$this->load->model('media_model', null, true);
		$this->lang->load('media');

		Assets::add_module_js('media', 'media.js');
	}

	//--------------------------------------------------------------------


	/**
	 * Displays a list of form data.
	 *
	 * @return void
	 */
	public function index()
	{

		$records = $this->media_model->find_all_by('user_ID',$this->session->userdata('user_id'));

		Template::set('records', $records);
		Template::render();
	}

	//--------------------------------------------------------------------
        
        public function popup_media(){
            //echo $this->session->userdata('user_id');
           // echo 'test';
//            $media_list = $this -> media_model -> order_by('ID', 'DESC') -> find_all_by('user_ID',$this->session->userdata('user_id'));           
            $media_list = $this -> media_model -> order_by('ID', 'DESC') -> find_all();           
            Template::set('media_list', $media_list);
            
            Template::render('ajax');
        }
        public function popup_media1(){
            //echo $this->session->userdata('user_id');
           // echo 'test';
//            $media_list = $this -> media_model -> order_by('ID', 'DESC') -> find_all_by('user_ID',$this->session->userdata('user_id'));           
           $media_list = $this -> media_model -> order_by('ID', 'DESC') -> find_all();           
            Template::set('media_list', $media_list);
            
            Template::render('ajax');
        }
        public function post_media(){
            if(isset($_GET['file'])){
                $file = $_GET['file'];            
                Template::set('file', $file);            
                Template::render('ajax'); 
            }
        }


}