<?php

class TenantService
{
    public function id(): int
    {
        return auth()->user()->organization_id;
    }
}