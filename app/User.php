<?php

namespace App;

use App\Models\Bank;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'user_id',
        'phone',
        'user_name',
        'type',
        'commercial_name',
        'company_name',
        'tax_id',
        'pin',
        'profile_pic',
        'bank_name',
        'account_number',
        'avail_funds',
        'is_admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
