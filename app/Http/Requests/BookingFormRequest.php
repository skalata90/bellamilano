<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BookingFormRequest extends Request
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
            "name"=>"required",
            "phone"=>"required",
            "email"=>"required",
            "date_book"=>"required",
            "time_book"=>"required"
        ];
    }
}
