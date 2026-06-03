<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\NilaiResource;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    //
    public function index(Request $request)
    {
        $nilai = $request->user()
            ->nilai()
            ->with('mataKuliah')
            ->get();

        return response()->json([
                'status'        => 200,
                'message'       => 'Data Nilai Berhasil Ambil',
                'data'          => NilaiResource::collection($nilai),
            ], 200);
    }
}
