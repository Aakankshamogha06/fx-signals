<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class author_profile_api extends REST_Controller
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
        $this->load->model('admin/author_profile_model', 'author_profile_model');
        $this->load->model('admin/User_model', 'User_model');
    }



    public function author_profile_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->author_profile_model->author_profile($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function author_profile_by_category_get()
{
    $category_name = $this->uri->segment(4);

    // Validate category_name
    if (empty($category_name)) {
        $this->response(['error' => 'Category name is required'], REST_Controller::HTTP_BAD_REQUEST);
        return;
    }
    // Fetch author_profile by category name
    $author_profileData = $this->author_profile_model->author_profile_by_category_name($category_name);
    if ($author_profileData) {
        $this->response($author_profileData, REST_Controller::HTTP_OK);
    } else {
        $this->response(['error' => 'No author_profile found for the specified category'], REST_Controller::HTTP_NOT_FOUND);
    }
}
}