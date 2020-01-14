<?php

namespace Dominik\Event\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = ['set_end_date_data'];


    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
