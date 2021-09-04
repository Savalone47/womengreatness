<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Goupe extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Goupe_model');
		$this->load->model('Organisation_model');
    } 

    /*
     * Listing of goupe
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('goupe/index?');
        $config['total_rows'] = $this->Goupe_model->get_all_goupe_count();
        $this->pagination->initialize($config);

        $data['goupe'] = $this->Goupe_model->get_groupe_of_user($this->session->id_user);

		$this->load->view('include/header');
		$this->load->view('advocate/goupe/index',$data);
		$this->load->view('include/footer');
    }


    function index_admin(){

        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('goupe/index?');
        $config['total_rows'] = $this->Goupe_model->get_all_goupe_count();
        $this->pagination->initialize($config);

        $data['goupe'] = $this->Goupe_model->get_all_goupe();

		$this->load->view('include/header');
		$this->load->view('advocate/goupe/index',$data);
		$this->load->view('include/footer');
    }

    /*
     * Adding a new goupe
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
	
				'nom_groupe' => $this->input->post('nom_groupe'),
				'id_organisation'=>$this->input->post('organisation'),
				'numero_enregistrement' => uniqid('groupe',True),
				'groupe_user_id'=>$this->session->id_user
            );
            
			$this->session->set_flashdata(['success'=>True]);
            $goupe_id = $this->Goupe_model->add_goupe($params);
            redirect($_SERVER['HTTP_REFERER']);
        }
        else
        {
	
			$data['organisations'] = $this->Organisation_model->get_organisation_object($this->session->id_user);

			$this->load->view('include/header');
			$this->load->view('advocate/goupe/add',$data);
			$this->load->view('include/footer');
        }
    }  

    /*
     * Editing a goupe
     */
    function edit($id)
    {   
        // check if the goupe exists before trying to edit it
        $data['goupe'] = $this->Goupe_model->get_goupe($id);
        
        if(isset($data['goupe']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_user' => $this->input->post('id_user'),
					'nom_groupe' => $this->input->post('nom_groupe'),
					'numero_enregistrement' => $this->input->post('numero_enregistrement'),
					'pays' => $this->input->post('pays'),
					'ville' => $this->input->post('ville'),
					'province' => $this->input->post('province'),
					'site_internet' => $this->input->post('site_internet'),
					'logo_groupe' => $this->input->post('logo_groupe'),
                );

                $this->Goupe_model->update_goupe($id,$params);            
                redirect('goupe/index');
            }
            else
            {
				$this->load->model('User_model');
				$data['all_user'] = $this->User_model->get_all_user();

				$this->load->view('include/header');
				$this->load->view('advocate/goupe/edit',$data);
				$this->load->view('include/footer');
            }
        }
        else
            show_error('The goupe you are trying to edit does not exist.');
    } 

    /*
     * Deleting goupe
     */
    function remove($id)
    {
        $goupe = $this->Goupe_model->get_goupe($id);

        // check if the goupe exists before trying to delete it
        if(isset($goupe['id']))
        {
            $this->Goupe_model->delete_goupe($id);
            redirect('goupe/index');
        }
        else
            show_error('The goupe you are trying to delete does not exist.');
    }

    /*
    *Listing groups by organisation
    */

    function listGroupByOrganisation(){

        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('goupe/listGroupByOrganisation?');
        $config['total_rows'] = $this->Goupe_model->getCountGroupByOrganisation();

       
        $this->pagination->initialize($config);

        $data['goupe'] = $this->Goupe_model->getGroupByOrganisation($params);

        $this->load->view('include/header');
        $this->load->view('advocate/goupe/index', $data);
        $this->load->view('include/footer');
    }

    /**
     * View list of group
    */
    function goupListOrgan($org_id){

        $data['goupe'] = $this->Goupe_model->getListGroupByOrg($org_id);
        $data['organisation'] = $this->Organisation_model->get_organisation($org_id);

        $data['nom'] = $data['organisation']['nom_organisation'];

        if (count($data['goupe']) <= 0 ) {
            show_error('The organisation you are trying to show group does not exist.');
        }else{
            $this->load->view('include/header');
            $this->load->view('advocate/goupe/list_by_org', $data);
            $this->load->view('include/footer'); 
        }
    }

    /**
     * Listing users(advocate) by group
     */

    function advocacyListbyGroup(){
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('goupe/advocacyListbyGroup?');
        $config['total_rows'] = $this->Goupe_model->getCountadvocBygroup();

       
        $this->pagination->initialize($config);

        $data['goupe'] = $this->Goupe_model->getListadvocBygroup($params);

        $this->load->view('include/header');
        $this->load->view('advocate/goupe/group_list', $data);
        $this->load->view('include/footer');
    }

    function advocateListByGroup($group_user_id){

        $this->load->model('Groupe_user_model');

        $data['advocates'] = $this->Groupe_user_model->getListUserForgroupUser($group_user_id);
        $data['groupe_user'] = $this->Groupe_user_model->get_groupe_user($group_user_id);

        $data['nom'] = $data['groupe_user']['id'];

        if (count($data['advocates']) <= 0 ) {
            show_error('The group user you are trying to show does not exist.');
        }else{
            $this->load->view('include/header');
            $this->load->view('advocate/goupe/list_by_group_user', $data);
            $this->load->view('include/footer'); 
        }
    }
    
}
