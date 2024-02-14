<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class payment_api extends REST_Controller
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
        $this->load->library('authorization_Token');
        $this->load->model('admin/Auth_model', 'Auth_model');
        $this->load->model('admin/payment_model', 'payment_model');
        $this->load->model('admin/User_model', 'User_model');
    }



    // public function payment_post()
    // {
    //     $this->form_validation->set_rules('transaction_id', 'Name', 'trim|required');
    //     $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[payment.email]');
    //     $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required');
    //     $this->form_validation->set_rules('user_id', 'User Id', 'trim|required');
    //     $this->form_validation->set_rules('name', 'Name', 'trim|required');
    //     $this->form_validation->set_rules('date', 'Date', 'trim|required');
    //     $this->form_validation->set_rules('pricing_id', 'Pricing Id', 'trim|required');
    
    //     if ($this->form_validation->run() === false) {
    //         $this->response(['Validation errors' => $this->form_validation->error_array()], REST_Controller::HTTP_BAD_REQUEST);
    //     } else {
    //         $email = $this->input->post('email');
    
           
    //         $data = array(
    //             'user_id' => $this->input->post('user_id'),
    //             'email' => $email,
    //             'phone_number' => $this->input->post('phone_number'),
    //             'name' => $this->input->post('name'),
    //             'date' => $this->input->post('date'),
    //             'pricing_id' => $this->input->post('pricing_id'),
    //             'transaction_id' => $this->input->post('transaction_id'),
    //             'created_at' => date('Y-m-d H:i:s'),
    //         );
    
    //         $result = $this->payment_model->add_payment($data);
    
    //         if ($result) {
               
    //             $response = array(
                    
    //                 'status' => true,
    //                 'uid' => $result,
    //                 'message' => 'Thank you !',
    //                 'note' => 'You have successfully made a payment.'
    //             );
    
    //             $this->response($response, REST_Controller::HTTP_OK);
    //         } else {
    //             $this->response(['There was a problem . Please try again.'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
    //         }
    //     }
    // }
    public function payment_post()
{
    $headers = $this->input->request_headers();
    if (!empty($headers['Authorization'])) {
        $decodedToken = $this->authorization_token->validateToken(trim($headers['Authorization']));
        if ($decodedToken['status']) {
            // Authorization successful, proceed with payment processing
            $this->form_validation->set_rules('transaction_id', 'Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[payment.email]');
            $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required');
            $this->form_validation->set_rules('user_id', 'User Id', 'trim|required');
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('date', 'Date', 'trim|required');
            $this->form_validation->set_rules('pricing_id', 'Pricing Id', 'trim|required');

            if ($this->form_validation->run() === false) {
                $this->response(['Validation errors' => $this->form_validation->error_array()], REST_Controller::HTTP_BAD_REQUEST);
            } else {
                $email = $this->input->post('email');
                $date = $this->input->post('date');
                $data = array(
                    'user_id' => $this->input->post('user_id'),
                    'email' => $email,
                    'phone_number' => $this->input->post('phone_number'),
                    'name' => $this->input->post('name'),
                    'date' => $date,
                    'pricing_id' => $this->input->post('pricing_id'),
                    'transaction_id' => $this->input->post('transaction_id'),
                    'created_at' => date('Y-m-d H:i:s'),
                );

                $result = $this->payment_model->add_payment($data);

                if ($result) {
                    $response = array(
                        'status' => true,
                        'uid' => $result,
                        'message' => 'Thank you!',
                        'note' => 'You have successfully made a payment.'
                    );

                    $this->response($response, REST_Controller::HTTP_OK);
                } else {
                    $this->response(['There was a problem. Please try again.'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
                }
            }
        } else {
            // Authorization failed
            $this->response($decodedToken, REST_Controller::HTTP_UNAUTHORIZED);
        }
    } else {
        // Authorization header not provided
        $this->response(['Authentication failed'], REST_Controller::HTTP_UNAUTHORIZED);
    }
}

public function author_payment_post()
{
    $headers = $this->input->request_headers();
    if (!empty($headers['Authorization'])) {
        $decodedToken = $this->authorization_token->validateToken(trim($headers['Authorization']));
        if ($decodedToken['status']) {
            // Authorization successful, proceed with payment processing
            $this->form_validation->set_rules('transaction_id', 'Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[payment.email]');
            $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required');
            $this->form_validation->set_rules('author_id', 'User Id', 'trim|required');
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('date', 'Date', 'trim|required');
            $this->form_validation->set_rules('author_pricing_id', 'Author Pricing Id', 'trim|required');

            if ($this->form_validation->run() === false) {
                $this->response(['Validation errors' => $this->form_validation->error_array()], REST_Controller::HTTP_BAD_REQUEST);
            } else {
                $email = $this->input->post('email');
                $date = $this->input->post('date');
                $data = array(
                    'author_id' => $this->input->post('author_id'),
                    'email' => $email,
                    'phone_number' => $this->input->post('phone_number'),
                    'name' => $this->input->post('name'),
                    'date' => $date,
                    'author_pricing_id' => $this->input->post('author_pricing_id'),
                    'transaction_id' => $this->input->post('transaction_id'),
                    'created_at' => date('Y-m-d H:i:s'),
                );

                $result = $this->payment_model->add_payment($data);

                if ($result) {
                    $response = array(
                        'status' => true,
                        'uid' => $result,
                        'message' => 'Thank you!',
                        'note' => 'You have successfully made a payment.'
                    );

                    $this->response($response, REST_Controller::HTTP_OK);
                } else {
                    $this->response(['There was a problem. Please try again.'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
                }
            }
        } else {
            // Authorization failed
            $this->response($decodedToken, REST_Controller::HTTP_UNAUTHORIZED);
        }
    } else {
        // Authorization header not provided
        $this->response(['Authentication failed'], REST_Controller::HTTP_UNAUTHORIZED);
    }
}
}