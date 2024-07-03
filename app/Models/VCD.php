<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VCD extends Model
{
    // Sesuaikan dengan kolom-kolom yang ada di tabel 'vcds'
    protected $fillable = [
        'judul', 'aktor', 'sutradara', 'publisher', 'kategori', 'stok'
    ];
}
