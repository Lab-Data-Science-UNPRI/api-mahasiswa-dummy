<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CurriculumItemResource;
use App\Models\CurriculumItem;

class CurriculumItemController extends Controller
{
    public function index()
    {
        $items = CurriculumItem::with('semester')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data mata kuliah berhasil diambil',
            'data' => CurriculumItemResource::collection($items),
        ]);
    }
}