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
            $this->load->model('Attributes_model');
            $attribute = $this->Attributes_model->get_single("id", $car['attribute_id']);
            $this->load->model('Images_model');
            $images = $this->Images_model->get_all_custom_where(array("car_id" => $car['id']));

            $data['car'] = $car;
            $data['feature'] = $feature;
            $data['attribute'] = $attribute;
            $data['images'] = $images;

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
            $this->load->view('cars/buy', $data);
        }
    }

    public function sell() {
        if (is_admin()) {
            redirect('admin');
        } else {
            $data['title'] = "Sell";
            $this->load->view('cars/sell', $data);
        }
    }

    public function source() {
        if (is_admin()) {
            redirect('admin');
        } else {
            $data['title'] = "Source";
            $this->load->view('cars/source', $data);
        }
    }

}
