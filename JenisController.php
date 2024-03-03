<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // untuk menampilkan data table jenis
        $ar_jenis = Jenis::all();
        if (isset($ar_jenis)) {
            $hasil = [
                'message' => 'Data Jenis',
                'data' => $ar_jenis,
            ];
            return response()->json($hasil, 200);
        } else {
            $fails = [
                'message' => 'Data Jenis Tidak Ditemukan',
                'data' => $ar_jenis,
            ];
            return response()->json($fails, 404);
        }
    }
}