<?php 
class Event_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function get_event($ev_id = false){
			if ($ev_id === false) {
				$this->db->order_by('ev_id', 'DESC');
				$query=$this->db->get_where('event', array('ev_status' => 1));
				return $query->result_array();
			}
			$this->db->join('event_category', 'event_category.ev_cat_id = event.ev_cat_id ');
			$query=$this->db->get_where('event', array('ev_id'=>$ev_id ));
			return $query->result();
		}


		public function get_event_user($ev_id = false){
			if ($ev_id === false) {
				$this->db->order_by('ev_id', 'DESC');
				$query=$this->db->get('event');
				return $query->result_array();
			}
			$this->db->join('event_category', 'event_category.ev_cat_id = event.ev_cat_id ');
			$this->db->join('facilitator', 'facilitator.faci_id = event.ev_faci_id ');
			$query=$this->db->get_where('event', array('ev_id'=>$ev_id ));
			return $query->result();
		}

		public function create_event(){
			$param=array(

				'ev_title'		 =>$this->input->post('ev_title'),
				'ev_description' =>$this->input->post('ev_description'),
				'ev_cat_id'		 =>$this->input->post('ev_cat_id'),
				'ev_date' 		 =>$this->input->post('ev_date'),
				'ev_price'       =>$this->input->post('ev_price'),
				'ev_country' 	 =>$this->input->post('ev_country'),
				'ev_city' 		 =>$this->input->post('ev_city'),
				'ev_place' 		 =>$this->input->post('ev_place'),
				'ev_status'      => 1
			);
			//Debut de l'Uploader la photo
            $config['upload_path']   = './assets/images/events/';
            $config['allowed_types'] = 'gif|jpg|png';

            //Nouveau nom de la photo
            $new_file_name = date('d-m-y h:i:s');
            $new_file_name = str_replace(array("-", ":", " "), '', $new_file_name);
            $config['file_name'] = $new_file_name.".jpg";

            $this->load->library('upload', $config);
            $param['ev_picture']= $new_file_name.".jpg";

            if ( ! $this->upload->do_upload('ev_picture')){
                $param['ev_picture']='nopicture.png';
            }
            //Fin Upload
			return $this->db->insert('event', $param);
		}

		public function edit_event(){
			$param = array(
				'ev_title'		 =>$this->input->post('ev_title'),
				'ev_description' =>$this->input->post('ev_description'),
				'ev_cat_id'		 =>$this->input->post('ev_cat_id'),
				'ev_date' 		 =>$this->input->post('ev_date'),
				'ev_price'       =>$this->input->post('ev_price'),
				'ev_country' 	 =>$this->input->post('ev_country'),
				'ev_city' 		 =>$this->input->post('ev_city'),
				'ev_place' 		 =>$this->input->post('ev_place'),
				'ev_status'       =>$this->input->post('ev_status')
			);
			//Debut de l'Uploader la photo
            $config['upload_path']   = './assets/images/events/';
            $config['allowed_types'] = 'gif|jpg|png';

            //Nouveau nom de la photo
            $new_file_name = date('d-m-y h:i:s');
            $new_file_name = str_replace(array("-", ":", " "), '', $new_file_name);
            $config['file_name'] = $new_file_name.".jpg";

            $this->load->library('upload', $config);
            $param['ev_picture']= $new_file_name.".jpg";

            if ( ! $this->upload->do_upload('ev_picture')) {
                $param['ev_picture']=$this->input->post('ev_picture_old');
            }

            //Fin Upload
			$this->db->where('ev_id',$this->input->post('ev_id'));	
			return $this->db->update('event', $param);
		}

		public function delete($ev_id){
			return $this->db->delete('event',array('ev_id'=>$ev_id));
		}
	}
?>
