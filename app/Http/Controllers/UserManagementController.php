<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:super admin']);
    }

    public function index()
    {
        $all_users_with_all_their_roles = User::with('roles')->get();
        // dd($all_users_with_all_their_roles);
        // return view('users.index', compact('users'));
        return view('users.index')->with(['users' => $all_users_with_all_their_roles]);
    }

    public function create()
    {
        $roles = Role::all();

        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $user = User::create([
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        // $user = User::find($request->user_id);
        // $role = Role::find($request->role_id);
        $user->assignRole($request->role_id);

        return redirect()->route('users.index')
            ->with('success', 'User berhasil dimodifikasi');
    }

    public function edit()
    {
        $users = User::all();
        $roles = Role::all();

        return view('users.create')
            ->with(['users' => $users, 'roles' => $roles]);
    }

    public function update()
    {
    }

    public function remove(Request $request)
    {
        $user = User::find($request->user_id);
        $role = Role::find($request->role_id);

        $user->removeRole($role);

        return '';
    }
}
