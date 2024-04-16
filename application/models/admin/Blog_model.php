<?php
class blog_model extends CI_Model
{


	public function blog_data_submit($data,$blog_image)
	{
		$aid= $this->session->userdata('admin_id');
		$data = [
			'blog_name' => $data['blog_name'],
			'blog_image' => $blog_image,
            'blog_category' => $data['blog_category'],
            // 'blog_author' => $data['blog_author'],
            'blog_date' => $data['blog_date'],
            'blog_desc' => $data['blog_desc'],
            'long_desc' => $data['long_desc'],
			'created_by'=>$aid,
		];
		if ($this->db->insert('blog', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function blog_view()
	{
		if (($this->session->userdata('role') === '1')) {  
		$result = $this->db->query("SELECT *, 
		(SELECT category FROM blog_category WHERE blog_category.id = blog.blog_category) AS blog_category,
		(SELECT username FROM users WHERE users.id = blog.created_by) AS blog_author 
	FROM `blog`
	ORDER BY `blog_date` DESC, `id` DESC;
	");
		}else{
			$id= $this->session->userdata('admin_id');
			$result = $this->db->query("SELECT * ,(SELECT category from blog_category WHERE blog_category.id = blog.blog_category) as blog_category
			,(SELECT username from users WHERE users.id = blog.created_by) as blog_author  FROM `blog` where created_by=$id ORDER BY `blog_date` DESC, `id` DESC;");
		}
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}

	public function blog_get()
	{
		 
		$result = $this->db->query("SELECT * ,(SELECT category from blog_category WHERE blog_category.id = blog.blog_category) as blog_category ,
		(SELECT username from users WHERE users.id = blog.created_by) as blog_author 
		FROM `blog`ORDER BY `blog_date` DESC, `id` DESC;");
		
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}
	public function blog_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('blog');
	}


	public function blog_update_data($data,$blog_image)
	{
		$aid= $this->session->userdata('admin_id');
		$newdata = [
			'blog_name' => $data['blog_name'],
			'blog_image' => $blog_image,
            'blog_category' => $data['blog_category'],
            // 'blog_author' => $data['blog_author'],
            'blog_date' => $data['blog_date'],
            'blog_desc' => $data['blog_desc'],
            'long_desc' => $data['long_desc'],
			'created_by'=>$aid,
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('blog', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function blog_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `blog` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function role_fetch()
	{

		$role_data = $this->db->query("SELECT * FROM `blog`");

		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();
		} else {
			return false;
		}
	}

    public function blog_fetch()
	{

		$blog_data = $this->db->query("SELECT * FROM `blog_category`");

		$fetch = $blog_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $blog_data->result_array();
		} else {
			return false;
		}
	}
	public function blog($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `blog` where blog.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }
	public function blog_by_category_name($category_name)
{
	$this->db->select('blog.*, (SELECT category FROM blog_category WHERE blog_category.id = blog.blog_category) AS category_name');
	$this->db->from('blog');
	$this->db->join('blog_category', 'blog_category.id = blog.blog_category');
	$this->db->where('blog_category.category', $category_name);
	$this->db->order_by('blog_date', 'DESC');

    $result = $this->db->get();

    if ($result->num_rows() > 0) {
        return $result->result_array();
    } else {
        return false;
    }
}
}
