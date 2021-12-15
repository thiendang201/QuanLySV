<?php

namespace App\Http\Controllers;

use App\Models\SinhVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SinhVienController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'code' => 200,
            'data' => SinhVien::all()
        ]);
    }

    public function getStudentsByClassId(Request $request): \Illuminate\Http\JsonResponse
    {
        return response()->json([
           'code' => 200,
            'data' => DB::table('sinh_viens')->where('maLop', $request->maLop)->get()
        ]);
    }
}
