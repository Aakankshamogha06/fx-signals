<?php
defined('BASEPATH') or exit('No direct script access allowed');

class charts extends MY_Controller
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
		$this->load->model('admin/charts_model', 'charts_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_charts()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/charts/add_charts';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function charts_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				$config['upload_path'] = 'uploads/charts';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('image1'))
				{
					$uploadData = $this->upload->data();
					$image1 = $uploadData['file_name'];
				}
                if($this->upload->do_upload('image2'))
				{
					$uploadData = $this->upload->data();
					$image2 = $uploadData['file_name'];
				}
                if($this->upload->do_upload('images1'))
				{
					$uploadData = $this->upload->data();
					$images1 = $uploadData['file_name'];
				}
                if($this->upload->do_upload('images2'))
				{
					$uploadData = $this->upload->data();
					$images2 = $uploadData['file_name'];
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->charts_model->charts_data_submit($data,$image1,$image2,$images1,$images2) == true) {

					redirect("admin/charts/charts_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function charts_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['charts_view'] = $this->charts_model->charts_view();
					$data['view'] = 'admin/charts/view_charts';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function charts_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_charts'] = $this->charts_model->charts_edit($id);
					$data['view'] = 'admin/charts/edit_charts';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function charts_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();


						if ($this->charts_model->charts_update_data($data) == true) {

							redirect("charts/view_charts");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function charts_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->charts_model->charts_delete($id) == true) {

							redirect("charts/view_charts");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>