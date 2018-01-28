<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class BankTransaction extends Model
{
    protected $table = 'transactions';
    protected $guarded = [];
    protected $primaryKey = 'transaction_id';

    public function user() {
        return $this->belongsTo( User::class , 'user_id' , 'id');
    }

}
