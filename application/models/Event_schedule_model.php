<?php 
	class Event_schedule_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function get_event_schedule($ev_id = false){
			if ($ev_id === false) {
				$query=$this->db->get('schedule');
				return $query->result_array();
			}
			$query=$this->db->get_where('schedule', array('ev_id ' => $ev_id ));
			return $query->result_array();
		}

		public function get_one_schedule($sche_id){
			$query=$this->db->get_where('schedule', array('sche_id' => $sche_id ));
			return $query->row_array();
		}

		public function create_schedule(){
			$param= array(
				'ev_id'			 =>	$this->input->post('ev_id'),
				'sche_date'      =>	$this->input->post('sche_date'),
				'sche_start_time'=> $this->input->post('sche_start_time'),
				'sche_end_time'  => $this->input->post('sche_end_time'),
				'sche_header'	 => $this->input->post('sche_header'),
				'sche_title'	 => $this->input->post('sche_title'),
				'faci_id'		 =>	$this->input->post('faci_id')
			);
			return $this->db->insert('schedule', $param);		
		}

		public function edit_schedule(){
			$param= array(
				'sche_date'      =>	$this->input->post('sche_date'),
				'sche_start_time'=> $this->input->post('sche_start_time'),
				'sche_end_time'  => $this->input->post('sche_end_time'),
				'sche_header'	 => $this->input->post('sche_header'),
				'sche_title'	 => $this->input->post('sche_title'),
				'faci_id'		 =>	$this->input->post('faci_id')
			);
			$this->db->where('sche_id',$this->input->post('sche_id'));
			return $this->db->update('schedule', $param);
		}
	}
?>