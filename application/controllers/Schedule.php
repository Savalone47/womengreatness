<?php defined("BASEPATH") OR exit("No direct script access allowed");
	class Schedule extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model("Event_model");
			$this->load->model("Event_category_model");
			$this->load->model("Event_schedule_model");
			$this->load->model('Facilitator_model');
		}

		public function view($ev_id = NULL){
			$data['events']=$this->Event_model->get_event($ev_id);
			$data['schedules']= $this->Event_schedule_model->get_event_schedule($ev_id);
			$this->load->view('include/header');
			if ($data['events']) {
				$data['title']='<b>'.$data['events'][0]->ev_title.' (SCHEDULE)</b>';
				$data['ev_id']=$ev_id;	
				$this->load->view('Schedules/view', $data);	
			}
			$this->load->view('include/footer');	
		}

		public function create($ev_id=NULL){
			$this->form_validation->set_rules('sche_date', 'Date','required');
			$this->form_validation->set_rules('sche_start_time', 'Start Time','required');
			$this->form_validation->set_rules('sche_end_time', 'End Time','required');
			$this->form_validation->set_rules('sche_header', 'Header','required');
			$this->form_validation->set_rules('sche_title', 'Title','required');
			$this->form_validation->set_rules('faci_id', 'Facilitator','required');

			$data['title']='Create a Schedule';

			if ($this->form_validation->run()===FALSE) {
				$data['facilitators'] = $this->Facilitator_model->get_all_facilitator_object();
				$data['event']=$this->Event_model->get_event($ev_id);
				if (!empty($data['events'])) {
					$this->load->view('include/header');
					$this->load->view('Schedules/create', $data);
					$this->load->view('include/footer');
				}
			}
			else{
				$this->Event_schedule_model->create_schedule();
				redirect('Schedule/view/'.$ev_id);
			}

		}
		public function viewCreate($ev_id = NULL){

			$this->load->view('include/header');
			$data['facilitators'] = $this->Facilitator_model->get_all_facilitator();
			$data['event']=$this->Event_model->get_event($ev_id);
			if ($data['event'][0]->ev_id) {
				$this->load->view('Schedules/create', $data);

			}
			$this->load->view('include/footer');
		}

		public function edit($sche_id = NULL){
			$ev_id=$this->input->post('ev_id');
			$this->form_validation->set_rules('sche_id', 'Schdedule','required');
			$this->form_validation->set_rules('sche_date', 'Date','required');
			$this->form_validation->set_rules('sche_start_time', 'Start Time','required');
			$this->form_validation->set_rules('sche_end_time', 'End Time','required');
			$this->form_validation->set_rules('sche_header', 'Header','required');
			$this->form_validation->set_rules('sche_title', 'Title','required');
			$this->form_validation->set_rules('faci_id', 'Facilitator','required');

			$this->load->view('include/header');
			$data['schedules']=$this->Event_schedule_model->get_one_schedule($sche_id);

			if ($this->form_validation->run()===TRUE) {
				$this->Event_schedule_model->edit_schedule();
				redirect('/Schedule/view/'.$ev_id);
			}
			$this->load->view('include/footer');
		}
	}
?>
