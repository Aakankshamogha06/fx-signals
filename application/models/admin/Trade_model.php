<?php
class trade_model extends CI_Model
{


	public function trade_data_submit($data,$trade_image)
	{
		$aid = $this->session->userdata('admin_id');
		$data = [
			'trade_type' => $data['trade_type'],
            'title' => $data['title'],
            'description' => $data['description'],
			'trade_image' => $trade_image,
			'date' => $data['date'],
			// 'author' => $data['author'],
			'created_by' => $aid,
		];
		if ($this->db->insert('trade', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function trade_get()
	{
		$result = $this->db->query("SELECT * , (SELECT name FROM news_category WHERE news_category.id = trade.trade_type)AS trade_type , (SELECT username from users WHERE users.id = trade.created_by) AS author FROM trade ORDER BY `date` DESC;
		;
		");

		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}
	public function trade_view()
	{
		if (($this->session->userdata('role') === '1')) {  
		$result = $this->db->query("SELECT * , (SELECT name FROM news_category WHERE news_category.id = trade.trade_type)AS trade_type , (SELECT username from users WHERE users.id = trade.created_by) AS author
		FROM `trade` ORDER BY `date` DESC;
	");
		}else{
			$id= $this->session->userdata('admin_id');
			$result = $this->db->query("SELECT * , (SELECT name FROM news_category WHERE news_category.id = trade.trade_type)AS trade_type , (SELECT username from users WHERE users.id = trade.created_by) AS author 
			FROM `trade` where created_by=$id ORDER BY `date` DESC");
		}
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


	public function trade_update_data($data,$trade_image)
	{
		// echo ("hi");
		$aid = $this->session->userdata('admin_id');
		$newdata = [
            'trade_type' => $data['trade_type'],
            'title' => $data['title'],
            'description' => $data['description'],
			// 'date' => $data['date'],
			'trade_image' => $trade_image,
			'date' => $data['date'],
			'created_by' => $aid,
		];
		// print_r($newdata);
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


	public function category_fetch()
	{

		$category_data = $this->db->query("SELECT * FROM `news_category`");

		$fetch = $category_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $category_data->result_array();
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

        $assign_data = $this->db->query("SELECT * , (SELECT name FROM news_category WHERE news_category.id = trade.trade_type)AS trade_type ,
		(SELECT username from users WHERE users.id = trade.created_by) AS author FROM trade where trade.id=$id ORDER BY `date` DESC");

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
