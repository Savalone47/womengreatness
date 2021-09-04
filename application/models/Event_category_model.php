<?php 
	class Event_category_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function get_Event_category($ev_cat_id = false){
			if ($ev_cat_id === false) {
				$this->db->order_by('ev_cat_name', 'ASC');
				$query=$this->db->get('event_category');
				return $query->result_array();
			}
		}
	}
?>
