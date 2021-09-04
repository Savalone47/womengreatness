<?php defined("BASEPATH") OR exit("No direct script access allowed");
class  Stories extends CI_controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Stori_model');
		$this->load->model('Stories_category_model');

	}
	public function index(){
		$data['title']='Latest issues';
		$data['stories']=$this->Stori_model->get_story();
		$this->load->view('include/header');
		$this->load->view('stories/index', $data);
		$this->load->view('include/footer');
	}

	public function edit($id = NULL){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('stori_id', 'CODE','required');
		$this->form_validation->set_rules('stori_title', 'Title','required');
		$this->form_validation->set_rules('stori_description', 'Description','required');
		$this->form_validation->set_rules('stori_cat_id', 'Event Category','required');
		$this->form_validation->set_rules('stori_date', 'Date','required');


		$this->load->view('include/header');

		if ($this->form_validation->run()===false) {
			$data['stories']=$this->Stori_model->get_story($id);
			if (!empty($data['stories'])) {
				$data['title']='Edit Stories';
				$data['stories_categories']=$this->Story_category_model->get_story_category();
				$this->load->view('stories/edit', $data);
			}
		}
		else{
			$this->Stori_model->edit_story();
			redirect('/Stories');
		}
		$this->load->view('include/footer');
	}

	public function view($ev_id = NULL){
		$data['title']='';
		$data['stories']=$this->Stori_model->get_story($ev_id);
		$this->load->view('include/header');
		$this->load->view('stories/view', $data);
		$this->load->view('include/footer');
	}

	public function create(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('stori_id', 'CODE','required');
		$this->form_validation->set_rules('stori_title', 'Title','required');
		$this->form_validation->set_rules('stori_description', 'Description','required');
		$this->form_validation->set_rules('stori_cat_id', 'Event Category','required');
		$this->form_validation->set_rules('stori_date', 'Date','required');

		$data['title']='Add Issue';

		if ($this->form_validation->run()===FALSE) {
			$data['stories_categories']=$this->Stories_category_model->get_story_category();

			$this->load->view('include/header');
			$this->load->view('stories/create', $data);
			$this->load->view('include/footer');
		}
		else{
			$this->Stori_model>create_story();
			redirect('/Stories');
		}

	}

	public function delete($ev_id){
		$data['stories']=$this->Stori_model->get_story($ev_id);
		if(isset($data)){
			$this->Stori_model->delete($ev_id);
			redirect('stories/index');
		}else{
			show_error('The event you are trying to delete does not exist.');
		}
	}
	//Internaute simple
	public function open(){
		$data['stories'] = $this->Stori_model->get_story();

		$this->load->view('Templates/header');
		$this->load->view('stories/story_index',$data);
		$this->load->view('Templates/footer');
	}
	public function details($id){

		$data['stories'] = $this->Stori_model->get_story_user($id);
		$this->load->view('Templates/header');
		$this->load->view('stories/story_detail',$data);
		$this->load->view('Templates/footer');
	}
}
?>
