<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Category_blog extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Category_blog_model');
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
        $config['total_rows'] = $this->Category_blog_model->get_all_category_blog_count();
        $this->pagination->initialize($config);

        $data['category_blog'] = $this->Category_blog_model->get_all_category_blog($params);
        
		$this->load->view('include/header');
		$this->load->view('blog/category_blog/index', $data);
		$this->load->view('include/footer');
    }

    /*
     * Adding a new category_blog
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('category_name','Category Name','required|max_length[250]');
		$this->form_validation->set_rules('category_description','Category Description','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'category_name' => $this->input->post('category_name'),
				'created_at' => $this->input->post('created_at'),
				'category_description' => $this->input->post('category_description'),
            );
            
            $category_blog_id = $this->Category_blog_model->add_category_blog($params);
            redirect('category_blog/index');
        }
        else
        {            
			$this->load->view('include/header');
			$this->load->view('blog/category_blog/add');
			$this->load->view('include/footer');
        }
    }  

    /*
     * Editing a category_blog
     */
    function edit($category_id)
    {   
        // check if the category_blog exists before trying to edit it
        $data['category_blog'] = $this->Category_blog_model->get_category_blog($category_id);
        
        if(isset($data['category_blog']['category_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('category_name','Category Name','required|max_length[250]');
			$this->form_validation->set_rules('category_description','Category Description','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'category_name' => $this->input->post('category_name'),
					'created_at' => $this->input->post('created_at'),
					'category_description' => $this->input->post('category_description'),
                );

                $this->Category_blog_model->update_category_blog($category_id,$params);            
                redirect('category_blog/index');
            }
            else
            {
                $this->load->view('include/header');
				$this->load->view('blog/category_blog/edit',$data);
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
        $category_blog = $this->Category_blog_model->get_category_blog($category_id);

        // check if the category_blog exists before trying to delete it
        if(isset($category_blog['category_id']))
        {
            $this->Category_blog_model->delete_category_blog($category_id);
            redirect('category_blog/index');
        }
        else
            show_error('The category_blog you are trying to delete does not exist.');
    }
    
}
