<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            // untuk menampilkan data table produk
            $ar_produk = Produk::all();
            if (isset($ar_produk)) {
                $hasil = [
                    'message' => 'Data Produk',
                    'data' => $ar_produk,
                ];
                return response()->json($hasil, 200);
            } else {
                $fails = [
                    'message' => 'Data Produk Tidak Ditemukan',
                    'data' => $ar_produk,
                ];
                return response()->json($fails, 404);
            }
    }
}