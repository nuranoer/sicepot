<?php

namespace App\Controllers;

use App\Models\PerdimDewasaModel;

class Cetak extends BaseController
{
    public function index()
    {
        $mpdf = new \Mpdf\Mpdf();
		$html = view('admin/cetakperdimdewasa',[]);
		$mpdf->WriteHTML($html);
		$this->response->setHeader('Content-Type', 'application/pdf');
		$mpdf->Output('arjun.pdf','I'); // opens in browser
		//$mpdf->Output('arjun.pdf','D'); // it downloads the file into the user system, with give name
		//return view('welcome_message');
    }
}
