<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePass extends Controller
{
    // user password change
    public function changePassword()
    {
        return view('admin.body.change_password');
    }
    // upate the user password
    public function updatePassword(Request $request)
    {
       $validateData = $request -> validate([
           'old_password'   => 'required',
           'password'   => 'required|confirmed'
       ]);

       $hashedPassword = Auth::user() -> password;

       if( Hash::check($request -> old_password, $hashedPassword) ){
            $user = User::find(Auth::user() -> id);
            $user -> password = Hash::make($request -> password);
            $user -> update();
            
            Auth::logout();
            return redirect() -> route('login') -> with('success','password change successfully');
            
       }else{
            return redirect() -> back() -> with('error','Current password is Invalid');
       }
    }
}
