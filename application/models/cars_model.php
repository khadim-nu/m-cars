<?php

class Cars_model extends Common_model {

    public function __construct() {
        parent::__construct();
        $this->table_name = "cars";
    }

    public function add_new() {
        $this->load->library('form_validation');
        if ($this->form_validation->run('add-car') == FALSE) {
            $this->session->set_flashdata('message', ERROR_MESSAGE . ":" . validation_errors());
            return FALSE;
        }
        $features_list="";
        $features_count=$this->input->post('feature_count');
        if($features_count>0){
            for($f=1;$f<=$features_count;$f++){
                if(!empty($features_list))
                    $features_list .=",";
                $features_list .=$this->input->post('feature_'.$f);
            }
        }
        $features=array(
            "list"=>$features_list,
           "desc" => trim($this->input->post('desc'))
        );
        $this->load->model('Features_model');
        $feature_id = $this->Features_model->save($features);
        $attributes = array(
            "year" => $this->input->post('year'),
            "mileage" => $this->input->post('mileage'),
            "style" => $this->input->post('style'),
            "estate" => $this->input->post('estate'),
            "transmission" => $this->input->post('transmission'),
            "speed" => $this->input->post('speed'),
            "engine_size" => $this->input->post('engine_size'),
            "fuel" => $this->input->post('fuel'),
            "no_of_owners" => $this->input->post('no_of_owners'),
            "color" => $this->input->post('color'),
            "doors" => $this->input->post('doors')
        );
        $this->load->model('Attributes_model');
        $attribute_id = $this->Attributes_model->save($attributes);
        $insert_data = array(
            'make_id' => $this->input->post('make'),
            'model_id' => $this->input->post('model'),
            'price' => $this->input->post('price'),
            'status' => 1,
            'feature_id' => $feature_id,
            'attribute_id' => $attribute_id,
            'created_at' => $this->today_datetime
        );
        ///////////////////  saving image ///
        $imageData = $this->Cars_model->upload_image('image_url');
        if ($imageData) {
            $insert_data['image_url'] = base_url() . UPLOAD_PATH . $imageData['upload_data']['orig_name'];
        }
        /////////////////////////////////////////////
        $result = $this->Cars_model->save($insert_data);
        if ($result) {
            $this->session->set_flashdata('message', "Saved successfully.");
            return true;
        }
        $this->session->set_flashdata('message', ERROR_MESSAGE . ": Something went wrong");
        return false;
    }

    public function get_all_cars() {
        $where = "c.status = 1";
        $join_array = array(
            array('table' => 'makes m', 'condition' => 'm.id = c.make_id', 'direction' => 'left'),
            array('table' => 'models model', 'condition' => 'model.id = c.model_id', 'direction' => 'left')
        );
        $cars = $this->fetch_join_multiple_limit(NULL, NULL, ' m.title as make_title, model.title as model_title , c.* ', 'cars c', $join_array, $where, FALSE, 'c.created_at DESC');
        return $cars;
    }

}
