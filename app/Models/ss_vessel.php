<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ss_vessel extends Model
{
    use HasFactory;
    
    public $table='ss_vessel';
    public $timestamps=false;
    protected $primaryKey = 'vessel_id';


    protected $guarded = [];  
    // protected $fillable = ['country_id','country_name','sortname','phonecode','is_active','create_at','created_by','modified_at','modified_by'];  

    public function scopeActive($query){
        return $query->where('is_active',1);
    }

    public function scopeDesc($query){
        return $query->orderBy('vessel_id',"DESC");
    }


    public function vesseltype(){
        return $this->hasMany('App\Models\rel_vessel_vesseltype',"vessel_id");
    }
    public function chartertype(){
        return $this->hasMany('App\Models\rel_vessel_chartertype',"vessel_id");
    }
    
    public function region(){
        // return $this->hasMany('model_name(rel_vessel_region)',"foreign_key(name of FK inside rel_vessel_region table)",'local_key (name of primary key of this table)');
        return $this->hasMany('App\Models\rel_vessel_region',"vessel_id"); //here, vessel_id is a fk column inside rel_vessel_region table. 
        // select * from rel_vessel_region where vessel_id=1;
    }
    public function country(){
        return $this->hasMany('App\Models\rel_vessel_country',"vessel_id");
    }
    public function port(){
        return $this->hasMany('App\Models\rel_vessel_port',"vessel_id");
    }









    // old
    // public function vesseltype(){
    //     // return $this->belongsTo('App\Models\ss_setup_vessel_type','vessel_type_id');
    //     return $this->belongsTo(ss_setup_vessel_type::class,'vessel_type_id');
    // }

    // public function chartertype(){
    //     return $this->belongsTo(ss_setup_charter_type::class,'charter_type_id');
    // }

    // public function country(){
    //     return $this->belongsTo(ss_setup_country::class,'country_id');
    // }

    // public function region(){
    //     return $this->belongsTo(ss_setup_region::class,'region_id');
    // }

    // public function port(){
    //     return $this->belongsTo(ss_setup_port::class,'port_id');
    // }
}
