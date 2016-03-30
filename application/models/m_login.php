<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_login extends CI_Model{
    function cek($data){
        return $this->db->get_where('user',$data)->num_rows();
    }
    function data($data){
        return $this->db->get_where('user',$data)->result();
    }
    function register($data){
        $this->db->insert('user',$data);
    }
}