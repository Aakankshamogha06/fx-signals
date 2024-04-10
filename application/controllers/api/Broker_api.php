<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class broker_api extends REST_Controller
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
        $this->load->model('admin/broker_model', 'broker_model');
    }




    public function broker_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->broker_model->broker_view($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function broker_by_id_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->broker_model->broker($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function broker_by_type_get()
    {
        $category_name = $this->uri->segment(4);
        if (empty($category_name)) {
            $this->response(['error' => 'Type name is required'], REST_Controller::HTTP_BAD_REQUEST);
            return;
        }
        $brokerData = $this->broker_model->broker_by_type_name($category_name);
        if ($brokerData) {
            $this->response($brokerData, REST_Controller::HTTP_OK);
        } else {
            $this->response(['error' => 'No broker found for the specified category'], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function broker_detail_get()
    {
        // $id = $this->uri->segment(4);
        $data = $this->broker_detail_model->broker_detail();
        $this->response($data, REST_Controller::HTTP_OK);
    }
}
?>