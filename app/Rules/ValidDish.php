<?php

namespace App\Rules;

use App\Dish;
use Illuminate\Contracts\Validation\Rule;

class ValidDish implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //

        $product = Dish::find($value);

        if (Dish::find($value)) {
            # code...
            return true;
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Non puoi aggiungere questo piatto';
    }
}
