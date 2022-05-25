<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table='tbl_currency';

    public function country()
    {

        return $this->belongsTo(Country::class, 'vch_countryid');
    }
}
