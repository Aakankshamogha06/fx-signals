<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class forecast_api extends REST_Controller
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
        $this->load->model('admin/forecast_model', 'forecast_model');
    }




    public function forecast_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->forecast_model->forecast_view($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function forecast_by_id_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->forecast_model->forecast($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function forecast_by_type_get()
    {
        $category_name = $this->uri->segment(4);
        if (empty($category_name)) {
            $this->response(['error' => 'Type name is required'], REST_Controller::HTTP_BAD_REQUEST);
            return;
        }
        $forecastData = $this->forecast_model->forecast_by_type_name($category_name);
        if ($forecastData) {
            $this->response($forecastData, REST_Controller::HTTP_OK);
        } else {
            $this->response(['error' => 'No forecast found for the specified category'], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
?>