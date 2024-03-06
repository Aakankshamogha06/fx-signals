<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class enquiry_api extends REST_Controller
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
        $this->load->model('admin/enquiry_model', 'enquiry_model');
        $this->load->model('admin/User_model', 'User_model');
    }



    
    public function get_enquiry_by_user_get()
    {
        $headers = $this->input->request_headers();
        if (!empty($headers['Authorization'])) {
            $decodedToken = $this->authorization_token->validateToken(trim($headers['Authorization']));
            if ($decodedToken['status']) {
                $user_id = $this->uri->segment(4);
                if (!$user_id) {
                    $this->response(['error' => 'Invalid user id'], REST_Controller::HTTP_BAD_REQUEST);
                }
    
                $enquiry = $this->enquiry_model->get_enquiry_by_user($user_id);
                if ($enquiry) {
                    $this->response($enquiry, REST_Controller::HTTP_OK);
                } else {
                    $this->response([], REST_Controller::HTTP_OK);
                }
            } else {
                $this->response($decodedToken, REST_Controller::HTTP_UNAUTHORIZED);
            }
        } else {
            $this->response(['Authentication failed'], REST_Controller::HTTP_UNAUTHORIZED);
        }
    }
    
    public function enquiry_post()
{
    // Check for authorization token in headers
    $headers = $this->input->request_headers();
    if (!empty($headers['Authorization'])) {
        $decodedToken = $this->authorization_token->validateToken(trim($headers['Authorization']));
        if (!$decodedToken['status']) {
            $this->response(['error' => 'Unauthorized'], REST_Controller::HTTP_UNAUTHORIZED);
            return;
        }
    } else {
        $this->response(['error' => 'Authorization header is missing'], REST_Controller::HTTP_UNAUTHORIZED);
        return;
    }

    // Form validation
    $this->form_validation->set_rules('user_id', 'user_id', 'trim|required');
    $this->form_validation->set_rules('message', 'message', 'trim|required');

    // Check if validation passes
    if ($this->form_validation->run() === false) {
        $this->response(['error' => $this->form_validation->error_array()], REST_Controller::HTTP_BAD_REQUEST);
        return;
    }

    // If validation is successful, get the form data
    $user_id = $this->input->post('user_id');
    $message = $this->input->post('message');

    // Prepare data for insertion
    $data = [
        'user_id' => $user_id,
        'message' => $message
    ];

    // Insert into the database using your model
    $insert_id = $this->enquiry_model->enquiry_data_submit($data);

    if ($insert_id) {
        // Send a confirmation response
        $response = [
            'message' => 'Thank you for contacting us!',
        ];
        $this->response($response, REST_Controller::HTTP_OK);
    } else {
        $this->response(['error' => 'Error saving data. Please try again.'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
    }
}

    
}