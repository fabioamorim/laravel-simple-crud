<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model 
{
    public $timestamps = true;
    protected $table = 'user';
    protected $fillable = [
        'name',
        'cpf',
        'email',
        'phone_number'
    ];
}