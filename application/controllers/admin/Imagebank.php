<?php
defined('BASEPATH') or exit('No direct script access allowed');

class imagebank extends MY_Controller
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
		$this->load->model('admin/imagebank_model', 'imagebank_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	// public function add_imagebank()
    // {
    //     if ($this->session->has_userdata('is_admin_login')) {
    //         $data['server_images'] = $this->imagebank_model->get_server_images();
    //         $data['view'] = 'admin/imagebank/add_imagebank';
    //         $this->load->view('admin/layout', $data);
    //     } else {
    //         redirect('admin/auth/login');
    //     }
    // }



	// public function imagebank_submit_data()
	// {
	// 	if ($this->session->has_userdata('is_admin_login')) {
	// 		$data = [];
	// 		if ($this->input->post()) {
	// 			$data = $this->input->post();
	// 			if ($data['upload_option'] == 'local') {
	// 				// Local file upload logic
	// 				$config['upload_path'] = 'uploads/imagebank';
	// 				$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
	// 				$config['encrypt_name'] = TRUE;
	// 				$this->load->library('upload', $config);
	// 				$this->upload->initialize($config);
	// 				if ($this->upload->do_upload('images')) {
	// 					$uploadData = $this->upload->data();
	// 					$images = $uploadData['file_name'];
	// 				} else {
	// 					$error = array('error' => $this->upload->display_errors());
	// 					print_r($error);
	// 					return; // Abort further execution if there's an error
	// 				}
	// 			} elseif ($data['upload_option'] == 'server') {
    //             // Logic for selecting image from server
    //             if (isset($_FILES['server_image']['name']) && !empty($_FILES['server_image']['name'])) {
    //                 $config['upload_path'] = './uploads/';
    //                 $config['allowed_types'] = 'jpg|jpeg|png|gif';
    //                 $config['max_size'] = 2048; // 2MB limit (adjust as needed)
    //                 $this->load->library('upload', $config);
    //                 if (!$this->upload->do_upload('server_image')) {
    //                     $error = $this->upload->display_errors();
    //                     echo $error; // Handle error
    //                     return;
    //                 } else {
    //                     $upload_data = $this->upload->data();
    //                     $images = $upload_data['file_name'];
    //                 }
    //             } else {
    //                 echo "Please select an image from the server."; // Handle error
    //                 return;
    //             }
    //         }
	
	// 			// Proceed with storing $images in the database
	// 			if ($this->imagebank_model->imagebank_data_submit($data, $images) == true) {
	// 				redirect("admin/imagebank/imagebank_view");
	// 			} else {
	// 				$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
	// 			}
	// 		}
	// 	} else {
	// 		redirect('admin/auth/login');
	// 	}
	// }
	

    public function add_imagebank()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data['server_images'] = $this->imagebank_model->get_server_images();
            $data['view'] = 'admin/imagebank/add_imagebank';
            $this->load->view('admin/layout', $data);
        } else {
            redirect('admin/auth/login');
        }
    }

    public function imagebank_submit_data()
    {
        if ($this->session->has_userdata('is_admin_login')) {
            $data = $this->input->post();
            $images = '';

            if ($data['upload_option'] == 'local') {
                $config['upload_path'] = 'uploads/imagebank';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('images')) {
                    $uploadData = $this->upload->data();
                    $images = $uploadData['file_name'];
                } else {
                    $error = $this->upload->display_errors();
                    echo $error;
                    return;
                }
            } elseif ($data['upload_option'] == 'server') {
				// Handle server image selection
				if (!empty($data['selected_server_image'])) {
					$images = $data['selected_server_image'];
				} else {
					echo "Please select an image from the server.";
					return;
				}
			}

            if ($this->imagebank_model->imagebank_data_submit($data, $images)) {
                redirect("admin/imagebank/imagebank_view");
            } else {
                $data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
            }
        } else {
            redirect('admin/auth/login');
        }
    }
	public function imagebank_view()
	{
		if ($this->session->has_userdata('is_admin_login')) {

			$data['imagebank_view'] = $this->imagebank_model->imagebank_view();
			$data['view'] = 'admin/imagebank/view_imagebank';
			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}


	public function imagebank_edit($id)
	{
		if ($this->session->has_userdata('is_admin_login')) {

			$id = $this->uri->segment(4);

			$data['view_imagebank'] = $this->imagebank_model->imagebank_edit($id);
			$data['view'] = 'admin/imagebank/edit_imagebank';
			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function imagebank_update_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {

			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				$config['upload_path'] = 'uploads/imagebank';
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
				if ($this->imagebank_model->imagebank_update_data($data, $images) == true) {

					redirect("admin/imagebank/imagebank_view");
				} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function imagebank_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->imagebank_model->imagebank_delete($id) == true) {

							redirect("imagebank/view_imagebank");
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function index()
				{
					$this->load->model('imagebank_model');
					$category = 'imagebank_category';
					$data['imagebanks'] = $this->imagebank_model->get_recent_imagebanks($category);
					$this->load->view('imagebank_view', $data);
				}
			}
							?>