<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use http\Client\Curl\User as shutUp;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use function Webmozart\Assert\Tests\StaticAnalysis\ip;

class authController extends Controller
{
    public function authForm()
    {
        $ipv4 = getHostByName(getHostName());
        $user = User::where('ip', $ipv4)->get();

        return view('backendTests/auth', compact('user'));
    }

    public function auth(Request $request)
    {
        $user = User::where('account', $request->account)->get()->first();

        if($request->password == $user->password)
        {
            Auth::login($user);
            $request->session()->regenerate();

            $users = User::sortable()->get();
            $departments = Department::all();
            return view('backendTests/index', compact('users', 'departments'));
        }
        else
        {
            dd('suck');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
