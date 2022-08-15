<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profilpegawai extends Model
{
    use HasFactory;
    protected $table = 'datapegawai';
    protected $fillable = [
        'id' , 'nama' , 'email' , 'jabatan' , 'npwp' , 'nip' , 'pangkat' , 'notelepon'
    ,];

    // public function datapegawai()
    // {
    //     return $this->belongsTo(datapegawai::class);
    // }

}
