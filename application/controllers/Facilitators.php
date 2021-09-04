<?php defined("BASEPATH") OR exit("No direct script access allowed");
class Facilitators extends CI_Controller {
	/**
	 * This function is used to load page view
	 * @return Void
	 */
	public function __construct() {
		parent::__construct();
		$this->load->model('Facilitator_model');
		$this->load->library('form_validation');
	}
	public function index(){

		$params['limit'] = 20;
		$params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

		$config = $this->config->item('pagination');
		$config['base_url'] = base_url('facilitators/index?');

		$config['total_rows'] = $this->Facilitator_model->get_all_facilitator_count();
		$this->pagination->initialize($config);

		$data['facilitators'] = $this->Facilitator_model->get_all_facilitator($params);
		$data['title']='Facilitators or Speakers';
		$data['facilitators']=$this->Facilitator_model->get_faci();

		$this->load->view('include/header');
		$this->load->view('facilitators/index', $data);
		$this->load->view('include/footer');
	}
	public function edit($faci_id = NULL){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('faci_name', 'Name','required');
		$this->form_validation->set_rules('faci_email', 'Emails','required');
		$this->form_validation->set_rules('faci_phone', 'Phone','required');
		$this->form_validation->set_rules('faci_country', 'Countries', 'required');
		$this->form_validation->set_rules('faci_organisation', 'Organisation','required');
		$this->form_validation->set_rules('faci_position', 'Position','required');
		$this->form_validation->set_rules('faci_picture', 'Picture');

		$this->load->view('include/header');

		if ($this->form_validation->run()===false) {
			$data['facilitators']=$this->Facilitator_model->get_faci($faci_id);
			if (!empty($data['facilitators'])) {
				$data['title']='Edit Facilitators';
				$this->load->view('facilitators/edit', $data);
			}
		}
		else{
			$this->Facilitator_model->edit_faci();
			redirect('/Facilitators');
		}
		$this->load->view('include/footer');

	}
	public function view($faci_id){
		$data['title']='';
		$data['facilitators']=$this->Facilitator_model->get_faci($faci_id);
		$this->load->view('include/header');
		$this->load->view('facilitators/view', $data);
		$this->load->view('include/footer');

	}
	public function create(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('faci_name', 'Name','required');
		$this->form_validation->set_rules('faci_email', 'Emails','required');
		$this->form_validation->set_rules('faci_phone', 'Phone','required');
		$this->form_validation->set_rules('faci_country', 'Countries', 'required');
		$this->form_validation->set_rules('faci_organisation', 'Organisation','required');
		$this->form_validation->set_rules('faci_position', 'Position','required');
		$this->form_validation->set_rules('faci_picture', 'Picture');

		$data['title']='Add Facilitators';

		if ($this->form_validation->run()===FALSE) {

			$this->load->view('include/header');
			$this->load->view('facilitators/create', $data);
			$this->load->view('include/footer');
		}
		else{
			$this->Facilitator_model->create_faci();
			redirect('/Facilitators');
		}
	}


	function delete($faci_id){
		$data['facilitators']=$this->Facilitator_model->get_faci($faci_id);
		if(isset($data)){
			$this->Facilitator_model->delete($faci_id);
			redirect('facilitators/index');
		}else{
			show_error('The Facilitators you are trying to delete does not exist.');
		}
	}
}
?>
