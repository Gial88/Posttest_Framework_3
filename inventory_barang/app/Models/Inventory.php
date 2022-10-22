<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function member(){
        return $this->belongsTo(Member::class);
    }

    use HasFactory;
    protected $table = 'inventories';
    protected $fillable = ['id', 'nama_barang', 'jumlah_barang', 'deskripsi_barang'];
}
