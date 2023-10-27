<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs'; // Nama tabel yang sesuai
    protected $primaryKey = 'idbarang'; // Kolom utama (primary key) yang sesuai
    protected $fillable = [
        'jenis',
        'nama',
        'status',
        'harga',
        'idsatuan',
    ];
    public $timestamps = true; // Atur menjadi false jika tabel tidak memiliki kolom created_at dan updated_at

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'idsatuan', 'idsatuan');
    }
}