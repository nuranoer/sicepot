<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Pemohon extends BaseController
{
    public function index()
    {
        return view('pemohon/dashboard');
    }
    public function praperdim()
    {
        return view('pemohon/praperdim');
    }
    public function perdimdewasa()
    {
        return view('pemohon/perdimdewasa');
    }

    public function perdimanak()
    {
        return view('pemohon/perdimanak');
    }
}
