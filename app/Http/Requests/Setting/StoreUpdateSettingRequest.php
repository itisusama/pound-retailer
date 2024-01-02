<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateSettingRequest extends FormRequest
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
            'site_name' => 'required|max:20',
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
            'color1' => 'nullable',
            'color2' => 'nullable',
            'color3' => 'nullable',
            'color4' => 'nullable',
            'gsc' => 'nullable',
        ];
    }
}
