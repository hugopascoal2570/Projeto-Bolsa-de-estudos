<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = ['name', 'bolsas', 'inicio', 'final'];

    public function desconto()
    {
        return $this->hasOne(ScholarShip::class);
    }
    public function bolsas()
    {
        return $this->hasOne(ScholarShip::class);
    }
}
