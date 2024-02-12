
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class trading_signals extends MY_Controller
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
		$this->load->model('admin/trading_signals_model', 'trading_signals_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}



	public function fetch_sub_category()
    {
        $postData = $this->input->post();
        $data = $this->trading_signals_model->fetch_sub_category($postData['category']);
        echo json_encode($data);
    }


	public function add_trading_signals()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/trading_signals/add_trading_signals';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function trading_signals_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				if ($this->trading_signals_model->trading_signals_data_submit($data) == true) {

					redirect("admin/trading_signals/trading_signals_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function trading_signals_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['trading_signals_view'] = $this->trading_signals_model->trading_signals_view();
					$data['view'] = 'admin/trading_signals/view_trading_signals';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function trading_signals_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_trading_signals'] = $this->trading_signals_model->trading_signals_edit($id);
					$data['view'] = 'admin/trading_signals/edit_trading_signals';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function trading_signals_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();
						
						if ($this->trading_signals_model->trading_signals_update_data($data) == true) {
		
							redirect("admin/trading_signals/trading_signals_view");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function trading_signals_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->trading_signals_model->trading_signals_delete($id) == true) {

							redirect("trading_signals/view_trading_signals");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>