<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Magang_Model extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'id_magang';
    protected $fillable = ['id_magang', 'gambar', 'nama_perusahaan', 'alamat', 'link'];
    protected $table = 'magang';
}
