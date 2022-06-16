<table>
    <thead>
    <tr>
        <th style="background: #d9d9d9;border-bottom: 2px solid black;border-right: 2px solid black;">
            <b>Каталожный номер</b>
        </th>
        <th style="background: #d9d9d9;border-bottom: 2px solid black;border-right: 2px solid black;">
            <b>Производитель</b>
        </th>
        <th style="background: #d9d9d9;border-bottom: 2px solid black;border-right: 2px solid black;">
            <b>Поставщиков</b>
        </th>
        <th style="background: #d9d9d9;border-bottom: 2px solid black;border-right: 2px solid black; width: 250px;">
            <b>Наличие у</b>
        </th>
        <th style="background: #d9d9d9;border-bottom: 2px solid black;border-right: 2px solid black; width: 250px;">
            <b>Телефон</b>
        </th>
        <th style="background: #d9d9d9;border-bottom: 2px solid black;border-right: 2px solid black;">
            <b>Стоимость</b>
        </th>
        <th style="background: #d9d9d9;border-bottom: 2px solid black;border-right: 2px solid black;">
            <b>Срок под заказ</b>
        </th>
        <th style="background: #d9d9d9;border-bottom: 2px solid black;border-right: 2px solid black;">
            <b>Цена под заказ</b>
        </th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $product['cat_number'] }}</td>
            <td>
               {{ $product['manufacturer'] }}
            </td>
            <td>
                {{ $product['qnt_provider'] }}
            </td>
            <td>
                {{ $product['provider'] }}
            </td>
            <td>
                {{ $product['phone'] }}
            </td>
            <td>
                {{ $product['price'] }}
            </td>
            <td>
                {{ $product['time_order'] }}
            </td>
            <td>
                {{ $product['price_order'] }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
