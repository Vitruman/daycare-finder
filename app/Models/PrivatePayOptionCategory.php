<?php

namespace App\Models;

class PrivatePayOptionCategory extends OrganizationCategory
{
    protected $table = 'private_pay_option_categories';

    protected function pivotTable(): string
    {
        return 'org_private_pay_option';
    }
}
