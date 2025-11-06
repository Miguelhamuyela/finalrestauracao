<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Autinspection;

class Client extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "clients";

    protected $guarded = ['id'];

    public function Autinspection()

    {

        return $this->hasMany(Autinspection::class);

    }

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
