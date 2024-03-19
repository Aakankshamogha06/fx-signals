<?php
defined('BASEPATH') or exit('No direct script access allowed');

class forecast extends MY_Controller
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
		$this->load->model('admin/forecast_model', 'forecast_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_forecast()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/forecast/add_forecast';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function forecast_submit_data()
{
    if ($this->session->has_userdata('is_admin_login')) {
        $data = $this->input->post();
        $config['upload_path'] = 'uploads/forecast/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $upload_errors = array();

        // Process each uploaded file
        foreach ($_FILES['forecast_image']['name'] as $key => $value) {
            $_FILES['userfile']['name'] = $_FILES['forecast_image']['name'][$key];
            $_FILES['userfile']['type'] = $_FILES['forecast_image']['type'][$key];
            $_FILES['userfile']['tmp_name'] = $_FILES['forecast_image']['tmp_name'][$key];
            $_FILES['userfile']['error'] = $_FILES['forecast_image']['error'][$key];
            $_FILES['userfile']['size'] = $_FILES['forecast_image']['size'][$key];

            if ($this->upload->do_upload('userfile')) {
                $uploadData = $this->upload->data();
                $forecast_images[] = $uploadData['file_name'];
            } else {
                $upload_errors[] = $this->upload->display_errors();
            }
        }

        if (!empty($forecast_images)) {
            // Save the forecast data with multiple images
            $this->forecast_model->forecast_data_submit($data, $forecast_images);
            redirect("admin/forecast/forecast_view");
        } else {
            // Handle upload errors
            print_r($upload_errors);
        }
    } else {
        redirect('admin/auth/login');
    }
}


			
			public function forecast_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['forecast_view'] = $this->forecast_model->forecast_view();
					$data['view'] = 'admin/forecast/view_forecast';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function forecast_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_forecast'] = $this->forecast_model->forecast_edit($id);
					$data['view'] = 'admin/forecast/edit_forecast';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function forecast_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();

						$data = $this->input->post();
						$config['upload_path'] = 'uploads/forecast/';
						$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
						$config['encrypt_name'] = TRUE;
						$this->load->library('upload',$config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('forecast_image'))
						{
							$uploadData = $this->upload->data();
							$forecast_image = $uploadData['file_name'];
						}
						
						else
						{
							$error = array('error' => $this->upload->display_errors());
							print_r($error);
						}
						if ($this->forecast_model->forecast_update_data($data,$forecast_image) == true) {

							redirect("forecast/view_forecast");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function forecast_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->forecast_model->forecast_delete($id) == true) {

							redirect("forecast/view_forecast");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
	public function index() {
        $this->load->model('forecast_model');
        $category = 'blog_category';
        $data['blogs'] = $this->forecast_model->get_recent_blogs($category);
        $this->load->view('blog_view', $data);
    }
}
?>