<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketplaceInventory extends Model
{
    use HasFactory;
    protected $table = 'marketplace_inventory';

    protected $fillable = [
        'dealer_id',
        'oem_spec_id',
        'km_on_odometer',
        'scratches' ,
        'original_paint',
        'no_accident',
        'no_pre_buyer',
        'place_of_registration',

    ];

    public function oem_specs()
    {
        return $this->belongsTo(OemSpec::class);
    }
}
