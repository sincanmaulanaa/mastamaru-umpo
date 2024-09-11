<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use QrCode;
class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all(); // Mengambil semua data mahasiswa
        return view('mahasiswa.index', compact('mahasiswa'));
    }
    public function generateQrCode()
    {
        return QrCode::size(250)->generate('Some text to encode');
    }
}
