<?php
defined('BASEPATH') or exit('No direct script access allowed');

class contact_us extends MY_Controller
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
		$this->load->model('admin/contact_us_model', 'contact_us_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_contact_us()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/contact_us/add_contact_us';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function contact_us_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				$config['upload_path'] = 'uploads';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('contact_us_image'))
				{
					$uploadData = $this->upload->data();
					$contact_us_image = $uploadData['file_name'];
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->contact_us_model->contact_us_data_submit($data,$contact_us_image) == true) {

					redirect("admin/contact_us/contact_us_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function contact_us_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['contact_us_view'] = $this->contact_us_model->contact_us_view();
					$data['view'] = 'admin/contact_us/view_contact_us';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function contact_us_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_contact_us'] = $this->contact_us_model->contact_us_edit($id);
					$data['view'] = 'admin/contact_us/edit_contact_us';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function contact_us_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();


						if ($this->contact_us_model->contact_us_update_data($data) == true) {

							redirect("contact_us/view_contact_us");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function contact_us_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->contact_us_model->contact_us_delete($id) == true) {

							redirect("contact_us/view_contact_us");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>