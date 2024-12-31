<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AsignCtrl extends Controller
{
    public function index()
    {
        $role = Role::all();
        $perm = Permission::all();
        return view("rolePermission/roleperm", ['roles' => $role, 'permissions' => $perm]);
    }
    public function store(Request $request)
    {
        // return $request->permissions;
        $role = Role::findOrFail($request->role_id);

        // Assign the selected permissions to the role
        $role->syncPermissions($request->permissions);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Permissions assigned successfully to the selected role.');


    }

}
