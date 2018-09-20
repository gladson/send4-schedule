<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
     protected $table = 'contacts';

    /**
     * The fillable fields to mass assignment
     *
     */ 
     protected $fillable = [
         'firstname',
         'lastname',
         'email',
         'phonenumber'
     ];

    /**
     * Get the comments for the blog post.
     */
    public function messages()
    {
        return $this->hasMany('App\Message');
    }
}
