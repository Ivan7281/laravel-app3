<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LotRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "name_lot" => "required|string|max:30",
            "start_date" => "required|string|max:10",
            "end_date" => "required|string|max:10",
            "starting_price" => "required|numeric"
        ];
    }
}
