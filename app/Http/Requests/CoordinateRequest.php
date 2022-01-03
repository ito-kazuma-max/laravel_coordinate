<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class CoordinateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'max:20'],
            'description' => ['nullable', 'string', 'max:100'],
            'tops_id' => ['required'],
            'bottoms_id' => ['required'],
            'shoes_id' => ['required'],
        ];
    }

    public function withValidator(Validator $validator)
    {
        $validator->sometimes('madeUser_name', 'required|max:20', function() {
            return \Auth::check() === false;
        });
    }
}
