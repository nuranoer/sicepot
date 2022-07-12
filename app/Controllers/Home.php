<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index()
    // {
    //     return view('welcome_message');
    // }
    public function index()
    {
        return view('pemohon/dashboard');
    }
    public function praperdim()
    {
        return view('pemohon/praperdim');
    }
}
