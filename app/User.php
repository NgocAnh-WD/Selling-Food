<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;
    
    protected $fillable = [
        'username','password','avata_image','full_name','date_of_birth','gender','indentifier','address','email','phone','role','is_delete'
    ];
}