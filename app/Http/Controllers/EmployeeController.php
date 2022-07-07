<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $data = Employee::all();
        return view('invoice',[
            'data'  => $data
        ]);
    }

    public function exportpdf()
    {
        $data = Employee::all();

        view()->share('data', $data);
        $pdf = PDF::loadView('invoice-pdf');
        return $pdf->download('data.pdf');
    }
}