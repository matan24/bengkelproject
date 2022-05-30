<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataservice extends Model
{
    protected $table = 'konsumen';
    protected $fillable = ['status', 'keterangan', 'jam'];

}
