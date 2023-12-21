<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMahasiswa extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';
    public $timestamps = false;
    protected $fillable = ['nama', 'kelas', 'kode_kelas', 'sks', 'dosen_kelas'];
}
