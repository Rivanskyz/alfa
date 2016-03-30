<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('m_welcome');
    }
    public function index()
	{
        $data['post']=$this->m_welcome->get_all();
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('v_welcome',$data);
		$this->load->view('footer');
	}
}
