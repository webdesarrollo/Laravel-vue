<?php

namespace laravelVue\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VentaRequest extends FormRequest
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
            'id_cliente'=>'required',
            'tipo_comprobante'=>'required|max:20',
            'serie_comprobante'=>'max:7',
            'numero_comprobante'=>'required|max:10',
            'id_articulo'=>'required',
            'cantidad'=>'required',
            'descuento'=>'required',
            'precio_venta'=>'required',
            'total_venta'=>'required',
        ];
    }
}
