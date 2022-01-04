<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Home';
        return view('dashboard/home', $data);
    }
    public function admin()
    {
        $data['pageTitle'] = 'Admin';
        return view('dashboard/admin', $data);
    }
    public function profile()
    {
        $data['pageTitle'] = 'Admin 1';
        return view('dashboard/profile', $data);
    }
    public function profile2()
    {
        $data['pageTitle'] = 'Admin 2';
        return view('dashboard/profile2', $data);
    }
    public function profile3()
    {
        $data['pageTitle'] = 'Admin 3';
        return view('dashboard/profile3', $data);
    }
}
