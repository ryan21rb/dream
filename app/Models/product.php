<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class product extends Model
{
    use HasFactory, Searchable;

    protected $table = 'product';
    protected $fillable = ['id_product','id_kategori','id_admin','nama_product','harga','stok','warna','deskripsi'];
    protected $primaryKey = 'id_product';
    // protected $foreignKey = 'id_kategori'&&'id_admin';

    public function toSearchableArray()
    {
    return [
        'nama_product' => $this->nama_product,
        'harga' => $this->harga,
        'warna' => $this->warna,
    ];
    }
}
