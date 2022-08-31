<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teknisi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_teknisi';
    protected $fillable = ['nama_teknisi', 'slug_teknisi', 'jabatan', 'gambar'];
    protected $table = 'teknisi';
}
