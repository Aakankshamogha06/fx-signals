<?php

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Menu_api extends REST_Controller
{

    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Origin: http://localhost:5173/");
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == "OPTIONS") {
            die();
        }
        parent::__construct();
        $this->load->library('Authorization_Token');
        $this->load->model('admin/Auth_model', 'Auth_model');
        $this->load->model('admin/Menu_model', 'Menu_model');
        $this->load->model('admin/Sub_menu_model', 'Sub_menu_model');
        $this->load->model('admin/Sub_sub_menu_model', 'Sub_sub_menu_model');
        $this->load->model('admin/User_model', 'User_model');
    }

    public function menu_get()
    {
        $menus = $this->Menu_model->menu_view();
        $this->response($menus, REST_Controller::HTTP_OK);
    }

    public function menu_by_id_get()
    {
        $menu_id = $this->uri->segment(4);
        $menu = $this->Menu_model->get_menu_by_id($menu_id);

        if ($menu) {
            $this->response($menu, REST_Controller::HTTP_OK);
        } else {
            $this->response(['error' => 'Menu not found'], REST_Controller::HTTP_NOT_FOUND);
        }
    }


    // Submenus

    public function submenu_get($menu_id)
    {
        $submenu = $this->Sub_menu_model->get_submenu($menu_id);
        $this->response($submenu, REST_Controller::HTTP_OK);
    }

    //sub_submenus

    public function sub_submenu_get($menu_id,$sub_menu_id)
    {
        $submenu = $this->Sub_sub_menu_model->get_sub_submenu($menu_id,$sub_menu_id);
        $this->response($submenu, REST_Controller::HTTP_OK);
    }

    

public function menu_by_all_get()
{
    $menu = $this->Menu_model->get_menu_all();

    if ($menu) {
        $formattedMenu = $this->formatMenu($menu);
        $this->response($formattedMenu, REST_Controller::HTTP_OK);
    } else {
        $this->response(['error' => 'Menu not found'], REST_Controller::HTTP_NOT_FOUND);
    }
}

private function formatMenu($menu)
{
    $formattedMenu = [];

    foreach ($menu as $item) {
        $formattedItem = [
            'title' => $item['menu'],
            'path' => "/{$item['menu']}",
            'subItems' => [],
        ];

        if ($item['submenu']) {
            foreach ($item['submenu'] as $subItem) {
                $formattedSubItem = [
                    'title' => $subItem['sub_menu'],
                    'path' => "/{$item['menu']}/{$subItem['sub_menu']}",
                    'subItems' => [],
                ];

                if ($subItem['subtosubmenu']) {
                    foreach ($subItem['subtosubmenu'] as $subToSubItem) {
                        $formattedSubToSubItem = [
                            'title' => $subToSubItem['name'],
                            'path' => "/{$item['menu']}/{$subItem['sub_menu']}/{$subToSubItem['name']}",
                        ];

                        $formattedSubItem['subItems'][] = $formattedSubToSubItem;
                    }
                }

                $formattedItem['subItems'][] = $formattedSubItem;
            }
        }

        $formattedMenu[] = $formattedItem;
    }

    return $formattedMenu;
}


}
?>
