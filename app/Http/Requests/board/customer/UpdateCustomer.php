<?php

namespace App\Http\Requests\board\customer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomer extends FormRequest
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
        return [
         'name' => ['required', 'string', 'max:255'],
         'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . optional($user)->id],
         'phone' => ['required', 'string'],
         'image' => ['image', 'mimes:jpg,jpeg,png,gif,svg'],
      ]; 
    }
}
