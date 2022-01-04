<?php

namespace App\Controllers;

class Riwayat extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Riwayat';
        return view('dashboard/riwayat', $data);
    }
}
