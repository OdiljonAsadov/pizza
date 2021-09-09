<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = "users";
  
    public function category(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
}
