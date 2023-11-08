<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;
    protected $table = 'formulir';
    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'suku',
        'kebangsaan',
        'pendidikan_terakhir',
        'jurusan',
        'ipk',
        'foto',
        'pt',
        'alamat',
    ];
}
