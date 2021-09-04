<?php

defined("BASEPATH") OR exit("No direct script access allowed");

class Podcast extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Podcast_model');
		$this->load->model('Category_podcast_model');
	}

    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('ressource/index?');
        $config['total_rows'] = $this->Podcast_model->get_all_ressource_count();
        $this->pagination->initialize($config);

        $data['podcasts'] = $this->Podcast_model->get_all_ressource($params);

		$this->load->view('include/header');
		$this->load->view('podcast/index',$data);
		$this->load->view('include/footer');
    }

    /*
     * Adding a new organisation
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   

			$config['upload_path']= './uploads/podcast/';
            $config['allowed_types']= 'mp3|mp4|m4a';
            $new_file=uniqid('podcast');
            $config['file_name'] = $new_file.".mp4";

            $this->load->library('upload', $config);


            if ( ! $this->upload->do_upload('podcast_picture'))
            {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata(['error'=>$error['error']]);
                redirect($_SERVER['HTTP_REFERER']); 
            }
            else{

				$params = array(
					'podcast_title' => $this->input->post('podcast_title'),
					'podcast_info' => $this->input->post('podcast_info'),
					'file' => '/uploads/podcast/'. $config['file_name'],
					'podcast_category' => $this->input->post('podcast_category'),
					
				);
				
				$ressource_id = $this->Podcast_model->add_ressource($params);
				redirect('podcast/index');
  
            }
            
        }
        else
        {

			$data['categories'] = $this->Category_podcast_model->get_all_category_blog();
			$this->load->view('include/header');
			$this->load->view('podcast/add',$data);
			$this->load->view('include/footer');
        }
    }  

    /*
     * Editing a organisation
     */
    function edit($id)
    {   
        // check if the organisation exists before trying to edit it
        $data['ressource'] = $this->Podcast_model->get_ressource($id);
        
        if(isset($data['ressource']['ressource_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'ressource_title' => $this->input->post('ressource_title'),
					'ressource_resume' => $this->input->post('ressource_content'),
					'ressource_source' => $this->input->post('ressource_source'),
					'ressource_link' => $this->input->post('ressource_link'),
					
				);
				

				$ressource_id = $this->Podcast_model->update_ressource($id,$params);
				redirect('ressource/index');
            }
            else
            {
		
				$this->load->view('include/header');
				$this->load->view('ressource/edit',$data);
				$this->load->view('include/footer');
            } 
        }
        else
            show_error('The organisation you are trying to edit does not exist.');
    } 

    /*
     * Deleting organisation
     */
    function remove($id)
    {
        $podcast = $this->Podcast_model->get_ressource($id);

        // check if the organisation exists before trying to delete it
        if(isset($podcast['podcast_id']))
        {
            $this->Podcast_model->delete_ressource($id);
            redirect('podcast/index');
        }
        else
            show_error('The organisation you are trying to delete does not exist.');
    }



	function poadcast(){

		$data['podcasts'] = $this->Podcast_model->get_all_ressource();
		$this->load->view('Templates/header');
		$this->load->view('podcast/podcast',$data);
		$this->load->view('Templates/footer');
	}

}
