<?php
class event_model extends CI_Model
{


	public function event_data_submit($data)
	{
		$data = [
			'heading1' => $data['heading1'],
			'desc1' => $data['desc1'],
			'heading2' => $data['heading2'],
            'desc2' => $data['desc2'],
			'date' => $data['date'],
			'day' => $data['day'],
			'time' => $data['time'], 
		];
		if ($this->db->insert('event', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function event_view()
	{
		$result = $this->db->query("SELECT * from event ");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function event_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('event');
	}


	public function event_update_data($data)
	{
		
		$newdata = [
			'heading1' => $data['heading1'],
			'desc1' => $data['desc1'],
			'heading2' => $data['heading2'],
            'desc2' => $data['desc2'],
			'date' => $data['date'],
			'day' => $data['day'],
			'time' => $data['time'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('event', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function event_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `event` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}

	public function event($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `event` where event.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }
}
