<?php

class Makes_model extends Common_model {

    public function __construct() {
        parent::__construct();
        $this->table_name = "makes";
    }

    public function add_new() {
        $title = $this->input->post('title');
        $title = trim($title);
        if (!empty($title)) {
            if (!$this->Makes_model->is_already_exist(array("title" => $title))) {
                $token = md5(uniqid() . microtime() . rand());
                $insert_data = array(
                    'title' => $title,
                    'created_at' => $this->today_datetime
                );
                $result = $this->Makes_model->save($insert_data);
                if ($result) {
                    $this->session->set_flashdata('message',"Save successfully.");
                    return true;
                }
                $this->session->set_flashdata('message', ERROR_MESSAGE . ": Something went wrong");
                return false;
            } else {
                 $this->session->set_flashdata('message', ERROR_MESSAGE . ": This make already exists");
                return false;
            }
        } else {
             $this->session->set_flashdata('message', ERROR_MESSAGE . ": Make title is empty");
            return false;
        }
    }

}
