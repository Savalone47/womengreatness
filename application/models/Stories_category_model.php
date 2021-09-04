<?php
class Stories_category_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function get_story_category($ev_cat_id = false){
		if ($ev_cat_id === false) {
			$this->db->order_by('stori_cat_name', 'ASC');
			$query=$this->db->get('story_category');
			return $query->result_array();
		}
	}
}
?>
