<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewuser($id)
    {
        $user = User::findOrFail($id);
        return view('view_user', compact('user'));
        
    }
    public function updateuser(Request $request, $id){
        $user = User::findOrfail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->salary = $request->salary;
        $user->description = $request->description;
        $user->save();
        return redirect('/users');
    }

    public function deleteuser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users');
    }
    public function profil(Request $request){
        return view('dashboard', ['user' => User::all()]);
    }
}
