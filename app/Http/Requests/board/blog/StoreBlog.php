<?php

namespace App\Http\Requests\board\blog;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlog extends FormRequest
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
         'body.*' => ['required', 'min:10'],
         'blog_category_id' => ['required'],
         'avatar' => ['image', 'mimes:jpg,jpeg,png,gif,svg'],
        ];
    }
}
