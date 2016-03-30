<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_user');
        if($this->session->userdata('status') != 'login'){redirect('welcome');}
    }
    function index(){
        $this->load->view('user/header');
        $this->load->view('user/sidebar');
        $this->load->view('user/beranda');
        $this->load->view('user/footer');
    }
    function new_post(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        if($this->form_validation->run()=="true"){
        $data=array(
        'user_id'=>$this->session->userdata('user_id'),
        'judul'=>$this->input->post('judul'),
        'alamat'=>$this->input->post('alamat'));
        $this->m_user->new_post($data);
        redirect('user');
        }else{
            $this->load->view('user/header');
            $this->load->view('user/sidebar');
            $this->load->view('user/v_tambah_post');
            $this->load->view('user/footer');
        }

    }
}