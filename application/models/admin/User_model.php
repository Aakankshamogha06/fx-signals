<?php
class User_model extends CI_Model
{

	public function add_user($data)
	{
	   
		$this->db->insert('users', $data);
		return $this->db->insert_id();
	}

	public function get_all_users()
	{
		if ($this->session->userdata('role') === '2') {
			$user_id = $this->session->userdata('admin_id');
		 $query = $this->db->query("SELECT *,(SELECT role_name FROM `role` where id=is_admin) as role_name FROM `users` where id=$user_id;");
		
		}else{
			$query = $this->db->query("SELECT *,(SELECT role_name FROM `role` where id=is_admin) as role_name FROM `users`;");
		}
		return $result = $query->result_array();
	}



	public function get_user_by_id($id)
	{
		$query = $this->db->get_where('users', array('id' => $id));
		return $result = $query->row_array();
	}

	public function edit_user($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('users', $data);
		return true;
	}


	public function role_fetch()
	{

		$role_data = $this->db->query("SELECT * FROM `role`");

		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();

		} else {
			return false;
		}
	}

	// public function upgradeToPremium($userId) {
    //     // Update user's premium status in the database
    //     $this->db->set('is_premium', 1);
    //     $this->db->where('id', $userId);
    //     $this->db->update('users');
    // }
	public function setPremiumStatus($userId)
{
    $this->db->set('is_premium', 1); // Assuming 'is_premium' is a column in your users table indicating premium status
    $this->db->where('id', $userId);
    $this->db->update('users');
}

	public function fetch_state($country_id)
	{
		$this->db->where('country_id', $country_id);
		$this->db->order_by('name', 'ASC');
		$query = $this->db->get('states');
		$output = '<option value="">Select State</option>';
		foreach ($query->result() as $row) {
			$output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
		}
		return $output;
	}

	public function fetch_city($state_id)
	{
		$this->db->where('state_id', $state_id);
		$this->db->order_by('name', 'ASC');
		$query = $this->db->get('cities');
		$output = '<option value="">Select City</option>';
		foreach ($query->result() as $row) {
			$output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
		}
		return $output;
	}

	public function state_countrey()
	{
		$role_data = $this->db->query("SELECT * FROM `countries`");
		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();
		} else {
			return false;
		}
	}

	//send verification email to user's email id
	function sendEmail($to_email)
	{
		$from_email = 'aakankshamogha06@gmail.com'; //change this to yours
		$subject = 'Abc';
		$message = 'Dear User,<br /><br />Please click on the below activation link to verify your email address.<br /><br /> http://localhost/evotingcucukan/voter_register/verify/' . md5($to_email) . '<br /><br /><br />Thanks<br />Mydomain Team';

		//configure email settings
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.googlemail.com'; //smtp host name
		$config['smtp_port'] = '465'; //smtp port number
		$config['smtp_user'] = $from_email;
		$config['smtp_pass'] = 'mypassword'; //$from_email password
		$config['mailtype'] = 'html';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['newline'] = "\r\n"; //use double quotes
		$this->email->initialize($config);

		//send mail
		$this->email->from($from_email, 'Admin Evoting');
		$this->email->to($to_email);
		$this->email->subject($subject);
		$this->email->message($message);
		return $this->email->send();
	}

	//activate user account
	function verifyEmailID($key)
	{
		$data = array('status' => 1);
		$this->db->where(md5('email'), $key);
		$this->db->update('user', $data);
	}

	public function getall_users()
	{
		if ($this->session->userdata('role') === '2') {

            $user_id = $this->session->userdata('admin_id');
            $result = $this->db->query("SELECT *,(SELECT role_name FROM `role` where id=is_admin) as role_name,(SELECT countries.name from `countries` where countries.id=users.country) as country,(SELECT states.name from `states` where states.id=users.state) as state_name,(SELECT cities.name from `cities` where cities.id=users.city) as city,(SELECT branch.branch from `branch` where branch.id=users.branch_name) as branch_name FROM `users` where id=$user_id ;");
        } else {
            $result = $this->db->query("SELECT *,(SELECT role_name FROM `role` where id=is_admin) as role_name,(SELECT countries.name from `countries` where countries.id=users.country) as country,(SELECT states.name from `states` where states.id=users.state) as state_name,(SELECT cities.name from `cities` where cities.id=users.city) as city,(SELECT branch.branch from `branch` where branch.id=users.branch_name) as branch_name FROM `users`;");
        }
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return 0;
        }
	}
	public function resolve_user_login($email, $password) {
		
		$this->db->select('password');
		$this->db->from('users');
		$this->db->where('email', $email);
		$hash = $this->db->get()->row('password');
		
		return $this->verify_password_hash($password, $hash);
		
	}

	
	public function hash_password($password)
{
    return password_hash($password, PASSWORD_BCRYPT);
}
	
	
	public function verify_password_hash($password, $hash) {
		
		return password_verify($password, $hash);
		
	}

	public function get_user_id_from_username($email) {
		
		$this->db->select('id');
		$this->db->from('users');
		$this->db->where('email', $email);

		return $this->db->get()->row('id');
		
	}
	
	public function get_user($user_id) {
		
		$this->db->from('users');
		$this->db->where('id', $user_id);
		return $this->db->get()->row();
		
	}

	public function current_user($user_id)

{
	$this->db->select('id,username,email,mobile_no');
	$this->db->from('users');
	$this->db->where('id', $user_id);

	return $this->db->get()->row();
}





}
?>