<?php

namespace App\Exports;

use App\Models\Catalog\Ibp\IbpProduct;
use App\Models\Catalog\Ibp\IbpProperty;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CatalogExport implements FromView
{
    function view(): View
    {
        $products = IbpProduct::all();

        $headlines = [
            "id" => "id",
            "name" => "name",
            "second_name" => "second_name",
            "code" => "code",
            "sort" => "sort",
            "is_active" => "is_active",
            "manufacture_id" => "manufacture_id",
            "description" => "description",
            "internal_vendor_code" => "internal_vendor_code",
            "allgen_vendor_code" => "allgen_vendor_code",
            "allgen_url" => "allgen_url",
            "provider_vendor_code" => "provider_vendor_code",
        ];

        // Характеристики
        if ($properties = IbpProperty::all()) {
            foreach ($properties as $property) {
                $headlines[$property->code] = $property->code;
            }
        }

        // Торговые предложения
        $headlines['price_5'] = 'price_5';
        $headlines['image_5'] = 'image_5';

        return view('excels.exports.ibpProducts', [
            'headlines' => $headlines,
            'products' => $products
        ]);
    }
}
