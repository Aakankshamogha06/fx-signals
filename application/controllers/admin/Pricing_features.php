<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pricing_features extends MY_Controller
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
		$this->load->model('admin/pricing_features_model', 'pricing_features_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_pricing_features()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/pricing_features/add_pricing_features';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function pricing_features_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();

				if ($this->pricing_features_model->pricing_features_data_submit($data) == true) {

					redirect("pricing_features/view_pricing_features");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}
			public function pricing_features_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['pricing_features_view'] = $this->pricing_features_model->pricing_features_view();
					$data['view'] = 'admin/pricing_features/view_pricing_features';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function pricing_features_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_pricing_features'] = $this->pricing_features_model->pricing_features_edit($id);
					$data['view'] = 'admin/pricing_features/edit_pricing_features';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function pricing_features_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();


						if ($this->pricing_features_model->pricing_features_update_data($data) == true) {

							redirect("pricing_features/view_pricing_features");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function pricing_features_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->pricing_features_model->pricing_features_delete($id) == true) {

							redirect("pricing_features/view_pricing_features");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
	

}
?>