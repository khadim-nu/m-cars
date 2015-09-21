<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if (is_admin()) {
            redirect('admin');
        }
        else{
            $data['title']="M-Cars";
            $this->load->view('cars/index',$data); 
        }
    }
     
    public function contact_us() {
        if (is_admin()) {
            redirect('admin');
        }
        else{
            $data['title']="Contact-Us";
            $this->load->view('cars/contact_us',$data); 
        }
    }
    public function t_and_c() {
        if (is_admin()) {
            redirect('admin');
        }
        else{
            $data['title']="T&C's";
            $this->load->view('cars/t_and_c',$data); 
        }
    }
    public function about_us() {
        if (is_admin()) {
            redirect('admin');
        }
        else{
            $data['title']="About-Us";
            $this->load->view('cars/about_us',$data); 
        }
    }
    public function etc() {
        if (is_admin()) {
            redirect('admin');
        }
        else{
            $data['title']="ETC";
            $this->load->view('cars/etc',$data); 
        }
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */