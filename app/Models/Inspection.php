<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Inspection extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "inspections";

    protected $guarded = ['id'];


    protected $dates = ['deleted_at'];


 public function equipaments(){

        return $this->belongsTo(EquipmentRepair::class, 'fk_Payments_id');
    }

    public function startups(){

        return $this->belongsTo(Startup::class, 'fk_Payments_id');
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

    
}
