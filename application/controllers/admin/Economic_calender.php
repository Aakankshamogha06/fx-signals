<?php
defined('BASEPATH') or exit('No direct script access allowed');

class economic_calender extends MY_Controller
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
		$this->load->model('admin/economic_calender_model', 'economic_calender_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_economic_calender()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/economic_calender/add_economic_calender';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function economic_calender_submit_data()
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
				if($this->upload->do_upload('economic_calender_image'))
				{
					$uploadData = $this->upload->data();
					$economic_calender_image = $uploadData['file_name'];
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->economic_calender_model->economic_calender_data_submit($data,$economic_calender_image) == true) {

					redirect("admin/economic_calender/economic_calender_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function economic_calender_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['economic_calender_view'] = $this->economic_calender_model->economic_calender_view();
					$data['view'] = 'admin/economic_calender/view_economic_calender';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function economic_calender_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_economic_calender'] = $this->economic_calender_model->economic_calender_edit($id);
					$data['view'] = 'admin/economic_calender/edit_economic_calender';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function economic_calender_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();


						if ($this->economic_calender_model->economic_calender_update_data($data) == true) {

							redirect("economic_calender/view_economic_calender");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function economic_calender_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->economic_calender_model->economic_calender_delete($id) == true) {

							redirect("economic_calender/view_economic_calender");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>