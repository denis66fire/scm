<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mo_no'
    ];

    public function marketplace_inventory()
    {
        return $this->hasMany(MarketplaceInventory::class);
    }
}
