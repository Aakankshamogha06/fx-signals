<?php
defined('BASEPATH') or exit('No direct script access allowed');

class broker_detail extends MY_Controller
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
		$this->load->model('admin/broker_detail_model', 'broker_detail_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_broker_detail()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/broker_detail/add_broker_detail';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function broker_detail_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				
				if ($this->broker_detail_model->broker_detail_data_submit($data) == true) {

					redirect("admin/broker_detail/broker_detail_view");
				}
               
                ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function broker_detail_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['broker_detail_view'] = $this->broker_detail_model->broker_detail_view();
					$data['view'] = 'admin/broker_detail/view_broker_detail';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function broker_detail_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_broker_detail'] = $this->broker_detail_model->broker_detail_edit($id);
					$data['view'] = 'admin/broker_detail/edit_broker_detail';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function broker_detail_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();
						if ($this->broker_detail_model->broker_detail_update_data($data) == true) {
							redirect("broker_detail/view_broker_detail");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function broker_detail_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->broker_detail_model->broker_detail_delete($id) == true) {

							redirect("broker_detail/view_broker_detail");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
	public function index() {
        $this->load->model('broker_detail_model');
        $category = 'blog_category';
        $data['blogs'] = $this->broker_detail_model->get_recent_blogs($category);
        $this->load->view('blog_view', $data);
    }
}
?>