<?php

namespace App\Controllers;

use App\Models\ListAnimeModel;

class Anime extends BaseController
{
    protected $listAnimeModel;
    public function __construct()
    {
        $this->listAnimeModel = new ListAnimeModel();
    }
    public function index()
    {

        // Cara konek db tanpa model

        // $db = \Config\Database::connect();

        // $komik = $db->query('SELECT * FROM listanime');

        // // dd($komik);
        // foreach($komik->getResultArray() as $row){
        //     d($row);

        // }
        // $ListAnimeModel = new \App\Models\ListAnimeModel();
        // $listAnimeModel = new ListAnimeModel();

        $anime = $this->listAnimeModel->findAll();
        $data = [
            'title' => 'Anime List | Brand',
            'anime' => $anime,
            'page' => 'Anime'
        ];

        d($anime);

        return view('c_anime/index', $data);
    }
}
