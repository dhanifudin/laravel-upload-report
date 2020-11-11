<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    public function print() {
        $data = [
            [
                'name' => 'Andi',
                'address' => 'Malang'
            ],
            [
                'name' => 'Budi',
                'address' => 'Malang'
            ]
        ];
        $pdf = PDF::loadView('report', ['users' => $data]);
        return $pdf->download();
    }
}
