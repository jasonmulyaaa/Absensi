<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    protected $table = 'rombels';
    protected $fillable = ['rombel'];
    use HasFactory;
}
