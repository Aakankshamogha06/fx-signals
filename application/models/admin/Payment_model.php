<?php
class payment_model extends CI_Model
{


	public function payment_data_submit($data)
	{
		$data = [
			'razorpay_id' => $data['razorpay_id'],
			'user_id' => $data['user_id'],
            'email' => $data['email'],
            'password' => $data['password'],
		];
		if ($this->db->insert('payment', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function payment_view()
	{
		$result = $this->db->query("SELECT * from payment ");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function payment_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('payment');
	}


	public function payment_update_data($data)
	{
		
		$newdata = [
			'razorpay_id' => $data['razorpay_id'],
			'user_id' => $data['user_id'],
            'email' => $data['email'],
            'password' => $data['password'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('payment', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function payment_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `payment` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}
}
