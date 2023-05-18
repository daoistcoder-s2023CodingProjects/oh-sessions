<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use  App\Models\User;

class Profile extends Model
{
    // Define any additional properties or methods for the Profile model
    // ...

	protected $fillable = [
    'user_id',
    'name',
    'description',
    'image',
			// Add other fillable attributes here
	];

	public function setNameAttribute($value)
	{
			$this->attributes['name'] = $value;
			$this->user->name = $value;
			$this->user->save();
	}
		
	public function user()
	{
			return $this->belongsTo(User::class);
	}
}
