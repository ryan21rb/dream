<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expedition extends Model
{
    use HasFactory;

    protected $table = 'expedition';
    protected $fillable = ['nama_ekspedisi', 'harga', 'tgl_terima'];
    protected $primaryKey = 'kd_ekspedisi';
    public $incrementing = false;
    public $timestamp = false;
}
