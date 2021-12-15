<?php

namespace App\Http\Controllers;

use App\Models\SinhVien;
use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    public function index() {
        return response()->json([
            'code' => 200,
            'data' => SinhVien::all()
        ]);
    }
}
