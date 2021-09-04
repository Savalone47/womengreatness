<?php
class User_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->user_id = $this->session->get_userdata('user_details')->id ?? '1';
	}

	/**
	 * This function is used authenticate user at login
	 */

	function get_all_user(){

		return  $this->db->get('users')->result_array();
	}

	function get_all_user_of_role($id_role){

		$this->db->where(['user_type'=>$id_role]);
		return $this->db->get('users')->result();
	}


	function auth_user($email,$password) {
		
		$this->db->where(['email'=>$email,'password'=>$password]);
		return $this->db->get('users')->result();
	}

	/**
	 * This function is used to delete user
	 * @param: $id - id of user table
	 */
	function delete($id='') {
		$this->db->where('users_id', $id);
		$this->db->delete('users');
	}

	/**
	 * This function is used to load view of reset password and varify user too
	 */
	function mail_varify() {
		$ucode = $this->input->get('code');
		$this->db->select('email as e_mail');
		$this->db->from('users');
		$this->db->where('var_key',$ucode);
		$query = $this->db->get();
		$result = $query->row();
		if(!empty($result->e_mail)){
			return $result->e_mail;
		}else{
			return false;
		}
	}


	/**
	 * This function is used Reset password
	 */
	function ResetPpassword(){
		$email = $this->input->post('email');
		if($this->input->post('password_confirmation') == $this->input->post('password')){
			$npass = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$data['password'] = $npass;
			$data['var_key'] = '';
			return $this->db->update('users',$data, "email = '$email'");
		}
	}

	/**
	 * This function is used to select data form table
	 */
	function get_data_by($tableName='', $value='', $colum='',$condition='') {
		if((!empty($value)) && (!empty($colum))) {
			$this->db->where($colum, $value);
		}
		$this->db->select('*');
		$this->db->from($tableName);
		$query = $this->db->get();
		return $query->result();
	}

	/**
	 * This function is used to check user is alredy exist or not
	 */
	function check_exists($table='', $colom='',$colomValue=''){
		$this->db->where($colom, $colomValue);
		$res = $this->db->get($table)->row();
		if(!empty($res)){ return false;} else{ return true;}
	}

	/**
	 * This function is used to get users detail
	 */
	function get_users($userID = '') {
		$this->db->where('is_deleted', '0');
		if(isset($userID) && $userID !='') {
			$this->db->where('users_id', $userID);
		} else if($this->session->userdata('user_details')->user_type == '1') {
			$this->db->where('user_type', '1');
		} else {
			$this->db->where('users.users_id !=', '1');
		}
		$result = $this->db->get('users')->result();
		return $result;
	}


	function get_user($user_id)
    {
        return $this->db->get_where('users',array('users_id'=>$user_id))->row_array();
    }


	/**
	 * This function is used to get email template
	 */
	function get_template($code){
		$this->db->where('code', $code);
		return $this->db->get('templates')->row();
	}

	/**
	 * This function is used to Insert record in table
	 */
	public function insertRow($table, $data){
		$this->db->insert($table, $data);
		return  $this->db->insert_id();
	}


	public function insert($params){

		return $this->db->insert('users', $params);
	}

	/**
	 * This function is used to Update record in table
	 */
	public function updateRow($table, $col, $colVal, $data) {
		$this->db->where($col,$colVal);
		$this->db->update($table,$data);
		return true;
	}


	public function get_roles(){

		return $this->db->get('user_role')->result();
	}


	function delete_user($user_id)
    {
        return $this->db->delete('users',array('users_id'=>$user_id));
    }
}
