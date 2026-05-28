<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
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

        return response()->json($nilai);
    }
}