<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ss_setup_region_country_port extends Model
{
    use HasFactory;
    public $table='ss_setup_region_country_port';
    public $timestamps=false;
    protected $primaryKey = 'id';
    
    public function scopeActive($query){
        return $query->where('is_active',1);
    }

    public function scopeDesc($query){
        return $query->orderBy('id',"DESC");
    }

    public function region_rel(){
        return $this->belongsTo(ss_setup_region::class,'region_id');
    }
    public function country_rel(){
        return $this->belongsTo(ss_setup_country::class,'country_id');
    }
    public function port_rel(){
        return $this->belongsTo(ss_setup_port::class,'port_id');
    }
}
