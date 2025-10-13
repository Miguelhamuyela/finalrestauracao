<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;


class Autinspection extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "autinspections";

    protected $guarded = ['id'];


    protected $dates = ['deleted_at'];

    public function payments(){
        return $this->belongsTo(Payment::class, 'fk_Payments_id', 'id');
    }

    public function scheldules(){
        return $this->belongsTo(Scheldule::class, 'fk_Scheldules_id', 'id');
    }

    public function members(){

        return $this->hasMany(Member::class, 'fk_startups_id');
    }

    public function startupDocuments(){

        return $this->hasMany(DocumentsStartup::class, 'fk_startups_id');
    }
}
