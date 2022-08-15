<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datart extends Model
{
    use HasFactory;

    protected $table = 'datart';
    protected $guarded = 'id';
    protected $fillable = [
        'id' , 'rt' , 'ketuart', 'alamatrt'
    ];

    public function datakepalakeluarga()
    {
        return $this->hasMany(datakepalakeluarga::class);
    }
}
