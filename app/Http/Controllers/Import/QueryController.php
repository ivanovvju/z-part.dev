<?php

namespace App\Http\Controllers\Import;

use App\Http\Controllers\Controller;
use App\Imports\QueryImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class QueryController extends Controller
{
    public function import(Request $request)
    {
        set_time_limit(0);

        if ($request->hasFile('query_import')) {
            Excel::import(new QueryImport(), request()->file('query_import'));
        }

        return redirect()->route('link');

    }
}
