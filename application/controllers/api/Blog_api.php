<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class blog_api extends REST_Controller
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
        $this->load->model('admin/blog_model', 'blog_model');
        $this->load->model('admin/User_model', 'User_model');
    }



    public function blog_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->blog_model->blog_get($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function blog_by_id_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->blog_model->blog($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function blog_by_slug_get()
    {
        $slug = urldecode($this->uri->segment(4));       
         $data = $this->blog_model->blog_by_slug($slug);
        if ($data !== false) {
            $this->response($data, REST_Controller::HTTP_OK);
        } else {
            $this->response(['error' => 'Blog not found'], REST_Controller::HTTP_NOT_FOUND);
        }
    }


    public function blog_by_category_get()
{
    $category_name = $this->uri->segment(4);

    // Validate category_name
    if (empty($category_name)) {
        $this->response(['error' => 'Category name is required'], REST_Controller::HTTP_BAD_REQUEST);
        return;
    }
    // Fetch blog by category name
    $blogData = $this->blog_model->blog_by_category_name($category_name);
    if ($blogData) {
        $this->response($blogData, REST_Controller::HTTP_OK);
    } else {
        $this->response(['error' => 'No blog found for the specified category'], REST_Controller::HTTP_NOT_FOUND);
    }
}

public function blog_by_author_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->blog_model->blog_by_author_get($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }

}
?>