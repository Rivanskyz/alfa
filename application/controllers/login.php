<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }
    function index(){
        $this->load->view('v_login');
    }
    function cek(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','trim|required|xss_clean|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required|md5');
        
        $email=$this->input->post('email');
        $password=md5($this->input->post('password'));
        
        $data=array(
            'user_email'=>$email,
            'password'=>$password);
        
        if($this->form_validation->run()==false){
            $cek=$this->m_login->cek($data);
            $data=$this->m_login->data($data);
            if($cek>0){
                $session=array(
                'user_id'=>$data[0]->user_id,
                'nama'=>$data[0]->first_name,
                'status'=>'login');
                $this->session->set_userdata($session);
                redirect('user/index');
            }else{
                redirect('login/index/login_error');
            }
        }else{
            redirec('login/index/login_failed');
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('welcome');
    }
    function register(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name','Nama Depan','required');
        $this->form_validation->set_rules('last_name','Nama Belakang','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if($this->form_validation->run()=="true"){
        $data=array(
        'first_name'=>$this->input->post('first_name'),
        'last_name'=>$this->input->post('last_name'),
        'password'=>md5($this->input->post('password')),
        'user_email'=>$this->input->post('email'));
        $this->m_login->register($data);
        redirect('login');
        }else{
            $this->load->view('v_register');
        }
    }
}