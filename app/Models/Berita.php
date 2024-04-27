<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'author',
        'slug',
        'berita',
        'berita_pendek',
        'sumber',
        'tag',
        'gambar',  
    ];
}
