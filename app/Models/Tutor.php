<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $table = 'tutors';
    protected $fillable = [
        'name', 'is_admin', 'email', 'user_id', 'cpf', 'phone', 'idade', 'birthdate', 'nacionalidade', 'photo'
    ];

    public function estudantes()
    {
        return $this->hasOne(User::class, 'responsible_users');
    }
}
