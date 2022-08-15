<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapegawai extends Model
{
    use HasFactory;

    protected $table = 'datapegawai';
    protected $fillable = [
        'id' , 'nama' , 'email' , 'jabatan' , 'npwp' , 'nip' , 'pangkat' , 'notelepon' , 'fotoprofil', 'image'
    ];

    // public function profilpegawai()
    // {
    //     return $this->hasOne(profilpegawai::class);
    // }

}
