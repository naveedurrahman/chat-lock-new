<?php

namespace App\Http\Controllers\user;

use App\Models\NumberAgent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserChatController extends Controller
{
    public function index()
    {
        return view('user.pages.chat');
    }
}
