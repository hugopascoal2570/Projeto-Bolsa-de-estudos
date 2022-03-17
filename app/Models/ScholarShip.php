<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarShip extends Model
{
    use HasFactory;

    protected $table = 'scholarships';

    protected $fillable = ['course_id', 'bolsas', 'inicio', 'final'];

    public function course()
    {
        return $this->hasOne(Course::class, 'id', 'course_id');
    }
    public function bolsas()
    {
        return $this->hasOne(ScholarShip::class);
    }
}
