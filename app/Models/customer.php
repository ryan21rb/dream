<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
   
    protected $table = 'customer';
    protected $fillable = ['id_product','id_category','id_admin','nama_customer','no_telp','jenkel','alamat','username','password','email'];
    protected $primaryKey = 'id_customer';
}
