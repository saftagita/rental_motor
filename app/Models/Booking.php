<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'nama',
        'telp',
        'tanggal_mulai',
        'tanggal_selesai'
    ];

    // relasi ke Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
