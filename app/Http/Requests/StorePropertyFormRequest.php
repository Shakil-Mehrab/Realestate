<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePropertyFormRequest extends FormRequest
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
            "title"=>"required|max:100",
            "category_id"=>"required",
            "property_type"=>"required",            
            "area"=>"required|integer",  
            "address"=>"required|max:100",
            "price"=>"required|integer",
            "detail"=>"required|min:10|max:2000",
            "email"=>"required",
            "phone"=>"required",
        ];
    }
}
