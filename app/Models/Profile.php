<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'fkuser',
    //     'fkrol',
    // ];

    public function Usuario()
    {
        return $this->belongsTo('App\Models\User', 'fkuser');
    }

    public function Rol()
    {
        return $this->belongsTo('App\Models\Rol', 'fkrol');
    }
}
