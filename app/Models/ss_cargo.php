<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ss_cargo extends Model
{
    use HasFactory;

    public $table='ss_cargo';
    public $timestamps=false;
    protected $primaryKey = 'cargo_id';
    
}
