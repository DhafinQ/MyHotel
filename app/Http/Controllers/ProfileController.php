<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        return view('auth.editprofile' , compact('user'));
    }

    public function update(UpdateProfileRequest $request)
    {
        auth()->user()->update($request->only('name' , 'username' , 'email'));

        if ($request->input('password'))
        {
            auth()->user()->update(['password' => bcrypt($request->input('password'))]);
        };

        return redirect()->route('profile.update' , Auth::user()->id)->with('success' , 'Profile Updated!');
    }
}
