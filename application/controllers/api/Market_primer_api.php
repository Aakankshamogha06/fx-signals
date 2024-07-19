<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Market_primer_api extends REST_Controller
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
        $this->load->model('admin/market_primer_model', 'market_primer_model');
    }




    public function market_primer_get()
{
    $data = $this->market_primer_model->market_primer();
    
    if (empty($data)) {
        // If no data found, create a response with a message
        $message = "No data found of the Current date...";
        $this->response(['message' => $message], REST_Controller::HTTP_NOT_FOUND);
    } else {
        // If data is found, send the data as response
        $this->response($data, REST_Controller::HTTP_OK);
    }
}

}
?>