<?php

namespace App\Http\Controllers;

use App\Bahan;
use App\Harga;
use App\Pasar;
use Carbon\Carbon;
use App\Administrator;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ReportController extends Controller
{
    public function administrator()
    {
        return view('admin.report.administrator');
    }
    public function cetakadmin()
    {
        $data = Administrator::get();
        $pdf = PDF::loadView('admin.report.pdf_admin', compact('data'))->setPaper('legal');
        return $pdf->stream();
    }
}
