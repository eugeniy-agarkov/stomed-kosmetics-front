<?php
namespace App\Http\Requests\Form;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
{

    /**
     * @return string[]
     */
    public function rules()
    {
        return [
            'fio' => 'required|max:255',
            'content' => 'required|min:10',
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
            'fio.required' => 'Заполните поле Имя',
            'content.required' => 'Напишите отзыв',
            'content.min' => 'Минимальное кол.-во символов 10',
        ];

    }

}
