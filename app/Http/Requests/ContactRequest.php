<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array
     */
    public function rules(){
        return [
            "subject"=>"required|min:5|max:50", 
            "message"=>"required|min:5|max:50",
            "email"=>"required|email",
            "name"=>"required"
        ];
    }
    public function messages(){
        return [
            "name.required"=>"Поле имя является обязательным",
            "email.required"=>"Поле e-mail является обязательным",
            "subject.required"=>"Поле тема является обязательным",
            "message.required"=>"Поле сообщение является обязательным"
        ];
    }
}
