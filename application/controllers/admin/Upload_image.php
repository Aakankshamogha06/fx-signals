<?php
defined('BASEPATH') or exit('No direct script access allowed');

class upload_image extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->library('email');
        $this->load->helper('cookie');
        $this->load->library('form_validation');
        $this->load->library('encryption');
        $this->load->model('admin/upload_image_model', 'upload_image_model');
        $this->load->helper('security');

        date_default_timezone_set('Asia/Kolkata');
    }






    public function add_upload_image()
    {
        if ($this->session->has_userdata('is_admin_login')) {


            $data['view'] = 'admin/upload_image/add_upload_image';

            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    // public function upload_image_submit_data()
    // {
    //     if ($this->session->has_userdata('is_admin_login')) {
    //         $data = $this->input->post();
    
    //         // Configuration for file upload
    //         $config['upload_path'] = 'uploads/upload_image/';
    //         $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
    //         $config['encrypt_name'] = TRUE;
    //         $this->load->library('upload', $config);
    
    //         // Handle multiple file uploads
    //         $images = [];
    //         if (!empty($_FILES['images']['name'][0])) {
    //             foreach ($_FILES['images']['name'] as $key => $file) {
    //                 $_FILES['userfile']['name'] = $_FILES['images']['name'][$key];
    //                 $_FILES['userfile']['type'] = $_FILES['images']['type'][$key];
    //                 $_FILES['userfile']['tmp_name'] = $_FILES['images']['tmp_name'][$key];
    //                 $_FILES['userfile']['error'] = $_FILES['images']['error'][$key];
    //                 $_FILES['userfile']['size'] = $_FILES['images']['size'][$key];
    
    //                 if ($this->upload->do_upload('userfile')) {
    //                     $uploadData = $this->upload->data();
    //                     $images[] = $uploadData['file_name'];
    //                 } else {
    //                     $error = array('error' => $this->upload->display_errors());
    //                     print_r($error);
    //                 }
    //             }
    //         }
    
    //         // Submit data to model for database insertion
    //         if ($this->upload_image_model->upload_image_data_submit($data, $images)) {
    //             redirect("admin/upload_image/upload_image_view");
    //         } else {
    //             $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
    //         }
    //     } else {
    //         redirect('admin/auth/login');
    //     }
    // }
    

    public function upload_image_submit_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data = $this->input->post();
            $folder_name = $this->input->post('folder_name'); // Retrieve folder name from form
            
            // Check if upload directory exists, create if it doesn't
            $upload_path = 'uploads/upload_image/'. $folder_name . '/';
            if (!is_dir($upload_path)) {
                mkdir($upload_path, 0777, true); // Create directory recursively
            }
            
            // Configuration for file upload
            $config['upload_path'] = $upload_path;
            $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
            $config['encrypt_name'] = FALSE;
            $this->load->library('upload', $config);
            
            // Handle multiple file uploads
            $images = [];
            if (!empty($_FILES['images']['name'][0])) {
                foreach ($_FILES['images']['name'] as $key => $file) {
                    $_FILES['userfile']['name'] = $_FILES['images']['name'][$key];
                    $_FILES['userfile']['type'] = $_FILES['images']['type'][$key];
                    $_FILES['userfile']['tmp_name'] = $_FILES['images']['tmp_name'][$key];
                    $_FILES['userfile']['error'] = $_FILES['images']['error'][$key];
                    $_FILES['userfile']['size'] = $_FILES['images']['size'][$key];
        
                    if ($this->upload->do_upload('userfile')) {
                        $uploadData = $this->upload->data();
                        $images[] = $uploadData['file_name'];
                    } else {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                    }
                }
            }
            
            // Submit data to model for database insertion
            if ($this->upload_image_model->upload_image_data_submit($data, $images, $folder_name)) {
                redirect("admin/upload_image/upload_image_view");
            } else {
                $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
            }
        } else {
            redirect('admin/auth/login');
        }
    }
    
    

        // public function upload_image_view()
        // {
        //     if ($this->session->has_userdata('is_admin_login')) {
        //         $data['upload_image_view'] = $this->upload_image_model->upload_image_view();
        //         $data['view'] = 'admin/upload_image/view_upload_image';
        //         $this->load->view('admin/layout', $data);
        //     } else {
        //         redirect('admin/auth/login');
        //     }
        // }
        public function upload_image_view()
        {
            if ($this->session->has_userdata('is_admin_login')) {
                $this->load->model('upload_image_model');
                $folder_name = $this->upload_image_model->get_folder_name();
                
                // Debugging: Print the folder name
                echo "Folder Name (Controller): " . $folder_name; // Debugging code
                
                $data['upload_image_view'] = $this->upload_image_model->upload_image_view();
                $data['folder_name'] = $folder_name;
                $data['view'] = 'admin/upload_image/view_upload_image';
                $this->load->view('admin/layout', $data);
            } else {
                redirect('admin/auth/login');
            }
        }
        
        

        public function upload_image_edit($id)
        {
            if ($this->session->has_userdata('is_admin_login')) {

                $id = $this->uri->segment(4);

                $data['view_upload_image'] = $this->upload_image_model->upload_image_edit($id);
                $data['view'] = 'admin/upload_image/edit_upload_image';
                $this->load->view('admin/layout', $data);
            } else {
                redirect('admin/auth/login');
            }
        }

        public function upload_image_update_data()
        {
            if ($this->session->has_userdata('is_admin_login')) {

                $data = [];
                if ($this->input->post()) {
                    $data = $this->input->post();

                    $data = $this->input->post();
                    $config['upload_path'] = 'uploads/upload_image/';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('images')) {
                        $uploadData = $this->upload->data();
                        $images = $uploadData['file_name'];
                    } else {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                    }
                    if ($this->upload_image_model->upload_image_update_data($data, $images, $image2, $image3, $image4) == true) {

                        redirect("upload_image/view_upload_image");
                    } ?><?php
                        } else {
                            $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
                        }
                    } else {
                        redirect('admin/auth/login');
                    }
                }
                public function upload_image_delete($id)
                {
                    if ($this->session->has_userdata('is_admin_login')) {

                        $id = $this->uri->segment(4);

                        if ($this->upload_image_model->upload_image_delete($id) == true) {

                            redirect("upload_image/view_upload_image");
                        }
                    } else {
                        redirect('admin/auth/login');
                    }
                }
                public function index()
                {
                    $this->load->model('upload_image_model');
                    $category = 'blog_category';
                    $data['blogs'] = $this->upload_image_model->get_recent_blogs($category);
                    $this->load->view('blog_view', $data);
                }
            }
                            ?>