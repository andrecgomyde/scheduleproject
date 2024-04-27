<?php

/**
 * Author: André Gomyde
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User; 

class Activity extends Model
{
    protected $fillable = [
        'title', 'start_date', 'due_date', 'completion_date', 'status', 'description', 'user_id', 'type_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class); 
    }
}
