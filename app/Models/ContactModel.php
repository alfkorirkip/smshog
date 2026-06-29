<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends TenantModel
{
    protected $table = 'contacts';

    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $useSoftDeletes = true;

    protected $allowedFields = [

        'first_name',
        'last_name',
        'phone',
        'email',
        'company',
        'gender',
        'birthday',
        'status'

    ];

    protected $useTimestamps = true;
}