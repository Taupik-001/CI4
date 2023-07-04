<?php 

namespace App\Controllers;

class ListIcon extends BaseController
{
    public function index() {
        $data = [
            'title' => 'List Icon that can be used | Brand',
            'page' => 'ListIcon'
        ];
        return view('c_list_icon/index', $data);
    }    
}
