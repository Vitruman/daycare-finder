<?php

namespace App\Models;

class ActivityCategory extends OrganizationCategory
{
    protected $table = 'activities_categories';

    protected function pivotTable(): string
    {
        return 'org_activities';
    }
}
