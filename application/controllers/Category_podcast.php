<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Category_podcast extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Category_podcast_model');
    } 

    /*
     * Listing of category_blog
     */
    function index()
    {
        $params['limit'] = 20; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('category_blog/index?');
        $config['total_rows'] = $this->Category_podcast_model->get_all_category_blog_count();
        $this->pagination->initialize($config);

        $data['category_podcasts'] = $this->Category_podcast_model->get_all_category_blog($params);
        
		$this->load->view('include/header');
		$this->load->view('podcast/categorie_index', $data);
		$this->load->view('include/footer');
    }

    /*
     * Adding a new category_blog
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('category_name','Category Name','required|max_length[250]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'pod_cate_nom' => $this->input->post('category_name'),
            );
            
            $category_blog_id = $this->Category_podcast_model->add_category_blog($params);
            redirect('Category_podcast/index');
        }
        else
        {            
			$this->load->view('include/header');
			$this->load->view('podcast/categorie_add');
			$this->load->view('include/footer');
        }
    }  

    /*
     * Editing a category_blog
     */
    function edit($category_id)
    {   
        // check if the category_blog exists before trying to edit it
        $data['category_podcast'] = $this->Category_podcast_model->get_category_blog($category_id);
        
        if(isset($data['category_podcast']['pod_cate_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('category_name','Category Name','required|max_length[250]');
			
			if($this->form_validation->run())     
            {   
                $params = array(
					'pod_cate_nom' => $this->input->post('category_name'),
				);
				

                $this->Category_podcast_model->update_category_blog($category_id,$params);            
                redirect('category_podcast/index');
            }
            else
            {
                $this->load->view('include/header');
				$this->load->view('podcast/categorie_edit',$data);
				$this->load->view('include/footer');
            }
        }
        else
            show_error('The category_blog you are trying to edit does not exist.');
    } 

    /*
     * Deleting category_blog
     */
    function remove($category_id)
    {
        $category_blog = $this->Category_podcast_model->get_category_blog($category_id);

        // check if the category_blog exists before trying to delete it
        if(isset($category_blog['category_id']))
        {
            $this->Category_podcast_model->delete_category_blog($category_id);
            redirect('category_blog/index');
        }
        else
            show_error('The category_blog you are trying to delete does not exist.');
    }
    
}