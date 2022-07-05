<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Pemohon extends BaseController
{
    public function index()
    {
        return view('pemohon/dashboard');
    }
}
