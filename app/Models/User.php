<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // pakai nip sebagai primary key
    protected $primaryKey = 'nip';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nip', 'name', 'email', 'password', 'Role_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // supaya Auth pakai nip untuk login
    public function getAuthIdentifierName()
    {
        return 'nip';
    }

    // relasi ke tabel roles
    public function role()
    {
        return $this->belongsTo(Role::class, 'Role_id');
    }

    // relasi ke tabel pengajuan
    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class, 'Users_nip', 'nip');
    }

    
}
