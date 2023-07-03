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
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Page | Brand',
            'page' => 'About',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Kuin Selatan',
                    'kota' => 'Banjarmasin'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. KM 0',
                    'kota' => 'Banjarbaru'
                ]
            ]
        ];
        return view('pages/about', $data);
    }
    public function faq()
    {
        $data = [
            'title' => 'FAQ Page | Brand',
            'page' => 'FAQ'
        ];
        return view('pages/faq', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Page | Brand',
            'page' => 'Contact'
        ];
        return view('pages/contact', $data);
    }
}
