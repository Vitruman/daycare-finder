<?php

namespace App\Models;

class ConditionWeTreatCategory extends OrganizationCategory
{
    protected $table = 'conditions_we_treat_categories';

    protected function pivotTable(): string
    {
        return 'org_conditions_we_treat';
    }
}
