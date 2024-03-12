
<?php
defined('BASEPATH') or exit('No direct script access allowed');

require(APPPATH . '/libraries/REST_Controller.php');

use Restserver\Libraries\REST_Controller;

class Contact_us_api extends REST_Controller
{

    public function __construct()
    {
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Origin: http://localhost:5173");
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == "OPTIONS") {
            die();
        }
        parent::__construct();
        $this->load->library('Authorization_Token');
        $this->load->model('admin/Contact_us_model', 'Contact_us_model');
    }
    public function contact_us_post()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');

        // Check if validation passes
        if ($this->form_validation->run() === false) {
            $this->response(['error' => $this->form_validation->error_array()], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            // If validation is successful, get the form data
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $message = $this->input->post('message');

            // Prepare data for insertion
            $data = [
                'name' => $name,
                'email' => $email,
                'message' => $message
            ];

            // Insert into the database using your model
            $insert_id = $this->Contact_us_model->contact_us_data_submit($data);

            if ($insert_id) {
                // Send a confirmation response
                $response = [
                    'message' => 'Thank you for contacting us!',
                    // 'data' => [
                    //     'id' => $insert_id,
                    //     'name' => $name,
                    //     'email' => $email,
                    //     'message' => $message
                    // ]
                ];
                $this->response($response, REST_Controller::HTTP_OK);
            } else {
                $this->response(['error' => 'Error saving data. Please try again.'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
    }
}
