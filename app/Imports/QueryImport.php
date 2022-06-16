<?php

namespace App\Imports;

use App\Http\Controllers\Export\ProductController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class QueryImport implements ToCollection, SkipsOnError, SkipsEmptyRows, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    use SkipsErrors;

    public function collection(Collection $rows)
    {
        $collection = collect();

        foreach ($rows as $row)
        {

            $data = [];

            $qnt_query = $row['kolicestvo']; // Количество
            $cat_number = Str::upper($row['kataloznyi_nomer']); // Каталожный номер
            $cat_number = preg_replace("#[[:punct:]]#", "", $cat_number);

            $products = Product::where('catalog_number', $cat_number)->get();
            $count = $products->count();

            foreach ($products as $product) {
                $manufacturer = $product->manufacturer;

                $users = User::where('id', $product->id_provider)->get();
                $name_provider = "";
                $phone_provider = "";
                foreach ($users as $user) {
                    $name_provider = $user->name_org;
                    $phone_provider = $user->phone;
                }

                $price = $product->price;

                $min_order_time = $product->min_order_time;
                $max_order_time = $product->max_order_time;
                $time_order = $min_order_time . '-' . $max_order_time;

                $price_order = $product->price_order;

                $data = [
                    'cat_number' => $cat_number,
                    'manufacturer' => $manufacturer,
                    'qnt_provider' => $count,
                    'provider' => $name_provider,
                    'phone' => $phone_provider,
                    'price' => $price,
                    'time_order' => $time_order,
                    'price_order' => $price_order,
                ];

                $collection->push($data);
            }

        }

        return (new ProductController)->storeExcel($collection);

    }
}
