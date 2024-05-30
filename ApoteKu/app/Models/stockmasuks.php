<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stockmasuks extends Model
{
    use HasFactory;
    protected $table = 'stockmasuks';
    protected $guarded = [];
    protected $fillable = [
        'obat_id',
        'id_user', // Pastikan ini ada di fillable
        'jumlah',
    ];
    public function obat()
    {
        return $this->belongsTo(obats::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
