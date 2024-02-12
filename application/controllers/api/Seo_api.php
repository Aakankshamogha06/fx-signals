<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class seo_api extends REST_Controller
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
        $this->load->model('admin/seo_model', 'seo_model');
    }




    public function seo_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->seo_model->seo_view($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function seo_by_id_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->seo_model->seo($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function seo_by_page_get()
    {
        $category_name = $this->uri->segment(4);
    
        // Validate category_name
        if (empty($category_name)) {
            $this->response(['error' => 'Category name is required'], REST_Controller::HTTP_BAD_REQUEST);
            return;
        }
        // Fetch seo by category name
        $seoData = $this->seo_model->seo_by_page_name($category_name);
        if ($seoData) {
            $this->response($seoData, REST_Controller::HTTP_OK);
        } else {
            $this->response(['error' => 'No seo found for the specified category'], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
?>