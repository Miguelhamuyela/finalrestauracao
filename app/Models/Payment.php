<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{

    use HasFactory, SoftDeletes;
    protected $table = "payments";

    protected $guarded = ['id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    public function equipaments(){

        return $this->belongsTo(EquipmentRepair::class, 'fk_Payments_id');
    }

    public function startups(){

        return $this->belongsTo(Startup::class, 'fk_Payments_id');
    }


    public function payments(){
        return $this->belongsTo(MeetingRoom::class, 'fk_Payments_id');
    }


    public function manufacturesSoftware(){

        return $this->belongsTo(ManufacturesSoftware::class, 'fk_Payments_id');
    }

    public function  Cowork(){

        return $this->belongsTo(Cowork::class, 'fk_Payments_id');
    }
    public function  Auditoriums(){

        return $this->belongsTo(Auditorium::class, 'fk_Payments_id');
    }



    public function Elearnings(){
        return $this->belongsTo(Elearning::class, 'fk_Payments_id');
    }


    public function  MeetingRooms(){

        return $this->belongsTo(MeetingRoom::class, 'fk_Payments_id');
    }

}


