<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pricing extends MY_Controller
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
		$this->load->model('admin/Pricing_model', 'Pricing_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_pricing()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/pricing/add_pricing';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function pricing_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();

				if ($this->Pricing_model->pricing_data_submit($data) == true) {

					redirect("pricing/view_pricing");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}
			public function pricing_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['pricing_view'] = $this->Pricing_model->pricing_view();
					$data['view'] = 'admin/pricing/view_pricing';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function pricing_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_pricing'] = $this->Pricing_model->pricing_edit($id);
					$data['view'] = 'admin/pricing/edit_pricing';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function pricing_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();


						if ($this->Pricing_model->pricing_update_data($data) == true) {

							redirect("pricing/view_pricing");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function pricing_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->Pricing_model->pricing_delete($id) == true) {

							redirect("pricing/view_pricing");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
	

}
?>