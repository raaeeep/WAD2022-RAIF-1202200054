<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{
    use HasFactory;

    protected $table = 'tb_user';
    protected $primarKey = 'id';

    protected $fillable = ['name', 'no_hp', 'email', 'password'];
}
