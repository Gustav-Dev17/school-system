<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     *
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * 
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100',
            'age' => 'required|numeric',
            'enrollment' => 'required|unique:alunos,matricula',
            'school_level' => 'required',
            'grade' => 'required',
            'school_class' => 'required',
            'state' => 'required',
            'city' => 'required',
            'form_check' => 'required',
        ];
    }

    public function messages(){
        return[
            'enrollment.unique'=>"Matrícula já existente! Por favor, atribua outro número de matrícula"
        ];
    }
}
