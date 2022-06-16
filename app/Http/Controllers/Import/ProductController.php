<?php

namespace App\Http\Controllers\Import;

use App\Http\Controllers\Controller;
use App\Imports\ProductsImport;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function import(Request $request)
    {
        set_time_limit(0);

        if ($request->hasFile('product_import')) {
            Excel::import(new ProductsImport(), request()->file('product_import'));

            History::create([
                'title' => $request->input('title') ? $request->input('title') : 'Загрузка Excel файла',
                'provider_id' => Auth::user()->id,

            ]);
        }

        $request->session()->flash('success', 'Товары добавлены');
        return redirect()->back();

    }
}
