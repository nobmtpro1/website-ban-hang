<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class exportcontroller extends Controller
{
    public function export(request $request)
{
    $export = new UsersExport($request->id);

    return Excel::download($export, 'invoices.xlsx');
}
}
