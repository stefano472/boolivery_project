<?php

namespace App\Http\Requests\Orders;

use Illuminate\Foundation\Http\FormRequest;

class OrderTableRequest extends FormRequest
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
			
            'customer_name' => 'required',
            'customer_surname' => 'required',
            'customer_email' => 'required',
            'customer_phone' => 'required',
            'customer_address' => 'required',
            'status' => 'required',
            'total' => 'required',
            'restaurant_id' => 'required',
            'plates' => 'required',
            'user_email' => 'required',
		];
    }
}
