<?php

namespace App\Models;

class WhoWeTreatCategory extends OrganizationCategory
{
    protected $table = 'who_we_treat_categories';

    protected function pivotTable(): string
    {
        return 'org_who_we_treat';
    }
}
