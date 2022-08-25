<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_Model extends Model
{
    use HasFactory;
    protected $fillable = ['judul_event', 'slug_event', 'isi', 'user_id', 'publish', 'gambar'];

    protected $table = 'event';
}
