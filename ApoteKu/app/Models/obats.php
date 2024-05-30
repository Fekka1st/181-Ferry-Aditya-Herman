<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obats extends Model
{
    use HasFactory;
    protected $table = 'obats';
    protected $guarded = [];
    // protected $fillable = ['nama', 'kategori_obats_id', 'stok', 'harga_jual', 'harga_beli','satuan'];

    public function kategoriObat()
    {
        return $this->belongsTo(kategori_obats::class, 'kategori_obats_id');
    }
}
