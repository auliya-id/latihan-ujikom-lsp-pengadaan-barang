<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'item';
    protected $primaryKey = 'id_item';
    public $timestamps = false;

    protected $fillable = [
        'nama_item',
        'harga_beli',
        'harga_jual',
        'gambar'
    ];
}
