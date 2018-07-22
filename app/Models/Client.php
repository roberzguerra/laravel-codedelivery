<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [

        'phone',
        'address',
        'city',
        'state',
        'zipcode',

        'user_id',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
