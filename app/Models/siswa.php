<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = "siswa";
    protected $fillable = ['nrp', 'nama_kegiatan', 'semester', 'jenis', 'waktu', 'tempat', 'golongan', 'instansi', 'posisi', 'golongan', 'penyelenggara', 'status', 'foto'];
}
