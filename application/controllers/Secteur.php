<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Secteur extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Secteur_model');
    } 

    /*
     * Listing of secteur
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('secteur/index?');
        $config['total_rows'] = $this->Secteur_model->get_all_secteur_count();
        $this->pagination->initialize($config);

        $data['secteur'] = $this->Secteur_model->get_all_secteur($params);

		$this->load->view('include/header');
        $this->load->view('advocate/secteur/index',$data);
		$this->load->view('include/footer');
    }

    /*
     * Adding a new secteur
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nom','Nom','max_length[100]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nom' => $this->input->post('nom'),
            );
            
            $secteur_id = $this->Secteur_model->add_secteur($params);
            redirect('secteur/index');
        }
        else
        {
			$this->load->view('include/header');
			$this->load->view('advocate/secteur/add');
			$this->load->view('include/footer');
        }
    }  

    /*
     * Editing a secteur
     */
    function edit($id)
    {   
        // check if the secteur exists before trying to edit it
        $data['secteur'] = $this->Secteur_model->get_secteur($id);
        
        if(isset($data['secteur']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nom','Nom','max_length[100]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nom' => $this->input->post('nom'),
                );

                $this->Secteur_model->update_secteur($id,$params);            
                redirect('secteur/index');
            }
            else
            {
                $data['_view'] = 'secteur/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The secteur you are trying to edit does not exist.');
    } 

    /*
     * Deleting secteur
     */
    function remove($id)
    {
        $secteur = $this->Secteur_model->get_secteur($id);

        // check if the secteur exists before trying to delete it
        if(isset($secteur['id']))
        {
            $this->Secteur_model->delete_secteur($id);
            redirect('secteur/index');
        }
        else
            show_error('The secteur you are trying to delete does not exist.');
    }
    
}