<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UploadfileModel extends CI_Model {

	public function uploadFile() {

		$config['upload_path'] = './uploads/product/';
		$config['allowed_types'] = '*';
		$config['encrypt_name'] = true;

		$this->load->library('uploads', $config);

		if ($this->upload->do_upload('podcast_file')) {

			return $this->upload->data("file_name");
		}
	}
}
