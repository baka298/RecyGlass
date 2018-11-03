<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users() {
        return $this->hasMany('App\User');
    }
    public static function partners() {
        $role_partner = Role::where('slug', 'partner')->first();
        return $users = $role_partner->users;
    }
}
