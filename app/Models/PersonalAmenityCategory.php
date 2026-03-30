<?php

namespace App\Models;

class PersonalAmenityCategory extends OrganizationCategory
{
    protected $table = 'personal_amenities_categories';

    protected function pivotTable(): string
    {
        return 'org_personal_amenities';
    }
}
