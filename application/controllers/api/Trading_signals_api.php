<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class trading_signals_api extends REST_Controller
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
        $this->load->model('admin/trading_signals_model', 'trading_signals_model');
        $this->load->model('admin/closed_signals_model', 'closed_signals_model');
        $this->load->model('admin/User_model', 'User_model');
    }



    public function trading_signals_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->trading_signals_model->trading_signals_view($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }

//     public function closed_signals_post()
// {
//     $headers = $this->input->request_headers();
//     if (!empty($headers['Authorization'])) {
//         $decodedToken = $this->authorization_token->validateToken(trim($headers['Authorization']));
//         if ($decodedToken['status']) {
//             // Authorization successful, proceed with closed_signals processing
//             $this->form_validation->set_rules('pair', 'Pair', 'trim|required');
//             $this->form_validation->set_rules('action', 'Action', 'trim|required');
//             $this->form_validation->set_rules('time_open', 'Time Open', 'trim|required');
//             $this->form_validation->set_rules('time_closed', 'Time Closed', 'trim|required');
//             $this->form_validation->set_rules('sl_tp', 'SL TP', 'trim|required');

//             if ($this->form_validation->run() === false) {
//                 $this->response(['Validation errors' => $this->form_validation->error_array()], REST_Controller::HTTP_BAD_REQUEST);
//             } else {
//                 $data = array(
//                     'pair' => $this->input->post('pair'),
//                     'action' => $this->input->post('action'),
//                     'time_open' => $this->input->post('time_open'),
//                     'sl_tp' => $this->input->post('sl_tp'),
//                     'time_closed' => $this->input->post('time_closed'),
//                 );

//                 $result = $this->closed_signals_model->add_closed_signals($data);

//                 if ($result) {
//                     $response = array(
//                         'status' => true,
//                         'message' => 'Thank you!',
//                         'note' => 'You have successfully added a closed_signals.'
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
public function closed_signals_post()
    {
        $this->form_validation->set_rules('pair', 'Pair', 'trim|required');
            $this->form_validation->set_rules('action', 'Action', 'trim|required');
            $this->form_validation->set_rules('time_open', 'Time Open', 'trim|required');
            $this->form_validation->set_rules('time_closed', 'Time Closed', 'trim|required');
            $this->form_validation->set_rules('sl_tp', 'SL TP', 'trim|required');
    
        if ($this->form_validation->run() === false) {
            $this->response(['Validation errors' => $this->form_validation->error_array()], REST_Controller::HTTP_BAD_REQUEST);
        } else {
    
           
            $data = array(
               'pair' => $this->input->post('pair'),
               'action' => $this->input->post('action'),
               'time_open' => $this->input->post('time_open'),
               'sl_tp' => $this->input->post('sl_tp'),
               'time_closed' => $this->input->post('time_closed'),
            );
    
            $result = $this->closed_signals_model->add_closed_signals($data);
    
            if ($result) {
               
                $response = array(
                    
                    'status' => true,
                    'message' => 'Thank you !',
                    'note' => 'You have successfully added a closed_signals.'
                );
    
                $this->response($response, REST_Controller::HTTP_OK);
            } else {
                $this->response(['There was a problem . Please try again.'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
    }
}