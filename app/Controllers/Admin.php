<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function login()
    {
        return view('admin/login');
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('admin/dashboard', $data);
    }

    public function data()
    {
        $data = [
            'title' => 'Data Pemohon',
        ];
        return view('admin/dataform', $data);
    }
}
