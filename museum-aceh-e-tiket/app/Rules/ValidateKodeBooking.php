<?php

namespace App\Rules;

use App\Kunjungan;
use Illuminate\Contracts\Validation\Rule;

class ValidateKodeBooking implements Rule
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
        $kode_booking = $value;

        $kunjungan_count = Kunjungan::where([
            ['kode_booking', '=', $kode_booking]
        ])->count();

        if($kunjungan_count == 0){
            return false;
        }else{
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Kode booking is not valid';
    }
}
