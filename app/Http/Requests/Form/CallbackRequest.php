<?php
namespace App\Http\Requests\Form;

use Illuminate\Foundation\Http\FormRequest;

class CallbackRequest extends FormRequest
{

    /**
     * @return string[]
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {

        return [
            'name.required' => 'Заполните поле Имя',
            'phone.required' => 'Укажите номер телефона',
        ];

    }

}
