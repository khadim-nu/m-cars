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
            
            $data['cars'] = $this->Cars_model->get_all_join(FALSE,4,0);
            
            $data['title'] = 'Car Details';
            $this->load->view('cars/car_details', $data);
        } else {
            show_404();
        }
    }

    public function buy() {
        if (is_admin()) {
            redirect('admin');
        } else {
            $data['title'] = "Buy";
            $data['cars'] = $this->Cars_model->get_all_join(FALSE,4,0);
            $this->load->view('cars/buy', $data);
        }
    }

    public function sell() {
        if (is_admin()) {
            redirect('admin');
        } else {
            $data['title'] = "Sell";
            $data['cars'] = $this->Cars_model->get_all_join(FALSE,4,0);
            $this->load->view('cars/sell', $data);
        }
    }

    public function source() {
        if (is_admin()) {
            redirect('admin');
        } else {
            $data['title'] = "Source";
            $data['cars'] = $this->Cars_model->get_all_join(FALSE,4,0);
            $this->load->view('cars/source', $data);
        }
    }

}
