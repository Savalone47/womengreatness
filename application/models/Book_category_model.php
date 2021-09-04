<?php
class Book_category_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_category($bo_cat_id = FALSE){
		if ($bo_cat_id === FALSE) {
			$this->db->order_by('bo_cat_name', 'ASC');
			$query = $this->db->get('book_category');
			return $query->result_array();
		}
		$query = $this->db->get_where('book_category', array('bo_cat_id' => $bo_cat_id));
		return $query->row_array();
	}
}
?>