<?php
defined('BASEPATH') or exit('No direct script access allowed');

require(APPPATH . '/libraries/REST_Controller.php');

use Restserver\Libraries\REST_Controller;

class Signal_manager_api extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Authorization_Token');
        $this->load->model('admin/signal_manager_model', 'signal_manager_model');
    }

    public function register_signal_manager_post()
    {
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[signal_manager.email]');
        $this->form_validation->set_rules('mobile_no', 'Mobile Number', 'trim|required|is_unique[signal_manager.mobile_no]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('profile_image', 'Profile Image', 'callback_profile_image_check');
    
        if ($this->form_validation->run() === false) {
            $this->response(['Validation errors' => $this->form_validation->error_array()], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            $email = $this->input->post('email');
    
            // File upload configurations
            $config_profile['upload_path'] = 'uploads/signal_manager_profile/';
            $config_profile['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
            $config_profile['encrypt_name'] = TRUE;
            $config_profile['max_size'] = 2048000; // 2MB
            
    
            $this->load->library('upload', $config_profile, 'profile_upload');
    
            if (!$this->profile_upload->do_upload('profile_image')) {
                $error = array('error' => $this->profile_upload->display_errors());
                $this->response($error, REST_Controller::HTTP_BAD_REQUEST);
            }
    
            $profile_image_data = $this->profile_upload->data();
    
            $config_chart['upload_path'] = 'uploads/signal_manager_chart/';
            $config_chart['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
            $config_chart['encrypt_name'] = TRUE;
            $config_chart['max_size'] = 2048000; // 2MB
            
            $this->load->library('upload', $config_chart, 'chart_upload');
    
            if (!$this->chart_upload->do_upload('sample_chart')) {
                $error = array('error' => $this->chart_upload->display_errors());
                $this->response($error, REST_Controller::HTTP_BAD_REQUEST);
            }
    
            $sample_chart_data = $this->chart_upload->data();
    
            $data = array(
                'username' => $this->input->post('firstname') . ' ' . $this->input->post('lastname'),
                'firstname' => $this->input->post('firstname'),
                'lastname' => $this->input->post('lastname'),
                'mobile_no' => $this->input->post('mobile_no'),
                'email' => $email,
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'confirm_password' => password_hash($this->input->post('confirm_password'), PASSWORD_BCRYPT),
                'profile_image' => $profile_image_data['file_name'],
                'sample_chart' => $sample_chart_data['file_name'],
                // 'created_at' => date('Y-m-d H:i:s'),
            );
    
            $result = $this->signal_manager_model->add_signal_manager($data);
    
            if ($result) {
                $token_data['uid'] = $result;
                $token_data['email'] = $email;
                $tokenData = $this->authorization_token->generateToken($token_data);
    
                $response = array(
                    // 'access_token' => $tokenData,
                    'status' => true,
                    'uid' => $result,
                    'message' => 'Thank you for registering as an Saignal Manager!',
                    'note' => 'You have successfully registered.'
                );
    
                $this->response($response, REST_Controller::HTTP_OK);
            } else {
                $this->response(['There was a problem creating your new account. Please try again.'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
    }
    

// Callback function to validate profile image
public function profile_image_check($str)
{
    if (empty($_FILES['profile_image']['name'])) {
        $this->form_validation->set_message('profile_image_check', 'The Profile Image field is required.');
        return false;
    } else {
        return true;
    }
}

    
    public function login_signal_manager_post()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === false) {
            $this->response(['Validation errors' => $this->form_validation->error_array()], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            if ($this->signal_manager_model->resolve_signal_manager_login($email, $password)) {
                $signal_manager_id = $this->signal_manager_model->get_signal_manager_id_from_signal_managername($email);
                $signal_manager = $this->signal_manager_model->get_signal_manager($signal_manager_id);

                $_SESSION['signal_manager_id'] = (int)$signal_manager->id;
                $_SESSION['username'] = (string)$signal_manager->username;
                $_SESSION['email'] = (string)$signal_manager->email;
                $_SESSION['logged_in'] = (bool)true;
                $_SESSION['profile_image'] = (string)$signal_manager->profile_image;
                $token_data['uid'] = $signal_manager_id;
                $token_data['username'] = $signal_manager->username;
                $token_data['email'] = $signal_manager->email;
                $tokenData = $this->authorization_token->generateToken($token_data);

                $response = array(
 'signal_manager_id' => $signal_manager_id,
                    'access_token' => $tokenData,
                    'status' => true,
                    'message' => 'Login success!',
                    'note' => 'You are now logged in.'
                );
                $this->response($response, REST_Controller::HTTP_OK);
            } else {
                $this->response(['Wrong signal_manager name or password.'], REST_Controller::HTTP_UNAUTHORIZED);
            }
        }
    }




	

    public function logout_signal_manager_post()
    {
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }
            $this->response(['Logout success!'], REST_Controller::HTTP_OK);
        } else {
            $this->response(['There was a problem. Please try again.'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    


    
    public function role_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->signal_manager_role_model->signal_manager_role_view($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function signal_manager_pricing_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->signal_manager_pricing_model->signal_manager_pricing_view($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function signal_manager_pricing_by_id_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->signal_manager_pricing_features_model->pricing($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }



    // public function check_signal_manager_status_get()
    // {
    //     $email = $this->get('email');
    //     $mobile = $this->get('mobile_no');
        
    //     if (!$email || !$mobile) {
    //         $this->response(['error' => 'Please provide both email and mobile number.'], REST_Controller::HTTP_BAD_REQUEST);
    //     }
        
    //     $signal_manager_status = $this->signal_manager_model->get_signal_manager_status($email, $mobile);
        
    //     if (!$signal_manager_status) {
    //         $this->response(['error' => 'signal_manager not found.'], REST_Controller::HTTP_NOT_FOUND);
    //     }
        
    //     $this->response($signal_manager_status, REST_Controller::HTTP_OK);
    // }
    
    public function check_signal_manager_status_get()
{
    $email = $this->get('email');
    $mobile = $this->get('mobile_no');
    
    if (!$email || !$mobile) {
        $this->response(['error' => 'Please provide both email and mobile number.'], REST_Controller::HTTP_BAD_REQUEST);
    }
    
    $signal_manager_status = $this->signal_manager_model->get_signal_manager_status($email, $mobile);
    if (!$signal_manager_status) {
        $this->response(['error' => 'signal_manager not found.'], REST_Controller::HTTP_NOT_FOUND);
    }
    $this->response($signal_manager_status, REST_Controller::HTTP_OK);
}


}
