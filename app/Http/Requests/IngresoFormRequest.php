<?php

namespace almacenGH\Http\Requests;

use almacenGH\Http\Requests\Request;

class IngresoFormRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'idproveedor'=>'required',
            'num_comprobante'=>'required|max:10',
            'fecha'=>'required',
            'idarticulo'=>'required',
            'cantidad'=>'required',
        ];
    }
}
