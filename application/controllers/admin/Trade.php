<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Trade extends MY_Controller
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
		$this->load->model('admin/trade_model', 'trade_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_trade()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/trade/add_trade';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function trade_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
					$config['upload_path'] = 'uploads/trade';
					$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
					$config['encrypt_name'] = TRUE;
					$this->load->library('upload',$config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('trade_image'))
					{
						$uploadData = $this->upload->data();
						$trade_image = $uploadData['file_name'];
					}
					else
					{
						$error = array('error' => $this->upload->display_errors());
						print_r($error);
					}
				
				if ($this->trade_model->trade_data_submit($data, $trade_image) == true) {

					redirect("admin/trade/trade_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function trade_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['trade_view'] = $this->trade_model->trade_view();
					$data['view'] = 'admin/trade/view_trade';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function trade_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_trade'] = $this->trade_model->trade_edit($id);
					$data['view'] = 'admin/trade/edit_trade';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function trade_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();
						$config['upload_path'] = 'uploads/trade';
						$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
						$config['encrypt_name'] = TRUE;
						$this->load->library('upload',$config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('trade_image'))
						{
							$uploadData = $this->upload->data();
							$trade_image = $uploadData['file_name'];
						}
						else
						{
							$error = array('error' => $this->upload->display_errors());
							print_r($error);
						}
						if ($this->trade_model->trade_update_data($data,$trade_image) == true) {
		
							redirect("admin/trade/trade_view");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function trade_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->trade_model->trade_delete($id) == true) {

							redirect("trade/view_trade");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
	public function index() {
        $this->load->model('trade_model');
        $category = 'trade_category';
        $data['trades'] = $this->trade_model->get_recent_trades($category);
        $this->load->view('trade_view', $data);
    }
}
?>