<?php
defined('BASEPATH') or exit('No direct script access allowed');

class payment extends MY_Controller
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
		$this->load->model('admin/payment_model', 'payment_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_payment()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/payment/add_payment';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function payment_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				
				if ($this->payment_model->payment_data_submit($data) == true) {

					redirect("admin/payment/payment_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function payment_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['payment_view'] = $this->payment_model->payment_view();
					$data['view'] = 'admin/payment/view_payment';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function payment_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_payment'] = $this->payment_model->payment_edit($id);
					$data['view'] = 'admin/payment/edit_payment';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function payment_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();
						if ($this->payment_model->payment_update_data($data) == true) {
		
							redirect("admin/payment/payment_view");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function payment_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->payment_model->payment_delete($id) == true) {

							redirect("payment/view_payment");
			}
			} else {
				redirect('admin/auth/login');
		}
	}

	// //stripe
	// public function processPayment() {
    //     // Retrieve payment data from the request
    //     $paymentData = json_decode(file_get_contents('php://input'), true);

    //     // Perform necessary actions with payment data (e.g., interact with Stripe API)

    //     // Return a response
    //     $response = array(
    //         'success' => true,
    //         'message' => 'Payment processed successfully'
    //     );
    //     $this->output->set_content_type('application/json')->set_output(json_encode($response));
    // }

}
?>