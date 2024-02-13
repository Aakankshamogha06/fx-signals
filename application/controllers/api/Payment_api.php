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



    public function payment_post()
    {
        $this->form_validation->set_rules('razorpay_id', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[payment.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('user_id', 'User Id', 'trim|required');
    
        if ($this->form_validation->run() === false) {
            $this->response(['Validation errors' => $this->form_validation->error_array()], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            $email = $this->input->post('email');
    
           
            $data = array(
                'user_id' => $this->input->post('user_id'),
                'email' => $email,
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'razorpay_id' => $this->input->post('razorpay_id'),
                'created_at' => date('Y-m-d H:i:s'),
            );
    
            $result = $this->payment_model->add_payment($data);
    
            if ($result) {
               
                $response = array(
                    
                    'status' => true,
                    'uid' => $result,
                    'message' => 'Thank you !',
                    'note' => 'You have successfully made a payment.'
                );
    
                $this->response($response, REST_Controller::HTTP_OK);
            } else {
                $this->response(['There was a problem . Please try again.'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
    }

}