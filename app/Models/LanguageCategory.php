<?php

namespace App\Models;

class LanguageCategory extends OrganizationCategory
{
    protected $table = 'languages_categories';

    protected function pivotTable(): string
    {
        return 'org_languages';
    }
}
