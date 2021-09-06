<?php defined("BASEPATH") OR exit("No direct script access allowed");

class About extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	/**
	 * This function is used to load page view
	 * @return Void
	 */
	public function index(){
		$this->load->view("include/header");
		$this->load->view("About/about");
		$this->load->view("include/footer");
	}
	public function open(){
		//$data['stories'] = $this->Stori_model->get_story();
		$this->load->view('Templates/header');
		$this->load->view('About/index');
		$this->load->view('Templates/footer');
	}
	public function contact(){
		$this->load->view('Templates/header');
		$this->load->view('About/contact');
		$this->load->view('Templates/footer');
	}
}
