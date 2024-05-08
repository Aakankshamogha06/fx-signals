<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

require 'vendor/autoload.php';
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
        $this->load->library('Authorization_Token');
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
//     public function payment_post()
// {
//     $headers = $this->input->request_headers();
//     if (!empty($headers['Authorization'])) {
//         $decodedToken = $this->authorization_token->validateToken(trim($headers['Authorization']));
//         if ($decodedToken['status']) {
//             // Authorization successful, proceed with payment processing
//             $this->form_validation->set_rules('transaction_id', 'Name', 'trim|required');
//             $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[payment.email]');
//             $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required');
//             $this->form_validation->set_rules('user_id', 'User Id', 'trim|required');
//             $this->form_validation->set_rules('name', 'Name', 'trim|required');
//             $this->form_validation->set_rules('date', 'Date', 'trim|required');
//             $this->form_validation->set_rules('pricing_id', 'Pricing Id', 'trim|required');

//             if ($this->form_validation->run() === false) {
//                 $this->response(['Validation errors' => $this->form_validation->error_array()], REST_Controller::HTTP_BAD_REQUEST);
//             } else {
//                 $email = $this->input->post('email');
//                 $date = $this->input->post('date');
//                 $data = array(
//                     'user_id' => $this->input->post('user_id'),
//                     'email' => $email,
//                     'phone_number' => $this->input->post('phone_number'),
//                     'name' => $this->input->post('name'),
//                     'date' => $date,
//                     'pricing_id' => $this->input->post('pricing_id'),
//                     'transaction_id' => $this->input->post('transaction_id'),
//                     'created_at' => date('Y-m-d H:i:s'),
//                 );

//                 $result = $this->payment_model->add_payment($data);

//                 if ($result) {
//                     $response = array(
//                         'status' => true,
//                         'uid' => $result,
//                         'message' => 'Thank you!',
//                         'note' => 'You have successfully made a payment.'
//                     );

//                     $this->response($response, REST_Controller::HTTP_OK);
//                 } else {
//                     $this->response(['There was a problem. Please try again.'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
//                 }
//             }
//         } else {
//             // Authorization failed
//             $this->response($decodedToken, REST_Controller::HTTP_UNAUTHORIZED);
//         }
//     } else {
//         // Authorization header not provided
//         $this->response(['Authentication failed'], REST_Controller::HTTP_UNAUTHORIZED);
//     }
// }
public function payment_post()
{
    $headers = $this->input->request_headers();
    if (!empty($headers['Authorization'])) {
        $decodedToken = $this->authorization_token->validateToken(trim($headers['Authorization']));
        if ($decodedToken['status']) {
            // Authorization successful, proceed with payment processing
            $this->form_validation->set_rules('transaction_id', 'Name');
            // $this->form_validation->set_rules('email', 'Email', 'valid_email');
            // $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required');
            $this->form_validation->set_rules('user_id', 'User Id', 'trim|required');
            // $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('date', 'Date', 'trim|required');
            $this->form_validation->set_rules('pricing_id', 'Pricing Id', 'trim|required');

            if ($this->form_validation->run() === false) {
                $this->response(['Validation errors' => $this->form_validation->error_array()], REST_Controller::HTTP_BAD_REQUEST);
            } else {
                $email = $this->input->post('email');
                $date = $this->input->post('date');
                $data = array(
                    'user_id' => $this->input->post('user_id'),
                    // 'email' => $email,
                    // 'phone_number' => $this->input->post('phone_number'),
                    // 'name' => $this->input->post('name'),
                    'date' => $date,
                    'pricing_id' => $this->input->post('pricing_id'),
                    'transaction_id' => $this->input->post('transaction_id'),
                    'created_at' => date('Y-m-d H:i:s'),
                );

                $result = $this->payment_model->add_payment($data);

                if ($result) {
                    // Update user's premium status
                    $this->User_model->setPremiumStatus($data['user_id']);

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
            // $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required');
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
                    // 'phone_number' => $this->input->post('phone_number'),
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

    // public function current_plan_get()
    // {
    //     // Check for authorization token in headers
    //     $headers = $this->input->request_headers();
    //     if (!empty($headers['Authorization'])) {
    //         $decodedToken = $this->authorization_token->validateToken(trim($headers['Authorization']));
    //         if (!$decodedToken['status']) {
    //             $this->response(['error' => 'Unauthorized'], REST_Controller::HTTP_UNAUTHORIZED);
    //             return;
    //         }
    //     } else {
    //         $this->response(['error' => 'Authorization header is missing'], REST_Controller::HTTP_UNAUTHORIZED);
    //         return;
    //     }

    //     // Get user ID from the request URI or wherever it's provided
    //     $user_id = $this->uri->segment(4);
    //     if (!$user_id) {
    //         $this->response(['error' => 'Invalid user id'], REST_Controller::HTTP_BAD_REQUEST);
    //         return;
    //     }

    //     // Retrieve current plan of the user
    //     $current_plan = $this->payment_model->get_current_plan($user_id);

    //     if ($current_plan) {
    //         $this->response($current_plan, REST_Controller::HTTP_OK);
    //     } else {
    //         $this->response(['error' => 'Current plan not found'], REST_Controller::HTTP_NOT_FOUND);
    //     }
    // }
    public function current_plan_get()
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
    
        // Get user ID from the request URI or wherever it's provided
        $user_id = $this->uri->segment(4);
        if (!$user_id) {
            $this->response(['error' => 'Invalid user id'], REST_Controller::HTTP_BAD_REQUEST);
            return;
        }
    
        // Retrieve current plan of the user including expiry date
        $current_plan = $this->payment_model->get_current_plan_with_expiry($user_id);
    
        if ($current_plan) {
            $this->response($current_plan, REST_Controller::HTTP_OK);
        } else {
            $this->response(['error' => 'Current plan not found'], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    
public function author_current_plan_get()
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

    // Get author ID from the request URI or wherever it's provided
    $author_id = $this->uri->segment(4);
    if (!$author_id) {
        $this->response(['error' => 'Invalid author id'], REST_Controller::HTTP_BAD_REQUEST);
        return;
    }

    // Retrieve current plan of the author
    $current_plan = $this->payment_model->get_author_current_plan($author_id);

    if ($current_plan) {
        $this->response($current_plan, REST_Controller::HTTP_OK);
    } else {
        $this->response(['error' => 'Current plan not found'], REST_Controller::HTTP_NOT_FOUND);
    }
}

public function config_get() {
    $this->response(['publishableKey' => 'pk_test_51PCHCcBVVwx1HWRGenwyPo244A9nrxjbGIJdQY4HLcvK7SUwUW2sTq5RyrkS8IS48Y3MATAwbTNIwJtybcTzlZ9H00ccxtNpC0'],REST_Controller::HTTP_OK);
}

public function payment_intent_post(){
        try {
            $stripe = new \Stripe\StripeClient('sk_test_51PCHCcBVVwx1HWRGY75S0z6tSLqDx60YnG8MSDXIiV4OGYPknD1xJkEvaCc18wWuCvhNtU7a3HJiCN9GtGiS4D9H00GfwRYqsw');

            $jsonStr = file_get_contents('php://input');
            $jsonObj = json_decode($jsonStr);
    
            $paymentIntent = $stripe->paymentIntents->create([
                'amount' =>  $this->input->post('amount'),
                'currency' => 'AED',
          
                'automatic_payment_methods' => [
                    'enabled' => true,
                ],
            ]);
    
            $output = [
                'clientSecret' => $paymentIntent->client_secret,
            ];
    
            echo json_encode($output);
        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
    
        exit;
}

}