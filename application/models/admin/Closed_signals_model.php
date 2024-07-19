<?php
class closed_signals_model extends CI_Model
{


	public function closed_signals_data_submit($data,$id)
	{
		$data = [
		
			'time_close' => $data['time_close'],
            'sl_tp' => $data['sl_tp'],
			'status'=>'inactive',
		];
		$this->db->where('id', $id);
		
		if ($this->db->update('trading_signals', $data)) {
			return $data;
		} else {
			return false;
		}
	}

	public function closed_signals_view()
	{
		$result = $this->db->query("SELECT * FROM `closed_signals`");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function closed_signals_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('closed_signals');
	}


	public function closed_signals_uptime_closed_data($data)
	{
		
		$newdata = [
			'pair' => $data['pair'],
			'action' => $data['action'],
			'time_open' => $data['time_open'],
			'time_closed' => $data['time_closed'],
            'sl_tp' => $data['sl_tp'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->uptime_closed('closed_signals', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
		
	}


	public function closed_signals_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `closed_signals` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}

    public function add_closed_signals($data)
	{
	   
		$this->db->insert('closed_signals', $data);
		return $this->db->insert_id();
	}

	}