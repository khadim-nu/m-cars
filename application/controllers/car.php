<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Car extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Cars_model');
    }

    public function index() {
        redirect('admin/buy');
    }

    public function car_details($id) {
        $cars = $this->Cars_model->get_all_join(" c.id = $id");
        if (!empty($cars)) {
            $car = $cars[0];
            $this->load->model('Features_model');
            $feature = $this->Features_model->get_single("id", $car['feature_id']);
            $this->load->model('Images_model');
            $images = $this->Images_model->get_all_custom_where(array("car_id" => $car['id']));

            $data['car'] = $car;
            $data['feature'] = $feature;
            $data['images'] = $images;

            $data['cars'] = $this->Cars_model->get_all_join(FALSE, 4, 0);

            $data['title'] = 'Car Details';
            $this->load->view('cars/car_details', $data);
        } else {
            show_404();
        }
    }

    public function buy() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
           
        } else {
            $data['title'] = "Buy";

            $this->load->model('Models_model');
            $this->load->model('Makes_model');
            $data['makes'] = $this->Makes_model->get_all(FALSE, FALSE, "created_at");
            $data['models'] = $this->Models_model->get_all(FALSE, FALSE, "created_at");

            $data['cars'] = $this->Cars_model->get_all_join(FALSE, 4, 0);
            $this->load->view('cars/buy', $data);
        }
    }

    public function sell() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
             $this->load->model('Requests_model');
            if ($result = $this->Requests_model->save_request(SELL_REQUESTS)) {
                redirect("welcome/thanks");
            } else {
                redirect("car/sell");
            }
        } else {
            $data['title'] = "Sell";
            $this->load->model('Models_model');
            $this->load->model('Makes_model');
            $data['makes'] = $this->Makes_model->get_all(FALSE, FALSE, "created_at");
            $data['models'] = $this->Models_model->get_all(FALSE, FALSE, "created_at");

            $data['cars'] = $this->Cars_model->get_all_join(FALSE, 4, 0);
            $this->load->view('cars/sell', $data);
        }
    }

    public function source() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $this->load->model('Requests_model');
            if ($result = $this->Requests_model->save_request(SOURCE_REQUESTS)) {
                redirect("welcome/thanks");
            } else {
                redirect("car/sell");
            }
        } else {
            $data['title'] = "Source";
            
             $this->load->model('Models_model');
            $this->load->model('Makes_model');
            $data['makes'] = $this->Makes_model->get_all(FALSE, FALSE, "created_at");
            $data['models'] = $this->Models_model->get_all(FALSE, FALSE, "created_at");
            
            $data['cars'] = $this->Cars_model->get_all_join(FALSE, 4, 0);
            $this->load->view('cars/source', $data);
        }
    }

    public function contact_to_buy() {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $car_id = $this->input->post('car_id');
            $email_data['subject'] = "Buy Request";
            $contact_details = array("car_id" => $car_id, "name" => $this->input->post("name"), "email" => $this->input->post("email"), "phone" => $this->input->post("phone"), "comment" => $this->input->post("message"), "status" => 1);
            $email_data['body'] = $this->load->view("email_templates/buy_request", $contact_details, TRUE);
            $this->load->model("Buy_requests_model");
            $this->Buy_requests_model->save($contact_details);
            send_mail($email_data);
            $data['title'] = "Thanks!";
            $data['car_id'] = $car_id;
            $this->load->view('cars/thanks', $data);
        } else {
            redirect('welcome');
        }
    }

}
