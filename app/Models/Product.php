<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nama',
        'harga',
        'foto',
        'deskripsi',
    ];

    // relasi ke model Booking
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
