<?php

namespace App\Http\Controllers\Export;

use App\Exports\ProductsExport;
use App\Http\Controllers\Controller;
use App\Models\HistoryBuyer;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use ZanySoft\Zip\Zip;

class ProductController extends Controller
{

    public function storeExcel($arr)
    {
        $filename = str_replace('-', '_',str_replace(':', '_', str_replace(' ', '_', Carbon::now()->toDateTimeString())));

        $path = Storage::path($filename); // C:\OSPanel\domains\excel.loc\storage\app\invoices

        Excel::store(new ProductsExport($arr), $filename . '.xlsx');
        $zip = Zip::create($filename . '.zip');
        $zip->add($path . '.xlsx');

        HistoryBuyer::create([
            'title' => $filename,
            'buyer_id' => Auth::user()->id,

        ]);
    }
}
