<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'amount'
    ];

    public function Usuario()
    {
        return $this->belongsTo('App\Models\User', 'fkuser');
    }

    public function Rol()
    {
        return $this->belongsTo('App\Models\Rol', 'fkrol');
    }
}
