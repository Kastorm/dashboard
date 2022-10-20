<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * Проверка  полей И данных в таблице
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:12'],
            'role_id'=>'required|exists:roles,id',
            'entity_id'=> 'required|exists:entities,id',
            'description'=> ['sometimes'],
            'status'=> ['sometimes'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ];
    }
}
