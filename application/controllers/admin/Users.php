<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation', 'email'));
		$this->load->database();
		$this->load->model('admin/User_model', 'User_model');
		$this->load->library('email');
	}

	public function index()
	{


		if ($this->session->has_userdata('is_admin_login')) {
			$data['all_users'] = $this->User_model->get_all_users();
			$data['view'] = 'admin/users/user_list';
			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function student_view()
	{
		if ($this->session->has_userdata('is_admin_login')) {
			$data['all_users'] = $this->User_model->get_all_users();
			$data['view'] = 'admin/users/student';
			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function add()
	{
		if ($this->session->has_userdata('is_admin_login')) {
			if ($this->input->post('submit')) {

				$this->form_validation->set_rules('firstname', 'Username', 'trim|required');
				$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
				$this->form_validation->set_rules('email', 'Email', 'trim|required');
				$this->form_validation->set_rules('mobile_no', 'Number', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|required');
				$this->form_validation->set_rules('user_role', 'User Role', 'trim|required');

				if ($this->form_validation->run() == FALSE) {
					$data['view'] = 'admin/users/user_add';
					$this->load->view('admin/layout', $data);
				} else {
					$data = array(
						'username' => $this->input->post('firstname') . ' ' . $this->input->post('lastname'),
						'firstname' => $this->input->post('firstname'),
						'lastname' => $this->input->post('lastname'),
						'email' => $this->input->post('email'),
						'mobile_no' => $this->input->post('mobile_no'),
						'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
						'is_admin' => $this->input->post('user_role'),
						'created_at' => date('Y-m-d : h:m:s'),
						'updated_at' => date('Y-m-d : h:m:s'),
					);

				
					$result = $this->User_model->add_user($data);
					if ($result) {

						$this->session->set_flashdata('msg', 'Record is Updated Successfully!');
						redirect(base_url('admin/users'));
					}
				}
			} else {
				$data['view'] = 'admin/users/user_add';
				$this->load->view('admin/layout', $data);
			}

		} else {
			redirect('admin/auth/login');
		}
	}

	public function edit($id = 0)
	{
		if ($this->session->has_userdata('is_admin_login')) {
			if ($this->input->post('submit')) {
				$this->form_validation->set_rules('firstname', 'Username', 'trim|required');
				$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required');
				$this->form_validation->set_rules('email', 'Email', 'trim|required');
				$this->form_validation->set_rules('mobile_no', 'Number', 'trim|required');
				$this->form_validation->set_rules('user_role', 'User Role', 'trim|required');

				if ($this->form_validation->run() == FALSE) {
					$data['user'] = $this->User_model->get_user_by_id($id);
					$data['view'] = 'admin/users/user_edit';
					$this->load->view('admin/layout', $data);
				} else {
					$data = array(
						'username' => $this->input->post('firstname') . ' ' . $this->input->post('lastname'),
						'firstname' => $this->input->post('firstname'),
						'lastname' => $this->input->post('lastname'),
						'email' => $this->input->post('email'),
						'mobile_no' => $this->input->post('mobile_no'),
						'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
						'is_admin' => $this->input->post('user_role'),
						'updated_at' => date('Y-m-d : h:m:s'),
					);
					$data = $this->security->xss_clean($data);
					$result = $this->User_model->edit_user($data, $id);
					if ($result) {
						$this->session->set_flashdata('msg', 'Record is Updated Successfully!');
						redirect(base_url('admin/users'));
					}
				}
			} else {
				$data['user'] = $this->User_model->get_user_by_id($id);
				$data['view'] = 'admin/users/user_edit';
				$this->load->view('admin/layout', $data);
			}
		} else {
			redirect('admin/auth/login');
		}
	}

	public function del($id = 0)
	{
		if ($this->session->has_userdata('is_admin_login')) {
			$this->db->delete('users', array('id' => $id));
			$this->session->set_flashdata('msg', 'Record is Deleted Successfully!');
			redirect(base_url('admin/users'));
		} else {
			redirect('admin/auth/login');
		}
	}

	

	function verify($hash = NULL)
	{
		$this->load->helper('url');
		$this->load->model('User_model');

		if ($this->User_model->verifyEmailID($hash)) {

			redirect('admin/auth/login');
		} else {

			redirect('admin/auth/login');
		}
	}

	public function web_view()
	{
		$result = $this->db->query("SELECT * FROM `users`");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}

	public function fetch_state()
	{
		if ($this->input->post('country_id')) {
			echo $this->User_model->fetch_state($this->input->post('country_id'));
		}
	}

	public function fetch_city()
	{
		if ($this->input->post('state_id')) {
			echo $this->User_model->fetch_city($this->input->post('state_id'));
		}
	}

	public function student_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {
			$data['getall_users'] = $this->User_model->getall_users();
			$data['view'] = 'admin/users/student';
			$this->load->view('admin/layout', $data);
			
		} else {
			redirect('admin/auth/login');
		}
	}
}
?>