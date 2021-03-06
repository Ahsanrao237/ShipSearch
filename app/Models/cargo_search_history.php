<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cargo_search_history extends Model
{
    use HasFactory;

    public $table='cargo_search_history';
    public $timestamps=false;
    protected $primaryKey = 'id';
    
    protected $guarded = []; 


    // public function scopeActive($query){
    //     return $query->where('is_active',1);
    // }

    public function cargotype(){
        return $this->hasMany('App\Models\rel_ser_cargo_cargotype',"cargo_id");
    }
    public function Lregion(){
        return $this->hasMany('App\Models\rel_ser_cargo_lregion','cargo_id');
        // return $this->hasMany(rel_ser_cargo_lregion::class,'id');
        // return $this->hasMany('App\Models\rel_ser_cargo_lregion',"id","id");
    }
    public function Dregion(){
        return $this->hasMany('App\Models\rel_ser_cargo_dregion',"cargo_id");
    }
    public function Lcountry(){
        return $this->hasMany('App\Models\rel_ser_cargo_lcountry',"cargo_id");
    }
    public function Dcountry(){
        return $this->hasMany('App\Models\rel_ser_cargo_dcountry',"cargo_id");
    }
    public function Lport(){
        return $this->hasMany('App\Models\rel_ser_cargo_lport',"cargo_id");
    }
    public function Dport(){
        return $this->hasMany('App\Models\rel_ser_cargo_dport',"cargo_id");
    }







    // public function Lcountry(){
    //     return $this->belongsTo(ss_setup_country::class,'loading_country_id');
    // }

    // public function Dcountry(){
    //     return $this->belongsTo(ss_setup_country::class,'discharge_country_id');
    // }

    // public function Lregion(){
    //     return $this->belongsTo(ss_setup_region::class,'loading_region_id');
    // }

    // public function Dregion(){
    //     return $this->belongsTo(ss_setup_region::class,'discharge_region_id');
    // }

    // public function Lport(){
    //     return $this->belongsTo(ss_setup_port::class,'loading_port_id');
    // }

    // public function Lport2(){
    //     return $this->belongsTo(ss_setup_port::class,'loading_port_id_2');
    // }

    // public function Dport(){
    //     return $this->belongsTo(ss_setup_port::class,'discharge_port_id');
    // }
    
    // public function Dport2(){
    //     return $this->belongsTo(ss_setup_port::class,'discharge_port_id_2');
    // }
    
}
