<?php

namespace App\Http\Controllers\board;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\board\role\StoreRole;
use Illuminate\Contracts\Cache\Store;
use Spatie\Permission\Models\Permission;

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
      $permissions = Permission::all();

      $permissions = $permissions->groupBy(function ($item, $key) {
         return substr($item->name, 0, strpos($item->name, '-'));
      });

      // dd($permissions);

      return view('board.roles.index', compact('roles', 'permissions'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      $permissions = Permission::all();

      $permissions = $permissions->groupBy(function ($item, $key) {
         return substr($item->name, 0, strpos($item->name, '-'));
      });
      return view('board.roles.create', compact( 'permissions'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(StoreRole $request)
   {
      $request->validated();

      $role = Role::create(['name' => $request->role_name]);

      $role->syncPermissions($request->permission);

      return redirect()->route('role.index');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Role  $role
    * @return \Illuminate\Http\Response
    */
   public function show(Role $role)
   {
      $permissions = Permission::all();
      return view('board.roles.show', compact('permissions', 'role'));
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

      $permissions = $permissions->groupBy(function ($item, $key) {
         return substr($item->name, 0, strpos($item->name, '-'));
      });
      return view('board.roles.edit', compact('role', 'permissions'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Role  $role
    * @return \Illuminate\Http\Response
    */
   public function update(StoreRole $request, Role $role)
   {
      $request->validated();

      $role->update([
         'name' => $request->role_name
      ]);

      // dd($request->permission);

      
      $role->syncPermissions($request->permission);

      return redirect()->route('role.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Role  $role
    * @return \Illuminate\Http\Response
    */
   public function destroy(Role $role)
   {
      //
   }
}
