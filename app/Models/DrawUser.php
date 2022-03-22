<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrawUser extends Model
{
    use HasFactory;

    protected $table = 'draw_users';

    protected $fillable = ['user_id', 'course_id'];
}
