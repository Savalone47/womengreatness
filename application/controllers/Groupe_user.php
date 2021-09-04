<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Groupe_user extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Groupe_user_model');
    } 

    /*
     * Listing of groupe_user
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('groupe_user/index?');
        $config['total_rows'] = $this->Groupe_user_model->get_all_groupe_user_count();
        $this->pagination->initialize($config);

        $data['groupe_user'] = $this->Groupe_user_model->get_all_groupe_user($params);

		$this->load->view('include/header');
		$this->load->view('advocate/groupe_user/index',$data);
		$this->load->view('include/footer');
    }

    /*
     * Adding a new groupe_user
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_user' => $this->input->post('id_user'),
				'id_group' => $this->input->post('id_group'),
            );
            
			$this->session->set_flashdata(['success'=>True]);
            $groupe_user_id = $this->Groupe_user_model->add_groupe_user($params);
            redirect($_SERVER['HTTP_REFERER']);
            
        }
        else
        {
			$this->load->model('User_model');
			$data['all_user'] = $this->User_model->get_all_user();
		
			$this->load->model('Goupe_model');
			$data['all_goupe'] = $this->Goupe_model->get_groupe_of_user($this->session->userdata ('user_details')->users_id);

			$this->load->view('include/header');
			$this->load->view('advocate/groupe_user/add',$data);
			$this->load->view('include/footer');
        }
    }  

    /*
     * Editing a groupe_user
     */
    function edit($id)
    {   
        // check if the groupe_user exists before trying to edit it
        $data['groupe_user'] = $this->Groupe_user_model->get_groupe_user($id);
        
        if(isset($data['groupe_user']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_user' => $this->input->post('id_user'),
					'id_group' => $this->input->post('id_group'),
                );

                $this->Groupe_user_model->update_groupe_user($id,$params);            
                redirect('groupe_user/index');
            }
            else
            {
				$this->load->model('User_model');
				$data['all_user'] = $this->User_model->get_all_user();

				$this->load->model('Goupe_model');
				$data['all_goupe'] = $this->Goupe_model->get_all_goupe();

				$this->load->view('include/header');
				$this->load->view('advocate/groupe_user/edit',$data);
				$this->load->view('include/footer');
            }
        }
        else
            show_error('The groupe_user you are trying to edit does not exist.');
    } 

    /*
     * Deleting groupe_user
     */
    function remove($id)
    {
        $groupe_user = $this->Groupe_user_model->get_groupe_user($id);

        // check if the groupe_user exists before trying to delete it
        if(isset($groupe_user['id']))
        {
            $this->Groupe_user_model->delete_groupe_user($id);
            redirect('groupe_user/index');
        }
        else
            show_error('The groupe_user you are trying to delete does not exist.');
    }
    
}
