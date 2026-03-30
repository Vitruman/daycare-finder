<?php

namespace App\Models;

class AftercareCategory extends OrganizationCategory
{
    protected $table = 'aftercare_categories';

    protected function pivotTable(): string
    {
        return 'org_aftercare';
    }
}
