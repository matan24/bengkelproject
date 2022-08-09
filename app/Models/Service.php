<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';
    protected $fillable = ['nama', 'alamat', 'no', 'waktu', 'tanggal', 'jservice', 'plat', 'id_jenis', 'kendala', 'status', 'keterangan', 'jam'];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class,"id_jenis");
    }

}
