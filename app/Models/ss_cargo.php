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


    public function scopeDesc($query){
        return $query->orderBy('cargo_id',"DESC");
    }

    public function cargotype(){
        // return $this->belongsTo('App\Models\ss_setup_cargo_type','cargo_type_id');
        return $this->belongsTo(ss_setup_cargo_type::class,'cargo_type_id');
    }

    public function Lcountry(){
        return $this->belongsTo(ss_setup_country::class,'loading_country_id');
    }

    public function Dcountry(){
        return $this->belongsTo(ss_setup_country::class,'discharge_country_id');
    }

    public function Lregion(){
        return $this->belongsTo(ss_setup_region::class,'loading_region_id');
    }

    public function Dregion(){
        return $this->belongsTo(ss_setup_region::class,'discharge_region_id');
    }

    // public function Lunit(){
    //     return $this->belongsTo(ss_setup_unit::class,'unit_id');
    // }

    // public function Dunit(){
    //     return $this->belongsTo(ss_setup_unit::class,'loading_discharge_unit_id');
    // }

    public function Lport(){
        return $this->belongsTo(ss_setup_port::class,'loading_port_id');
        // return $this->belongsTo(ss_setup_port::class,'loading_port_id_1');
    }

    // public function Lport2(){
    //     return $this->belongsTo(ss_setup_port::class,'loading_port_id_2');
    //     // return $this->belongsTo(ss_setup_port::class,'loading_port_id_2');
    // }

    public function Dport(){
        return $this->belongsTo(ss_setup_port::class,'discharge_port_id');
        // return $this->belongsTo(ss_setup_port::class,'discharge_port_id_1');
    }
    
    // public function Dport2(){
    //     return $this->belongsTo(ss_setup_port::class,'discharge_port_id_2');
    //     // return $this->belongsTo(ss_setup_port::class,'discharge_port_id_2');
    // }
    
}
