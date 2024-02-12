<?php
defined('BASEPATH') or exit('No direct script access allowed');

class author_pricing_features extends MY_Controller
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
		$this->load->model('admin/author_pricing_features_model', 'author_pricing_features_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_author_pricing_features()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/author_pricing_features/add_author_pricing_features';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function author_pricing_features_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();

				if ($this->author_pricing_features_model->author_pricing_features_data_submit($data) == true) {

					redirect("author_pricing_features/view_author_pricing_features");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}
			public function author_pricing_features_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['author_pricing_features_view'] = $this->author_pricing_features_model->author_pricing_features_view();
					$data['view'] = 'admin/author_pricing_features/view_author_pricing_features';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function author_pricing_features_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_author_pricing_features'] = $this->author_pricing_features_model->author_pricing_features_edit($id);
					$data['view'] = 'admin/author_pricing_features/edit_author_pricing_features';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function author_pricing_features_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();


						if ($this->author_pricing_features_model->author_pricing_features_update_data($data) == true) {

							redirect("author_pricing_features/view_author_pricing_features");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function author_pricing_features_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->author_pricing_features_model->author_pricing_features_delete($id) == true) {

							redirect("author_pricing_features/view_author_pricing_features");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
	

}
?>