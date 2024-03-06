<?php
class enquiry_model extends CI_Model
{


	public function enquiry_data_submit($data,$enquiry_image)
	{
		$data = [
			'title' => $data['title'],
			'publish_date' => $data['publish_date'],
			'enquiry_desc' => $data['enquiry_desc'],
			'category' => $data['category'],
			'sub_category' => $data['sub_category'],
			'enquiry_image' => $enquiry_image,
            'author' => $data['author'],
			'enquiry_type' => $data['enquiry_type'],
			'enquiry_package' => $data['enquiry_package'],
		];
		if ($this->db->insert('enquiry', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function enquiry_view()
	{
		$result = $this->db->query("SELECT * FROM `enquiry` ");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function enquiry_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('enquiry');
	}


	public function enquiry_update_data($data)
	{
		
		$newdata = [
			'user_id' => $data['user_id'],
			'message' => $data['message'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('enquiry', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
		
	}


	public function enquiry_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `enquiry` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}

   
    public function get_enquiry_by_user($user_id)
    {
        $this->db->select('enquiry.id, user_id, message');
        $this->db->from('enquiry');
        $this->db->where('enquiry.user_id', $user_id);

        $result = $this->db->get();

        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

	
	
}
