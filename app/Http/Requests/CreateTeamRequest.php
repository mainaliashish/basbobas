<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTeamRequest extends FormRequest
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
            'team_name' => 'required|max:255',
            'team_address' => 'required|max:255',
            'team_contact' => 'required',
            'team_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
}
