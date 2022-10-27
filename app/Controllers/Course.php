<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Course extends BaseController
{
    public function index()
    {
        $data['segment1'] = $this->request->uri->getSegment(1);
        $data['title'] = 'Course';
        return view('homepage/course/course', $data);
    }

    public function detail_course()
    {
        $data['segment1'] = $this->request->uri->getSegment(1);
        $data['title'] = 'Detail Course';
        return view('homepage/course/detail-course', $data);
    }

    public function kuis()
    {
        $data['segment1'] = $this->request->uri->getSegment(1);
        $data['title'] = 'Kuis';
        return view('homepage/course/kuis', $data);
    }
}
