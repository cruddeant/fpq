<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class M_contact_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get m_contact by m_con_id
     */
    function get_m_contact($m_con_id)
    {
        return $this->db->get_where('m_contact',array('m_con_id'=>$m_con_id))->row_array();
    }
        
    /*
     * Get all m_contact
     */
    function get_all_m_contact()
    {
        $this->db->order_by('m_con_id', 'desc');
        return $this->db->get('m_contact')->result_array();
    }
        
    /*
     * function to add new m_contact
     */
    function add_m_contact($params)
    {
        $this->db->insert('m_contact',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update m_contact
     */
    function update_m_contact($m_con_id,$params)
    {
        $this->db->where('m_con_id',$m_con_id);
        return $this->db->update('m_contact',$params);
    }
    
    /*
     * function to delete m_contact
     */
    function delete_m_contact($m_con_id)
    {
        return $this->db->delete('m_contact',array('m_con_id'=>$m_con_id));
    }
}
