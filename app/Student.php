<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //validasi buat insert data dari controller store
    protected $fillable = ['tabel', 'nama', 'nim', 'email', 'jurusan'];
}
