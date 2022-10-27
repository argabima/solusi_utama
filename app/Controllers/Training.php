<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Training extends BaseController
{
    public function index()
    {
        $data['segment1'] = $this->request->uri->getSegment(1);
        $data['title'] = 'Training';
        return view('homepage/training/training', $data);
    }

    public function detail_training()
    {
        $data['segment1'] = $this->request->uri->getSegment(1);
        $data['title'] = 'Detail Training';
        return view('homepage/training/detail-training', $data);
    }
}