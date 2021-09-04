<?php
class Stori_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_story($ev_id = false){
		if ($ev_id === false) {
			$this->db->order_by('stori_id', 'DESC');
			$query=$this->db->get('story');
			return $query->result_array();
		}
		$this->db->join('story_category', 'story_category.stori_cat_id = story.stori_cat_id ');
		$query=$this->db->get_where('story', array('stori_id'=>$ev_id ));
		return $query->result();
	}


	public function get_story_user($ev_id = false){
		if ($ev_id === false) {
			$this->db->order_by('story_id', 'DESC');
			$query=$this->db->get('story');
			return $query->result_array();
		}
		$this->db->join('story_category', 'story_category.stori_cat_id = story.stori_cat_id ');
		$query=$this->db->get_where('story', array('story_id'=>$ev_id ));
		return $query->result();
	}

	public function create_story(){
		$param=array(
			'stori_title'		 =>$this->input->post('stori_title'),
			'stori_description' =>$this->input->post('stori_description'),
			'stori_cat_id'		 =>$this->input->post('stori_cat_id'),
			'stori_date' 		 =>$this->input->post('stori_date'),
		);
		//Debut de l'Uploader la photo
		$config['upload_path']   = './assets/images/events/';
		$config['allowed_types'] = 'gif|jpg|png';

		//Nouveau nom de la photo
		$new_file_name = date('d-m-y h:i:s');
		$new_file_name = str_replace(array("-", ":", " "), '', $new_file_name);
		$config['file_name'] = $new_file_name.".jpg";

		$this->load->library('upload', $config);
		$param['stori_picture']= $new_file_name.".jpg";

		if ( ! $this->upload->do_upload('ev_picture')){
			$param['stori_picture']='nopicture.png';
		}
		//Fin Upload
		return $this->db->insert('story', $param);
	}

	public function edit_story(){
		$param = array(
			'stori_title'		 =>$this->input->post('stori_title'),
			'stori_description' =>$this->input->post('stori_description'),
			'stori_cat_id'		 =>$this->input->post('stori_cat_id'),
			'stori_date' 		 =>$this->input->post('stori_date'),
			'ev_price'       =>$this->input->post('stori_price'),
		);
		//Debut de l'Uploader la photo
		$config['upload_path']   = './assets/images/events/';
		$config['allowed_types'] = 'gif|jpg|png';

		//Nouveau nom de la photo
		$new_file_name = date('d-m-y h:i:s');
		$new_file_name = str_replace(array("-", ":", " "), '', $new_file_name);
		$config['file_name'] = $new_file_name.".jpg";

		$this->load->library('upload', $config);
		$param['stori_picture']= $new_file_name.".jpg";

		if ( ! $this->upload->do_upload('ev_picture')) {
			$param['stori_picture']=$this->input->post('stori_picture_old');
		}

		//Fin Upload
		$this->db->where('stori_id',$this->input->post('stori_id'));
		return $this->db->update('story', $param);
	}

	public function delete($ev_id){
		return $this->db->delete('story',array('stori_id'=>$ev_id));
	}
}
?>
