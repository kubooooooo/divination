<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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

    public function getValidatorInstance()
    {
        $datetime_validation = implode('-', $this->only(['year','month','day']));

        $this->merge([
            'datetime_validation' => $datetime_validation,
        ]);
        return parent::getValidatorInstance();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'datetime_validation' => 'date',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力して下さい。',
            'datetime_validation.date' => '存在しない日付です。',
        ];
    }
}
