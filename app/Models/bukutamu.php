<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukutamu extends Model
{
    use HasFactory;
    protected $table = "bukutamu";
    // protected $primarykey = "id";
    protected $fillable = [
        'id', 'nama', 'nik', 'alamat', 'notelepon', 'menemui', 'keperluan', 'waktu', 
    ];
}
