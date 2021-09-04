<?php defined("BASEPATH") OR exit("No direct script access allowed"); 
	class Books extends CI_Controller{
		public function __construct(){
				parent::__construct();
				$this->load->model("Book_model");
				$this->load->model("Book_category_model");
		}
		public function index(){
			if($this->session->status) {
				$data['title']='Books Lists';
				$data['books']=$this->Book_model->get_book();
				$this->load->view('include/header');
				$this->load->view('book/index', $data);
				$this->load->view('include/footer');
			}
			else{
			     redirect($_SERVER['HTTP_REFERER']);
			}
		}

		public function view($bo_id = NULL){
			if($this->session->status) {
				$this->load->view('include/header');
				$data['book']=$this->Book_model->get_book($bo_id);
				$this->load->view('book/view', $data);
				$this->load->view('include/footer');
			}
			else{
			     redirect($_SERVER['HTTP_REFERER']);
			}
		}

		public function edit($bo_id = NULL){
			if($this->session->status) {
				$this->form_validation->set_rules('bo_id', 'Book','required');
				$this->form_validation->set_rules('bo_title', 'Title','required');
				$this->form_validation->set_rules('bo_cat_id', 'Category','required');
				$this->form_validation->set_rules('bo_author', 'Author','required');
				$this->form_validation->set_rules('bo_pub_house', 'Publishing house','required');
				$this->form_validation->set_rules('bo_pub_date', 'Date of Publication','required');
				$this->form_validation->set_rules('bo_description', 'Descriptiopn','required');
				$this->form_validation->set_rules('bo_access', 'Accessbility','required');
				$this->form_validation->set_rules('bo_price', 'Price','required');	
				$this->form_validation->set_rules('bo_status', 'Status','required');
				$this->load->view('include/header');

				if ($this->form_validation->run()===false) {
					$data['book'] = $this->Book_model->get_book($bo_id);
					if (!empty($data['book'])) {
						$data['categories'] = $this->Book_category_model->get_category();
						$this->load->view('book/edit', $data);
					}
				}else{
					$this->Book_model->edit_book();
					redirect('/Books');
				}

				$this->load->view('include/footer');
			}
			else{
			     redirect($_SERVER['HTTP_REFERER']);
			}
		}

		public function create(){
			if($this->session->status){
				$this->form_validation->set_rules('bo_title', 'Title','required');
				$this->form_validation->set_rules('bo_cat_id', 'Category','required');
				$this->form_validation->set_rules('bo_author', 'Author','required');
				$this->form_validation->set_rules('bo_pub_house', 'Publishing house','required');
				$this->form_validation->set_rules('bo_pub_date', 'Date of Publication','required');
				$this->form_validation->set_rules('bo_description', 'Descriptiopn','required');
				$this->form_validation->set_rules('bo_access', 'Accessbility','required');
				$this->form_validation->set_rules('bo_price', 'Price','required');
				$this->load->view('include/header');
				$data['title']='New Books';
				
				if ($this->form_validation->run()===FALSE) {
					$data['categories'] = $this->Book_category_model->get_category();
					$this->load->view('book/create', $data);
				}
				else{
					$this->Book_model->create_book();
					redirect('/Books');
				}
				$this->load->view('include/footer');
			}
			else{
			     redirect($_SERVER['HTTP_REFERER']);
			}
		}

		public function delete(){}

		public function ourevents(){
			if($this->session->status) {
				$data['books'] = $this->Book_model->get_book();
				$this->load->view('Templates/header');
				$this->load->view('book/book_index',$data);
				$this->load->view('Templates/footer');
			}
			else{
			     redirect($_SERVER['HTTP_REFERER']);
			}
		}
		public function details($book_id){
			if($this->session->status) {
				$data['book_detail'] = $this->Book_model->get_book($book_id);;
				$this->load->view('Templates/header');
				$this->load->view('book/book_details',$data);
				$this->load->view('Templates/footer');
			}
			else{
			     redirect($_SERVER['HTTP_REFERER']);
			}
		}

		public function addPdf($bo_id){
			$this->form_validation->set_rules('bo_id', 'Book','required');

			$this->load->view('include/header');
			if ($this->form_validation->run()===false) {
				$data['book'] = $this->Book_model->get_book($bo_id);
				if (!empty($data['book'])) {
					$this->load->view('book/addPdf', $data);
				}
			}else{
				$this->Book_model->edit_pdf();
				redirect('/Books');
			}
			$this->load->view('include/footer');

		}
	}
?>
