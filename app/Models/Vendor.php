<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $table = 'vendors'; // Nama tabel yang sesuai
    protected $primaryKey = 'idvendor'; // Kolom utama (primary key) yang sesuai
    protected $fillable = [
        'nama_vendor',
        'badan_hukum',
        'status',
    ];
    public $timestamps = true; // Atur menjadi false jika tabel tidak memiliki kolom created_at dan updated_at
}