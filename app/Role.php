<?php

namespace App;

use Zizaco\Entrust\EntrustRole;

/**
 * Class Role
 * @property mixed display_name
 * @package App
 */
class Role extends EntrustRole
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

}
