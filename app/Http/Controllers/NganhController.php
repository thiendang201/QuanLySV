<?php

namespace App\Http\Controllers;

use App\Models\Nganh;
use Illuminate\Http\Request;

class NganhController extends Controller
{
    public function index() {
        return response()->json([
            'code' => 200,
            'data' => Nganh::all(),
        ]);
    }
}
