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

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function startup()
    {
        return $this->belongsTo(Startup::class);
    }
}
