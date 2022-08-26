<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin.role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Role $role, Request $request)
    {
        
        $validatedData = $this->validate($request, [
            'title'         => 'required|min:4|max:255',
            'permissions.*' => 'integer',
            'permissions' => 'required|array',
        ]);
       
        $role = Role::create($validatedData);
        $role->permissions()->sync($request->input('permissions', []));

       
      return redirect() -> route('admin.role.index')->with('success','New role Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
       $permissions = Permission::all();
       $role->load('permissions');
        return view('admin.role.edit', compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $validatedData = $this->validate($request, [
            'title'         => 'required|min:4|max:255',
            'permissions.*' => 'integer',
            'permissions' => 'required|array',
        ]);
    
     
      $role->permissions()->sync($request->input('permissions', []));
      $role->update($validatedData);

      return redirect() -> route('admin.role.index')->with('success','Role updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Role::destroy($id);
       return redirect() -> route('admin.role.index');
    }
}
