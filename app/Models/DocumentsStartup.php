<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentsStartup extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "documentsStartup";

    protected $guarded = ['id'];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function startup(){

        return $this->belongsTo(Startup::class, 'fk_startups_id');
    }
}
