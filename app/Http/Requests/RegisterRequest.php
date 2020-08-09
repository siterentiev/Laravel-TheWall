<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * @return string[]
     */
    public function rules() : array
    {
        return [
            'email' => 'required|email|unique:users',
            'name' => 'required|min:2|unique:users',
            'password' => 'required|min:3',
            'password_confirm' => 'required'
        ];
    }

    /**
     * @return array|string[]
     */
    public function messages() : array
    {
        return [
            'required' => 'Данное поле не может быть пустым',
            'email' => 'Некорректный формат email',
            'email.unique' => 'Такой email уже используется, укажите другой',
            'name.unique' => 'Такое имя уже используется, выберите другое',
            'name.min' => 'Имя должно быть не менее 2 символов',
            'password.min' => 'Пароль Должен быть не менее 3 символов',
        ];
    }
}
