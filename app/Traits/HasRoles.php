<?php

namespace App\Traits;


use App\Role;
use Illuminate\Support\Collection;

trait HasRoles
{

    /**
     * @param $role
     * @return $this
     */
    public function assignRole($role)
    {
        $this->roles()->attach(Role::whereName($role)->firstOrFail());
//      return $this->with('roles')->get();
    }

    /**
     * @param $role
     */
    public function removeRole($role)
    {
        $this->roles()->detach(Role::whereName($role)->firstOrFail());
    }

    /**
     * @param $role
     * @return bool
     */
    public function hasRole($role)
    {
        if(is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        if($role instanceof Role) {
            return $this->roles->contains('id', $role->id);
        }

        if($role instanceof Collection) {
            return $role->intersect($this->roles)->isNotEmpty();
        }
        return false;
    }

    /**
     * @param $roles
     * @return bool
     */
    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)){
                    return true;
                }
            }
        } else {
            if($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }
}