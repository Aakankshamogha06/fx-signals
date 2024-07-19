<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class broker_api extends REST_Controller
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
        $this->load->model('admin/broker_model', 'broker_model');
        // $this->load->model('admin/broker_register_model', 'broker_register_model');
        $this->load->model('admin/broker_detail_model', 'broker_detail_model');
    }




    public function broker_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->broker_model->broker_view($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function broker_by_id_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->broker_model->broker($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function broker_by_type_get()
    {
        $category_name = $this->uri->segment(4);
        if (empty($category_name)) {
            $this->response(['error' => 'Type name is required'], REST_Controller::HTTP_BAD_REQUEST);
            return;
        }
        $brokerData = $this->broker_model->broker_by_type_name($category_name);
        if ($brokerData) {
            $this->response($brokerData, REST_Controller::HTTP_OK);
        } else {
            $this->response(['error' => 'No broker found for the specified category'], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function broker_detail_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->broker_detail_model->broker_detail($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }

    // Broker Registration 
    public function register_broker_post()
{
    $this->form_validation->set_rules('username', 'User Name', 'trim|required');
    // $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[author.email]');
    $this->form_validation->set_rules('mobile_no', 'Mobile Number', 'trim|required|is_unique[author.mobile_no]');
    $this->form_validation->set_rules('message', 'Message', 'trim|required');
    $this->form_validation->set_rules('website_url', 'Website URL', 'trim|required');
    $this->form_validation->set_rules('promotion_link', 'Promotion Link', 'trim|required');
    // $this->form_validation->set_rules('role_name', 'Role', 'trim|required');
    $this->form_validation->set_rules('promotion_logo', 'Promotion logo', 'callback_promotion_logo_check');
    $this->form_validation->set_rules('logo', 'Logo', 'callback_logo_check');

    if ($this->form_validation->run() === false) {
        $this->response(['Validation errors' => $this->form_validation->error_array()], REST_Controller::HTTP_BAD_REQUEST);
    } else {
        $email = $this->input->post('email');

        // File upload configurations
        $config_logo['upload_path'] = 'uploads/logo/';
        $config_logo['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config_logo['encrypt_name'] = TRUE;
        $config_logo['max_size'] = 2048000; // 2MB
        
        $this->load->library('upload', $config_logo, 'logo_upload');

        if (!$this->logo_upload->do_upload('logo')) {
            $error = array('error' => $this->logo_upload->display_errors());
            $this->response($error, REST_Controller::HTTP_BAD_REQUEST);
        }

        $logo_data = $this->logo_upload->data();

        $config_promotion['upload_path'] = 'uploads/promotion_logo/';
        $config_promotion['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config_promotion['encrypt_name'] = TRUE;
        $config_promotion['max_size'] = 2048000; // 2MB
        
        $this->load->library('upload', $config_promotion, 'promotion_upload');

        if (!$this->promotion_upload->do_upload('promotion_logo')) {
            $error = array('error' => $this->promotion_upload->display_errors());
            $this->response($error, REST_Controller::HTTP_BAD_REQUEST);
        }

        $promotion_logo_data = $this->promotion_upload->data();

        $data = array(
            'username' => $this->input->post('username'),
            'mobile_no' => $this->input->post('mobile_no'),
            'website_url' => $this->input->post('website_url'),
            'email' => $email,
            'logo' => $logo_data['file_name'],
            'promotion_logo' => $promotion_logo_data['file_name'],
            'promotion_link' => $this->input->post('promotion_link'),
            'message' => $this->input->post('message'),
            'created_at' => date('Y-m-d H:i:s'),
        );

        $result = $this->broker_model->add_broker_register($data);

        if ($result) {
            $token_data['uid'] = $result;
            $token_data['email'] = $email;
            $tokenData = $this->authorization_token->generateToken($token_data);

            $response = array(
                // 'access_token' => $tokenData,
                'status' => true,
                'uid' => $result,
                'message' => 'Thank you for registering as an Broker!',
                'note' => 'You have successfully registered.'
            );

            $this->response($response, REST_Controller::HTTP_OK);
        } else {
            $this->response(['There was a problem creating your new account. Please try again.'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
public function logo_check($str)
{
    if (empty($_FILES['logo']['name'])) {
        $this->form_validation->set_message('logo_check', 'The Logoo field is required.');
        return false;
    } else {
        return true;
    }
}
public function promotion_logo_check($str)
{
    if (empty($_FILES['promotion_logo']['name'])) {
        $this->form_validation->set_message('promotion_logo_check', 'The Logoo field is required.');
        return false;
    } else {
        return true;
    }
}
}
?>