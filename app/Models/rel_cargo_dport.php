<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rel_cargo_dport extends Model
{
    use HasFactory;
    public $table='rel_cargo_dport';
    public $timestamps=false;
    protected $primaryKey = 'id';


    public function Dport(){
        return $this->belongsTo(ss_cargo::class,'cargo_id');
    }


    public function CAdport(){
        return $this->belongsTo(ss_setup_port::class,'dport_id');
    }
}
