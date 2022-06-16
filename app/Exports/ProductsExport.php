<?php

namespace App\Exports;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProductsExport implements FromView
{
    public $arr;

    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function view(): View
    {
        return view('export.products', [
            'products' => $this->arr
        ]);
    }
}
