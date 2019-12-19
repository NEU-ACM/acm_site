<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profile extends Model
{
    //
    protected $table = 'user_profile';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
