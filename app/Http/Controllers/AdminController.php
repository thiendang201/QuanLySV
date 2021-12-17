<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(Request $request): \Illuminate\Http\JsonResponse
    {
        $account = DB::table('admins')->where('taiKhoan', $request->taiKhoan)->first();

        if($account != NULL && Hash::check($request->matKhau, $account->matKhau))
            return response()->json([
                'code' => 200,
                'data' => $account
            ]);
        return response()->json([
            'code' => 404,
            'message' => "Tài khoản hoặc mật khẩu sai!"
        ]);
    }
}
