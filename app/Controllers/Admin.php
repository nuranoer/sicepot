<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Admin extends BaseController
{
    // public function login()
    // {
    //     return view('admin/login');
    // }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('admin/dashboard', $data);
    }

    public function dataperdimdewasa()
    {
        $data = [
            'title' => 'Data Perdim Dewasa',
        ];
        return view('admin/perdimdewasa', $data);
    }
    public function dataperdimanak()
    {
        $data = [
            'title' => 'Data Perdim Anak',
        ];
        return view('admin/perdimanak', $data);
    }
}
