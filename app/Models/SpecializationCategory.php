<?php

namespace App\Models;

class SpecializationCategory extends OrganizationCategory
{
    protected $table = 'specializations_categories';

    protected function pivotTable(): string
    {
        return 'org_specializations';
    }
}
