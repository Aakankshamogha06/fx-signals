<?php
class trading_signals_model extends CI_Model
{


	public function trading_signals_data_submit($data)
	{
		$aid= $this->session->userdata('admin_id');
		$data = [
			'entry_point' => $data['entry_point'],
			'package' => $data['package'],
			'date' => $data['date'],
			'category' => $data['category'],
			'sub_category' => $data['sub_category'],
			'action' => $data['action'],
            'status' => $data['status'],
			'stop_loss' => $data['stop_loss'],
			'take_profit' => $data['take_profit'],
			'created_by'=>$aid,
		];
		if ($this->db->insert('trading_signals', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function trading_signals_view()
	{
		if (($this->session->userdata('role') === '1')) {  
			$result = $this->db->query("SELECT *,(SELECT package_name FROM package WHERE package.id = trading_signals.package)as package, 
			(SELECT name FROM news_category WHERE news_category.id = trading_signals.category)as category, 
			(SELECT pair_name FROM currency_pair WHERE currency_pair.id = trading_signals.sub_category)as sub_category 
			FROM `trading_signals`");
			}else{
				$id= $this->session->userdata('admin_id');
				$result = $this->db->query("SELECT *,(SELECT package_name FROM package WHERE package.id = trading_signals.package)as package, 
				(SELECT name FROM news_category WHERE news_category.id = trading_signals.category)as category, 
				(SELECT pair_name FROM currency_pair WHERE currency_pair.id = trading_signals.sub_category)as sub_category 
				FROM `trading_signals` where created_by=$id ORDER BY `blog_date` DESC, `id` DESC;");
			}
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
			'entry_point' => $data['entry_point'],
			'exit_point' => $data['exit_point'],
			'package' => $data['package'],
			'date' => $data['date'],
			'category' => $data['category'],
			'sub_category' => $data['sub_category'],
			'action' => $data['action'],
            'status' => $data['status'],
			'stop_loss' => $data['stop_loss'],
			'take_profit' => $data['take_profit'],
			'time_close' => $data['time_close'],
			'sl_tp' => $data['sl_tp'],
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
	
	public function trading_signals_between_dates($start_date, $end_date)
	{
		$sql = "SELECT * FROM trading_signals WHERE date >= ? AND date <= ?";
		$query = $this->db->query($sql, array($start_date, $end_date));
	
		// Check if query was successful
		if ($query) {
			// Check if there are rows returned
			if ($query->num_rows() > 0) {
				return $query->result_array();
			} else {
				return []; // No data found
			}
		} else {
			return false; // Query execution failed
		}
	}
	

}
