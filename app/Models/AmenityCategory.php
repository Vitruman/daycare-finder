<?php

namespace App\Models;

class AmenityCategory extends OrganizationCategory
{
    protected $table = 'amenities_categories';

    protected function pivotTable(): string
    {
        return 'org_amenities';
    }
}
