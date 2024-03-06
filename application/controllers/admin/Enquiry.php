<?php
defined('BASEPATH') or exit('No direct script access allowed');

class enquiry extends MY_Controller
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
		$this->load->model('admin/enquiry_model', 'enquiry_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_enquiry()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/enquiry/add_enquiry';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function enquiry_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				
				if ($this->enquiry_model->enquiry_data_submit($data) == true) {

					redirect("admin/enquiry/enquiry_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function enquiry_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['enquiry_view'] = $this->enquiry_model->enquiry_view();
					$data['view'] = 'admin/enquiry/view_enquiry';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function enquiry_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_enquiry'] = $this->enquiry_model->enquiry_edit($id);
					$data['view'] = 'admin/enquiry/edit_enquiry';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function enquiry_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();
						$config['upload_path'] = 'uploads/enquiry';
						$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
						$config['encrypt_name'] = TRUE;
						$this->load->library('upload',$config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('enquiry_image'))
						{
							$uploadData = $this->upload->data();
							$enquiry_image = $uploadData['file_name'];
						}
						else
						{
							$error = array('error' => $this->upload->display_errors());
							print_r($error);
						}
						if ($this->enquiry_model->enquiry_update_data($data) == true) {
		
							redirect("admin/enquiry/enquiry_view");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function enquiry_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->enquiry_model->enquiry_delete($id) == true) {

							redirect("enquiry/view_enquiry");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
	public function index() {
        $this->load->model('enquiry_model');
        $category = 'enquiry_category';
        $data['enquirys'] = $this->enquiry_model->get_recent_enquirys($category);
        $this->load->view('enquiry_view', $data);
    }
}
?>