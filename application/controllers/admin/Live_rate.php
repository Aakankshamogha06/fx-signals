<?php
defined('BASEPATH') or exit('No direct script access allowed');

class live_rate extends MY_Controller
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
		$this->load->model('admin/live_rate_model', 'live_rate_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_live_rate()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/live_rate/add_live_rate';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function live_rate_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				
				if ($this->live_rate_model->live_rate_data_submit($data) == true) {

					redirect("admin/live_rate/live_rate_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function live_rate_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['live_rate_view'] = $this->live_rate_model->live_rate_view();
					$data['view'] = 'admin/live_rate/view_live_rate';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function live_rate_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_live_rate'] = $this->live_rate_model->live_rate_edit($id);
					$data['view'] = 'admin/live_rate/edit_live_rate';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function live_rate_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();
						if ($this->live_rate_model->live_rate_update_data($data) == true) {
		
							redirect("admin/live_rate/live_rate_view");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function live_rate_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->live_rate_model->live_rate_delete($id) == true) {

							redirect("live_rate/view_live_rate");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
	public function index() {
        $this->load->model('live_rate_model');
        $category = 'live_rate_category';
        $data['live_rates'] = $this->live_rate_model->get_recent_live_rates($category);
        $this->load->view('live_rate_view', $data);
    }
}
?>