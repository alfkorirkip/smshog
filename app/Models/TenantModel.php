<?php

namespace App\Models;

use CodeIgniter\Model;

abstract class TenantModel extends Model
{
    protected string $tenantColumn = 'organization_id';

    protected function tenantId(): int
    {
        return service('tenant')->id();
    }

    protected function initialize()
    {
        parent::initialize();

        $this->beforeInsert[] = 'setTenant';
        $this->beforeFind[]   = 'scopeTenant';
    }

    protected function setTenant(array $data)
    {
        $data['data'][$this->tenantColumn] = $this->tenantId();

        return $data;
    }

    protected function scopeTenant(array $data)
    {
        $this->where(
            $this->tenantColumn,
            $this->tenantId()
        );

        return $data;
    }
}