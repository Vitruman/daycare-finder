<?php

namespace App\Models;

class SubstanceWeTreatCategory extends OrganizationCategory
{
    protected $table = 'substances_we_treat_categories';

    protected function pivotTable(): string
    {
        return 'org_substances_we_treat';
    }
}
