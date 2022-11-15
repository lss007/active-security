<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LogoutResponse;

class UserLogoutController extends Controller
{
    //
    public function user_logout(Request $request): LogoutResponse{

       Auth::guard('web')->logout();
       $request->session()->invalidate();

       $request->session()->regenerateToken();

       return app(LogoutResponse::class);
    }
}
