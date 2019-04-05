<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Users_group_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get users_group by id
     */
    function get_users_group($id)
    {
        return $this->db->get_where('users_groups',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all users_groups
     */
    function get_all_users_groups()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('users_groups')->result_array();
    }
        
    /*
     * function to add new users_group
     */
    function add_users_group($params)
    {
        $this->db->insert('users_groups',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update users_group
     */
    function update_users_group($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('users_groups',$params);
    }
    
    /*
     * function to delete users_group
     */
    function delete_users_group($id)
    {
        return $this->db->delete('users_groups',array('id'=>$id));
    }
}
