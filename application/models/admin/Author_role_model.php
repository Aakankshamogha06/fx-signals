<?php
class author_role_model extends CI_Model
{


	public function author_role_data_submit($data)
	{
		$data = [
			'author_role' => $data['author_role'],
		];
		if ($this->db->insert('author_role', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function author_role_view()
	{
		$result = $this->db->query("SELECT *  FROM `author_role` ");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function author_role_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('author_role');
	}


	public function author_role_update_data($data)
	{
		
		$newdata = [
			'author_role' => $data['author_role'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('author_role', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
		
	}


	public function author_role_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `author_role` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}

}