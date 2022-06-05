<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $table = 'absens';
    protected $fillable = ['nis', 'jam_kedatangan', 'jam_kepulangan', 'ket'];
    use HasFactory;
}
