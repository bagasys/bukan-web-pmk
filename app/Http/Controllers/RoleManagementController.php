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

    public function index() {

        $roles = Role::all();


        return view('roles.index', compact('roles'));
    }


    public function update(Request $request)
    {
        $role = Role::find($request->role_id);
        $permission = Permission::find($request->permission_id);

        $role->givePermissionTo($permission);

        return '';
    }

    public function remove(Request $request)
    {
        $role = Role::find($request->role_id);
        $permission = Permission::find($request->permission_id);

        $role->revokePermissionTo($permission);

        return '';
    }
}
