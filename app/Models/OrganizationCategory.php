<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

abstract class OrganizationCategory extends Model
{
    /**
     * Category tables store only id and value without timestamps
     * and rely on manually provided integer identifiers.
     */
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'id',
        'value',
    ];

    abstract protected function pivotTable(): string;

    public function organizations(): BelongsToMany
    {
        return $this->belongsToMany(
            Organization::class,
            $this->pivotTable(),
            'category_id',
            'organization_id'
        );
    }
}
