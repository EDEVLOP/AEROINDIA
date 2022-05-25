<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchangerate extends Model
{
    
    use HasFactory;
    public $timestamps=false;
    protected $table='tbl_exchangerate';
}
