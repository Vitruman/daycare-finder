<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Organization extends Model
{
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'id',
        'name_id',
        'rehab_name',
        'about',
        'location',
        'phone',
        'website',
        'accreditation',
        'founded',
        'treatment_focus',
        'typical_program_length',
        'occupancy',
        'providers_policy',
        'street1',
        'street2',
        'city',
        'state',
        'zip',
        'latitude',
        'longitude',
        'services',
        'logo',
        'images',
        'created_at',
        // Daycare specific
        'zip_code',
        'age_range',
        'age_min',
        'age_max',
        'program_type',
        'facility_type',
        'child_care_type',
        'max_capacity',
        'total_educators',
        'violation_rate',
        'avg_violation_rate',
        'critical_violation_rate',
        'last_inspection_date',
        'permit_status',
        'permit_expiration',
        'source',
        'external_id',
        'borough',
    ];

    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
        'created_at' => 'datetime',
        'images' => 'array',
    ];

    public function getRouteKeyName(): string
    {
        return 'name_id';
    }

    public function getFullAddressAttribute(): ?string
    {
        $parts = array_filter([
            $this->street1,
            $this->street2,
            $this->city,
            $this->state,
            $this->zip,
        ]);

        return empty($parts) ? null : implode(', ', $parts);
    }

    /**
     * Normalize services stored as json string, comma-separated string, or array.
     */
    public function getServicesAttribute($value): array
    {
        if (is_array($value)) {
            return array_values(array_filter($value));
        }

        if (is_string($value)) {
            $decoded = json_decode($value, true);
            if (is_array($decoded)) {
                return array_values(array_filter($decoded));
            }

            $parts = preg_split('/[,;]+/', $value);
            return array_values(array_filter(array_map('trim', $parts)));
        }

        return [];
    }

    public function setServicesAttribute($value): void
    {
        if (is_array($value)) {
            $this->attributes['services'] = json_encode(array_values($value));
            return;
        }

        $this->attributes['services'] = $value;
    }

    public function activities(): BelongsToMany
    {
        return $this->belongsToMany(ActivityCategory::class, 'org_activities', 'organization_id', 'category_id');
    }

    public function aftercare(): BelongsToMany
    {
        return $this->belongsToMany(AftercareCategory::class, 'org_aftercare', 'organization_id', 'category_id');
    }

    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(AmenityCategory::class, 'org_amenities', 'organization_id', 'category_id');
    }

    public function approaches(): BelongsToMany
    {
        return $this->belongsToMany(ApproachCategory::class, 'org_approaches', 'organization_id', 'category_id');
    }

    public function careOptions(): BelongsToMany
    {
        return $this->belongsToMany(CareOptionCategory::class, 'org_care_options', 'organization_id', 'category_id');
    }

    public function conditionsWeTreat(): BelongsToMany
    {
        return $this->belongsToMany(ConditionWeTreatCategory::class, 'org_conditions_we_treat', 'organization_id', 'category_id');
    }

    public function insuranceAccepted(): BelongsToMany
    {
        return $this->belongsToMany(InsuranceAcceptedCategory::class, 'org_insurance_accepted', 'organization_id', 'category_id');
    }

    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(LanguageCategory::class, 'org_languages', 'organization_id', 'category_id');
    }

    public function personalAmenities(): BelongsToMany
    {
        return $this->belongsToMany(PersonalAmenityCategory::class, 'org_personal_amenities', 'organization_id', 'category_id');
    }

    public function privatePayOptions(): BelongsToMany
    {
        return $this->belongsToMany(PrivatePayOptionCategory::class, 'org_private_pay_option', 'organization_id', 'category_id');
    }

    public function specializations(): BelongsToMany
    {
        return $this->belongsToMany(SpecializationCategory::class, 'org_specializations', 'organization_id', 'category_id');
    }

    public function substancesWeTreat(): BelongsToMany
    {
        return $this->belongsToMany(SubstanceWeTreatCategory::class, 'org_substances_we_treat', 'organization_id', 'category_id');
    }

    public function therapies(): BelongsToMany
    {
        return $this->belongsToMany(TherapyCategory::class, 'org_therapies', 'organization_id', 'category_id');
    }

    public function whoWeTreat(): BelongsToMany
    {
        return $this->belongsToMany(WhoWeTreatCategory::class, 'org_who_we_treat', 'organization_id', 'category_id');
    }

    /**
     * Safety rating 1-5 based on violation rate
     */
    public function getSafetyRatingAttribute(): int
    {
        if (is_null($this->violation_rate)) return 0;
        if ($this->violation_rate == 0) return 5;
        if ($this->violation_rate <= 10) return 4;
        if ($this->violation_rate <= 25) return 3;
        if ($this->violation_rate <= 50) return 2;
        return 1;
    }

    public function getSafetyLabelAttribute(): string
    {
        return match($this->safety_rating) {
            5 => 'Excellent',
            4 => 'Good',
            3 => 'Fair',
            2 => 'Needs Attention',
            1 => 'Poor',
            default => 'Not Rated',
        };
    }

    public function getAgeRangeLabelAttribute(): string
    {
        return match(true) {
            str_contains($this->age_range ?? '', '0') && str_contains($this->age_range ?? '', '2') => 'Infants & Toddlers',
            str_contains($this->age_range ?? '', '2') && str_contains($this->age_range ?? '', '5') => 'Preschool (2-5)',
            str_contains($this->age_range ?? '', '5') => 'School Age (5+)',
            default => $this->age_range ?? 'All Ages',
        };
    }

}
