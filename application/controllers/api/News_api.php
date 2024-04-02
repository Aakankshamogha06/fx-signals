<?php

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class News_api extends REST_Controller
{

    public function __construct()
    {
        // header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Origin: http://localhost:5173");
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == "OPTIONS") {
            die();
        }
        parent::__construct();
        $this->load->library('Authorization_Token');
        $this->load->model('admin/Auth_model', 'Auth_model');
        $this->load->model('admin/News_model', 'News_model');
        $this->load->model('admin/User_model', 'User_model');
    }



    public function news_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->News_model->news_get($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function news_by_id_get()
    {
        $id = $this->uri->segment(4);
        $data = $this->News_model->news($id);
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function news_by_category_get()
{
    $category_name = $this->uri->segment(4);
    if (empty($category_name)) {
        $this->response(['error' => 'Category name is required'], REST_Controller::HTTP_BAD_REQUEST);
        return;
    }
    $newsData = $this->News_model->news_by_category_name($category_name);
    if ($newsData) {
        $this->response($newsData, REST_Controller::HTTP_OK);
    } else {
        $this->response(['error' => 'No news found for the specified category'], REST_Controller::HTTP_NOT_FOUND);
    }
} 

public function news_by_category_and_subcategory_get()
{
    $category_name = $this->uri->segment(4);
    $subcategory_name = $this->uri->segment(5);

    if (empty($category_name) || empty($subcategory_name)) {
        $this->response(['error' => 'Category and subcategory names are required'], REST_Controller::HTTP_BAD_REQUEST);
        return;
    }

    $newsData = $this->News_model->news_by_category_and_subcategory_name($category_name, $subcategory_name);
    if ($newsData) {
        $this->response($newsData, REST_Controller::HTTP_OK);
    } else {
        $this->response(['error' => 'No news found for the specified category and subcategory'], REST_Controller::HTTP_NOT_FOUND);
    }
}


public function news_by_type_get()
{
    $type_name = $this->uri->segment(4);
    if (empty($type_name)) {
        $this->response(['error' => 'type name is required'], REST_Controller::HTTP_BAD_REQUEST);
        return;
    }
    $newsData = $this->News_model->news_by_type_name($type_name);
    if ($newsData) {
        $this->response($newsData, REST_Controller::HTTP_OK);
    } else {
        $this->response(['error' => 'No news found for the specified type'], REST_Controller::HTTP_NOT_FOUND);
    }
}

public function news_by_sub_type_get()
{
    $sub_type_name = $this->uri->segment(4);
    if (empty($sub_type_name)) {
        $this->response(['error' => 'sub_type name is required'], REST_Controller::HTTP_BAD_REQUEST);
        return;
    }
    $newsData = $this->News_model->news_by_sub_type_name($sub_type_name);
    if ($newsData) {
        $this->response($newsData, REST_Controller::HTTP_OK);
    } else {
        $this->response(['error' => 'No news found for the specified type'], REST_Controller::HTTP_NOT_FOUND);
    }
}
    // public function get_wishlist_by_user_get($user_id) {
    //     if (!$user_id) {
    //         $this->response(['error' => 'Invalid user id'], REST_Controller::HTTP_BAD_REQUEST);
    //     }

    //     $wishlist = $this->News_model->get_wishlist_by_user($user_id);

    //     if ($wishlist) {
    //         $this->response($wishlist, REST_Controller::HTTP_OK);
    //     } else {
    //         $this->response([], REST_Controller::HTTP_OK); // No items in the wishlist
    //     }
    // }

    // public function add_to_wishlist_post() {
    //     $news_id = $this->post('news_id');
    //     $user_id = $this->post('user_id');

    //     if (!$news_id || !$user_id) {
    //         $this->response(['error' => 'Invalid data'], REST_Controller::HTTP_BAD_REQUEST);
    //     }

    //     $result = $this->News_model->add_to_wishlist($news_id, $user_id);

    //     if ($result) {
    //         $this->response($result, REST_Controller::HTTP_OK);
    //     } else {
    //         $this->response(['error' => 'Failed to add to wishlist'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
    //     }
    // }

    // public function remove_from_wishlist_delete($news_id, $user_id) {
    //     if (!$news_id || !$user_id) {
    //         $this->response(['error' => 'Invalid data'], REST_Controller::HTTP_BAD_REQUEST);
    //     }

    //     $result = $this->News_model->remove_from_wishlist($news_id, $user_id);

    //     if ($result) {
    //         $this->response(['success' => 'Removed from wishlist'], REST_Controller::HTTP_OK);
    //     } else {
    //         $this->response(['error' => 'Failed to remove from wishlist'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
    //     }
    // }
    public function current_user_get()
    {
        $headers = $this->input->request_headers();
        if (!empty($headers['Authorization'])) {
            $decodedToken = $this->authorization_token->validateToken(trim($headers['Authorization']));
            if ($decodedToken['status']) {
                $user_id = $this->uri->segment(4);
                $data = $this->User_model->current_user($user_id);
                
                $this->response($data, REST_Controller::HTTP_OK);
                
            } else {
                $this->response($decodedToken, REST_Controller::HTTP_UNAUTHORIZED);
            }
        } else {
            $this->response(['Authentication failed'], REST_Controller::HTTP_UNAUTHORIZED);
        }
    }
    
    public function get_wishlist_by_user_get()
    {
        $headers = $this->input->request_headers();
        if (!empty($headers['Authorization'])) {
            $decodedToken = $this->authorization_token->validateToken(trim($headers['Authorization']));
            if ($decodedToken['status']) {
                $user_id = $this->uri->segment(4);
                if (!$user_id) {
                    $this->response(['error' => 'Invalid user id'], REST_Controller::HTTP_BAD_REQUEST);
                }
    
                $wishlist = $this->News_model->get_wishlist_by_user($user_id);
                if ($wishlist) {
                    $this->response($wishlist, REST_Controller::HTTP_OK);
                } else {
                    $this->response([], REST_Controller::HTTP_OK);
                }
            } else {
                $this->response($decodedToken, REST_Controller::HTTP_UNAUTHORIZED);
            }
        } else {
            $this->response(['Authentication failed'], REST_Controller::HTTP_UNAUTHORIZED);
        }
    }
    
    public function add_to_wishlist_post()
    {
        $headers = $this->input->request_headers();
        if (!empty($headers['Authorization'])) {
            $decodedToken = $this->authorization_token->validateToken(trim($headers['Authorization']));
            if ($decodedToken['status']) {
                $news_id = $this->post('news_id');
                $user_id = $this->post('user_id');
    
                if (!$news_id || !$user_id) {
                    $this->response(['error' => 'Invalid data'], REST_Controller::HTTP_BAD_REQUEST);
                }
    
                // Check if the news item is already in the wishlist
                $isInWishlist = $this->News_model->is_in_wishlist($news_id, $user_id);
    
                if ($isInWishlist) {
                    $this->response(['error' => 'News item is already in the wishlist'], REST_Controller::HTTP_CONFLICT);
                } else {
                    // Add the news item to the wishlist
                    $result = $this->News_model->add_to_wishlist($news_id, $user_id);
    
                    if ($result) {
                        $this->response($result, REST_Controller::HTTP_OK);
                    } else {
                        $this->response(['error' => 'Failed to add to wishlist'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
                    }
                }
            } else {
                $this->response($decodedToken, REST_Controller::HTTP_UNAUTHORIZED);
            }
        } else {
            $this->response(['Authentication failed'], REST_Controller::HTTP_UNAUTHORIZED);
        }
    }
    
    
    public function remove_from_wishlist_delete($news_id, $user_id)
    {
        $headers = $this->input->request_headers();
        if (!empty($headers['Authorization'])) {
            $decodedToken = $this->authorization_token->validateToken(trim($headers['Authorization']));
            if ($decodedToken['status']) {
                if (!$news_id || !$user_id) {
                    $this->response(['error' => 'Invalid data'], REST_Controller::HTTP_BAD_REQUEST);
                }
    
                $result = $this->News_model->remove_from_wishlist($news_id, $user_id);
    
                if ($result) {
                    $this->response(['success' => 'Removed from wishlist'], REST_Controller::HTTP_OK);
                } else {
                    $this->response(['error' => 'Failed to remove from wishlist'], REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
                }
            } else {
                $this->response($decodedToken, REST_Controller::HTTP_UNAUTHORIZED);
            }
        } else {
            $this->response(['Authentication failed'], REST_Controller::HTTP_UNAUTHORIZED);
        }
    }
    
    
}