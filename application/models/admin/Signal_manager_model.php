<?php
class signal_manager_model extends CI_Model
{
    public function add_signal_manager($data)
	{
	   
		$this->db->insert('signal_manager', $data);
		return $this->db->insert_id();
	}

	public function signal_manager_data_submit($data,$profile_image,$sample_chart)
	{
		$data = [
			'username' => $data['username'],
			'firstname' => $data['firstname'],
			'lastname' => $data['lastname'],
			'mobile_no' => $data['mobile_no'],
			'password' => $data['password'],
			'role_name' => $data['role_name'],
			'email' => $data['email'],
			'linkedin' => $data['linkedin'],
			'profile_image' => $profile_image,
			'sample_chart' => $sample_chart,
		];
		if ($this->db->insert('signal_manager', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function signal_manager_view()
	{
		$result = $this->db->query("SELECT * FROM `signal_manager`");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function signal_manager_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('signal_manager');
	}


	public function signal_manager_update_data($data,$profile_image)
	{
		
		$newdata = [
			'name' => $data['name'],
			'password' => $data['password'],
			'role_name' => $data['role_name'],
			'email' => $data['email'],
			'profile_image' => $profile_image,
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('signal_manager', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
		
	}


	public function signal_manager_edit($signal_manager_id)
{
    $result = $this->db->query("SELECT * FROM `signal_manager` WHERE id=$signal_manager_id");
    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return null;
    }
}


    public function resolve_signal_manager_login($email, $password) {
		
		$this->db->select('password');
		$this->db->from('signal_manager');
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
        public function get_signal_manager_id_from_signal_managername($email) {
		
            $this->db->select('id');
            $this->db->from('signal_manager');
            $this->db->where('email', $email);
    
            return $this->db->get()->row('id');
            
        }
        public function get_signal_manager($signal_manager_id) {
		
            $this->db->from('signal_manager');
            $this->db->where('id', $signal_manager_id);
            return $this->db->get()->row();
            
        }
		
		public function get_signal_manager_status($email, $mobile)
{
    $signal_manager = null;
    
    // Check if both email and mobile are provided
    if ($email && $mobile) {
        $signal_manager = $this->db->get_where('signal_manager', ['email' => $email, 'mobile_no' => $mobile])->row();
    } elseif ($email) {
        $signal_manager = $this->db->get_where('signal_manager', ['email' => $email])->row();
    } elseif ($mobile) {
        $signal_manager = $this->db->get_where('signal_manager', ['mobile_no' => $mobile])->row();
    }
    
    if ($signal_manager) {
        return ['status' => $signal_manager->status];
    } else {
        // Determine which field is not valid
        if ($email && $mobile) {
            return ['error' => 'Invalid email and mobile number combination.'];
        } elseif ($email) {
            return ['error' => 'Invalid email.'];
        } elseif ($mobile) {
            return ['error' => 'Invalid mobile number.'];
        } else {
            return ['error' => 'Please provide email or mobile number.'];
        }
    }
}


}
