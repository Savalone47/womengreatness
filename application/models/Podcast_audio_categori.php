<?php
class Podcast_audio_categori extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function get_podcast_audio_category($pod_cat_id = false){
		if ($pod_cat_id === false) {
			$this->db->order_by('pod_cate_nom', 'ASC');
			$query=$this->db->get('pod_categorie');
			return $query->result_array();
		}
	}
}
?>
