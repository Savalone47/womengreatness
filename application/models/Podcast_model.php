<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Podcast_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get secteur by id
     */
    function get_ressource($id)
    {
        return $this->db->get_where('podcasts',array('podcast_id'=>$id))->row_array();
    }
    
    /*
     * Get all secteur count
     */
    function get_all_ressource_count()
    {
    	$this->db->from("podcasts");
        return $this->db->count_all_results();
    }
        
    /*
     * Get all secteur
     */
    function get_all_ressource($params = array())
    {
        $this->db->order_by('podcast_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('podcasts')->result_array();
    }


	function get_all_ressource_with_object()
    {
    
        return $this->db->get('podcasts')->result();
    }
	
        
    /*
     * function to add new secteur
     */
    function add_ressource($params)
    {
        $this->db->insert('podcasts',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update secteur
     */
    function update_ressource($id,$params)
    {
        $this->db->where('podcast_id',$id);
        return $this->db->update('podcasts',$params);
    }
    
    /*
     * function to delete secteur
     */
    function delete_ressource($id)
    {
        return $this->db->delete('podcasts',array('podcast_id'=>$id));
    }
}
