<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PusatBantuan extends Model
{
    use HasFactory;
    protected $table = 'pusatbantuan';
    protected $fillable = [
        'nama',
        'nomor_telepon',
        'email',
        'laporan',
    ];
}
