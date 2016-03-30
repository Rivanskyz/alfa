<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_user extends CI_Model{
    function new_post($data){
        $this->db->insert('post',$data);
    }
}