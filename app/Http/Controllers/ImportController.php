<?php

namespace App\Http\Controllers;

use App\Imports\ImportCsv;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function import(Request $request){
        $file = $request->file('file');
        Excel::import(new ImportCsv, $file);
    }
}
