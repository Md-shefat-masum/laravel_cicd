<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/welcome';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return "phone_number1";
    }

    protected function attemptLogin()
    {
        $type = $this->username();
        if (filter_var(request()->$type, FILTER_VALIDATE_EMAIL)) {
            $type = "email";
        }
        return auth()->attempt(
            [
                $type => $_REQUEST[$this->username()],
                "password" => request()->password,
            ],
            request()->remember
        );
    }
}
