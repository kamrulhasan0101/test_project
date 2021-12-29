<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Imports\IncentiveImport;
use App\Exports\IncentiveExport;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelController extends Controller
{
    public function index(){
        //
    }
    public function excel_import(){
        return view('excel.excel_import');
    }
    public function import_excel_data(){
        Excel::import(new IncentiveImport,request()->file('file'));
        return back();
    }
    public function export_excel_data(){
        return Excel::download(new IncentiveExport, 'incentives.xlsx');
    }
}
