<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index() {
        if (is_admin()) {
            $data['user_role'] = 'admin';
            $data['title'] = 'Dashboard';
            $data['admins_count'] = $this->Admin_model->record_count(array("status" => 1));
            $this->load->model('Cars_model');
            $data['cars_count'] = $this->Cars_model->record_count(array("status" => 1));
            $this->load->model('Requests_model');
            $data['sell_count'] = $this->Requests_model->record_count(array("status" => 1, 'type' => SELL_REQUESTS));
            $data['source_count'] = $this->Requests_model->record_count(array("status" => 1, 'type' => SOURCE_REQUESTS));
            $this->load->view('admin/dashboard', $data);
        } else {
            redirect('admin/login');
        }
    }

    public function login() {
        if (!is_logged_in()) {
            if ($this->input->server('REQUEST_METHOD') === 'POST') {
                if ($this->Admin_model->login()) {
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('form_data', $_POST);
                    redirect('admin/login');
                }
            } else {
                $data['user_role'] = 'admin';
                $data['title'] = 'Admin Login';
                $this->load->view('admin/login', $data);
            }
        } else
            redirect('welcome');
    }

    public function forgot_password() {
        if (!is_admin()) {
            if ($this->input->server('REQUEST_METHOD') === 'POST') {
                if ($this->Admin_model->forgot_password()) {
                    $this->session->set_flashdata('message', "Please check your Email and Login. Thank You.");
                    redirect('admin/login');
                } else {
                    $this->session->set_flashdata('form_data', $_POST);
                    redirect('admin/forgot_password');
                }
            } else {
                $data['user_role'] = 'admin';
                $data['title'] = 'Forgot Password';
                $this->load->view('admin/forgot_password', $data);
                $this->load->view('include/footer');
            }
        } else
            redirect('welcome');
    }

    public function verify_forgot_password($token) {
        if ($this->Admin_model->updatePassword_by_token($token))
            redirect('admin/login');
        else {
            $this->session->set_flashdata('message', ERROR_MESSAGE . ": forgot password Verification failed. Try again.");
            redirect('admin/forgot_password');
        }
    }

    public function changepassword() {
        if (is_admin()) {
            if ($this->input->server('REQUEST_METHOD') === 'POST') {
                if ($this->Admin_model->updatePassword($this->session->userdata('user_data')->name)) {
                    redirect('admin');
                } else {
                    redirect('admin/changepassword');
                }
            } else {
                $data['title'] = 'Change password';
                $this->load->view("admin/change_pwd", $data);
            }
        } else {
            redirect('welcome');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', "Logout Successfully");
        redirect('welcome');
    }

    public function admin_registration() {
        if (is_admin()) {
            if ($this->input->server('REQUEST_METHOD') === 'POST') {
                if ($this->Admin_model->register()) {
                    $this->session->set_flashdata('message', "Registered Successfully");
                    redirect('admin/view_all');
                } else {
                    $this->session->set_flashdata('form_data', $_POST);
                    redirect('admin/admin_registration');
                }
            } else {
                $data['title'] = 'Admin Registration';
                $this->load->view('admin/register', $data);
            }
        } else {
            redirect('welcome');
        }
    }

    public function email_authentication($token) {
        if ($this->Admin_model->update_status($token)) {
            $this->session->set_flashdata('message', "Verified Successfully");
            redirect('admin/login');
        } else {
            $this->session->set_flashdata('message', ERROR_MESSAGE . ": Not Verifed check your email address.");
            redirect('welcome');
        }
    }

    public function view_all() {
        if (is_admin()) {
            $data['data'] = $this->Admin_model->get_all(FALSE, FALSE, "created_at", "id != ", $this->session->userdata('user_data')->id, "role_id != ", 1);
            $data['title'] = 'All Admins';
            $this->load->view('admin/view_admins', $data);
        } else {
            redirect('welcome');
        }
    }

    public function change_status($id, $status) {
        if (is_admin()) {
            $this->Admin_model->change_status($id, $status);
            redirect('admin/view_all');
        } else {
            redirect('welcome');
        }
    }

    public function basic_info() {
        if (is_admin()) {
            $data['title'] = $this->session->userdata('user_data')->name;
            $this->load->view('admin/basic_info', $data);
        } else {
            redirect('welcome');
        }
    }

    public function edit_basic_info() {
        if (is_admin()) {
            if ($this->input->server('REQUEST_METHOD') === 'POST') {
                if ($this->Admin_model->save_basic_info()) {
                    $this->session->set_flashdata('message', "Information Saved");
                    redirect('admin/basic_info');
                } else {
                    redirect('admin/edit_basic_info');
                }
            } else {
                $data['user'] = $this->session->userdata('user_data');
                $data['title'] = 'Edit Basic Info';
                $this->load->view('admin/edit_basic_info', $data);
            }
        } else {
            redirect('welcome');
        }
    }

    public function makes_list() {
        if (is_admin()) {
            $this->load->model('Makes_model');
            $data['data'] = $this->Makes_model->get_all(FALSE, FALSE, "created_at");
            $data['title'] = 'Makes List';
            $this->load->view('admin/makes_list', $data);
        } else {
            redirect('welcome');
        }
    }

    public function add_make() {
        if (is_admin()) {
            $this->load->model('Makes_model');
            if ($this->input->server('REQUEST_METHOD') === 'POST') {
                if ($this->Makes_model->add_new()) {
                    redirect('admin/makes_list');
                } else {
                    redirect('admin/add_make');
                }
            } else {
                $data['title'] = 'Add New Make';
                $this->load->view('admin/add_make', $data);
            }
        } else {
            redirect('welcome');
        }
    }

    public function delete_make($id) {
        if (is_admin()) {
            $this->load->model('Makes_model');
            if ($this->Makes_model->remove_record($id)) {
                $this->session->set_flashdata('message', "Make deleted successfully");
            } else {
                $this->session->set_flashdata('message', ERROR_MESSAGE . ":Something Went Wrog");
            }
            redirect('admin/makes_list');
        } else {
            redirect('welcome');
        }
    }

    public function models_list() {
        if (is_admin()) {
            $this->load->model('Models_model');
            $data['data'] = $this->Models_model->get_all(FALSE, FALSE, "created_at");
            $data['title'] = 'Model List';
            $this->load->view('admin/models_list', $data);
        } else {
            redirect('welcome');
        }
    }

    public function add_model() {
        if (is_admin()) {
            $this->load->model('Models_model');
            if ($this->input->server('REQUEST_METHOD') === 'POST') {
                if ($this->Models_model->add_new()) {
                    redirect('admin/models_list');
                } else {
                    redirect('admin/add_model');
                }
            } else {
                $data['title'] = 'Add New Model';
                $this->load->view('admin/add_model', $data);
            }
        } else {
            redirect('welcome');
        }
    }

    public function delete_model($id) {
        if (is_admin()) {
            $this->load->model('Models_model');
            if ($this->Models_model->remove_record($id)) {
                $this->session->set_flashdata('message', "Model deleted successfully");
            } else {
                $this->session->set_flashdata('message', ERROR_MESSAGE . ":Something Went Wrog");
            }
            redirect('admin/models_list');
        } else {
            redirect('welcome');
        }
    }

    public function cars_list() {
        if (is_admin()) {
            $this->load->model('Cars_model');
            $data['data'] = $this->Cars_model->get_all_cars(); //get_all_custom_where(array("status"=>1)," (select title from makes where makes.id = cars.make_id) as make_title  , (select title from models where models.id = cars.model_id) as model_title , cars.*");
            $data['title'] = 'Cars List';
            $this->load->view('admin/cars_list', $data);
        } else {
            redirect('welcome');
        }
    }

    public function car_details($id) {
        if (is_admin()) {
            $this->load->model('Cars_model');
            $car = $this->Cars_model->get_single("id", $id);
            if (!empty($car)) {
                $this->load->model('Features_model');
                $feature = $this->Features_model->get_single("id", $car->feature_id);
                $this->load->model('Attributes_model');
                $attribute = $this->Attributes_model->get_single("id", $car->attribute_id);
                $data['car'] = $car;
                if (!empty($feature))
                    $data['feature'] = $feature;
                if (!empty($attribute))
                    $data['attribute'] = $attribute;
                $data['title'] = 'Car Details';
                $this->load->view('admin/car_details', $data);
            }
        } else {
            redirect('welcome');
        }
    }

    public function add_new_car() {
        if (is_admin()) {
            $this->load->model('Cars_model');
            if ($this->input->server('REQUEST_METHOD') === 'POST') {
                if ($this->Cars_model->add_new()) {
                    redirect('admin/cars_list');
                } else {
                    redirect('admin/add_new_car');
                }
            } else {
                $this->load->model('Models_model');
                $this->load->model('Makes_model');
                $data['makes'] = $this->Models_model->get_all(FALSE, FALSE, "created_at");
                $data['models'] = $this->Makes_model->get_all(FALSE, FALSE, "created_at");
                $data['title'] = 'Add new car';
                $this->load->view('admin/add-car', $data);
            }
        } else {
            redirect('welcome');
        }
    }

    public function sell_requests() {
        if (is_admin()) {
            $this->load->model('Requests_model');
            $data['data'] = $this->Requests_model->get_all_requests($type = SELL_REQUESTS);
            $data['title'] = 'Sell Requests';
            $this->load->view('admin/sell_requests', $data);
        } else {
            redirect('welcome');
        }
    }

    public function source_requests() {
        if (is_admin()) {
            $this->load->model('Requests_model');
            $data['data'] = $this->Requests_model->get_all_requests($type = SOURCE_REQUESTS);
            $data['title'] = 'Source Requests';
            $this->load->view('admin/source_requests', $data);
        } else {
            redirect('welcome');
        }
    }

}
