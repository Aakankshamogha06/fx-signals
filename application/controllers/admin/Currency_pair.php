<?php
defined('BASEPATH') or exit('No direct script access allowed');

class currency_pair extends MY_Controller
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
		$this->load->model('admin/currency_pair_model', 'currency_pair_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_currency_pair()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/currency_pair/add_currency_pair';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function currency_pair_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				if ($this->currency_pair_model->currency_pair_data_submit($data) == true) {

					redirect("admin/currency_pair/currency_pair_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function currency_pair_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['currency_pair_view'] = $this->currency_pair_model->currency_pair_view();
					$data['view'] = 'admin/currency_pair/view_currency_pair';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function currency_pair_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_currency_pair'] = $this->currency_pair_model->currency_pair_edit($id);
					$data['view'] = 'admin/currency_pair/edit_currency_pair';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function currency_pair_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();
						
						if ($this->currency_pair_model->currency_pair_update_data($data) == true) {
		
							redirect("admin/currency_pair/currency_pair_view");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function currency_pair_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->currency_pair_model->currency_pair_delete($id) == true) {

							redirect("currency_pair/view_currency_pair");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>