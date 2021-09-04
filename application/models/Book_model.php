<?php 
	class Book_model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function get_book($bo_id = false){
			if ($bo_id===false) {
				$this->db->order_by('bo_title', 'ASC');
				$this->db->join('book_category', 'book_category.bo_cat_id = book.bo_cat_id');
				$query= $this->db->get('book');
				return $query->result_array();
			}
			$this->db->join('book_category', 'book_category.bo_cat_id = book.bo_cat_id');
			$query = $this->db->get_where('book', array('bo_id'=> $bo_id));
			return $query->result();
		}

		public function get_recent_book($nb){
			$this->db->order_by('bo_id', 'DESC');
			$this->db->join('book_category', 'book_category.bo_cat_id = book.bo_cat_id');
			$this->db->limit($nb);
			$query= $this->db->get_where('book', array('bo_status' => 1));
			return $query->result_array();
		}


		public function get_book_by_categorie($bo_cat_id){
			$this->db->join('book_category', 'book_category.bo_cat_id = book.bo_cat_id');
			$query = $this->db->get_where('book', array('book_category.bo_cat_id'=> $bo_cat_id));
			return $query->result_array();
		}


		public function create_book(){
			$param=array(
				'bo_title'  => $this->input->post('bo_title'),
				'bo_cat_id'  => $this->input->post('bo_cat_id'),
				'bo_author'  => $this->input->post('bo_author'),
				'bo_pub_house'  => $this->input->post('bo_pub_house'),
				'bo_pub_date'  => $this->input->post('bo_pub_date'),
				'bo_description'  => $this->input->post('bo_description'),
				'bo_access' => $this->input->post('bo_access'),
				'bo_price'  => $this->input->post('bo_price'),
			);
			//Debut de l'Uploader la photo
            $config['upload_path']   = './assets/images/books/';
            $config['allowed_types'] = 'gif|jpg|png';

            //Nouveau nom de la photo
            $new_file_name = date('d-m-y h:i:s');
            $new_file_name = str_replace(array("-", ":", " "), '', $new_file_name);
            $config['file_name'] = $new_file_name.".jpg";


            $this->load->library('upload', $config);

            $param['bo_picture']= $new_file_name.".jpg";
            if ( ! $this->upload->do_upload('bo_picture'))
            {
                $param['bo_picture']='nopicture.png';
            }
            //Fin Upload
			return $this->db->insert('book', $param);
		}

		public function edit_book(){
			$param = array(
				'bo_title'  => $this->input->post('bo_title'),
				'bo_cat_id'  => $this->input->post('bo_cat_id'),
				'bo_author'  => $this->input->post('bo_author'),
				'bo_pub_house'  => $this->input->post('bo_pub_house'),
				'bo_pub_date'  => $this->input->post('bo_pub_date'),
				'bo_description'  => $this->input->post('bo_description'),				
				'bo_access' => $this->input->post('bo_access'),
				'bo_price'  => $this->input->post('bo_price'),
				'bo_status'	=> $this->input->post('bo_status')
			);
			//Debut de l'Uploader la photo
            $config['upload_path']   = './assets/images/books/';
            $config['allowed_types'] = 'gif|jpg|png';

            //Nouveau nom de la photo
            $new_file_name = date('d-m-y h:i:s');
            $new_file_name = str_replace(array("-", ":", " "), '', $new_file_name);
            $config['file_name'] = $new_file_name.".jpg";


            $this->load->library('upload', $config);

            $param['bo_picture']= $new_file_name.".jpg";
            if ( ! $this->upload->do_upload('bo_picture'))
            {
                $param['bo_picture']= $this->input->post('bo_picture');
            }
            //Fin Upload
			$this->db->where('bo_id', $this->input->post('bo_id'));	
			return $this->db->update('book', $param);
		}	

		public function edit_pdf(){
			//Debut de l'Uploader la photo
            $config['upload_path']   = "pdfReader/external/view/web";
            $config['allowed_types'] = 'pdf';

            //Nouveau nom de la photo
            $new_file_name = date('d-m-y h:i:s');
            $new_file_name = str_replace(array("-", ":", " "), '', $new_file_name);
            $config['file_name'] = $new_file_name;


            $this->load->library('upload', $config);

            $param['bo_file']= $new_file_name.".pdf";
            if ( ! $this->upload->do_upload('bo_file'))
            {
                $param['bo_file']= $this->input->post('bo_picture');
            }
            //Fin Upload
			$this->db->where('bo_id', $this->input->post('bo_id'));	
			return $this->db->update('book', $param);
		}		
	}
?>
