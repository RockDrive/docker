<?php


namespace App\Models\Catalog\Ibp;

use App\Laravue\Models\Traits\Attachmentable;
use App\Models\References\DGVersion;
use App\Models\References\IbpVersion;
use Illuminate\Database\Eloquent\Model;
use Rennokki\QueryCache\Traits\QueryCacheable;

class IbpTradingOption extends Model
{
    use QueryCacheable, Attachmentable;

    protected $table = 'ibp_trading_options';

    protected $fillable = [
        'ibp_product_id',
        'ibp_version_id',
        'media',
        'price',
    ];

    protected $with = [
        'attachments',
    ];

    public function version()
    {
        return $this->hasOne(IbpVersion::class, 'id', 'ibp_version_id');
    }
}
