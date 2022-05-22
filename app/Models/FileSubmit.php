<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileSubmit extends Model
{
    use HasFactory;
    protected $fillable = [
        'idPost', 'idUser', 'idInfoFile', 'title', 'content', 'status'
    ];
    public function infofile()
    {
        return $this->belongsTo('App\Models\InfoFile','idInfoFile');

    }
    public function user()
    {
        return $this->belongsTo('App\Models\User','idUser');
    }
    public function post()
    {
        return $this->belongsTo('App\Models\Posts','idPost');
    }
}
