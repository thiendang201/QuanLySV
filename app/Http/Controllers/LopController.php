<?php

namespace App\Http\Controllers;

use App\Models\Lop;
use Illuminate\Http\Request;

class LopController extends Controller
{
    public function index() {
        return response()->json([
            'code' => 200,
            'data' => Lop::all()
        ]);
    }
}
