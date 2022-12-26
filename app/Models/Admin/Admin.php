<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;

class Admin extends Authenticatable implements CanResetPassword 
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name', 'username', 'email', 'password', 'created_at', 'updated_at' 
    ];
    protected $hidden = ['password', 'remember_token'];
}
