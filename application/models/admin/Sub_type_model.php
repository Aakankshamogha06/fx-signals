<?php
class sub_type_model extends CI_Model
{


	public function sub_type_data_submit($data)
	{
		$data = [
			'sub_type_name' => $data['sub_type_name'],
			
		];
		if ($this->db->insert('sub_type', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function sub_type_view()
	{
		$result = $this->db->query("SELECT * from sub_type ");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function sub_type_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('sub_type');
	}


	public function sub_type_update_data($data)
	{
		
		$newdata = [
			'sub_type_name' => $data['sub_type_name'],
			
            
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('sub_type', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function sub_type_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `sub_type` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}
}
