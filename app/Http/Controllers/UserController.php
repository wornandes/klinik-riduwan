<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', [
            'users' => $users
        ]);
    }

    public function addUser(){
        return view('user.add',[
            'roles' => Role::all() 
        ]);
    }

    public function storeUser(Request $request){
        $validated = $this->validate($request, [
            'username' => 'required|unique:users,username',
            'name' => 'required',
            'password' => 'required|confirmed',
            'role_id' => 'required',
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role_id;
        $user->save();

        return redirect('/user')->with('success', 'Data petugas berhasil ditambah');
    }

    public function editUser($user_id){
        return view('user.edit', [
            'roles' => Role::all(),
            'user' => User::find($user_id)
        ]);
    }

    public function updateUser(Request $request){
        $validated = $this->validate($request, [
            'username' => 'required|unique:users,username,' . $request->id,
            'name' => 'required',
            'password' => 'nullable|confirmed',
            'role_id' => 'required',
        ]);

        $user = User::find($request->id);
        $user->username = $request->username;
        $user->name = $request->name;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->role_id = $request->role_id;
        $user->save();

        return redirect('/user')->with('success', 'Data user berhasil diubah');
    }

    public function destroyUser(Request $request){
        User::destroy($request->id);
        return redirect('/user')->with('success', 'Data user berhasil dihapus');
    }
}
