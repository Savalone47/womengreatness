<?php defined("BASEPATH") OR exit("No direct script access allowed");
class  Podcasts extends CI_controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Podcast_audio_model');
		$this->load->model('Podcast_audio_categori');
	}
	public function index(){
		$data['title']='Latest Podcasts';
		$data['podcasts']=$this->Podcast_audio_model->get_podcast();
		$this->load->view('include/header');
		$this->load->view('podcasts/index', $data);
		$this->load->view('include/footer');
	}

	public function edit($id = NULL){
		$this->form_validation->set_rules('pod_id', 'CODE','required');
		$this->form_validation->set_rules('pod_title', 'Title','required');
		$this->form_validation->set_rules('pod_auteur', 'Auteur','required');
		$this->form_validation->set_rules('pod_cate_id', 'podcast Category','required');
		$this->form_validation->set_rules('pod_file', 'File','required');
		$this->form_validation->set_rules('pod_image', 'Images','');

		$this->load->view('include/header');

		if ($this->form_validation->run()===false) {
			$data['podcasts']=$this->Podcast_audio_model->get_podcast($id);
			if (!empty($data['podcasts'])) {
				$data['title']='Edit Podcasts';
				$data['podcast_categories']=$this->Podcast_audio_categori->get_Event_category();
				$this->load->view('podcasts/edit', $data);
			}
		}
		else{
			$this->Podcast_audio_model->edit_podcast();
			redirect('/Podcasts');
		}
		$this->load->view('include/footer');
	}

	public function view($pod_id = NULL){
		$data['title']='';
		$data['podcasts']=$this->Podcast_audio_model->get_podcast($pod_id);
		$this->load->view('include/header');
		$this->load->view('podcasts/view', $data);
		$this->load->view('include/footer');
	}

	public function create(){
		$this->form_validation->set_rules('pod_id', 'CODE','required');
		$this->form_validation->set_rules('pod_title', 'Title','required');
		$this->form_validation->set_rules('pod_auteur', 'Auteur','required');
		$this->form_validation->set_rules('pod_cate_id', 'podcast Category','required');
		$this->form_validation->set_rules('pod_file', 'File','required');
		$this->form_validation->set_rules('pod_image', 'Images','');

		$data['title']='Add podcast';

		if ($this->form_validation->run()===FALSE) {
			$data['podcast_categories']=$this->Podcast_audio_categori->get_podcast_audio_category();
			$this->load->view('include/header');
			$this->load->view('podcasts/create', $data);
			$this->load->view('include/footer');
		}
		else{
			$this->Podcast_audio_model->create_podcast();
			redirect('/Podcasts');
		}

	}
	function delete($pod_id){
		$data['podcasts']=$this->Podcast_audio_model->get_podcast($pod_id);
		if(isset($data)){
			$this->Podcast_audio_model->delete($pod_id);
			redirect('podcasts/index');
		}else{
			show_error('The event you are trying to delete does not exist.');
		}
	}

	public function audio_podcast(){
		$data['podcasts'] = $this->Podcast_audio_model->get_podcast();
		$this->load->view('Templates/header');
		$this->load->view('podcast/index',$data);
		$this->load->view('Templates/footer');
	}
	public function details_podcast($pod_id){
		$data['podcasts'] = $this->Podcast_audio_categori->get_podcast_audio($pod_id);
		$this->load->view('Templates/header');
		$this->load->view('podcasts/details',$data);
		$this->load->view('Templates/footer');
	}
}
?>
