<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalender_Model extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'judul_file', 'file'];
    protected $table = 'kalender_akademik';
}
