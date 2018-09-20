<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
     protected $table = 'messages';

    /**
     * The fillable fields to mass assignment
     *
     */ 
     protected $fillable = [
        'contact_id',
        'message'
    ];

    /**
     * Get the post that owns the comment.
     */
    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }
}
