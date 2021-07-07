<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='role';

    protected $fillable = [
        'name','username', 'email', 'password', 'role',
    ];

    public function user(){
        return $this->belongsToMany(User::class);
    }
}

