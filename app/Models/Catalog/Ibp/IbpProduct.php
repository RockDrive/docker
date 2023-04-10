<?php


namespace App\Models\Catalog\Ibp;


use Illuminate\Database\Eloquent\Model;

class IbpProduct extends Model
{
    protected $table = 'ibp_products';

    protected $fillable = [
        'name',
        'second_name',
        'code',
        'sort',
        'is_active',
        'manufacture_id',
        'media',
        'description',
        'internal_vendor_code',
        'allgen_vendor_code',
        'allgen_url',
        'provider_vendor_code',
    ];


}
