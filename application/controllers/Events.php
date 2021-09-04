<?php defined("BASEPATH") OR exit("No direct script access allowed");
class  Events extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->model("Event_model");
			$this->load->model("Event_category_model");
			$this->load->model('Event_schedule_model');
		}
		public function index(){
			if($this->session->status) {

				$data['title']='Latest Events';
				$data['events']=$this->Event_model->get_event();
				$this->load->view('include/header');
				$this->load->view('events/index', $data);
				$this->load->view('include/footer');
			}
			else{

			     redirect($_SERVER['HTTP_REFERER']);
			}
		}

		public function edit($id = NULL){
			if($this->session->status) {
				$this->form_validation->set_rules('ev_id', 'CODE','required');
				$this->form_validation->set_rules('ev_title', 'Title','required');
				$this->form_validation->set_rules('ev_description', 'Description','required');
				$this->form_validation->set_rules('ev_cat_id', 'Event Category','required');
				$this->form_validation->set_rules('ev_date', 'Date','required');
				$this->form_validation->set_rules('ev_price', 'Price','required');
				$this->form_validation->set_rules('ev_status', 'status','required');

				$this->load->view('include/header');

				if ($this->form_validation->run()===false) {
					$data['events']=$this->Event_model->get_event($id);
					if (!empty($data['events'])) {
						$data['title']='Edit Event';
			            $data['event_categories']=$this->Event_category_model->get_Event_category();
			            $this->load->view('events/edit', $data);
					}
				}
				else{
					$this->Event_model->edit_event();
					redirect('/Events');
				}
				$this->load->view('include/footer');
			}
			else{

			     redirect($_SERVER['HTTP_REFERER']);
			}
		}

		public function view($ev_id = NULL){
			if($this->session->status) {
				$data['title']='';
				$data['events']=$this->Event_model->get_Event($ev_id);
				$this->load->view('include/header');
				$this->load->view('events/view', $data);
				$this->load->view('include/footer');
			}
			else{

			     redirect($_SERVER['HTTP_REFERER']);
			}
		}

		public function create(){
			if($this->session->status) {
				$this->form_validation->set_rules('ev_title', 'Title','required');
				$this->form_validation->set_rules('ev_description', 'Description','required');
				$this->form_validation->set_rules('ev_cat_id', 'Event Category','required');
				$this->form_validation->set_rules('ev_date', 'Date','required');
				$this->form_validation->set_rules('ev_price', 'Price','required');

				$data['title']='Add Event';

				if ($this->form_validation->run()===FALSE) {
					$data['event_categories']=$this->Event_category_model->get_Event_category();
					$this->load->view('include/header');
					$this->load->view('events/create', $data);
					$this->load->view('include/footer');
				}
				else{

					$this->Event_model->create_event();
					redirect('/Events');
				}
			}
			else{

			     redirect($_SERVER['HTTP_REFERER']);
			}
		}
		function delete($ev_id){
			if($this->session->status) {
				$data['events']=$this->Event_model->get_Event($ev_id);
				if(isset($data)){
					$this->Event_model->delete($ev_id);
					redirect('events/index');
				}else{
					show_error('The event you are trying to delete does not exist.');
				}
			}
			else{
			     redirect($_SERVER['HTTP_REFERER']);
			}
		}

		//Internaute simple
		public function ourevents(){
			$data['events'] = $this->Event_model->get_event();
			$this->load->view('Templates/header');
			$this->load->view('events/ig_index',$data);
			$this->load->view('Templates/footer');
		}
	}
?>
