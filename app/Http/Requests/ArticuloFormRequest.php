<?php

namespace almacenGH\Http\Requests;
use almacenGH\Http\Requests\Request;

class ArticuloFormRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'idcategoria'=>'required',
            'codigo'=>'required|max:50',
            'nombre'=>'required|max:200',
            'stock'=>'required|numeric',
            'descripcion'=>'max:512',
            'idalmacen'=>'required',
            'imagen'=>'mimes:jpeg,bmp,png'
        ];
    }
}
