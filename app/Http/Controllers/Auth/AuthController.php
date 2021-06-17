<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Logic\AuthLogic;
use Illuminate\Support\Facades\Request;



/**
 * Created by :
 * User zjx
 * Date 2021/6/17
 * Time 上午 11:36
 */
class AuthController extends Controller
{
    public function auth(Request $request, AuthLogic $authLogic)
    {
        $authLogic->userAuth($request);
    }
}
