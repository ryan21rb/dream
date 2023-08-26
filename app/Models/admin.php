<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class admin extends Model
{
    use HasFactory, Searchable;

    protected $table = 'admin';
    protected $fillable = ['username','nama_lengkap','jenkel','tgl_lahir','alamat','no_telp','password','email'];
    protected $primaryKey = 'id_admin';

    public function toSearchableArray()
{
    return [
        'username' => $this->username,
        'nama_lengkap' => $this->nama_lengkap,
        'jenkel' => $this->jenkel,
        'alamat' => $this->alamat,
        'email' => $this->email,
    ];
}
}
