<?php
namespace App\Http\Controllers;

class InsuranceController extends Controller
{
    private $providers = [
        'aetna' => [
            'name' => 'Aetna',
            'logo' => '/images/insurance/aetna.svg',
            'type' => 'Private',
            'coverage' => 'Aetna covers most levels of substance abuse treatment including detox, inpatient rehab, outpatient programs, and medication-assisted treatment (MAT). Coverage varies by plan — PPO plans typically offer broader provider networks, while HMO plans may require referrals.',
            'plans' => ['Aetna PPO', 'Aetna HMO', 'Aetna EPO', 'Aetna Medicare Advantage', 'Aetna Student Health'],
            'covered_treatments' => ['Medical Detox', 'Inpatient/Residential', 'Partial Hospitalization (PHP)', 'Intensive Outpatient (IOP)', 'Outpatient Therapy', 'Medication-Assisted Treatment (MAT)', 'Individual & Group Counseling'],
            'how_to_verify' => ['Call the number on the back of your Aetna insurance card', 'Ask about behavioral health or substance abuse benefits', 'Request details on in-network vs out-of-network coverage', 'Ask about pre-authorization requirements for residential treatment', 'Confirm your deductible, copay, and out-of-pocket maximum', 'Or call RehabFlow at (855) 321-3614 — we verify for free'],
        ],
        'bcbs' => [
            'name' => 'BlueCross BlueShield',
            'logo' => '/images/insurance/bcbs.svg',
            'type' => 'Private',
            'coverage' => 'BCBS is the largest health insurer in America, covering 1 in 3 Americans. Most BCBS plans cover substance abuse treatment at various levels including medical detox, residential treatment, partial hospitalization, IOP, and outpatient therapy.',
            'plans' => ['BCBS PPO', 'BCBS HMO', 'Blue Cross Medicare', 'Federal Employee Program (FEP)', 'BCBS Marketplace Plans'],
            'covered_treatments' => ['Medical Detox', 'Inpatient/Residential', 'Partial Hospitalization (PHP)', 'Intensive Outpatient (IOP)', 'Outpatient Therapy', 'Medication-Assisted Treatment (MAT)', 'Psychiatric Services', 'Family Counseling'],
            'how_to_verify' => ['Contact your local BCBS affiliate (each state has its own)', 'Ask for behavioral health substance abuse benefits', 'Verify in-network rehabilitation centers in your area', 'Ask about prior authorization for residential treatment', 'Confirm benefit limits, copays, and coinsurance', 'Or call RehabFlow at (855) 321-3614 — we verify for free'],
        ],
        'cigna' => [
            'name' => 'Cigna',
            'logo' => '/images/insurance/cigna.svg',
            'type' => 'Private',
            'coverage' => 'Cigna provides coverage for behavioral health and substance abuse treatment. Plans typically cover medical detox, inpatient rehabilitation, outpatient counseling, and MAT. Cigna uses a utilization review process — pre-authorization may be required for residential treatment.',
            'plans' => ['Cigna PPO', 'Cigna HMO', 'Cigna Open Access Plus', 'Cigna Medicare Advantage', 'Cigna Individual & Family'],
            'covered_treatments' => ['Medical Detox', 'Inpatient/Residential', 'Partial Hospitalization (PHP)', 'Intensive Outpatient (IOP)', 'Outpatient Counseling', 'Medication-Assisted Treatment (MAT)', 'Telehealth Therapy'],
            'how_to_verify' => ['Call Cigna Behavioral Health at the number on your card', 'Ask about substance use disorder benefits', 'Request a list of in-network treatment centers', 'Ask about pre-certification requirements', 'Confirm your annual deductible and out-of-pocket max', 'Or call RehabFlow at (855) 321-3614 — we verify for free'],
        ],
        'uhc' => [
            'name' => 'UnitedHealthcare',
            'logo' => '/images/insurance/uhc.svg',
            'type' => 'Private',
            'coverage' => 'UnitedHealthcare (UHC) is the largest private insurer in the US. Most UHC plans cover substance abuse treatment under behavioral health benefits, including detox, residential, PHP, IOP, and outpatient therapy. Optum Behavioral Health manages most UHC mental health and addiction claims.',
            'plans' => ['UHC Choice Plus PPO', 'UHC Options PPO', 'UnitedHealthcare Community Plan', 'UHC Medicare Advantage', 'UHC Individual Exchange'],
            'covered_treatments' => ['Medical Detox', 'Inpatient/Residential', 'Partial Hospitalization (PHP)', 'Intensive Outpatient (IOP)', 'Outpatient Therapy', 'Medication-Assisted Treatment (MAT)', 'Crisis Intervention'],
            'how_to_verify' => ['Call Optum Behavioral Health (number on your UHC card)', 'Ask about substance use disorder treatment benefits', 'Verify in-network status for your preferred facility', 'Ask about prior authorization for residential programs', 'Confirm your plan type (PPO vs HMO) and cost-sharing', 'Or call RehabFlow at (855) 321-3614 — we verify for free'],
        ],
        'anthem' => [
            'name' => 'Anthem',
            'logo' => '/images/insurance/anthem.svg',
            'type' => 'Private',
            'coverage' => 'Anthem is one of the largest BCBS affiliates. Anthem plans cover addiction treatment services including assessments, detox, residential, outpatient, and aftercare. Anthem Behavioral Health manages substance abuse benefits and may require pre-certification for higher levels of care.',
            'plans' => ['Anthem PPO', 'Anthem HMO', 'Anthem Blue Cross', 'Anthem Medicare', 'Anthem Medicaid'],
            'covered_treatments' => ['Medical Detox', 'Inpatient/Residential', 'Outpatient Programs', 'Intensive Outpatient (IOP)', 'Medication-Assisted Treatment (MAT)', 'Aftercare Planning'],
            'how_to_verify' => ['Call Anthem Behavioral Health at the member services number', 'Ask for substance abuse and chemical dependency benefits', 'Verify in-network providers in your state', 'Ask about pre-certification for inpatient treatment', 'Confirm your specific plan benefits and limitations', 'Or call RehabFlow at (855) 321-3614 — we verify for free'],
        ],
        'humana' => [
            'name' => 'Humana',
            'logo' => '/images/insurance/humana.svg',
            'type' => 'Private',
            'coverage' => 'Humana provides behavioral health coverage that includes substance abuse treatment. Plans cover detox, inpatient, outpatient, and MAT. Humana Behavioral Health manages utilization reviews and may require prior authorization for residential treatment.',
            'plans' => ['Humana PPO', 'Humana HMO', 'Humana Gold Plus', 'Humana Medicare Advantage', 'Humana Marketplace'],
            'covered_treatments' => ['Medical Detox', 'Inpatient/Residential', 'Outpatient Counseling', 'Intensive Outpatient (IOP)', 'Medication-Assisted Treatment (MAT)', 'Group Therapy'],
            'how_to_verify' => ['Call the Humana behavioral health number on your ID card', 'Request substance abuse treatment benefit details', 'Ask about in-network treatment centers near you', 'Confirm prior authorization requirements', 'Check your deductible status and remaining benefits', 'Or call RehabFlow at (855) 321-3614 — we verify for free'],
        ],
        'kaiser' => [
            'name' => 'Kaiser Permanente',
            'logo' => '/images/insurance/kaiser.svg',
            'type' => 'Private (Integrated)',
            'coverage' => 'Kaiser Permanente operates an integrated care model — both insurance and healthcare delivery. Kaiser covers substance abuse treatment through its own facilities and contracted providers, including detox, residential, outpatient, and MAT programs.',
            'plans' => ['Kaiser HMO', 'Kaiser Deductible HMO', 'Kaiser Medicare', 'Kaiser Marketplace'],
            'covered_treatments' => ['Medical Detox', 'Inpatient/Residential', 'Outpatient Programs', 'Intensive Outpatient (IOP)', 'Medication-Assisted Treatment (MAT)', 'Kaiser Chemical Dependency Programs'],
            'how_to_verify' => ['Call Kaiser Member Services at the number on your card', 'Ask about chemical dependency and addiction services', 'Kaiser may refer you to their own facilities first', 'Ask about contracted out-of-network providers if needed', 'Confirm your plan tier and cost-sharing', 'Or call RehabFlow at (855) 321-3614 — we verify for free'],
        ],
        'medicare' => [
            'name' => 'Medicare',
            'logo' => '/images/insurance/medicare.svg',
            'type' => 'Government',
            'coverage' => 'Medicare covers substance abuse treatment for adults 65+ and those with disabilities. Part A covers inpatient hospital-based treatment. Part B covers outpatient counseling, group therapy, and some MAT medications. Medicare Advantage plans may offer additional behavioral health benefits.',
            'plans' => ['Medicare Part A (Hospital)', 'Medicare Part B (Outpatient)', 'Medicare Part D (Prescriptions)', 'Medicare Advantage'],
            'covered_treatments' => ['Hospital-Based Detox (Part A)', 'Inpatient Rehab in Hospitals (Part A)', 'Outpatient Counseling (Part B)', 'Group Therapy (Part B)', 'Medication-Assisted Treatment (Part B/D)', 'Screening & Assessment (Part B)'],
            'how_to_verify' => ['Call 1-800-MEDICARE (1-800-633-4227)', 'Ask about substance abuse treatment coverage', 'Verify if facility accepts Medicare assignment', 'Check Part A vs Part B coverage for your treatment type', 'Confirm any Medicare Advantage supplemental benefits', 'Or call RehabFlow at (855) 321-3614 — we verify for free'],
        ],
        'medicaid' => [
            'name' => 'Medicaid',
            'logo' => '/images/insurance/medicaid.svg',
            'type' => 'Government',
            'coverage' => 'Medicaid covers substance abuse treatment for low-income individuals and families. Coverage varies by state but typically includes screening, detox, residential treatment, outpatient counseling, MAT, and case management. Medicaid expansion under the ACA significantly increased access to addiction treatment.',
            'plans' => ['State Medicaid', 'Medicaid Managed Care', 'Medicaid Expansion', 'CHIP (Children)'],
            'covered_treatments' => ['Screening & Assessment', 'Medical Detox', 'Residential Treatment', 'Outpatient Counseling', 'Intensive Outpatient (IOP)', 'Medication-Assisted Treatment (MAT)', 'Case Management'],
            'how_to_verify' => ['Call your state Medicaid office or managed care plan', 'Ask about substance use disorder treatment benefits', 'Verify which treatment centers accept your Medicaid plan', 'Check if your state expanded Medicaid under the ACA', 'Ask about any service limits or prior authorization', 'Or call RehabFlow at (855) 321-3614 — we verify for free'],
        ],
        'tricare' => [
            'name' => 'TRICARE',
            'logo' => '/images/insurance/tricare.svg',
            'type' => 'Military',
            'coverage' => 'TRICARE covers substance abuse treatment for active duty military, veterans, retirees, and their families. Coverage includes inpatient rehabilitation, outpatient counseling, residential treatment, and MAT. TRICARE Select and TRICARE Prime offer different cost-sharing structures.',
            'plans' => ['TRICARE Prime', 'TRICARE Select', 'TRICARE For Life', 'TRICARE Reserve Select'],
            'covered_treatments' => ['Medical Detox', 'Inpatient/Residential', 'Outpatient Counseling', 'Intensive Outpatient (IOP)', 'Medication-Assisted Treatment (MAT)', 'TRICARE Substance Use Disorder Programs'],
            'how_to_verify' => ['Call TRICARE at 1-800-874-2273', 'Ask about substance use disorder benefits', 'Verify if your facility is TRICARE-authorized', 'Active duty: contact your PCM for referral', 'Check TRICARE Select vs Prime cost-sharing differences', 'Or call RehabFlow at (855) 321-3614 — we verify for free'],
        ],
    ];

    // Slug aliases for backward compatibility
    private $aliases = [
        'bluecross' => 'bcbs',
        'united-healthcare' => 'uhc',
        'kaiser-permanente' => 'kaiser',
    ];

    public function index() { return view('insurance.index', ['providers' => $this->providers]); }

    public function show($slug) {
        // Check aliases
        if (isset($this->aliases[$slug])) {
            return redirect("/insurance/{$this->aliases[$slug]}", 301);
        }
        if (!isset($this->providers[$slug])) abort(404);
        return view('insurance.show', ['provider' => $this->providers[$slug], 'slug' => $slug, 'allProviders' => $this->providers]);
    }
}