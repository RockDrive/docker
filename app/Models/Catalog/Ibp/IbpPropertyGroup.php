<?php


namespace App\Models\Catalog\Ibp;


use Illuminate\Database\Eloquent\Model;
use Rennokki\QueryCache\Traits\QueryCacheable;

class IbpPropertyGroup extends Model
{
    use QueryCacheable;

    protected $table = 'ibp_property_groups';

    protected $fillable = [
        'name',
        'code',
    ];
}
