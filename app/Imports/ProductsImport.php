<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToCollection, SkipsOnError, SkipsEmptyRows, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    use SkipsErrors;

    public function collection(Collection $rows)
    {
        // Удаляем текущие товары поставщика.
        $products = Product::where('id_provider', Auth::id());
        $products->delete();

        foreach ($rows as $row)
        {
            $time = explode("-", $row['srok_pod_zakaz']);

            if (isset($row['id_postavshhika'])) {
                $id_post = $row['id_postavshhika'];
            } else {
                $id_post = Auth::id();
            }

            $catalogNumber = Str::upper($row['kataloznyi_nomer']);
            $catalogNumber = preg_replace("#[[:punct:]]#", "", $catalogNumber);


            //Создаем товар
            $product = Product::create([
                'id_provider'           => $id_post,
                'catalog_number'        => $catalogNumber,
                'manufacturer'          => $row['proizvoditel'],
                'quantity'              => $row['kolicestvo_v_nalicii'],
                'price'                 => trim($row['cena']),
                'min_order_time'        => $time[0],
                'max_order_time'        => $time[1],
                'price_order'           => $row['cena_pod_zakaz'],
            ]);

        }

    }
}
