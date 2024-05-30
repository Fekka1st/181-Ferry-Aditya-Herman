<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_obats extends Model
{
    use HasFactory;
    protected $fillable = ['nama_kategori'];
    public function obats()
    {
        return $this->hasMany(obats::class, 'kategori_obats_id');
    }
}
