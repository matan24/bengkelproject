<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwalservice';
    protected $fillable = ['hari', 'kuotaservice', 'waktu', 'kuota', 'mekanik'];

    public function service()
    {
        return $this->belongsTo(Service::class,"id_nama");
    }

    public function jenis()
    {
        return $this->belongsTo(Jenis::class,"id_jenis");
    }


}
