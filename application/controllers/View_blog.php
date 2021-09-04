<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class View_blog extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('View_blog_model');
    } 

    /*
     * Listing of view_blog
     */
    function index()
    {
        $data['view_blog'] = $this->View_blog_model->get_all_view_blog();
        
        $data['_view'] = 'view_blog/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new view_blog
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'view_item_id' => $this->input->post('view_item_id'),
				'create_at' => $this->input->post('create_at'),
            );
            
            $view_blog_id = $this->View_blog_model->add_view_blog($params);
            redirect('view_blog/index');
        }
        else
        {
			$this->load->model('Item_blog_model');
			$data['all_item_blog'] = $this->Item_blog_model->get_all_item_blog();
            
            $data['_view'] = 'view_blog/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a view_blog
     */
    function edit($view_id)
    {   
        // check if the view_blog exists before trying to edit it
        $data['view_blog'] = $this->View_blog_model->get_view_blog($view_id);
        
        if(isset($data['view_blog']['view_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'view_item_id' => $this->input->post('view_item_id'),
					'create_at' => $this->input->post('create_at'),
                );

                $this->View_blog_model->update_view_blog($view_id,$params);            
                redirect('view_blog/index');
            }
            else
            {
				$this->load->model('Item_blog_model');
				$data['all_item_blog'] = $this->Item_blog_model->get_all_item_blog();

                $data['_view'] = 'view_blog/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The view_blog you are trying to edit does not exist.');
    } 

    /*
     * Deleting view_blog
     */
    function remove($view_id)
    {
        $view_blog = $this->View_blog_model->get_view_blog($view_id);

        // check if the view_blog exists before trying to delete it
        if(isset($view_blog['view_id']))
        {
            $this->View_blog_model->delete_view_blog($view_id);
            redirect('view_blog/index');
        }
        else
            show_error('The view_blog you are trying to delete does not exist.');
    }
    
}
