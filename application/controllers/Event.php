<?php 
	class Event extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model("Event_model");
			$this->load->model("Event_category_model");
			$this->load->model("Event_schedule_model");
		}
		public function index(){
			$data['events'] = $this->Event_model->get_event();
			$this->load->view('Templates/header');
			$this->load->view('events/ig_index', $data);
			$this->load->view('Templates/footer');
		}


		public function view($id){

			$data['events'] = $this->Event_model->get_event($id);
			$data['schedules'] = $this->Event_schedule_model->get_event_schedule($id);
			$this->load->view('Templates/header');
			$this->load->view('events/ig_detail',$data);
			$this->load->view('Templates/footer');
		}
	}
?>
