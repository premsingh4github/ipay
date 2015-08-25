<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Bonfire
 *
 * An open source project to allow developers get a jumpstart their development of CodeIgniter applications
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2013, Bonfire Dev Team
 * @license   http://guides.cibonfire.com/license.html
 * @link      http://cibonfire.com
 * @since     Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Home controller
 *
 * The base controller which displays the homepage of the Bonfire site.
 *
 * @package    Bonfire
 * @subpackage Controllers
 * @category   Controllers
 * @author     Bonfire Dev Team
 * @link       http://guides.cibonfire.com/helpers/file_helpers.html
 *
 */
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('application');
		$this->load->library('Template');
		$this->load->library('Assets');
		$this->lang->load('application');
		$this->load->library('events');
	}

	//--------------------------------------------------------------------

	/**
	 * Displays the homepage of the Bonfire app
	 *
	 * @return void
	 */
	public function index()
	{		
		$this->load->library('installer_lib');
                $this->load->model('banner/banner_model');
                $this->load->model('department/department_model');
                $this->load->model('social_link/social_link_model');
                if($this->general_model->find_by('bf_info','info_value','info_key',"'status'") == '1'){
                    echo $this->general_model->find_by('bf_info','info_value','info_key',"'offline_mssage'");
                    die();
                }
		if (!$this->installer_lib->is_installed())
		{
			redirect( site_url('install') );
		}
                $B = $this->banner_model->find_all_by('status','1');
                $this->banner_model->getBanner();
                $banners =  $this->banner_model->getBanner();
     //            if ($B != '') :
					// foreach ($B as $record) :
                                       
     //                                    $end_date = new DateTime(date('Y-m-d',strtotime($record->end_date)));
     //                                    $start_date = new DateTime(date('Y-m-d',strtotime($record->from)));
     //                                    $today = new DateTime();                                        
     //                                    $interval1 = $end_date->diff($today);
     //                                    $interval2 = $start_date->diff($today);
     //                                    echo $interval2->format('%R%a');
     //                                    if($interval1->format('%R%a') <= 0 &&  $interval2->format('%R%a') > 0){                                        	
     //                                    	$banners[] = $record;
     //                                    	echo "valid";
     //                                    }
                                       
                                          
               
     //                                    //     if(( date('m/d/Y',  strtotime($record->from)) <= date('m/d/Y') || date('m/d/Y',  strtotime($record->end_date)) >= date('m/d/Y'))){
     //                                    //     $banners[] = $record;
     //                                    //     print_r($record);
     //                                    // }
					// endforeach;
				 // endif; 
                 
                              
                $departments = $this->department_model->find_all_by('status','1');
                $social_links = $this->social_link_model->find_all_by('status','1');
                (isset($banners))? Template::set('banners', $banners[0]) : '';
                //Template::set('banners',$record);
                Template::set('departments', $departments);
                Template::set('social_links', $social_links);
		$this->load->library('users/auth');
		$this->set_current_user();

		Template::render();
	}//end index()

	//--------------------------------------------------------------------

	/**
	 * If the Auth lib is loaded, it will set the current user, since users
	 * will never be needed if the Auth library is not loaded. By not requiring
	 * this to be executed and loaded for every command, we can speed up calls
	 * that don't need users at all, or rely on a different type of auth, like
	 * an API or cronjob.
	 *
	 * Copied from Base_Controller
	 */
	protected function set_current_user()
	{
		if (class_exists('Auth'))
		{
			// Load our current logged in user for convenience
			if ($this->auth->is_logged_in())
			{
				$this->current_user = clone $this->auth->user();

				$this->current_user->user_img = gravatar_link($this->current_user->email, 22, $this->current_user->email, "{$this->current_user->email} Profile");

				// if the user has a language setting then use it
				if (isset($this->current_user->language))
				{
					$this->config->set_item('language', $this->current_user->language);
				}
			}
			else
			{
				$this->current_user = null;
			}

			// Make the current user available in the views
			if (!class_exists('Template'))
			{
				$this->load->library('Template');
			}
			Template::set('current_user', $this->current_user);
		}
	}

	//--------------------------------------------------------------------
}//end class