<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Rackbeat\UIAvatars\HasAvatar;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasAvatar;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
        'name',
        'email',
        'mobile',
        'address',
        'postcode',
        'shop_name',
        'password',
        'device_os',
        'device_type',
        'device_name',
        'device_token',
        'latitude',
        'longitude'
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
    ];

    public function markClientAsVerified($request): bool
    {
        return $this->forceFill([
            'device_token' => $request['device_token'],
            'device_name' => $request['device_name'],
        ])->save();
    }


    public function getAvatar($size = 64)
    {
        return $this->getGravatar($this->email, $size);
    }
}
