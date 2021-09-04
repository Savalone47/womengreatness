<?php 
	class Issue_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function get_issue($is_id = false){
			if ($is_id===false) {
				$query= $this->db->get_where('issue', array('is_status' => 1));
				return $query->result_array();
			}
			$query = $this->db->get_where('issue', array('is_id'=> $is_id));
			return $query->row_array();
		}

		public function create_issue(){
			$param = array(
				'is_title' => $this->input->post('is_title'),
				'is_description' => $this->input->post('is_description'),
			);
			//Debut de l'Uploader la photo
            $config['upload_path']   = './assets/images/issues/';
            $config['allowed_types'] = 'gif|jpg|png';

            //Nouveau nom de la photo
            $new_file_name = date('d-m-y h:i:s');
            $new_file_name = str_replace(array("-", ":", " "), '', $new_file_name);
            $config['file_name'] = $new_file_name.".jpg";


            $this->load->library('upload', $config);

            $param['is_picture']= $new_file_name.".jpg";
            if ( ! $this->upload->do_upload('is_picture'))
            {
                $param['is_picture']='nopicture.png';
            }
            //Fin Upload
                 
       
            
			return $this->db->insert('issue', $param);

		}

		public function edit_issue(){
			$param = array(
				'is_title' => $this->input->post('is_title'),
				'is_description' => $this->input->post('is_description'),
			);

			//Debut de l'Uploader la photo
            $config['upload_path']   = './assets/images/issues/';
            $config['allowed_types'] = 'gif|jpg|png';

            //Nouveau nom de la photo
            $new_file_name = date('d-m-y h:i:s');
            $new_file_name = str_replace(array("-", ":", " "), '', $new_file_name);
            $config['file_name'] = $new_file_name.".jpg";


            $this->load->library('upload', $config);

            $param['is_picture']= $new_file_name.".jpg";
            if ( ! $this->upload->do_upload('is_picture'))
            {
                $param['is_picture']=$this->input->post('is_picture_old');
            }
            //Fin Upload

			$this->db->where('is_id',$this->input->post('is_id'));	
			return $this->db->update('issue', $param);
		}
	}
?>