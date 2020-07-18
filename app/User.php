<?php

namespace App;

use Laravel\Passport\HasApiToken;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasApiToken;
    
    protected $guarded = [];
}
