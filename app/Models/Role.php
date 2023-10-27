<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles'; // Nama tabel yang sesuai
    protected $primaryKey = 'idrole'; // Kolom utama (primary key) yang sesuai
    protected $fillable = [
        'nama_role',
        'status'
    ];
    public $timestamps = true; // Atur menjadi false jika tabel tidak memiliki kolom created_at dan updated_at
        // Dapat menambahkan hubungan dengan model lain di sini jika diperlukan.
        
    public function user()
    {
        return $this->hasMany(User::class, 'idrole', 'idrole');
    }
}
