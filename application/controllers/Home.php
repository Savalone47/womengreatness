<?php defined("BASEPATH") OR exit("No direct script access allowed");

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Issue_model");
	}

	public function index(){
		$this->load->view('Templates/header');
		$this->load->view('Templates/home');
		$this->load->view('Templates/footer');
	}


	public function issue(){
		$data['issues'] = $this->Issue_model->get_issue();
		$this->load->view("Templates/header");
		$this->load->view("Homes/issues", $data);
		$this->load->view("Templates/footer");
	}

	public function advocate(){
		$this->load->view("Templates/header");
		$this->load->view("advocate/index");
		$this->load->view("Templates/footer");
	}

}

