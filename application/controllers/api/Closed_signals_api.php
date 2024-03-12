<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class closed_signals_api extends REST_Controller
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
        $this->load->model('admin/closed_signals_model', 'closed_signals_model');
    }

public function closed_signals_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->closed_signals_model->closed_signals_view($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
}
?>