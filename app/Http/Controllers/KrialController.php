<?php

namespace App\Http\Controllers;

use App\Exports\CatalogExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class KrialController extends Controller
{
    public function import()
    {

    }


    public function export()
    {
        return Excel::download(new CatalogExport, 'catalog.xlsx');
    }
}
