<?php
defined('BASEPATH') or exit('No direct script access allowed');

require(APPPATH . '/libraries/REST_Controller.php');

use Restserver\Libraries\REST_Controller;

class Author_api extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Authorization_Token');
        $this->load->model('admin/author_model', 'author_model');
        $this->load->model('admin/author_pricing_model', 'author_pricing_model');
        $this->load->model('admin/author_pricing_features_model', 'author_pricing_features_model');
        $this->load->model('admin/author_role_model', 'author_role_model');
    }

    public function register_author_post()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[author.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('role_name', 'Role', 'trim|required');
        $this->form_validation->set_rules('profile_image', 'Profile Image', 'callback_profile_image_check');
    
        if ($this->form_validation->run() === false) {
            $this->response(['Validation errors' => $this->form_validation->error_array()], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            $email = $this->input->post('email');
    
            // File upload configurations
            $config_profile['upload_path'] = 'uploads/profile/';
            $config_profile['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
            $config_profile['encrypt_name'] = TRUE;
            $config_profile['max_size'] = 2048000; // 2MB
            $config_profile['max_width'] = 1024;
            $config_profile['max_height'] = 768;
    
            $this->load->library('upload', $config_profile, 'profile_upload');
    
            if (!$this->profile_upload->do_upload('profile_image')) {
                $error = array('error' => $this->profile_upload->display_errors());
                $this->response($error, REST_Controller::HTTP_BAD_REQUEST);
            }
    
            $profile_image_data = $this->profile_upload->data();
    
            $config_article['upload_path'] = 'uploads/articles/';
            $config_article['allowed_types'] = 'pdf|docs|txt';
            $config_article['encrypt_name'] = TRUE;
            $config_article['max_size'] = 2048000; // 2MB
            $config_article['max_width'] = 1024;
            $config_article['max_height'] = 768;
    
            $this->load->library('upload', $config_article, 'article_upload');
    
            if (!$this->article_upload->do_upload('sample_article')) {
                $error = array('error' => $this->article_upload->display_errors());
                $this->response($error, REST_Controller::HTTP_BAD_REQUEST);
            }
    
            $sample_article_data = $this->article_upload->data();
    
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $email,
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'profile_image' => $profile_image_data['file_name'],
                'sample_article' => $sample_article_data['file_name'],
                'role_name' => $this->input->post('role_name'),
                'created_at' => date('Y-m-d H:i:s'),
            );
    
            $result = $this->author_model->add_author($data);
    
            if ($result) {
                $token_data['uid'] = $result;
                $token_data['email'] = $email;
                $tokenData = $this->authorization_token->generateToken($token_data);
    
                $response = array(
                    'access_token' => $tokenData,
                    'status' => true,
                    'uid' => $result,
                    'message' => 'Thank you for registering your new account!',
                    'note' => 'You have successfully registered. Please check your email inbox to confirm your email address.'
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

    
    public function login_author_post()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === false) {
            $this->response(['Validation errors' => $this->form_validation->error_array()], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            if ($this->author_model->resolve_author_login($email, $password)) {
                $author_id = $this->author_model->get_author_id_from_authorname($email);
                $author = $this->author_model->get_author($author_id);

                $_SESSION['author_id'] = (int)$author->id;
                $_SESSION['name'] = (string)$author->name;
                $_SESSION['email'] = (string)$author->email;
                $_SESSION['logged_in'] = (bool)true;
                $_SESSION['role_name'] = (string)$author->role_name;
                $_SESSION['profile_image'] = (string)$author->profile_image;
                $token_data['uid'] = $author_id;
                $token_data['name'] = $author->name;
                $token_data['email'] = $author->email;
                $tokenData = $this->authorization_token->generateToken($token_data);

                $response = array(
 'author_id' => $author_id,
                    'access_token' => $tokenData,
                    'status' => true,
                    'message' => 'Login success!',
                    'note' => 'You are now logged in.'
                );
                $this->response($response, REST_Controller::HTTP_OK);
            } else {
                $this->response(['Wrong authorname or password.'], REST_Controller::HTTP_UNAUTHORIZED);
            }
        }
    }




	

    public function logout_author_post()
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
        $data = $this->author_role_model->author_role_view($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function author_pricing_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->author_pricing_model->author_pricing_view($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }

    public function author_pricing_by_id_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->author_pricing_features_model->pricing($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
}
