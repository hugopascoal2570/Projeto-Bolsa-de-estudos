<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = ['name', 'slug'];

    public function desconto()
    {
        return $this->hasOne(ScholarShip::class);
    }
    public function cursos()
    {
        return $this->belongsToMany(User::class, 'course_users', 'course_id', 'user_id');
    }

    public function responsaveis()
    {
        return $this->belongsTo(tutor::class, 'tutors', 'user_id');
    }
}
