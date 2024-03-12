<?php
class news_model extends CI_Model
{


	public function news_data_submit($data,$news_image)
	{
		$aid= $this->session->userdata('admin_id');
		$data = [
			'title' => $data['title'],
			'publish_date' => $data['publish_date'],
			'news_desc' => $data['news_desc'],
			'category' => $data['category'],
			'sub_category' => $data['sub_category'],
			'news_image' => $news_image,
            'author' => $data['author'],
			'news_type' => $data['news_type'],
			'news_package' => $data['news_package'],
			'created_by'=>$aid,
		];
		if ($this->db->insert('news', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function news_view()
	{
		if (($this->session->userdata('role') === '1')) {  
		$result = $this->db->query("SELECT * ,(SELECT name from news_category WHERE news_category.id = news.category) as category,
		(SELECT pair_name from currency_pair WHERE currency_pair.id = news.sub_category)as sub_category ,
		(SELECT news_type_name from news_type WHERE news_type.id = news.news_type) as news_type,
		(SELECT package_name from package WHERE package.id = news.news_package) as news_package
		 FROM `news` ORDER BY `publish_date` DESC; ");
		 }
		 else{
			$id= $this->session->userdata('admin_id');
			 
			 $result = $this->db->query("SELECT * ,(SELECT name from news_category WHERE news_category.id = news.category) as category,
			 (SELECT pair_name from currency_pair WHERE currency_pair.id = news.sub_category)as sub_category ,
			 (SELECT news_type_name from news_type WHERE news_type.id = news.news_type) as news_type,
			 (SELECT package_name from package WHERE package.id = news.news_package) as news_package
			  FROM `news`where created_by=$id ORDER BY `publish_date` DESC; ");
		 }
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function news_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('news');
	}


	public function news_update_data($data,$news_image)
	{
		$aid= $this->session->userdata('admin_id');
		$newdata = [
			'title' => $data['title'],
			'publish_date' => $data['publish_date'],
			'news_desc' => $data['news_desc'],
			'category' => $data['category'],
			'sub_category' => $data['sub_category'],
			'news_image' => $news_image,
            'author' => $data['author'],
            'news_type' => $data['news_type'],
			'news_package' => $data['news_package'],
			'created_by'=>$aid,
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('news', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
		
	}


	public function news_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `news` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
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

	public function news_type_fetch()
	{

		$news_type_data = $this->db->query("SELECT * FROM `news_type`");

		$fetch = $news_type_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $news_type_data->result_array();
		} else {
			return false;
		}
	}

	public function news_package_fetch()
	{

		$news_package_data = $this->db->query("SELECT * FROM `package`");

		$fetch = $news_package_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $news_package_data->result_array();
		} else {
			return false;
		}
	}
	
    public function sub_category_fetch()
	{

		$sub_category_data = $this->db->query("SELECT * FROM `currency_pair`");

		$fetch = $sub_category_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $sub_category_data->result_array();
		} else {
			return false;
		}
	}
	public function news($id)
    {

        $assign_data = $this->db->query("SELECT * ,(SELECT name from news_category WHERE news_category.id = news.category) as category,
										(SELECT name from news_sub_category WHERE news_sub_category.id = news.sub_category)as sub_category  
										FROM `news` where news.id=$id ");
        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }

	public function news_by_category_name($category_name)
{
	$this->db->select('news.*, 
        (SELECT name FROM news_category WHERE news_category.id = news.category) AS category,
        (SELECT name FROM news_sub_category WHERE news_sub_category.id = news.sub_category) AS sub_category,
        (SELECT news_type_name FROM news_type WHERE news_type.id = news.news_type) AS news_type'
    );
    $this->db->from('news');
    $this->db->join('news_category', 'news_category.id = news.category');
    $this->db->where('news_category.name', $category_name);
    $this->db->order_by('publish_date', 'DESC');

    $result = $this->db->get();

    if ($result->num_rows() > 0) {
        return $result->result_array();
    } else {
        return false;
    }
}

public function news_by_type_name($type_name)
{
       
	$this->db->select('news.*, 
	(SELECT name FROM news_category WHERE news_category.id = news.category) AS category,
	(SELECT name FROM news_sub_category WHERE news_sub_category.id = news.sub_category) AS sub_category,
	(SELECT news_type_name FROM news_type WHERE news_type.id = news.news_type) AS news_type'
);
$this->db->from('news');
    $this->db->join('news_type', 'news_type.id = news.news_type');
    $this->db->where('news_type.news_type_name', $type_name);

    $result = $this->db->get();

    if ($result->num_rows() > 0) {
        return $result->result_array();
    } else {
        return false;
    }
}
//wishlist
	public function add_to_wishlist($news_id, $user_id)
    {
        $wishlist_data = [
            'news_id' => $news_id,
            'user_id' => $user_id,
        ];

        if ($this->db->insert('wishlist', $wishlist_data)) {
            return $wishlist_data;
        } else {
            return false;
        }
    }

    public function remove_from_wishlist($news_id, $user_id)
    {
        $this->db->where('news_id', $news_id);
        $this->db->where('user_id', $user_id);
        return $this->db->delete('wishlist');
    }

    public function get_wishlist_by_user($user_id)
    {
        $this->db->select('news.id, title, publish_date, news_desc, category, sub_category, news_image, author');
        $this->db->from('wishlist');
        $this->db->join('news', 'wishlist.news_id = news.id');
        $this->db->where('wishlist.user_id', $user_id);

        $result = $this->db->get();

        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

	
public function is_in_wishlist($news_id, $user_id)
    {
        $this->db->where('news_id', $news_id);
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('wishlist');

        return ($query->num_rows() > 0);
    }


	
}
