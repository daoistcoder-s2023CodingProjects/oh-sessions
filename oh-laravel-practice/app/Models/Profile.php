<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use  App\Models\User;

class Profile extends Model
{
    // Define any additional properties or methods for the Profile model
    // ...

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
