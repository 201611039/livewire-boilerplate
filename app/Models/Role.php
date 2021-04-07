<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as ModelsRole;

class Role extends ModelsRole
{
    use HasFactory;

    public function scopeUserGrantingRoles($query)
    {
        $where = [
            ['name', '!=', 'super-admin'],
            // ['name', '!=', 'admin'],
        ];

        return $query->where($where);
    }

    public function getProperNameAttribute()
    {
        return title_case(str_replace('-', ' ', $this->name));
    }
}
