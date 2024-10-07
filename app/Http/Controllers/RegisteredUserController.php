<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $userAtrr = $request->validate([
            'name' => ['required'] ,
            'email' => ['required', 'email' , 'unique:users,email'] ,
            'password' => ['required', 'confirmed' , Password::min(8)] ,
        ]);

        $employerAtrr = $request->validate([
            'employer' => ['required' , 'max:255'],
            'logo' => ['required' , File::types(['jbg' , 'png'])]
        ]);

        $user = User::create($userAtrr);

        $url = $request->logo->store('logos');
        $user->employer()->create([
            'name' => $employerAtrr['employer'],
            'logo' => $url
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
