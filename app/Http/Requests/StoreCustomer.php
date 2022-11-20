<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomer extends FormRequest
{
   /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
   public function authorize()
   {
      return true;
   }

   /**
    * Get the validation rules that apply to the request.
    *
    * @return array<string, mixed>
    */
   public function rules()
   {
      $user = $this->route('customer') ?? null;

      // dd($user);
      return [
         'name' => ['required', 'string', 'max:255'],
         'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
         'password' => ['required', 'string', 'min:8', 'confirmed'],
         'phone' => ['required', 'string'],
         'role' => ['required'],
         'status' => ['required'],
         'avatar' => ['image', 'mimes:jpg,jpeg,png,gif,svg'],
         
      ];
   }
}
