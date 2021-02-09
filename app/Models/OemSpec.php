<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OemSpec extends Model 
{
    use HasFactory;
    protected $fillable = [
        'oem_name',
        'model',
        'year_of_model' ,
        'mileage' ,
        'power',
        'max_speed',
    ];
    /*public function colors()
    {
        return $this->hasMany(Colors::class);
    }
*/
    
    
}
