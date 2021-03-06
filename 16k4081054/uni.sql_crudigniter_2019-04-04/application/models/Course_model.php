<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Course_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get course by ID
     */
    function get_course($ID)
    {
        return $this->db->get_where('course',array('ID'=>$ID))->row_array();
    }
        
    /*
     * Get all course
     */
    function get_all_course()
    {
        $this->db->order_by('ID', 'desc');
        return $this->db->get('course')->result_array();
    }
        
    /*
     * function to add new course
     */
    function add_course($params)
    {
        $this->db->insert('course',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update course
     */
    function update_course($ID,$params)
    {
        $this->db->where('ID',$ID);
        return $this->db->update('course',$params);
    }
    
    /*
     * function to delete course
     */
    function delete_course($ID)
    {
        return $this->db->delete('course',array('ID'=>$ID));
    }
}
