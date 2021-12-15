<?php

namespace App\Http\Controllers;

use App\Models\Khoa;
use Illuminate\Http\Request;

class KhoaController extends Controller
{
    public function index() {
        return response()->json([
            'code' => 200,
            'data' => Khoa::all(),
        ]);
    }
}
