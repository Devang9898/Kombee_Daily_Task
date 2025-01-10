<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;




use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

   class Teacher extends Authenticatable
   {
       use HasFactory, Notifiable;

       protected $fillable = ['name', 'email', 'password'];

       protected $hidden = ['password', 'remember_token'];

       public function setPasswordAttribute($password)
       {
           $this->attributes['password'] = Hash::make($password);
       }
   }