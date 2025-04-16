<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Surat extends Model
{
    use HasFactory;
    protected $table = 'surat';

    protected $fillable = [
        'idSurat',
        'status',
        'jenis',
        'no_mk',
        'nama_mk',
        'semester',
        'nrp',
        'detail_surat',
        'nip',

    ];

    protected $primaryKey = 'idSurat';
    public $incrementing = true;

    public function mahasiswa() {
        return $this->belongsTo(user::class, 'user_nip', 'nip');
    }

}
