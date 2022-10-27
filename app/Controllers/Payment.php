<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Payment extends BaseController
{
    public function pembayaran()
    {
        $data['segment1'] = $this->request->uri->getSegment(1);
        $data['title'] = 'Pembayaran';
        return view('homepage/pembayaran', $data);
    }
    public function prosesbayar()
    {
        $data['segment1'] = $this->request->uri->getSegment(1);
        $data['title'] = 'Proses Pembayaran';
        return view('homepage/prosesbayar', $data);
    }
    public function konfirmasi()
    {
        $data['segment1'] = $this->request->uri->getSegment(1);
        $data['title'] = 'Konfirmasi Payment';
        return view('homepage/payment/confirmation', $data);
    }

    public function riwayat()
    {
        $data['segment1'] = $this->request->uri->getSegment(1);
        $data['title'] = 'History Payment';
        return view('homepage/payment/history', $data);
    }

    public function checkout()
    {
        $data['segment1'] = $this->request->uri->getSegment(1);
        $data['title'] = 'Checkout';
        return view('homepage/payment/checkout', $data);
    }
}
