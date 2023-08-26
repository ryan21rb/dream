<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promo extends Model
{
    use HasFactory;

    protected $table = 'promotion';
    protected $fillable = ['id_product', 'potongan_harga'];
    protected $primaryKey ='kd_promo';
    public $incrementing = false;
    public $timestamp = false;
}
