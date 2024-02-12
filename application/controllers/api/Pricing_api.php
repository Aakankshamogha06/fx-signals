<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class pricing_api extends REST_Controller
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
        $this->load->model('admin/Pricing_features_model', 'Pricing_features_model');
    }




    public function pricing_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->Pricing_features_model->pricing_features_view($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function pricing_by_id_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->Pricing_features_model->pricing($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    
}
?>