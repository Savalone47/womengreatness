<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Commission_groupe extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Commission_groupe_model');
    } 

    /*
     * Listing of commission_groupe
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('commission_groupe/index?');
        $config['total_rows'] = $this->Commission_groupe_model->get_all_commission_groupe_count();
        $this->pagination->initialize($config);

        $data['commission_groupe'] = $this->Commission_groupe_model->get_all_commission_groupe($params);
        

		$this->load->view('include/header');
		$this->load->view('advocate/commission_groupe/index',$data);
		$this->load->view('include/footer');
    }

    /*
     * Adding a new commission_groupe
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_commission' => $this->input->post('id_commission'),
				'id_user' => $this->input->post('id_user'),
            );
            
            $commission_groupe_id = $this->Commission_groupe_model->add_commission_groupe($params);
            redirect('commission_groupe/index');
        }
        else
        {
			$this->load->model('Commission_tech_model');
			$data['all_commission_tech'] = $this->Commission_tech_model->get_all_commission_tech();

			$this->load->model('User_model');
			$data['all_user'] = $this->User_model->get_all_user();

			$this->load->view('include/header');
			$this->load->view('advocate/commission_groupe/add',$data);
			$this->load->view('include/footer');
        }
    }  

    /*
     * Editing a commission_groupe
     */
    function edit($id)
    {   
        // check if the commission_groupe exists before trying to edit it
        $data['commission_groupe'] = $this->Commission_groupe_model->get_commission_groupe($id);
        
        if(isset($data['commission_groupe']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_commission' => $this->input->post('id_commission'),
					'id_user' => $this->input->post('id_user'),
                );

                $this->Commission_groupe_model->update_commission_groupe($id,$params);            
                redirect('commission_groupe/index');
            }
            else
            {
				$this->load->model('Commission_tech_model');
				$data['all_commission_tech'] = $this->Commission_tech_model->get_all_commission_tech();

				$this->load->model('User_model');
				$data['all_user'] = $this->User_model->get_all_user();

				$this->load->view('include/header');
				$this->load->view('advocate/commission_groupe/edit',$data);
				$this->load->view('include/footer');
            }
        }
        else
            show_error('The commission_groupe you are trying to edit does not exist.');
    } 

    /*
     * Deleting commission_groupe
     */
    function remove($id)
    {
        $commission_groupe = $this->Commission_groupe_model->get_commission_groupe($id);

        // check if the commission_groupe exists before trying to delete it
        if(isset($commission_groupe['id']))
        {
            $this->Commission_groupe_model->delete_commission_groupe($id);
            redirect('commission_groupe/index');
        }
        else
            show_error('The commission_groupe you are trying to delete does not exist.');
    }
    
}
