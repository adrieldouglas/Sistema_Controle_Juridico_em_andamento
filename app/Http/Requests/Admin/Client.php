<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class Client extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:166',
            'document_cpf' => (!empty($this->request->all()['id']) ? 'required|min:14|max:14|unique:clients,document_cpf,' . $this->request->all()['id'] : 'required|min:14|max:14|unique:clients,document_cpf'),
            'email' => 'required|email',
            'document_rg' => (!empty($this->request->all()['id']) ? 'required|unique:clients,document_rg,' . $this->request->all()['id'] : 'required|unique:clients,document_rg')

        ];
    }
}
