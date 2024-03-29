<?php
class author_model extends CI_Model
{
    public function add_author($data)
	{
	   
		$this->db->insert('author', $data);
		return $this->db->insert_id();
	}

	public function author_data_submit($data,$profile_image,$sample_article)
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
			'sample_article' => $sample_article,
		];
		if ($this->db->insert('author', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function author_view()
	{
		$result = $this->db->query("SELECT * FROM `author`");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function author_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('author');
	}


	public function author_update_data($data,$profile_image)
	{
		
		$newdata = [
			'name' => $data['name'],
			'password' => $data['password'],
			'role_name' => $data['role_name'],
			'email' => $data['email'],
			'profile_image' => $profile_image,
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('author', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
		
	}


	public function author_edit($author_id)
{
    $result = $this->db->query("SELECT * FROM `author` WHERE id=$author_id");
    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return null;
    }
}


    public function resolve_author_login($email, $password) {
		
		$this->db->select('password');
		$this->db->from('author');
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
        public function get_author_id_from_authorname($email) {
		
            $this->db->select('id');
            $this->db->from('author');
            $this->db->where('email', $email);
    
            return $this->db->get()->row('id');
            
        }
        public function get_author($author_id) {
		
            $this->db->from('author');
            $this->db->where('id', $author_id);
            return $this->db->get()->row();
            
        }
		
		public function get_author_status($email, $mobile)
{
    $author = null;
    
    // Check if both email and mobile are provided
    if ($email && $mobile) {
        $author = $this->db->get_where('author', ['email' => $email, 'mobile_no' => $mobile])->row();
    } elseif ($email) {
        $author = $this->db->get_where('author', ['email' => $email])->row();
    } elseif ($mobile) {
        $author = $this->db->get_where('author', ['mobile_no' => $mobile])->row();
    }
    
    if ($author) {
        return ['status' => $author->status];
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
