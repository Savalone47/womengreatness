  <?php 
	class Issues extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model("Issue_model");
		}

		//view cote admin
		public function index(){
			if($this->session->status) {
				$data['issues'] = $this->Issue_model->get_issue();
				$this->load->view('include/header');
				$this->load->view('Homes/list_issues', $data);
				$this->load->view('include/footer');
						}
			else{

			     redirect($_SERVER['HTTP_REFERER']);
			}
		}
		public function one($is_id){
			if($this->session->status) {
				$data['issue'] = $this->Issue_model->get_issue($is_id);
				$this->load->view('include/header');
				$this->load->view('Homes/view_1_issue.php', $data);
				$this->load->view('include/footer');
						}
			else{

			     redirect($_SERVER['HTTP_REFERER']);
			}
		}


		public function view($is_id){
			$data['issue'] = $this->Issue_model->get_issue($is_id);
			$this->load->view("Templates/header");
			$this->load->view("Homes/view_issue", $data);
			$this->load->view("Templates/footer");
		}

		//Voir le formulaire creer
		public function viewCreate(){
			if($this->session->status) {
				$this->load->view('include/header');
				$this->load->view('Homes/create_issue');
				$this->load->view('include/footer');
						}
			else{

			     redirect($_SERVER['HTTP_REFERER']);
			}
		}

		public function create(){
			if($this->session->status) {
				$this->form_validation->set_rules('is_title', 'Title','required');
				$this->form_validation->set_rules('is_description', 'DEscription','required');
				$this->Issue_model->create_issue();
				redirect('/issues');
						}
			else{

			     redirect($_SERVER['HTTP_REFERER']);
			}
		}	

		//Voir le formulaire editer
		public function vewEdit($is_id){
			if($this->session->status) {
				$data['issue'] = $this->Issue_model->get_issue($is_id);
				$this->load->view('include/header');
				$this->load->view('Homes/edit_issue', $data);
				$this->load->view('include/footer');
						}
			else{

			     redirect($_SERVER['HTTP_REFERER']);
			}
		}


		//Edit Issue
		public function edit($is_id){
			if($this->session->status) {
				$this->form_validation->set_rules('is_title', 'Title','required');
				$this->form_validation->set_rules('is_description', 'DEscription','required');

				$this->Issue_model->edit_issue();
				redirect('/issues');

				echo"Bonjour LOLOLLO";
						}
			else{

			     redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}
?>