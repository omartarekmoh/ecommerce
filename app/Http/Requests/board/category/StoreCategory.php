<?php

namespace App\Http\Requests\board\category;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
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
      $category = $this->route('category') ?? null;
      return [
         'title' => ['required', 'min:5', 'unique:categories,title,' . optional($category)->id],
         'description' => ['required', 'min:10'],
         'status' => ['required', Rule::in(['0', '1'])],
         'avatar' => ['image', 'mimes:jpg,jpeg,png,gif,svg'],
      ];
   }
}
