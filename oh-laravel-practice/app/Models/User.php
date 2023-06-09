<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Profile;

class User extends Authenticatable
{
	use HasApiTokens, HasFactory, Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
			'name',
			'email',
			'password',
	];

	/**
	 * The attributes that should be hidden for serialization.
	 *
	 * @var array<int, string>
	 */
	protected $hidden = [
			'password',
			'remember_token',
	];

	/**
	 * The attributes that should be cast.
	 *
	 * @var array<string, string>
	 */
	protected $casts = [
			'email_verified_at' => 'datetime',
			'password' => 'hashed',
	];

		public function getNameAttribute($value)
	{
			return $value ?? $this->profile->name;
	}

	protected static function booted()
	{
		static::created(function ($user) {
				$user->profile()->create([
						'user_id' => $user->id,
						'name' => $user->name,
						'description' => 'Describe your Doggo!',
						'image' => '/svg/defaultPFP.webp',
						// this allows new user to have default pfp
				]);
		});
	}

	/**
	 * Get the profile associated with the user.
	 */
	public function profile()
	{
			return $this->hasOne(Profile::class);
	}
}