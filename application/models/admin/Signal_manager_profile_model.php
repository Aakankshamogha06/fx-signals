<?php
class signal_manager_profile_model extends CI_Model
{

    public function getLoggedInUserInfo()
    {
        $admin_id = $this->session->userdata('admin_id');
        $query = $this->db->get_where('users', array('id' => $admin_id));
        return $query->row_array();
        
    }

    public function signal_manager_profile_data_submit($data,$signal_manager_profile_image)
    {
        
        $user_info = $this->getLoggedInUserInfo();  
        $aid = $this->session->userdata('admin_id');  

    $data = [
        'username' => $user_info['username'],   
        'mobile_no' => $user_info['mobile_no'],
        'signal_manager_profile_image' => $signal_manager_profile_image, 
        'email' => $user_info['email'] ,  
        'linkedin' => $data['linkedin'],
        'twitter' => $data['twitter'],
        'facebook' => $data['facebook'],
        'instagram' => $data['instagram'],
        'about' => $data['about'],
        'signal_manager_id' => $aid,
    ];


if ($this->db->insert('signal_manager_profile', $data)) {

    return $data;
} else {
    return false;
}
    }
    
	public function signal_manager_profile_view($id)
	{
		if (($this->session->userdata('role') === '1')) {  
		$result = $this->db->query("SELECT * FROM `signal_manager_profile` ");
		 }
		 else{
			
			 
			 $result = $this->db->query("SELECT * FROM `signal_manager_profile`where signal_manager_id=$id ");
             
		 }
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function signal_manager_profile_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('signal_manager_profile');
	}


	public function signal_manager_profile_update_data($data)
	{
		$aid= $this->session->userdata('admin_id');
		$newdata = [
			'linkedin' => $data['linkedin'],
			'twitter' => $data['twitter'],
			'facebook' => $data['facebook'],
			'instagram' => $data['instagram'],
			'about' => $data['about'],
			'signal_manager_id'=>$aid,
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('signal_manager_profile', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
		
	}


	public function signal_manager_profile_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `signal_manager_profile` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}	
	public function signal_manager_profile($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `signal_manager_profile` where signal_manager_profile.signal_manager_id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }
}
