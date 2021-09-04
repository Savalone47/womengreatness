<?php defined("BASEPATH") OR exit("No direct script access allowed"); 
//Ce conntorlleur traite le livre du coté internaute(visiteur)
class Book extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("Book_model");
		$this->load->model("Book_category_model");
		$this->load->model('User_model');
		$this->load->model('Role_user_model');
	}
	public function index(){
		$data['books'] = $this->Book_model->get_book();
		$data['recent_books'] = $this->Book_model->get_recent_book(4);
		$data['categories'] = $this->Book_category_model->get_category();
		$this->load->view('Templates/header');
		$this->load->view('book/ig_index', $data);
		$this->load->view('Templates/footer');
	}

	public function byCategory($bo_cat_id){
		$data['books'] = $this->Book_model->get_book_by_categorie($bo_cat_id);
		$data['recent_books'] = $this->Book_model->get_recent_book(4);
		$data['categories'] = $this->Book_category_model->get_category();
		$this->load->view('Templates/header');
		$this->load->view('book/ig_index', $data);
		$this->load->view('Templates/footer');
	}

	public function view($bo_id){
		$data['book']=$this->Book_model->get_book($bo_id);
		$data['recent_books']=$this->Book_model->get_recent_book(20);

		if (!empty(	$data['book'])) {
			$this->load->view('Templates/header');
			$this->load->view('book/ig_view', $data);
			$this->load->view('Templates/footer');
		}
		else redirect("Custom404");
	}

	public function ReadPDF($bo_file=0){
		redirect('/pdfReader/external/view/web/pdf.html?name='.$bo_file);
	}

	public function login($bo_file=false){
		$this->load->view('include/script');
		$this->load->view('book/login');
	}


	//Login to read Books
	public function auth_user(){
		
		$this->form_validation->set_rules('email','email','required|max_length[200]');
		$this->form_validation->set_rules('password','password','required|max_length[20]');

		if($this->form_validation->run()) {

			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$user = $this->User_model->auth_user($email,$password);
			
			if(count($user)>0){
				
				$this->session->set_userdata([
					"id_user"=>$user[0]->users_id,
					'name_user'=>$user[0]->name,
					'type_user'=>$user[0]->user_type,
					'status'=>TRUE,
				]);

				redirect('Book');
			}
			else{

				$this->session->set_flashdata('messagePr', 'Invalid details');
				redirect($_SERVER['HTTP_REFERER']);
			}
			
		} else {
			//$this->load->view('include/script');
			$this->load->view('book/login','refresh');
		}
	}
}
	
?>