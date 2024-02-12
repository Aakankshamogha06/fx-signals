<?php
class trading_signals_model extends CI_Model
{


	public function trading_signals_data_submit($data)
	{
		$data = [
			'entry_price' => $data['entry_price'],
			'package' => $data['package'],
			'date' => $data['date'],
			'pair' => $data['pair'],
			'action' => $data['action'],
            'status' => $data['status'],
			'stop_loss' => $data['stop_loss'],
			'take_profit' => $data['take_profit'],
		];
		if ($this->db->insert('trading_signals', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function trading_signals_view()
	{
		$result = $this->db->query("SELECT * FROM `trading_signals` ");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function trading_signals_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('trading_signals');
	}


	public function trading_signals_update_data($data)
	{
		
		$newdata = [
			'entry_price' => $data['entry_price'],
			'package' => $data['package'],
			'date' => $data['date'],
			'pair' => $data['pair'],
			'action' => $data['action'],
            'status' => $data['status'],
			'stop_loss' => $data['stop_loss'],
			'take_profit' => $data['take_profit'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('trading_signals', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
		
	}


	public function trading_signals_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `trading_signals` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}

	public function package_fetch()
	{

		$package_data = $this->db->query("SELECT * FROM `package`");

		$fetch = $package_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $package_data->result_array();
		} else {
			return false;
		}
	}

	public function fetch_sub_category($category)
    {
        $this->db->select('*');
        $this->db->where('pair_category', $category);
        $query = $this->db->get('currency_pair');
        return $query->result_array();
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
	
}
