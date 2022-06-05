<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    protected $table = 'rayons';
    protected $fillable = ['rayon', 'pembimbing_rayon'];
    use HasFactory;
}
