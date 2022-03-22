<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $table = 'tutors';
    protected $fillable = [
        'name', 'is_admin', 'email', 'cpf', 'phone', 'idade', 'birthdate', 'nacionalidade', 'image'
    ];

    public function estudantes()
    {
        return $this->belongsToMany(User::class, 'tutor_users', 'tutor_id', 'user_id');
    }
}
