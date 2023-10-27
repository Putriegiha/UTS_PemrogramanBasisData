<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory;
    
    protected $table = 'satuans'; // Nama tabel yang sesuai
    protected $primaryKey = 'idsatuan'; // Kolom utama (primary key) yang sesuai
    protected $fillable = [
        'nama_satuan',
        'status',
    ];
    public $timestamps = true; // Atur menjadi false jika tabel tidak memiliki kolom created_at dan updated_at
}