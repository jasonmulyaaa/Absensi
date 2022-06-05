<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['nis', 'nama', 'rombel', 'rayon', 'username', 'password'];
    use HasFactory;
}
