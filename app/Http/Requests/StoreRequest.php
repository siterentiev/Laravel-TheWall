<?php
namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest {

    public function rules()
    {
        return [
            'title' => 'required',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Укажите заголовок сообщения',
            'content.required' => 'Сообщение не может быть пустым'
        ];
    }
}
