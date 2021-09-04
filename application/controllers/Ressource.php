<?php defined("BASEPATH") OR exit("No direct script access allowed");


class Ressource extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Ressource_model");
    }

    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('ressource/index?');
        $config['total_rows'] = $this->Ressource_model->get_all_ressource_count();
        $this->pagination->initialize($config);

        $data['ressources'] = $this->Ressource_model->get_all_ressource($params);

		$this->load->view('include/header');
		$this->load->view('ressource/index',$data);
		$this->load->view('include/footer');
    }

    /*
     * Adding a new organisation
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'ressource_title' => $this->input->post('ressource_title'),
				'ressource_resume' => $this->input->post('ressource_content'),
				'ressource_source' => $this->input->post('ressource_source'),
				'ressource_link' => $this->input->post('ressource_link'),
				
            );
            
            $ressource_id = $this->Ressource_model->add_ressource($params);
            redirect('ressource/index');
        }
        else
        {

			$this->load->view('include/header');
			$this->load->view('ressource/add');
			$this->load->view('include/footer');
        }
    }  

    /*
     * Editing a organisation
     */
    function edit($id)
    {   
        // check if the organisation exists before trying to edit it
        $data['ressource'] = $this->Ressource_model->get_ressource($id);
        
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
				

				$ressource_id = $this->Ressource_model->update_ressource($id,$params);
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
        $ressource = $this->Ressource_model->get_ressource($id);

        // check if the organisation exists before trying to delete it
        if(isset($ressource['ressource_id']))
        {
            $this->Ressource_model->delete_ressource($id);
            redirect('ressource/index');
        }
        else
            show_error('The organisation you are trying to delete does not exist.');
    }



	function ressource(){

		$data['ressources'] = $this->Ressource_model->get_all_ressource();
		$this->load->view('Templates/header');
		$this->load->view('ressource/ressource',$data);
		$this->load->view('Templates/footer');
	}

 
}
