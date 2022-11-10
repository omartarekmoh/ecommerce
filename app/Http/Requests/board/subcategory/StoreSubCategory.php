<?php

namespace App\Http\Requests\board\subcategory;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreSubCategory extends FormRequest
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
      return [
         'title' => ['required', 'min:5'],
         'status' => ['required', Rule::in(['0', '1'])],
         'category_id' => ['required', 'exists:categories,id'],
         'avatar' => ['image', 'mimes:jpg,jpeg,png,gif,svg'],
      ];
   }
}
