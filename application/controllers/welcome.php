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
            $this->load->view('cars/index'); 
        }
    }

    
    
    public function static_site() {
        header('Location: ' . APP_STATIC_URL);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */