<?php

namespace App\Http\Requests\board\discount;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class DiscountStore extends FormRequest
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
            'code' => ['required', 'string'],
            'discount' => ['required', 'integer'],
            'type' => ['required' , Rule::in(['0', '1'])],
            'start_date' => ['required', 'date_format:Y-m-d', 'after:today'],
            'end_date' => ['required', 'after:start_date'],
        ];
    }
}
