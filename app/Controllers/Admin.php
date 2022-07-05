<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function login()
    {
        return view('admin/login');
    }
}
