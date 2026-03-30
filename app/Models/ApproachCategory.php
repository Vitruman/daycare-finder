<?php

namespace App\Models;

class ApproachCategory extends OrganizationCategory
{
    protected $table = 'approaches_categories';

    protected function pivotTable(): string
    {
        return 'org_approaches';
    }
}
