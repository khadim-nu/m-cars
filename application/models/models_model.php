<?php

class Models_model extends Common_model {

    public function __construct() {
        parent::__construct();
        $this->table_name = "models";
    }
    public function add_new() {
        $title = $this->input->post('title');
        $title = trim($title);
        if (!empty($title)) {
            if (!$this->Models_model->is_already_exist(array("title" => $title))) {
                $token = md5(uniqid() . microtime() . rand());
                $insert_data = array(
                    'title' => $title,
                    'created_at' => $this->today_datetime
                );
                $result = $this->Models_model->save($insert_data);
                if ($result) {
                    $this->session->set_flashdata('message',"Save successfully.");
                    return true;
                }
                $this->session->set_flashdata('message', ERROR_MESSAGE . ": Something went wrong");
                return false;
            } else {
                 $this->session->set_flashdata('message', ERROR_MESSAGE . ": This model already exists");
                return false;
            }
        } else {
             $this->session->set_flashdata('message', ERROR_MESSAGE . ": Model title is empty");
            return false;
        }
    }
}
