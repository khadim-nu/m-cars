<?php

class Requests_model extends Common_model {

    public function __construct() {
        parent::__construct();
        $this->table_name = "requests";
    }

    public function save_request($type) {
//        $this->load->library('form_validation');
//        if ($this->form_validation->run('add-car') == FALSE) {
//            $this->session->set_flashdata('message', ERROR_MESSAGE . ":" . validation_errors());
//            return FALSE;
//        }
        $features_list = "feature1";
        $features_count = $this->input->post('feature_count');
        if ($features_count > 0) {
            for ($f = 1; $f <= $features_count; $f++) {
                if (!empty($features_list))
                    $features_list .=",";
                $features_list .=$this->input->post('feature_' . $f);
            }
        }
        $features = array(
            "list" => $features_list,
            "desc" => trim($this->input->post('desc'))
        );
        $this->load->model('Features_model');
        $feature_id = $this->Features_model->save($features);
        $price1=0;
        $price2=0;
        $attributes = array(
            "year" => $this->input->post('year'),
            "mileage" => $this->input->post('mileage'),
            "speed" => $this->input->post('speed'),
            "price1" => $price1,
            "price2" => $price2,
            "fuel" => $this->input->post('fuel'),
            "color" => $this->input->post('color'),
            "doors" => $this->input->post('doors'),
            "service" => $this->input->post('service'),
            "condition" => $this->input->post('condition'),
            "registration" => $this->input->post('registration'),
            "min_seats" => $this->input->post('min_seats'),
            "max_seats" => $this->input->post('max_seats')
        );
        $this->load->model('Attributes_model');
        $attribute_id = $this->Attributes_model->save($attributes);


        $insert_data = array(
            'make_id' => $this->input->post('make'),
            'model_id' => $this->input->post('model'),
            'status' => 1,
            'type' => $type,
            'attribute_id' => $attribute_id,
            'feature_id' => $feature_id,
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'comment' => $this->input->post('comment'),
            'created_at' => $this->today_datetime
        );

        $result = $this->Requests_model->save($insert_data);
        if ($result) {
            $this->session->set_flashdata('message', " Sent successfully.");
            return true;
        }
        $this->session->set_flashdata('message', ERROR_MESSAGE . ": Something went wrong");
        return false;
    }

}
