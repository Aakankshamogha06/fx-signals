<?php
class contact_us_model extends CI_Model
{


	public function contact_us_data_submit($data)
	{
		$data = [
			'name' => $data['name'],
            'email' => $data['email'],
            'message' => $data['message'],
			
		];
		if ($this->db->insert('contact_us', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function contact_us_view()
	{
		$result = $this->db->query("SELECT * from contact_us ");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function contact_us_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('contact_us');
	}



}
