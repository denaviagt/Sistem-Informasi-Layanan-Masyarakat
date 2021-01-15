<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreCitizenRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nik' => ['required', 'numeric', 'min:16'],
            'kk' => ['required', 'numeric', 'min:16'],
            'full_name' => ['required'],
            'pob' => ['required'],
            'dob' => ['required'],
            'religion' => ['required'],
            'married_status' => ['required'],
            'last_education' => ['required'],
            'gender' => ['required'],
            'dusun_id' => ['required'],
            'address' => ['required'],
        ];
    }
}
