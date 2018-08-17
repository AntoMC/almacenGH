<?php

namespace almacenGH\Http\Requests;

use almacenGH\Http\Requests\Request;

class AlmacenFormRequest extends Request
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
             'nombre'=>'required|max:45',
             'abrev'=>'required|max:10',
             'condicion',
        ];
    }
}
