<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * content controller
 */
class content extends Admin_Controller
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

		$this->auth->restrict('Media.Content.View');
		$this->load->model('media_model', null, true);
		$this->lang->load('media');	
		Template::set_block('sub_nav', 'content/_sub_nav');
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

		// Deleting anything?
		if (isset($_POST['delete']))
		{
			$checked = $this->input->post('checked');
			if (is_array($checked) && count($checked))
			{
				$result = FALSE;
				foreach ($checked as $pid)
				{
					$file = $this->media_model->find($pid);
                                       
                                        if(file_exists ( 'uploads/thumbs/'.$file -> file )){
                                           unlink('uploads/thumbs/'.$file -> file);
                                        }                                                                               
                                        $result = (unlink('uploads/'.$file -> file))? $this->media_model->delete($pid) : 0 ;
//                                        $result = $this->media_model->delete($pid) ;
                                        
				}

				if ($result)
				{
					
                                        Template::set_message(count($checked) .' '. lang('media_delete_success'), 'success');
				}
				else
				{
					Template::set_message(lang('media_delete_failure') . $this->media_model->error, 'error');
				}
			}
		}
                $config['base_url']   = site_url()."/admin/content/media/index";
                $config['total_rows'] = $this->media_model->count_all();                
                $config['per_page']   = 10;
                $config['num_links']   = 10;
                $config['uri_segment'] = 5;
                $limite = $this->uri->segment(5) ;
                //$records = $this->media_model->order_by('ID', 'DESC')->limit($config['per_page'],$limite)->find_all_by('user_ID',$this->session->userdata('user_id'));
                $records = $this->media_model->order_by('ID', 'DESC')->limit($config['per_page'],$limite)->find_all();
                $this->pagination->initialize($config);
		//$records = $this->media_model->order_by('ID', 'DESC') -> find_all_by('user_ID',$this->session->userdata('user_id'));
		Template::set('records', $records);
		Template::set('toolbar_title', 'Manage media');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Creates a media object.
	 *
	 * @return void
	 */
	public function create()
	{
		$this->auth->restrict('Media.Content.Create');

		if (isset($_POST['save']))
		{
			if ($insert_id = $this -> save_media())
			{
				// Log the activity
				log_activity($this->current_user->id, lang('media_act_create_record') .': '. $insert_id .' : '. $this->input->ip_address(), 'media');

				Template::set_message(lang('media_create_success'), 'success');
				redirect(SITE_AREA .'/content/media');
			}
			else
			{
				Template::set_message(lang('media_create_failure') . $this->media_model->error, 'error');
			}
		}
		Assets::add_module_js('media', 'media.js');

		Template::set('toolbar_title', lang('media_create') . ' media');
		Template::render();
	}

	//--------------------------------------------------------------------


	/**
	 * Allows editing of media data.
	 *
	 * @return void
	 */
	public function edit()
	{
		$id = $this->uri->segment(5);

		if (empty($id))
		{
			Template::set_message(lang('media_invalid_id'), 'error');
			redirect(SITE_AREA .'/content/media');
		}

		if (isset($_POST['save']))
		{
			$this->auth->restrict('Media.Content.Edit');

			if ($this->save_media('update', $id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('media_act_edit_record') .': '. $id .' : '. $this->input->ip_address(), 'media');

				Template::set_message(lang('media_edit_success'), 'success');
			}
			else
			{
				Template::set_message(lang('media_edit_failure') . $this->media_model->error, 'error');
			}
		}
		else if (isset($_POST['delete']))
		{
			$this->auth->restrict('Media.Content.Delete');

			if ($this->media_model->delete($id))
			{
				// Log the activity
				log_activity($this->current_user->id, lang('media_act_delete_record') .': '. $id .' : '. $this->input->ip_address(), 'media');

				Template::set_message(lang('media_delete_success'), 'success');

				redirect(SITE_AREA .'/content/media');
			}
			else
			{
				Template::set_message(lang('media_delete_failure') . $this->media_model->error, 'error');
			}
		}
		Template::set('media', $this->media_model->find($id));
		Template::set('toolbar_title', lang('media_edit') .' media');
		Template::render();
	}

	//--------------------------------------------------------------------

	//--------------------------------------------------------------------
	// !PRIVATE METHODS
	//--------------------------------------------------------------------

	/**
	 * Summary
	 *
	 * @param String $type Either "insert" or "update"
	 * @param Int	 $id	The ID of the record to update, ignored on inserts
	 *
	 * @return Mixed    An INT id for successful inserts, TRUE for successful updates, else FALSE
	 */
	private function save_media($type='insert', $id=0)
	{
		if ($type == 'update')
		{
			$_POST['ID'] = $id;
		}
                
		$data = array();
		$data['title']        = $this->input->post('media_title');
		//$data['file']        = $this->input->post('media_file');
               

		if ($type == 'insert')
		{
                    
                    // echo "Path:" . FCPATH;
                        $config['upload_path'] = FCPATH . 'uploads';
                        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx|mp4';
                        $config['max_size']	= '1000000';
                        

                        $this -> load -> library( 'upload', $config );
                        if ( ! $this -> upload -> do_upload( 'media_file' ) )
                        {
                                $error = array( 'error' => $this -> upload -> display_errors() );
                                $this -> general_model -> set_notification ( $this -> upload -> display_errors() );
                                
                                echo "<br><br><br>".$this -> upload -> display_errors();
                                
                                return FALSE;
                        }
                        else
                        {
                                $succ_data = array( 'upload_data' => $this -> upload -> data() );
                                //displayArr($succ_data); exit(0);
                                $data['file'] = $succ_data['upload_data']['file_name'];                                 
                                $config = array(
                                        'source_image' => $succ_data['upload_data']['full_path'],
                                        'new_image' => './uploads/thumbs/',
                                        'maintain_ration' => false,
                                        'quality' => '100%',
                                        'create_thumb' => false,
                                        'width' => 400,
                                        'height' => 250
                                );

                                $this -> load -> library('image_lib', $config);
                                
                                if( ! $this->image_lib->resize() ){
                                    //echo "<br><br><br>" . $this->image_lib->display_errors();
                                    
                                }
                                
                        }
                        $data['user_ID']= $this->session->userdata('user_id');
                        echo $data['user_ID'];
			$id = $this -> media_model -> insert( $data );

			if ($id)
			{
				$return = TRUE;
			}
			else
			{
				$return = FALSE;
			}
		}
		elseif ($type == 'update')
		{
			$return = $this->media_model->update($id, $data);
		}

		return $return;
	}
        public function general(){
        if(isset($_POST['submit'])){  
            $status = array(
               'info_value' => $_POST['status'],               
            );
            $this->db->where('info_key','status');
            $this->db->update('bf_info',$status);
            $information = array(
               'info_value' => $_POST['information'],               
            );
            $this->db->where('info_key','offline_mssage');
            $this->db->update('bf_info',$information);
            $admin_email = array(
               'info_value' => $_POST['admin_email'],               
            );
            $this->db->where('info_key','admin_email');
            $this->db->update('bf_info',$admin_email);
            $admin_number = array(
               'info_value' => $_POST['admin_number'],               
            );
            $this->db->where('info_key','admin_number');
            $this->db->update('bf_info',$admin_number);
             $postal = array(
               'info_value' => $_POST['postal'],               
            );
            $this->db->where('info_key','postal');
            $this->db->update('bf_info',$postal );
            $address = array(
               'info_value' => $_POST['address'],               
            );
            $this->db->where('info_key','address');
            $this->db->update('bf_info',$address );
        }
            
            Template::set('toolbar_title', 'General Site Setting');		
            Template::render();
        }
	//--------------------------------------------------------------------


}