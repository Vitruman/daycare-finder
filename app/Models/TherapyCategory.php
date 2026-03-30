<?php

namespace App\Models;

class TherapyCategory extends OrganizationCategory
{
    protected $table = 'therapies_categories';

    protected function pivotTable(): string
    {
        return 'org_therapies';
    }
}
