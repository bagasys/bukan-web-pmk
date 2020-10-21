<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $pageNumber = $request->query('page');
        $roles = Role::paginate(5, ['*'], 'page', $pageNumber);
        
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $permission = Permission::all();

        return view('roles.create')
            ->with(['permissions' => $permission]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($request->permission_ids);
        return redirect()->route('roles.index')
            ->with('success', 'Role berhasil dimodifikasi');
    }

    /**
     * Display the specified resource.
     *
     * @param Role $role
     * @return \Illuminate\View\View
     */
    public function show(Role $role)
    {
        return view('roles.show')->with(['role' => $role, 'permissions' => $role->permissions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Role $role
     * @return \Illuminate\View\View
     */
    public function edit(Role $role)
    {

        $selected_permissions = $role->permissions;
        $unselected_permissions = Permission::all()->diff($selected_permissions);


        return view('roles.edit')->with([
            'role' => $role,
            'selected_permissions' => $selected_permissions,
            'unselected_permissions' => $unselected_permissions
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Role $role)
    {
        if($role->name != $request->name) {
            $role->name = $request->name;
            $role->save();
        }
        $role->syncPermissions($request->permission_ids);
        return redirect()->route('roles.index')
            ->with('success', 'Role berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $role = Role::findById($id);
        $role->delete();
        return redirect()->route('roles.index')
            ->with('success', 'Role berhasil dihapus.');
    }
}
