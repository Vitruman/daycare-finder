<?php

namespace App\Models;

class InsuranceAcceptedCategory extends OrganizationCategory
{
    protected $table = 'insurance_accepted_categories';

    protected function pivotTable(): string
    {
        return 'org_insurance_accepted';
    }
}
