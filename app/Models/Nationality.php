<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    use HasFactory;

    protected $table = 'nationalities';

    protected $fillable = ['name', 'is_admin', 'email', 'password', 'cpf', 'phone', 'idade', 'birthdate', 'nacionalidade', 'photo'];
}
