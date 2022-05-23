<?php
namespace App\Http\Requests\Form;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{

    /**
     * @return string[]
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            //'date' => 'required|max:255',
            //'time' => 'required|max:255',
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
            'date.required' => 'Выберите дату',
            'time.required' => 'Выберите время',
        ];

    }

}
