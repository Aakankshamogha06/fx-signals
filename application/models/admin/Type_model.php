<?php
class type_model extends CI_Model
{


	public function type_data_submit($data)
	{
		$data = [
			'type_name' => $data['type_name'],
			
		];
		if ($this->db->insert('type', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function type_view()
	{
		$result = $this->db->query("SELECT * from type ");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function type_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('type');
	}


	public function type_update_data($data)
	{
		
		$newdata = [
			'type_name' => $data['type_name'],
			
            
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('type', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function type_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `type` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}
}
