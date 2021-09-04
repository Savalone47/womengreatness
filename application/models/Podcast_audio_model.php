<?php
class Podcast_audio_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_podcast($pod_id = false){
		if ($pod_id === false) {
			$this->db->order_by('pod_id', 'DESC');
			$query=$this->db->get('podcast');
			return $query->result_array();
		}
		$this->db->join('pod_categorie', 'pod_categorie.pod_cate_id = podcast.pod_cate_id ');
		$query=$this->db->get_where('podcast', array('pod_id'=>$pod_id ));
		return $query->result();
	}


	public function get_podcast_audio($pod_id = false){ //get_event_user

		if ($pod_id === false) {
			$this->db->order_by('pod_id', 'DESC');
			$query=$this->db->get('podcast');
			return $query->result_array();
		}
		$this->db->join('pod_categorie', 'pod_categorie.pod_cate_id = podcast.pod_cate_id ');
		$query=$this->db->get_where('event', array('pod_id'=>$pod_id ));
		return $query->result();
	}

	public function create_podcast(){ // create_event
		$param=array(
			'pod_title'		 =>$this->input->post('pod_title'),
			'pod_auteur' 	 =>$this->input->post('pod_auteur'),
			'pod_cate_id'	 =>$this->input->post('pod_cate_id'),
			'pod_file' 		 =>$this->input->post('pod_file'),
			'pod_image'       =>$this->input->post('pod_image'),
		);

		$podcast_category = $this->input->post('pod_cate_nom');

		$config['upload_path'] = './upload/';
		$config['allowed_types'] = '*';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('pod_image')) {
			$album_image = $this->upload->data("file_name");
		} else {
			die();
		}

		$this->db->insert('pod_categorie', [
			'pod_cate_id' => '',
			'pod_cate_nom' => $podcast_category,
			'pod_cate_description' => $album_image
		]);
		return $this->db->insert('podcast', $param);
	}


	public function edit_podcast(){ //edit_event
		$param=array(
			'pod_title'		 =>$this->input->post('pod_title'),
			'pod_auteur' 	 =>$this->input->post('pod_auteur'),
			'pod_cate_id'	 =>$this->input->post('pod_cate_id'),
			'pod_file' 		 =>$this->input->post('pod_file'),
			'pod_image'       =>$this->input->post('pod_image'),
		);;
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = '*';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('pod_image')) {
			$this->upload->data("file_name");
		} else {
			die();
		}
		$this->db->where('pod_id',$this->input->post('pod_id'));
		return $this->db->update('podcast', $param);
	}

	public function delete($pod_id){
		return $this->db->delete('podcast',array('pod_id'=>$pod_id));
	}
}
?>
