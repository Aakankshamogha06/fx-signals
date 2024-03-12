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

public function closed_signals_post()
    {
        $id = $this->uri->segment(4);
        
            $this->form_validation->set_rules('time_close', 'Time Close', 'trim|required');
            $this->form_validation->set_rules('sl_tp', 'SL TP', 'trim|required');
    
        if ($this->form_validation->run() === false) {
            $this->response(['Validation errors' => $this->form_validation->error_array()], REST_Controller::HTTP_BAD_REQUEST);
        } else {
    
           
            $data = array(
               
               'sl_tp' => $this->input->post('sl_tp'),
               'time_close' => $this->input->post('time_close'),
            );
    
            $result = $this->closed_signals_model->closed_signals_data_submit($data,$id);
    
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
    public function closed_signals_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->closed_signals_model->closed_signals_view($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function trading_signals_between_dates_get()
    {
        // Get start and end dates from query parameters
        $start_date = $this->get('start_date');
        $end_date = $this->get('end_date');
    
        // Validate dates
        if (!$start_date || !$end_date || strtotime($start_date) >= strtotime($end_date)) {
            $this->response(['error' => 'Invalid dates. Please provide valid start and end dates in YYYY-MM-DD format, and ensure the end date is greater than the start date.'], REST_Controller::HTTP_BAD_REQUEST);
        }
    
        // Fetch data between the specified dates
        $data = $this->trading_signals_model->trading_signals_between_dates($start_date, $end_date);
    
        // Check if data is empty
        if (empty($data)) {
            $this->response(['error' => 'No data found between the specified dates.'], REST_Controller::HTTP_NOT_FOUND);
        }
    
        // Respond with the data
        $this->response($data, REST_Controller::HTTP_OK);
    }
    

}