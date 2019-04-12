<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
        // dd(\Auth::user()->hasVerifiedEmail()); 查看当前登录的用户是否激活了邮箱
        return view('pages.root');
    }
}
