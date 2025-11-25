<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // kolom mana saja yang boleh diisi massal
    protected $fillable = ['nama', 'telp', 'tanggal_mulai', 'tanggal_selesai'];
}
