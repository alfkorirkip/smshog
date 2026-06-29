<?php
namespace App\Models;

use CodeIgniter\Model;

class OrganizationModel extends Model
{
    protected $table = 'organizations';

    protected $allowedFields = [

        'uuid',

        'name',

        'slug',

        'email',

        'phone',

        'website',

        'logo',

        'country',

        'currency',

        'timezone',

        'address',

        'status',

        'trial_ends_at',

        'subscription_ends_at'

    ];

    protected $useSoftDeletes = true;

    protected $useTimestamps = true;
}