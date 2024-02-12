<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class learn_api extends REST_Controller
{

    public function __construct()
    {
        // header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Origin: http://localhost:5173");
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == "OPTIONS") {
            die();
        }
        parent::__construct();
        $this->load->library('Authorization_Token');
        $this->load->model('admin/Auth_model', 'Auth_model');
        $this->load->model('admin/News_model', 'News_model');
        $this->load->model('admin/User_model', 'User_model');
        $this->load->model('admin/learn_model', 'learn_model');
    }




    public function learn_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->learn_model->learn_view($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function learn_by_id_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->learn_model->learn($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function learn_by_type_get()
    {
        $type_name = $this->uri->segment(4);
        if (empty($type_name)) {
            $this->response(['error' => 'type name is required'], REST_Controller::HTTP_BAD_REQUEST);
            return;
        }
        $learnData = $this->learn_model->learn_by_type_name($type_name);
        if ($learnData) {
            $this->response($learnData, REST_Controller::HTTP_OK);
        } else {
            $this->response(['error' => 'No learn found for the specified type'], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function learn_by_title_get()
    {
        $title = $this->uri->segment(4);
        if (empty($title)) {
            $this->response(['error' => 'title name is required'], REST_Controller::HTTP_BAD_REQUEST);
            return;
        }
        $learnData = $this->learn_model->learn_by_title_name($title);
        if ($learnData) {
            $this->response($learnData, REST_Controller::HTTP_OK);
        } else {
            $this->response(['error' => 'No learn found for the specified title'], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
?>