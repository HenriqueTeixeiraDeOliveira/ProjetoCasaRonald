<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class,'role_user', 'role_id', 'user_id');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'permission_role', 'role_id', 'permission_id');
    }

    public function givePermissionTo(Permission $permission)
    {
        return $this->permissions()->save($permission);
    }

}
