<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas'; // nama tabel nya
    protected $fillable = [  // yang boleh terisi
        'nama',
        'nim',
        'jurusan'
    ];
}
