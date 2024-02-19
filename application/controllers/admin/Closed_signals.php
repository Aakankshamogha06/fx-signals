
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class closed_signals extends MY_Controller
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
		$this->load->model('admin/closed_signals_model', 'closed_signals_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}



	public function fetch_sub_category()
    {
        $postData = $this->input->post();
        $data = $this->closed_signals_model->fetch_sub_category($postData['category']);
        echo json_encode($data);
    }


	public function add_closed_signals()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/closed_signals/add_closed_signals';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function closed_signals_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				if ($this->closed_signals_model->closed_signals_data_submit($data) == true) {

					redirect("admin/closed_signals/closed_signals_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function closed_signals_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['closed_signals_view'] = $this->closed_signals_model->closed_signals_view();
					$data['view'] = 'admin/closed_signals/view_closed_signals';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function closed_signals_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_closed_signals'] = $this->closed_signals_model->closed_signals_edit($id);
					$data['view'] = 'admin/closed_signals/edit_closed_signals';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function closed_signals_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();
						
						if ($this->closed_signals_model->closed_signals_update_data($data) == true) {
		
							redirect("admin/closed_signals/closed_signals_view");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function closed_signals_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->closed_signals_model->closed_signals_delete($id) == true) {

							redirect("closed_signals/view_closed_signals");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>