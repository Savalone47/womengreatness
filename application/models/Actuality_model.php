<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Actuality_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get actuality by actuality_id
     */
    function get_actuality($actuality_id)
    {
        return $this->db->get_where('actuality',array('actuality_id'=>$actuality_id))->row_array();
    }
    
    /*
     * Get all actuality count
     */
    function get_all_actuality_count()
    {
        $this->db->from('actuality');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all actuality
     */
    function get_all_actuality($params = array())
    {
        $this->db->order_by('actuality_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('actuality')->result_array();
    }
        
    /*
     * function to add new actuality
     */
    function add_actuality($params)
    {
        $this->db->insert('actuality',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update actuality
     */
    function update_actuality($actuality_id,$params)
    {
        $this->db->where('actuality_id',$actuality_id);
        return $this->db->update('actuality',$params);
    }
    
    /*
     * function to delete actuality
     */
    function delete_actuality($actuality_id)
    {
        return $this->db->delete('actuality',array('actuality_id'=>$actuality_id));
    }
}
