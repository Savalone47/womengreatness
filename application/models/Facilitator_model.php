<?php
class Facilitator_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_faci($faci_id=false){
		if ($faci_id === false) {
			$this->db->order_by('faci_id', 'DESC');
			$query=$this->db->get('facilitator');
			return $query->result();
		}
		$query=$this->db->get_where('facilitator', array('faci_id'=>$faci_id ));
		return $query->result();
	}

	public function get_all_facilitator_count(){
		$this->db->from('facilitator');
		return $this->db->count_all_results();
	}

	function get_all_facilitator($params = array())
	{
		$this->db->order_by('faci_id', 'desc');
		if(isset($params) && !empty($params))
		{
			$this->db->limit($params['limit'], $params['offset']);
		}
		return $this->db->get('facilitator')->result_array();
	}


	function get_all_facilitator_object(){

		return $this->db->get('facilitator')->result();
	}


	public function create_faci(){
		$params = array(
			"faci_name" => $this->input->post('faci_name'),
			"faci_email" => $this->input->post('faci_email'),
			"faci_phone" => $this->input->post('faci_phone'),
			"faci_country" => $this->input->post('faci_country'),
			"faci_organisation" => $this->input->post('faci_organisation'),
			"faci_position" => $this->input->post('faci_position'),
			"faci_picture" => $this->input->post('faci_picture'),
		);

		//Debut de l'Uploader la photo
		$config['upload_path'] = './assets/images/events/';
		$config['allowed_types'] = 'gif|jpg|png';

		//Nouveau nom de la photo
		$new_file_name = date('d-m-y h:i:s');
		$new_file_name = str_replace(array("-", ":", " "), '', $new_file_name);
		$config['file_name'] = $new_file_name . ".jpg";


		$this->load->library('upload', $config);
		$params['faci_picture'] = $new_file_name . ".jpg";

		if (!$this->upload->do_upload('faci_picture')) {
			$params['faci_picture']='nopicture.png';
		}
		return $this->db->insert('facilitator', $params);
	}

	public function edit_faci(){
		$param = array(
			"faci_name" => $this->input->post('faci_name'),
			"faci_email" => $this->input->post('faci_email'),
			"faci_phone" => $this->input->post('faci_phone'),
			"faci_country" => $this->input->post('faci_country'),
			"faci_organisation" => $this->input->post('faci_organisation'),
			"faci_position" => $this->input->post('faci_position'),
			"faci_picture" => $this->input->post('faci_picture'),
		);
		//Debut de l'Uploader la photo
		$config['upload_path']   = './assets/images/facilitators/';
		$config['allowed_types'] = 'gif|jpg|png';

		//Nouveau nom de la photo
		$new_file_name = date('d-m-y h:i:s');
		$new_file_name = str_replace(array("-", ":", " "), '', $new_file_name);
		$config['file_name'] = $new_file_name.".jpg";


		$this->load->library('upload', $config);

		$param['faci_picture']= $new_file_name.".jpg";

		if ( ! $this->upload->do_upload('faci_picture')) {
			$param['faci_picture']=$this->input->post('faci_picture_old');
		}
		$this->db->where('faci_id',$this->input->post('faci_id'));
		return $this->db->update('facilitator', $param);
	}

	public function delete($faci_id){
		return $this->db->delete('facilitator',array('faci_id'=>$faci_id));
	}
}
