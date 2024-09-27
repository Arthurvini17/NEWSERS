<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Funcionario extends  Authenticatable
{
    use Notifiable;
    use HasFactory;

    protected $fillable = [
        'username',
        'password'
    ];
}
