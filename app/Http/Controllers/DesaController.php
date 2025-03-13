<?php

// app/Http/Controllers/DesaController.php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function getKecamatan()
    {
        $kecamatan = Desa::distinct('kecamatan')->get();
        return response()->json($kecamatan);
    }

    public function getDesa(Request $request)
    {
        $desa = Desa::where('kecamatan', $request->kecamatan)->get();
        return response()->json($desa);
    }

    public function getTahun()
    {
        $tahun = Desa::distinct('tahun')->orderBy('tahun', 'desc')->get();
        return response()->json($tahun);
    }

    public function showProfilDesa()
    {
        $kecamatan = Desa::distinct()->pluck('kecamatan'); // Ambil daftar kecamatan unik
        $desa = Desa::pluck('desa'); // Ambil semua nama desa
        $tahun = Desa::distinct()->orderBy('tahun', 'desc')->pluck('tahun'); // Ambil tahun unik

        return view('profil-desa', compact('kecamatan', 'desa', 'tahun'));
    }
    public function index()
    {
        return view('profil-desa');
    }
}
