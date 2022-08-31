<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $fillable = ['gambar1', 'gambar2', 'gambar3', 'gambar4', 'gambar5', 'gambar6', 'gambar7', 'gambar8',];
    protected $table = 'fasilitas';
}
