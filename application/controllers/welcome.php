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
        } else {
            $data['title'] = "M-Cars";
            $this->load->view('cars/index', $data);
        }
    }

    public function contact_us() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $email_data['to'] = "infotecsysltd@gmail.com";
            $email_data['to_name'] = "infotecsysltd";
            $email_data['subject'] = "New Notifications";
            $email_data['body'] = $this->load->view("email_templates/contact_us",array("name"=>  $this->input->post("name"),"email"=>$this->input->post("email"),"phone"=>$this->input->post("phone"),"message"=>$this->input->post("message")),TRUE);
            if (send_mail($email_data)) {
                echo 'Thanks For contacting us';
                redirect("welcome");
            }
        } else {
            if (is_admin()) {
                redirect('admin');
            } else {
                $data['title'] = "Contact-Us";
                $this->load->view('cars/contact_us', $data);
            }
        }
    }

    public function t_and_c() {
        if (is_admin()) {
            redirect('admin');
        } else {
            $data['title'] = "T&C's";
            $this->load->view('cars/t_and_c', $data);
        }
    }

    public function about_us() {
        if (is_admin()) {
            redirect('admin');
        } else {
            $data['title'] = "About-Us";
            $this->load->view('cars/about_us', $data);
        }
    }
    public function payment_options() {
        if (is_admin()) {
            redirect('admin');
        } else {
            $data['title'] = "Payment Options";
            $this->load->view('cars/payment_options', $data);
        }
    }
    public function piece_of_mind() {
        if (is_admin()) {
            redirect('admin');
        } else {
            $data['title'] = "Piece Of Mind";
            $this->load->view('cars/piece_of_mind', $data);
        }
    }

    public function etc() {
        if (is_admin()) {
            redirect('admin');
        } else {
            $data['title'] = "ETC";
            $this->load->view('cars/etc', $data);
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */