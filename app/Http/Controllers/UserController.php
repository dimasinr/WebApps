<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, DB, Storage};

class UserController extends Controller
{
    public function profile()
    {
        return view('users.profile');
    }

    public function updateprofile()
    {
        return view('users.update');
    }

    public function avastore(Request $request, User $user)
    {
        // dd($user);
        $user = Auth::user();

        $request->validate([
            'avatar' => request('avatar') ? 'image|mimes:jpg,jpeg,png' : '',
        ]);

        if (request()->file('avatar')) {
            // Storage::delete($user->avatar);
            $avatar = request()->file('avatar')->store("images/avatars");
        } else {
            $avatar = $user->avatar;
        }

        $attr = $request->all();
        $attr['avatar'] = $avatar;

        $user->update($attr);

        session()->flash('success', 'The Profile Was Updated');
        return back();
    }
}
