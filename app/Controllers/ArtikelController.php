<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ArtikelController extends BaseController
{
    public function index()
    {
        $data['title'] = 'Artikel';
        $data['segment1'] = $this->request->uri->getSegment(1);
        return view('homepage/artikel/artikel', $data);
    }

    public function detail_artikel()
    {
        $data['title'] = 'Detail Artikel';
        $data['segment1'] = $this->request->uri->getSegment(1);
        return view('homepage/artikel/detail-artikel', $data);
    }
}
