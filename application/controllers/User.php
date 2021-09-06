<?php
defined('BASEPATH') OR exit('No direct script access allowed ');

class User extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Role_user_model');
	}

	/**
	 * This function is redirect to users profile page
	 * @return Void
	 */
	public function index() {
		if($this->session->status) {
		
			$data['roles'] = $this->Role_user_model->get_all_role();
			$this->load->view('include/header');
			$this->load->view('user/index', $data);
			$this->load->view('include/footer');
		}
		else{

			redirect($_SERVER['HTTP_REFERER']);
		}
	}


	function users($id_role){

		if($this->session->status) {
		
			if($this->uri->segment(3)){

				$data['users'] = $this->User_model->get_all_user_of_role($id_role);
				$this->load->view('include/header');
				$this->load->view('user/users_category', $data);
				$this->load->view('include/footer');
			}
			else{

				echo 23;
			}
		}
		else{

			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	/**
	 * This function is used to load login view page
	 * @return Void
	 */
	public function login(){
		if(isset($_SESSION['user_details'])){
			redirect( base_url().'user/profile', 'refresh');
		}
		//$this->load->view('include/script');
		$this->load->view('user/login');
	}

	/**
	 * This function is used to logout user
	 * @return Void
	 */
	public function logout(){
		session_destroy();
		redirect( base_url().'user/login', 'refresh');
	}

	/**
	 * This function is used to registr user
	 * @return Void
	 */
	public function registration(){
		if(isset($_SESSION['user_details'])){
			redirect( base_url().'user/profile', 'refresh');
		}
		//Check if admin allow to registration for user
		if(setting_all('register_allowed')==1){
			if($this->input->post()) {
				$params = [
					'name'=>$this->input->post('name'),
					'password'=>$this->input->post('password'),
					'email'=>$this->input->post('email'),
					'user_type'=>$this->input->post('user_type'),
					'status'=>'active',
					'is_deleted'=>'0',
				];

				$this->User_model->insert($params);
				$this->session->set_flashdata('messagePr', 'Successfully Registered..');
				redirect($_SERVER['HTTP_REFERER']);

			} else {

				$data['roles'] = $this->Role_user_model->get_all_role(); 
				$this->load->view('Templates/header');
				$this->load->view('user/register',$data);
			}
		}
		else {
			$this->session->set_flashdata('messagePr', 'Registration Not allowed..');
			redirect( base_url().'user/login', 'refresh');
		}
	}

	/**
	 * This function is used for user authentication ( Working in login process )
	 * @return Void
	 */
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

				redirect('user/profile');
			}
			else{

				$this->session->set_flashdata('messagePr', 'Invalid details');
				redirect($_SERVER['HTTP_REFERER']);
			}
			
		} else {
			$this->load->view('include/script');
			$this->load->view('user/login','refresh');
		}
	}

	/**
	 * This function is used send mail in forget password
	 * @return Void
	 */
	public function forgetpassword($page =''){
		$page['title'] = 'Forgot Password';
		if($this->input->post()){
			$setting = settings();
			$res = $this->User_model->get_data_by('users', $this->input->post('email'), 'email',1);
			if(isset($res[0]->users_id) && $res[0]->users_id != '') {
				$var_key = $this->getVarificationCode();
				$this->User_model->updateRow('users', 'users_id', $res[0]->users_id, array('var_key' => $var_key));
				$sub = "Reset password";
				$email = $this->input->post('email');
				$data = array(
					'user_name' => $res[0]->name,
					'action_url' =>base_url(),
					'sender_name' => $setting['company_name'],
					'website_name' => $setting['website'],
					'varification_link' => base_url().'user/mail_varify?code='.$var_key,
					'url_link' => base_url().'user/mail_varify?code='.$var_key,
				);
				$body = $this->User_model->get_template('forgot_password');
				$body = $body->html;
				foreach ($data as $key => $value) {
					$body = str_replace('{var_'.$key.'}', $value, $body);
				}
				if($setting['mail_setting'] == 'php_mailer') {
					$this->load->library("send_mail");
					$emm = $this->send_mail->email($sub, $body, $email, $setting);
				} else {
					// content-type is required when sending HTML email
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					$headers .= 'From: '.$setting['EMAIL'] . "\r\n";
					$emm = mail($email,$sub,$body,$headers);
				}
				if($emm) {
					$this->session->set_flashdata('messagePr', 'To reset your password, link has been sent to your email');
					redirect( base_url().'user/login','refresh');
				}
			} else {
				$this->session->set_flashdata('forgotpassword', 'This account does not exist');//die;
				redirect( base_url()."user/forgetpassword");
			}
		} else {
			$this->load->view('include/script');
			$this->load->view('user/forget_password');
		}
	}

	
	public function reset_password(){
		$return = $this->User_model->ResetPpassword();
		if($return){
			$this->session->set_flashdata('messagePr', 'Password Changed Successfully..');
		} else {
			$this->session->set_flashdata('messagePr', 'Unable to update password');
		}
		redirect( base_url().'user/login', 'refresh');
	}

	/**
	 * This function is generate hash code for random string
	 * @return string
	 */
	public function getVarificationCode(){
		$pw = $this->randomString();
		return $varificat_key = password_hash($pw, PASSWORD_DEFAULT);
	}



	/**
	 * This function is used for show users list
	 * @return Void
	 */
	public function userTable(){
		is_login();
		if(CheckPermission("users", "own_read")){
			$this->load->view('include/header');
			$this->load->view('user/user_table');
			$this->load->view('include/footer');
		} else {
			$this->session->set_flashdata('messagePr', 'You don\'t have permission to access.');
			redirect( base_url().'user/profile', 'refresh');
		}
	}

	/**
	 * This function is used to create datatable in users list page
	 * @return Void
	 */
	public function dataTable (){
		is_login();
		$table = 'users';
		$primaryKey = 'users_id';
		$columns = array(
			array( 'db' => 'users_id', 'dt' => 0 ),array( 'db' => 'status', 'dt' => 1 ),
			array( 'db' => 'name', 'dt' => 2 ),
			array( 'db' => 'email', 'dt' => 3 ),
			array( 'db' => 'users_id', 'dt' => 4 )
		);

		$sql_details = array(
			'user' => $this->db->username,
			'pass' => $this->db->password,
			'db'   => $this->db->database,
			'host' => $this->db->hostname
		);
		$where = array("user_type != '1'");
		$output_arr = SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where);
		foreach ($output_arr['data'] as $key => $value) {
			$id = $output_arr['data'][$key][count($output_arr['data'][$key])  - 1];
			$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] = '';
			if(CheckPermission($table, "all_update")){
				$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonUser mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
			}else if(CheckPermission($table, "own_update") && (CheckPermission($table, "all_update")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
					$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a id="btnEditRow" class="modalButtonUser mClass"  href="javascript:;" type="button" data-src="'.$id.'" title="Edit"><i class="fa fa-pencil" data-id=""></i></a>';
				}
			}

			if(CheckPermission($table, "all_delete")){
				$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="setId('.$id.', \'user\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';}
			else if(CheckPermission($table, "own_delete") && (CheckPermission($table, "all_delete")!=true)){
				$user_id =getRowByTableColomId($table,$id,'users_id','user_id');
				if($user_id==$this->user_id){
					$output_arr['data'][$key][count($output_arr['data'][$key])  - 1] .= '<a style="cursor:pointer;" data-toggle="modal" class="mClass" onclick="setId('.$id.', \'user\')" data-target="#cnfrm_delete" title="delete"><i class="fa fa-trash-o" ></i></a>';
				}
			}
			$output_arr['data'][$key][0] = '<input type="checkbox" name="selData" value="'.$output_arr['data'][$key][0].'">';
		}
		echo json_encode($output_arr);
	}

	/**
	 * This function is Showing users profile
	 * @return Void
	 */
	public function profile() {
		
		if($this->session->status) {
		
			$data['user_data'] = $this->User_model->get_users($this->session->id_user);
			$this->load->view('include/header');
			$this->load->view('user/profile', $data);
			$this->load->view('include/footer');
		}
		else{

			redirect($_SERVER['HTTP_REFERER']);
		}
		
	}

	/**
	 * This function is used to show popup of user to add and update
	 * @return Void
	 */
	public function get_modal() {
		is_login();
		if($this->input->post('id')){
			$data['userData'] = getDataByid('users',$this->input->post('id'),'users_id');
			echo $this->load->view('user/add_user', $data, true);
		} else {
			echo $this->load->view('user/add_user', '', true);
		}
		exit;
	}


	/**
	 * This function is used to upload file
	 * @return string
	 */
	function upload() {
		foreach($_FILES as $name => $fileInfo){
			$filename=$_FILES[$name]['name'];
			$tmpname=$_FILES[$name]['tmp_name'];
			$exp=explode('.', $filename);
			$ext=end($exp);
			$newname=  $exp[0].'_'.time().".".$ext;
			$config['upload_path'] = 'assets/images/';
			$config['upload_url'] =  base_url().'assets/images/';
			$config['allowed_types'] = "gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp";
			$config['max_size'] = '2000000';
			$config['file_name'] = $newname;
			$this->load->library('upload', $config);
			move_uploaded_file($tmpname,"assets/images/".$newname);
			return $newname;
		}
	}

	/**
	 * This function is used to add and update users
	 * @return Void
	 */
	public function add_edit() {
		$data = $this->input->post();
		if($this->input->post('users_id')) {
			$id = $this->input->post('users_id');
		}
		if(isset($this->session->users_id)) {
			if($this->input->post('users_id') == $this->session->users_id){
				$redirect = 'profile';
			} else {
				$redirect = 'userTable';
			}
		} else {
			$redirect = 'login';
		}
		if($this->input->post('fileOld')) {
			$newname = $this->input->post('fileOld');
			$profile_pic =$newname;
		} else {
			$data[$name]='';
			$profile_pic ='user.png';
		}
		foreach($_FILES as $name => $fileInfo)
		{
			if(!empty($_FILES[$name]['name'])){
				$newname=$this->upload();
				$data[$name]=$newname;
				$profile_pic =$newname;
			} else {
				if($this->input->post('fileOld')) {
					$newname = $this->input->post('fileOld');
					$data[$name]=$newname;
					$profile_pic =$newname;
				} else {
					$data[$name]='';
					$profile_pic ='user.png';
				}
			}
		}
		if($id != '') {
			$data = $this->input->post();
			if($this->input->post('status') != '') {
				$data['status'] = $this->input->post('status');
			}
			if($this->input->post('users_id') == 1) {
				$data['user_type'] = 'admin';
			}
			if($this->input->post('password') != '') {
				if($this->input->post('currentpassword') != '') {
					$old_row = getDataByid('users', $this->input->post('users_id'), 'users_id');
					if(password_verify($this->input->post('currentpassword'), $old_row->password)){
						if($this->input->post('password') == $this->input->post('confirmPassword')){
							$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
							$data['password']= $password;
						} else {
							$this->session->set_flashdata('messagePr', 'Password and confirm password should be same...');
							redirect( redirect( $_SERVER['HTTP_REFERER']));
						}
					} else {
						$this->session->set_flashdata('messagePr', 'Enter Valid Current Password...');
						redirect( redirect( $_SERVER['HTTP_REFERER']));
					}
				} else {
					$this->session->set_flashdata('messagePr', 'Current password is required');
					redirect( redirect( $_SERVER['HTTP_REFERER']));
				}
			}
			$id = $this->input->post('users_id');
			unset($data['fileOld']);
			unset($data['currentpassword']);
			unset($data['confirmPassword']);
			unset($data['users_id']);
			unset($data['user_type']);
			if(isset($data['edit'])){
				unset($data['edit']);
			}
			if($data['password'] == ''){
				unset($data['password']);
			}
			$data['profile_pic'] = $profile_pic;
			$this->User_model->updateRow('users', 'users_id', $id, $data);
			$this->session->set_flashdata('messagePr', 'Your data updated Successfully..');
			redirect( $_SERVER['HTTP_REFERER']);
		} else {
			if($this->input->post('user_type') != 'admin') {
				$data = $this->input->post();
				$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
				$checkValue = $this->User_model->check_exists('users','email',$this->input->post('email'));
				if($checkValue==false)  {
					$this->session->set_flashdata('messagePr', 'This Email Already Registered with us..');
					redirect( base_url().'userTable', 'refresh');
				}
				$checkValue1 = $this->User_model->check_exists('users','name',$this->input->post('name'));
				if($checkValue1==false) {
					$this->session->set_flashdata('messagePr', 'Username Already Registered with us..');
					redirect( base_url().'userTable', 'refresh');
				}
				$data['status'] = 'active';
				if(setting_all('admin_approval') == 1) {
					$data['status'] = 'deleted';
				}

				if($this->input->post('status') != '') {
					$data['status'] = $this->input->post('status');
				}

				$data['user_id'] = $this->user_id;
				$data['password'] = $password;
				$data['profile_pic'] = $profile_pic;
				$data['is_deleted'] = 0;
				if(isset($data['password_confirmation'])){
					unset($data['password_confirmation']);
				}
				if(isset($data['call_from'])){
					unset($data['call_from']);
				}
				unset($data['submit']);
				$this->User_model->insertRow('users', $data);
				redirect( base_url().'user/'.$redirect, 'refresh');
			} else {
				$this->session->set_flashdata('messagePr', 'You Don\'t have this autherity ' );
				redirect( base_url().'registration', 'refresh');
			}
		}

	}


	/**
	 * This function is used to delete users
	 * @return Void
	 */
	public function delete($id){
		is_login();
		$ids = explode('-', $id);
		foreach ($ids as $id) {
			$this->User_model->delete($id);
		}
		redirect(base_url().'userTable', 'refresh');
	}

	/**
	 * This function is used to send invitation mail to users for registration
	 * @return Void
	 */
	public function InvitePeople() {
		is_login();
		if($this->input->post('emails')){
			$setting = settings();
			$var_key = $this->randomString();
			$emailArray = explode(',', $this->input->post('emails'));
			$emailArray = array_map('trim', $emailArray);
			$body = $this->User_model->get_template('invitation');
			$result['existCount'] = 0;
			$result['seccessCount'] = 0;
			$result['invalidEmailCount'] = 0;
			$result['noTemplate'] = 0;
			if(isset($body->html) && $body->html != '') {
				$body = $body->html;
				foreach ($emailArray as $mailKey => $mailValue) {
					if(filter_var($mailValue, FILTER_VALIDATE_EMAIL)) {
						$res = $this->User_model->get_data_by('users', $mailValue, 'email');
						if(is_array($res) && empty($res)) {
							$link = (string) '<a href="'.base_url().'user/registration?invited='.$var_key.'">Click here</a>';
							$data = array('var_user_email' => $mailValue, 'var_inviation_link' => $link);
							foreach ($data as $key => $value) {
								$body = str_replace('{'.$key.'}', $value, $body);
							}
							if($setting['mail_setting'] == 'php_mailer') {
								$this->load->library("send_mail");
								$emm = $this->send_mail->email('Invitation for registration', $body, $mailValue, $setting);
							} else {
								// content-type is required when sending HTML email
								$headers = "MIME-Version: 1.0" . "\r\n";
								$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
								$headers .= 'From: '.$setting['EMAIL'] . "\r\n";
								$emm = mail($mailValue,'Invitation for registration',$body,$headers);
							}
							if($emm) {
								$darr = array('email' => $mailValue, 'var_key' => $var_key);
								$this->User_model->insertRow('users', $darr);
								$result['seccessCount'] += 1;;
							}
						} else {
							$result['existCount'] += 1;
						}
					} else {
						$result['invalidEmailCount'] += 1;
					}
				}
			} else {
				$result['noTemplate'] = 'No Email Template Availabale.';
			}
		}
		echo json_encode($result);
		exit;
	}

	/**
	 * This function is used to Check invitation code for user registration
	 * @return TRUE/FALSE
	 */
	public function chekInvitation() {
		if($this->input->post('code') && $this->input->post('code') != '') {
			$res = $this->User_model->get_data_by('users', $this->input->post('code'), 'var_key');
			$result = array();
			if(is_array($res) && !empty($res)) {
				$result['email'] = $res[0]->email;
				$result['users_id'] = $res[0]->users_id;
				$result['result'] = 'success';
			} else {
				$this->session->set_flashdata('messagePr', 'This code is not valid..');
				$result['result'] = 'error';
			}
		}
		echo json_encode($result); exit;
	}

	/**
	 * This function is used to registr invited user
	 * @return Void
	 */
	public function register_invited($id){
		$data = $this->input->post();
		$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$data['password'] = $password;
		$data['var_key'] = NULL;
		$data['is_deleted'] = 0;
		$data['status'] = 'active';
		$data['user_id'] = 1;
		if(isset($data['password_confirmation'])) {
			unset($data['password_confirmation']);
		}
		if(isset($data['call_from'])) {
			unset($data['call_from']);
		}
		if(isset($data['submit'])) {
			unset($data['submit']);
		}
		$this->User_model->updateRow('users', 'users_id', $id, $data);
		$this->session->set_flashdata('messagePr', 'Successfully Registered..');
		redirect( base_url().'user/login', 'refresh');
	}

	/**
	 * This function is used to check email is alredy exist or not
	 * @return TRUE/FALSE
	 */
	public function checEmailExist() {
		$result = 1;
		$res = $this->User_model->get_data_by('users', $this->input->post('email'), 'email');
		if(!empty($res)){
			if($res[0]->users_id != $this->input->post('uId')){ $result = 0; }
		}
		echo $result; exit;
	}

	/**
	 * This function is used to Generate a token for varification
	 * @return String
	 */
	public function generate_token(){
		$alpha = "abcdefghijklmnopqrstuvwxyz";
		$alpha_upper = strtoupper($alpha);
		$numeric = "0123456789";
		$special = ".-+=_,!@$#*%<>[]{}";
		$chars = $alpha . $alpha_upper . $numeric ;
		$up_lp_char = $alpha . $alpha_upper .$special;
		$chars = str_shuffle($chars);
		return substr($chars, 10,10).strtotime("now").substr($up_lp_char, 8,8);
	}

	/**
	 * This function is used to Generate a random string
	 * @return String
	 */
	public function randomString(){
		$alpha = "abcdefghijklmnopqrstuvwxyz";
		$alpha_upper = strtoupper($alpha);
		$numeric = "0123456789";
		$chars = $alpha . $alpha_upper . $numeric;
		$chars = str_shuffle($chars);
		return substr($chars, 8,8);
	}



	function remove($id)
    {
        $podcast = $this->User_model->get_user($id);

        // check if the organisation exists before trying to delete it
        if(isset($podcast['users_id']))
        {
            $this->User_model->delete_user($id);
            redirect($_SERVER['HTTP_REFERER']);
        }
        else
            show_error('The organisation you are trying to delete does not exist.');
    }
}
