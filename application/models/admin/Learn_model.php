<?php
class learn_model extends CI_Model
{


	public function learn_data_submit($data)
	{
		$data = [
			'learn_type' => $data['learn_type'],
            'title' => $data['title'],
            'description' => $data['description'],
		];
		if ($this->db->insert('learn', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function learn_view()
	{
		$result = $this->db->query("SELECT * , (SELECT type_name FROM type WHERE type.id = learn.learn_type)AS learn_type 
		FROM `learn`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function learn_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('learn');
	}


	public function learn_update_data($data)
	{
		echo ("hi");
		$newdata = [
            'learn_type' => $data['learn_type'],
            'title' => $data['title'],
            'description' => $data['description'],
		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('learn', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function learn_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `learn` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function type_fetch()
	{

		$type_data = $this->db->query("SELECT * FROM `type`");

		$fetch = $type_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $type_data->result_array();
		} else {
			return false;
		}
	}

    public function sub_type_fetch()
	{

		$sub_type_data = $this->db->query("SELECT * FROM `sub_type`");

		$fetch = $sub_type_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $sub_type_data->result_array();
		} else {
			return false;
		}
	}
    
	public function learn($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `learn` where learn.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }
	public function learn_by_type_name($type_name)
{
	$this->db->select('learn.*, (SELECT type_name FROM type WHERE type.id = learn.learn_type) AS type_name');
	$this->db->from('learn');
	$this->db->join('type', 'type.id = learn.learn_type');
	$this->db->where('type.type_name', $type_name);

    $result = $this->db->get();

    if ($result->num_rows() > 0) {
        return $result->result_array();
    } else {
        return false;
    }
}

public function learn_by_title_name($title_name)
{
    $this->db->select('learn.*');
    $this->db->from('learn');
    $this->db->where('learn.page_name', $title_name);

    $result = $this->db->get();

    if ($result->num_rows() > 0) {
        return $result->result_array();
    } else {
        return false;
    }

}
}
