<?php

namespace App\Http\Requests\board\offer;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
            'product_id' => ['required'],
            'discount' => ['required', 'integer'],
            'start_date' => ['required', 'date_format:Y-m-d', 'after:today'],
            'end_date' => ['required', 'after:start_date'],
        ];
    }
}
