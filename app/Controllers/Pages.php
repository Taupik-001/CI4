<?php

namespace App\Controllers;

use BadFunctionCallException;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home Page | Brand',
            'page' => 'Home',
            'test' => ['satu', 'dua', 'tiga']
        ];
        echo view('user_layouts/header', $data);
        echo view('pages/home', $data);
        echo view('user_layouts/footer');
        // return view('pages/pages');
    }
    public function about()
    {
        $data = [
            'title' => 'About Page | Brand',
            'page' => 'About'
        ];
        echo view('user_layouts/header', $data);
        echo "About";
        echo view('user_layouts/footer');
        
    }
    public function faq()
    {
        $data = [
            'title' => 'FAQ Page | Brand',
            'page' => 'FAQ'
        ];
        echo view('user_layouts/header', $data);
        echo "faq";
        echo view('user_layouts/footer');
        
    }
    public function contact() 
    {
        $data = [
            'title' => 'Contact Page | Brand',
            'page' => 'Contact'
        ];
        echo view('user_layouts/header', $data);
        echo "Contact";
        echo view('user_layouts/footer');
        
    }
}
