<?php

namespace App\Models;

class CareOptionCategory extends OrganizationCategory
{
    protected $table = 'care_options_categories';

    protected function pivotTable(): string
    {
        return 'org_care_options';
    }
}
