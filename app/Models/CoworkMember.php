<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoworkMember extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "coworks_member";

    protected $guarded = ['id'];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function cowork(){

        return $this->belongsTo(Cowork::class, 'fk_coworks_id');
    }
}
