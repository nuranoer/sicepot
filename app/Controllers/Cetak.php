<?php

namespace App\Controllers;

use App\Models\PerdimDewasaModel;

class Cetak extends BaseController
{
	public function index()
    {
        $mpdf = new \Mpdf\Mpdf();
		$data = view('hasilPrint', [], TRUE);
		$mpdf->WriteHTML($data);
		$this->response->setHeader('Content-Type', 'application/pdf');
		$mpdf->Output('hasilPrint.pdf', 'I');
    }
	public function senddata()
	{
		$file = new \Mpdf\Mpdf();
		$result = 
	}
}
