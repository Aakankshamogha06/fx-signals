<?php
class trade_model extends CI_Model
{


	public function trade_data_submit($data)
	{
		$data = [
			'trade_type' => $data['trade_type'],
            'title' => $data['title'],
            'description' => $data['description'],
		];
		if ($this->db->insert('trade', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function trade_view()
	{
		$result = $this->db->query("SELECT * , (SELECT type_name FROM type WHERE type.id = trade.trade_type)AS trade_type 
		FROM `trade`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function trade_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('trade');
	}


	public function trade_update_data($data)
	{
		echo ("hi");
		$newdata = [
            'trade_type' => $data['trade_type'],
            'title' => $data['title'],
            'description' => $data['description'],
		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('trade', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function trade_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `trade` where id=$id");
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
    
	public function trade($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `trade` where trade.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }
	public function trade_by_type_name($type_name)
{
	$this->db->select('trade.*, (SELECT type_name FROM type WHERE type.id = trade.trade_type) AS type_name');
	$this->db->from('trade');
	$this->db->join('type', 'type.id = trade.trade_type');
	$this->db->where('type.type_name', $type_name);

    $result = $this->db->get();

    if ($result->num_rows() > 0) {
        return $result->result_array();
    } else {
        return false;
    }
}
public function trade_by_title_name($title_name)
{
    $this->db->select('trade.*');
    $this->db->from('trade');
    $this->db->where('trade.page_name', $title_name);

    $result = $this->db->get();

    if ($result->num_rows() > 0) {
        return $result->result_array();
    } else {
        return false;
    }

}

}
