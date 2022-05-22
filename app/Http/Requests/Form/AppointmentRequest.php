<?php
namespace App\Http\Requests\Form;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|max:255',
        ];
    }
}
