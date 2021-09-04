<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Categorie_user extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Categorie_user_model');
    } 

    /*
     * Listing of categorie_user
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('categorie_user/index?');
        $config['total_rows'] = $this->Categorie_user_model->get_all_categorie_user_count();
        $this->pagination->initialize($config);

        $data['categorie_user'] = $this->Categorie_user_model->get_all_categorie_user($params);

		$this->load->view('include/header');
		$this->load->view('advocate/categorie_user/index',$data);
		$this->load->view('include/footer');
    }

    /*
     * Adding a new categorie_user
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nom','Nom','required|max_length[255]');
		$this->form_validation->set_rules('prix','Prix','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nom' => $this->input->post('nom'),
				'prix' => $this->input->post('prix'),
				'description' => $this->input->post('description'),
            );
            
            $categorie_user_id = $this->Categorie_user_model->add_categorie_user($params);
            redirect('categorie_user/index');
        }
        else
        {
			$this->load->view('include/header');
			$this->load->view('advocate/categorie_user/add');
			$this->load->view('include/footer');
        }
    }  

    /*
     * Editing a categorie_user
     */
    function edit($id)
    {   
        // check if the categorie_user exists before trying to edit it
        $data['categorie_user'] = $this->Categorie_user_model->get_categorie_user($id);
        
        if(isset($data['categorie_user']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nom','Nom','required|max_length[255]');
			$this->form_validation->set_rules('prix','Prix','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nom' => $this->input->post('nom'),
					'prix' => $this->input->post('prix'),
					'description' => $this->input->post('description'),
                );

                $this->Categorie_user_model->update_categorie_user($id,$params);            
                redirect('categorie_user/index');
            }
            else
            {

				$this->load->view('include/header');
				$this->load->view('advocate/categorie_user/edit');
				$this->load->view('include/footer');
            }
        }
        else
            show_error('The categorie_user you are trying to edit does not exist.');
    } 

    /*
     * Deleting categorie_user
     */
    function remove($id)
    {
        $categorie_user = $this->Categorie_user_model->get_categorie_user($id);

        // check if the categorie_user exists before trying to delete it
        if(isset($categorie_user['id']))
        {
            $this->Categorie_user_model->delete_categorie_user($id);
            redirect('categorie_user/index');
        }
        else
            show_error('The categorie_user you are trying to delete does not exist.');
    }
    
}
