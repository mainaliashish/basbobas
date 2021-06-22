<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AccountController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function account()
    {
        $active_account = "active";
        $title = "Admin - Account";      
        $user = User::first(); 
        return view('backend.accounts.account', compact('user','active_account', 'title'));
    }

    public function updateAccountPassword(Request $request)
    {
        $active_account = "active";
        $title = "Admin - Account";      
        $user = User::first(); 
        
        $this -> validate($request, [
        	'new-password_confirmation' => 'required',
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
       ]);

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
        	session()->flash("error","Your current password does not matches with the password you provided. Please try again.");
            return redirect()->back();
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
        	session()->flash("error","New Password cannot be same as your current password. Please choose a different password.");
            return redirect()->back();
        }

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        session()->flash("success","Password changed successfully");
        return redirect()->back();
    }

    public function profile()
    {
        $active_account = "active";
        $title = "Admin - Profile";      
        $user = User::first(); 
        return view('backend.accounts.profile', compact('user','active_account', 'title'));
    }

    public function updateProfile(Request $request)
    {
        $user = User::first();

        $input = $request->only(['name']);
        
        $image = $request->file('profile_image');
        
        $input['profile_image'] = updateNewImageOrKeepOld($image, $user->profile_image, 100, 100);
        $result = $user->update($input);

        if($result) {
             session()->flash('success', 'Profile Updated Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.profile');
    }
}
