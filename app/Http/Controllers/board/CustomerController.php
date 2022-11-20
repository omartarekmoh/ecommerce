<?php

namespace App\Http\Controllers\board;

use App\Models\User;
use App\Models\Image;
use App\Enums\UserEnum;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\board\customer\UpdateCustomer;

class CustomerController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $customers = User::whereStatus(UserEnum::CUSTOMER())->get();
      return view('board.customers.index', compact('customers'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      $roles = Role::all();
      return view('board.customers.create', compact('roles'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(StoreCustomer $request)
   {
      $request->validated();
      
      $user = User::create([
         'name' => $request->name,
         'email' => $request->email,
         'password' => Hash::make($request->password),
         'phone' => $request->phone,
         'status' => $request->status
      ]);

      
      $hasFile = $request->hasFile('avatar');

      if ($hasFile) {
         $path = $request->file('avatar')->store('avatar/users');
         $user->image()->save(
            Image::make(['path' => $path])
         );
      }

      // dd($request->role);

      foreach($request->role as $role)
         $user->assignRole($role);

      return redirect()->route('customer.show', ['customer' => $user->id])->withStatus('User Was Added');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\User  $user
    * @return \Illuminate\Http\Response
    */
   public function show(User $customer)
   {
      $roles = Role::all();
      
      return view('board.customers.show', compact('customer', 'roles'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\User  $user
    * @return \Illuminate\Http\Response
    */
   public function edit(User $user)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\User  $user
    * @return \Illuminate\Http\Response
    */
   public function update(UpdateCustomer $request, User $customer)
   {
      $request->validated();


      $customer->update([
         'name' => $request->name,
         'email' => $request->email,
         'phone' => $request->phone,
         'status' => $request->status
      ]);


      $hasFile = $request->hasFile('avatar');

// dd($hasFile);
      if ($hasFile) {
         $path = $request->file('avatar')->store('avatar/users');
         if ($customer->image) {
            Storage::delete($customer->image->path);
            $customer->image->path = $path;
            $customer->image->save();
         } else {
            $customer->image()->save(
               Image::make(['path' => $path])
            );
         }
      }



      return redirect()->route('customer.show', ['customer' => $customer->id])->withStatus('User Was Updated');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\User  $user
    * @return \Illuminate\Http\Response
    */
   public function destroy(User $user)
   {
      //
   }
}
