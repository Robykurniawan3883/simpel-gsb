<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datakepalakeluarga extends Model
{
    use HasFactory;
    protected $table = 'datakepalakeluarga';
    protected $guarded = ["id"];
    protected $fillable = [
        'id', 'kepalakeluarga' ,'datart_id', 'nokk' , 'tempattinggal' , 'notelepon' , 'jumlahkeluarga' , 'imagekk'
    ];

    public function datart()
    {
        return $this->belongsTo(datart::class);
    }
}
