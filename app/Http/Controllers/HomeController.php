<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class HomeController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request,
        [
            'name' => 'required|min:6|max:30',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:30',
            're_password' => 'required|same:password',
            'address' => 'required|max:255|min:10'

        ],
        [
            'email.required' => 'This cant be empty',
            'email.unique' => 'This email is exists',
            'email.email' => 'This email is wrong',
            'address.required' => 'This cant be empty',
            'address.min' => 'This cant be small than 10',
            'address.max' => 'This cant be large than 255',
            'name.required' => 'This cant be empty',
            'name.min' => 'This cant be small than 6',
            'name.max' => 'This cant be large than 30',
            'password.required' => 'This cant be empty',
            'password.min' => 'This cant be small than 6',
            'password.max' => 'This cant be large than 30',
            're_password.required' => 'This cant be empty',

        ]
    );
    $data = $request->all();
    $data['password'] = Hash::make($request->password);
    $user = User::create($data);
    Auth::login($user);
    return \back()->with('thongbao','Register successful');
    }
}
