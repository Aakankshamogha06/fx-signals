<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class analysis_api extends REST_Controller
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
        $this->load->model('admin/User_model', 'User_model');
        $this->load->model('admin/analysis_model', 'analysis_model');
    }




    public function analysis_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->analysis_model->analysis_get($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function analysis_by_id_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->analysis_model->analysis($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function analysis_by_type_get()
    {
        $type_name = $this->uri->segment(4);
        if (empty($type_name)) {
            $this->response(['error' => 'type name is required'], REST_Controller::HTTP_BAD_REQUEST);
            return;
        }
        $analysisData = $this->analysis_model->analysis_by_type_name($type_name);
        if ($analysisData !== false) {
            $this->response($analysisData, REST_Controller::HTTP_OK);
        } else {
            $this->response(['error' => 'No analysis found for the specified type'], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
?>