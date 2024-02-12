<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class signal_api extends REST_Controller
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
        $this->load->model('admin/Signal_model', 'Signal_model');
    }




    public function signal_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->Signal_model->signal_view($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function signal_by_id_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->Signal_model->signal($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function signal_by_type_get()
    {
        $type_name = $this->uri->segment(4);
        if (empty($type_name)) {
            $this->response(['error' => 'type name is required'], REST_Controller::HTTP_BAD_REQUEST);
            return;
        }
        $signalData = $this->Signal_model->signal_by_type_name($type_name);
        if ($signalData) {
            $this->response($signalData, REST_Controller::HTTP_OK);
        } else {
            $this->response(['error' => 'No signal found for the specified type'], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function signal_by_sub_type_get()
    {
        $sub_type_name = $this->uri->segment(4);
        if (empty($sub_type_name)) {
            $this->response(['error' => 'sub_type name is required'], REST_Controller::HTTP_BAD_REQUEST);
            return;
        }
        $signalData = $this->Signal_model->signal_by_sub_type_name($sub_type_name);
        if ($signalData) {
            $this->response($signalData, REST_Controller::HTTP_OK);
        } else {
            $this->response(['error' => 'No signal found for the specified type'], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function signal_by_title_get()
    {
        $title = $this->uri->segment(4);
        if (empty($title)) {
            $this->response(['error' => 'title name is required'], REST_Controller::HTTP_BAD_REQUEST);
            return;
        }
        $signalData = $this->Signal_model->signal_by_title_name($title);
        if ($signalData) {
            $this->response($signalData, REST_Controller::HTTP_OK);
        } else {
            $this->response(['error' => 'No signal found for the specified title'], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
?>