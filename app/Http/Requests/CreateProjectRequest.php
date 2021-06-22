<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
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
            'project_title' => 'required|max:255',
            'project_location' => 'required|max:255',
            'project_description' => 'max:4500',
            'project_image_one' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'project_image_two' => 'mimes:jpeg, jpg, png',
        ];
    }
}
