<?php
class Signal_model extends CI_Model
{


	public function signal_data_submit($data,)
	{
		$data = [
			'type' => $data['type'],
            'sub_type' => $data['sub_type'],
            'title' => $data['title'],
            'description' => $data['description'],
		];
		if ($this->db->insert('signals', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function signal_view()
	{
		$result = $this->db->query("SELECT * , (SELECT type_name FROM type WHERE type.id = signals.type)AS type ,
									(SELECT sub_type_name FROM sub_type WHERE sub_type.id = signals.sub_type) AS sub_type 
									FROM `signals`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function signal_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('signals');
	}


	public function signal_update_data($data)
	{
	$newdata = [
            'type' => $data['type'],
            'sub_type' => $data['sub_type'],
            'title' => $data['title'],
            'description' => $data['description'],
		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('signals', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function signal_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `signals` where id=$id");
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

	public function signal($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `signals` where signals.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }
	public function signal_by_type_name($type_name)
{
	$this->db->select('signals.*, (SELECT type_name FROM type WHERE type.id = signals.type) AS type_name');
	$this->db->from('signals');
	$this->db->join('type', 'type.id = signals.type');
	$this->db->where('type.type_name', $type_name);

    $result = $this->db->get();

    if ($result->num_rows() > 0) {
        return $result->result_array();
    } else {
        return false;
    }
}
public function signal_by_sub_type_name($sub_type_name)
{
	$this->db->select('signals.*, (SELECT sub_type_name FROM sub_type WHERE sub_type.id = signals.sub_type) AS sub_type_name');
	$this->db->from('signals');
	$this->db->join('sub_type', 'sub_type.id = signals.sub_type');
	$this->db->where('sub_type.sub_type_name', $sub_type_name);

    $result = $this->db->get();

    if ($result->num_rows() > 0) {
        return $result->result_array();
    } else {
        return false;
    }
}
public function signal_by_title_name($title_name)
{
    $this->db->select('signals.*');
    $this->db->from('signals');
    $this->db->where('signals.page_name', $title_name);

    $result = $this->db->get();

    if ($result->num_rows() > 0) {
        return $result->result_array();
    } else {
        return false;
    }

}
}
?>