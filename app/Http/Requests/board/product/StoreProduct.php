<?php

namespace App\Http\Requests\board\product;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
         'title.*' => ['required', 'min:5'],
         'description.*' => ['required', 'min:10'],
         'status' => ['required', Rule::in(['0', '1'])],
         'category_id' => ['required', 'exists:categories,id'],
         'sub_category_id' => ['required', 'exists:sub_categories,id'],
         'price' => ['required', 'integer'],
         'discount' => ['nullable', 'integer'],
         'stock' => ['required', 'integer'],
         'avatar' => ['image', 'mimes:jpg,jpeg,png,gif,svg'],
         'gallery.*' => ['image', 'mimes:jpg,jpeg,png,gif,svg'],
      ];
        
    }
}
