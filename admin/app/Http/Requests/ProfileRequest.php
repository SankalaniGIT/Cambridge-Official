<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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

    public function rules()
    {
        return [
            'title' => 'required',
            'subtitle' => 'required',
            'information' => 'required',
            'picture1' => 'required|mimes:jpeg,png,gif',
            'picture2' => 'required|mimes:jpeg,png,gif',
            'picture3' => 'required|mimes:jpeg,png,gif',
            'picture4' => 'required|mimes:jpeg,png,gif',
            'picture5' => 'required|mimes:jpeg,png,gif',
            'picture6' => 'required|mimes:jpeg,png,gif'
        ];
    }
}
