<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class RegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = '/home';
    public function __construct()
    {
        $this->middleware('guest');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'phone_number1' => ['required', 'string', 'max:20'],
            'telegram_name' => ['required', 'string', 'max:20'],
            'photo' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $path = "avatar.png";
        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number1' => $data['phone_number1'],
            'telegram_name' => $data['telegram_name'],
            'photo' => $path,
            'password' => Hash::make($data['password']),
        ]);

        if (request()->hasFile('photo')) {
            $file = Image::make($data['photo'])->fit(300, 300, function ($constraint) {
                $constraint->upsize();
            });
            $path = "uploads/users/".$user->id.rand(10,99).Str::slug($user->name).'.'.request()->file('photo')->getClientOriginalExtension();
            $file->save($path);
            $user->photo = $path;
            $user->save();
        }

        return $user;
    }
}
