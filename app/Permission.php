<?php

namespace App;

use Zizaco\Entrust\EntrustPermission;

/**
 * Class Permission
 * @package App
 */
class Permission extends EntrustPermission
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
}
