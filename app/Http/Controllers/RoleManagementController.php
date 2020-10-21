<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:super admin']);
    }

    public function index()
    {
        $roles = Role::all();
        // dd($roles);
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        $roles = Role::all();
        $permission = Permission::all();

        return view('roles.create')
            ->with(['roles' => $roles, 'permissions' => $permission]);
    }

    public function show(Role $role)
    {
        $permissions = $role->permissions;

        return view('roles.show')->with(['role' => $role, 'permissions' => $permissions]);
    }

    public function store(Request $request)
    {
        $role = Role::find($request->role_id);

        $role->syncPermission($request->permission_id);

        return redirect()->route('roles.index')
            ->with('success', 'Role berhasil dimodifikasi');
    }

    public function remove(Request $request)
    {
        $role = Role::find($request->role_id);
        $permission = Permission::find($request->permission_id);

        $role->revokePermissionTo($permission);

        return '';
    }
}
