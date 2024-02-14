<?php
class payment_model extends CI_Model
{


	public function payment_data_submit($data)
	{
		$data = [
			'transaction_id' => $data['transaction_id'],
			'user_id' => $data['user_id'],
			'author_id' => $data['author_id'],
			'pricing_id' => $data['pricing_id'],
			'author_pricing_id' => $data['author_pricing_id'],
			'name' => $data['name'],
            'email' => $data['email'],
            'phone_numebr' => $data['phone_numebr'],
			'date' => $data['date'],
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
