<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $table = 'users'; // Nama tabel yang sesuai
    protected $primaryKey = 'iduser'; // Kolom utama (primary key) yang sesuai
    protected $fillable = [
        'username',
        'password',
        'idrole',
    ];
    public $timestamps = true; // Atur menjadi false jika tabel tidak memiliki kolom created_at dan updated_at

    public function role()
    {
        return $this->belongsTo(Role::class, 'idrole', 'idrole');
    }
}