<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_welcome extends CI_Model{
    function get_all(){
        return $this->db->order_by('timestamp','desc')->get('post');
    }
/*    function get_user($user_id){
        return $this->db->get_where('user',$user_id)->result();
    }
    
    $this->db->order_by('birth_date', 'ASC')->get_where($this->tbl_name, $where);
*/
}