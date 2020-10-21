<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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

        return '';
    }

    public function create()
    {
        $users = User::all();
        $roles = Role::all();

        return view('users.create')
            ->with(['users' => $users, 'roles' => $roles]);
    }

    public function store(Request $request)
    {
        $user = User::find($request->user_id);
        $role = Role::find($request->role_id);

        $user->assignRole($role);

        return '';
    }

    public function remove(Request $request)
    {
        $user = User::find($request->user_id);
        $role = Role::find($request->role_id);

        $user->removeRole($role);

        return '';
    }
}
