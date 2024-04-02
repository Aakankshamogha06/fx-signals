<?php
class payment_model extends CI_Model
{

	public function add_payment($data)
	{
	   
		$this->db->insert('payment', $data);
		return $this->db->insert_id();
	}

	public function payment_data_submit($data)
	{
		$data = [
			'razorpay_id' => $data['razorpay_id'],
			'user_id' => $data['user_id'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
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

	// public function get_current_plan($user_id) {
       
    //     $this->db->select('id,user_id,transaction_id,pricing_id,email,phone_number,name,date,created_at');
    //     $this->db->from('payment');
    //     $this->db->where('user_id', $user_id);
    //     $query = $this->db->get();

    //     if ($query->num_rows() > 0) {
    //         return $query->row(); 
    //     } else {
    //         return false; 
    //     }
    // }
	public function get_current_plan_with_expiry($user_id)
{
    $this->db->select('*');
    $this->db->from('payment');
    $this->db->where('user_id', $user_id);
    $this->db->order_by('created_at', 'desc'); // Order by date in descending order
    $this->db->limit(1); // Limit the result to 1 row
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        $payment = $query->row_array();
        $plan_duration_days = 30; 
        $purchase_date = strtotime($payment['date']);
        $expiry_date = date('Y-m-d', strtotime("+$plan_duration_days days", $purchase_date));

        $current_plan = array(
            'user_id' => $payment['user_id'],
            'transaction_id' => $payment['transaction_id'],
            'pricing_id' => $payment['pricing_id'],
            'email' => $payment['email'],
            'phone_number' => $payment['phone_number'],
            'name' => $payment['name'],
            'date' => $payment['date'],
            'expiry_date' => $expiry_date, 
        );

        return $current_plan;
    } else {
        return false;
    }
}


	public function get_author_current_plan($author_id) {

        $this->db->select('id,author_id,transaction_id,author_pricing_id,email,phone_number,name,date,created_at');
		$this->db->from('payment');
		$this->db->where('author_id', $author_id);
		$this->db->order_by('created_at', 'desc'); // Order by date in descending order
		$this->db->limit(1); // Limit the result to 1 row
		$query = $this->db->get();
	
		if ($query->num_rows() > 0) {
			$payment = $query->row_array();
			$plan_duration_days = 30; 
			$purchase_date = strtotime($payment['date']);
			$expiry_date = date('Y-m-d', strtotime("+$plan_duration_days days", $purchase_date));
	
			$current_plan = array(
				'author_id' => $payment['author_id'],
				'transaction_id' => $payment['transaction_id'],
				'author_pricing_id' => $payment['author_pricing_id'],
				'email' => $payment['email'],
				'name' => $payment['name'],
				'date' => $payment['date'],
				'expiry_date' => $expiry_date, 
			);
	
			return $current_plan;
		} else {
			return false;
		}
    }
}
