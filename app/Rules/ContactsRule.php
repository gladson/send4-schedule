<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

use App\Contact;

class ContactsRule implements Rule
{
    protected $contacts;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(Contact $contacts)
    {
        $this->contacts = $contacts;
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
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
