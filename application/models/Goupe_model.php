<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Goupe_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get goupe by id
     */
    function get_goupe($id)
    {
        return $this->db->get_where('goupe',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all goupe count
     */
    function get_all_goupe_count()
    {
        $this->db->from('goupe');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all goupe
     */
    function get_all_goupe($params = array())
    {
        $this->db->order_by('id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('goupe')->result_array();
    }


	function get_groupe_of_user($id_user){

		$this->db->where('id',$id_user);
		return $this->db->get('goupe')->result_array();
	}
        
    /*
     * function to add new goupe
     */
    function add_goupe($params)
    {
        $this->db->insert('goupe',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update goupe
     */
    function update_goupe($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('goupe',$params);
    }
    
    /*
     * function to delete goupe
     */
    function delete_goupe($id)
    {
        return $this->db->delete('goupe',array('id'=>$id));
    }


    /*
     * Get count groups by organisations
     */

    function getCountGroupByOrganisation(){

        $this->db->join('organisation', "organisation.id=goupe.id");
        $this->db->group_by('organisation.id');
        return $this->db->get('goupe')->num_rows();

    }
    /*
     * Get groups by organisations
     */

    function getGroupByOrganisation($params = array()){

        $this->db->join('organisation', 'organisation.id=goupe.id_organisation');
        $this->db->group_by('goupe.id_organisation');

        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('goupe')->result();
    }

    function getListGroupByOrg($org_id){

         return $this->db->get_where('goupe', array('goupe.id_organisation' => $org_id))->result();
    }

    function getCountadvocBygroup(){
        $this->db->join('users', 'users.users_id = groupe_user.id_user');

        return $this->db->get('groupe_user')->num_rows();
    }

     function getListadvocBygroup(){
        $this->db->select('groupe_user.id, users.users_id, groupe_user.id_group, users.name, users.email, goupe.nom_groupe');
        $this->db->join('users', 'users.users_id = groupe_user.id_user');
        $this->db->join('goupe', 'goupe.id = groupe_user.id_group');
        return $this->db->get('groupe_user')->result();
    }

    function getAdvocateListByGroup($group_id){
        $this->db->join('users', 'users.users_id = groupe_user.id_user');
        return $this->db->get_where('groupe_user', array('groupe_user.id' => $group_id))->result();
    }
}
