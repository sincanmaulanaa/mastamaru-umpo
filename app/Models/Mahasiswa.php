<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = ['qr_code', 'nama', 'nim', 'prodi', 'fakultas', 'kelompok', 'absen1', 'absen2', 'absen3', 'absen4', 'absen5', 'absen6', 'absen7', 'absen8', 'absen9', 'absen10', 'absen11', 'absen12', 'absen13', 'absen14', 'absen15', 'absen16'];
}
