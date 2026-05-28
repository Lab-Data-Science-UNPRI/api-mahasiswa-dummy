<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KrsController extends Controller
{
    //
    public function index(Request $request)
    {
        $krs = $request->user()
            ->krs()
            ->with('mataKuliah.dosen')
            ->get();

        return response()->json($krs);
    }
}