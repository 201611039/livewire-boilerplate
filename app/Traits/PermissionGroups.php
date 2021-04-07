<?php
namespace App\Traits;

/**
 * Permissions
 */
trait PermissionGroups
{
    public function globalPermissions()
    {
        return [
            'edit-profile', 'change-avatar', 'remove-avatar', 'remove-device'
        ];
    }
}
