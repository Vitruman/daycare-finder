<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    private $treatments = [
        'inpatient-rehab' => [
            'title' => 'Inpatient Rehab Programs',
            'meta_title' => 'Inpatient Rehab Centers Near You | RehabFlow',
            'meta_desc' => 'Find inpatient daycare centers offering 24/7 residential care. Compare programs, verify insurance, and start recovery today.',
            'hero_label' => 'Residential Treatment',
            'duration' => '30-90 days',
            'cost' => '$15,000 - $30,000',
            'insurance' => 'Usually covered by most plans',
            'overview' => 'Inpatient rehabilitation provides round-the-clock care in a structured, supervised environment. Patients live at the facility full-time, removing them from triggers and negative influences while they focus entirely on recovery. Programs typically include individual therapy, group counseling, medical monitoring, and life skills development.',
            'who' => 'Inpatient rehab is recommended for individuals with severe addiction, a history of relapse, co-occurring mental health disorders, or an unstable home environment. It is also the best choice for those who have tried outpatient treatment without success.',
            'what_includes' => ['24/7 medical supervision and nursing care', 'Individual therapy sessions (CBT, DBT, EMDR)', 'Group counseling and peer support', 'Medical detox (if needed)', 'Nutritional counseling and wellness activities', 'Family therapy and education programs', 'Aftercare planning and relapse prevention', 'Holistic therapies (yoga, meditation, art therapy)'],
            'success_rate' => '40-60%',
        ],
        'outpatient-programs' => [
            'title' => 'Outpatient Treatment Programs',
            'meta_title' => 'Outpatient Rehab Programs Near You | RehabFlow',
            'meta_desc' => 'Find flexible outpatient addiction childcare programs. Continue working while receiving care. Compare centers and verify insurance.',
            'hero_label' => 'Flexible Treatment',
            'duration' => '3-6 months',
            'cost' => '$5,000 - $10,000',
            'insurance' => 'Covered by most insurance plans',
            'overview' => 'Outpatient treatment allows individuals to receive addiction care while living at home and maintaining daily responsibilities like work, school, or family obligations. Sessions are typically scheduled several times per week and include individual counseling, group therapy, and skills training.',
            'who' => 'Outpatient programs are ideal for individuals with mild to moderate substance use disorders, a strong support system at home, and the ability to manage daily responsibilities. They also serve as effective step-down care after completing an inpatient program.',
            'what_includes' => ['Individual counseling sessions', 'Group therapy 2-5 times per week', 'Cognitive Behavioral Therapy (CBT)', 'Relapse prevention education', 'Drug and alcohol testing', 'Case management and referrals', 'Family involvement opportunities', 'Flexible scheduling (morning, evening, weekend)'],
            'success_rate' => '30-50%',
        ],
        'medical-detox' => [
            'title' => 'Medical Detox Programs',
            'meta_title' => 'Medical Detox Centers Near You | RehabFlow',
            'meta_desc' => 'Find medically supervised detox programs for safe withdrawal management. 24/7 care with FDA-approved medications.',
            'hero_label' => 'Safe Withdrawal',
            'duration' => '3-10 days',
            'cost' => '$3,000 - $10,000',
            'insurance' => 'Covered by most insurance plans',
            'overview' => 'Medical detoxification is the process of safely managing acute withdrawal symptoms when someone stops using drugs or alcohol. It takes place in a clinical setting with 24-hour medical supervision. Doctors may prescribe FDA-approved medications to ease symptoms like anxiety, nausea, seizures, and insomnia.',
            'who' => 'Medical detox is essential for anyone physically dependent on alcohol, opioids, benzodiazepines, or other substances that produce dangerous withdrawal symptoms. It is the critical first step before entering a treatment program — detox alone is not considered treatment.',
            'what_includes' => ['24/7 medical monitoring and nursing care', 'FDA-approved withdrawal medications', 'Vital sign monitoring and health assessments', 'Comfort management (hydration, nutrition)', 'Psychiatric evaluation for co-occurring disorders', 'Seamless transition to treatment program', 'Pain management protocols', 'Emotional support and counseling'],
            'success_rate' => '70-80% completion',
        ],
        'medication-assisted-treatment' => [
            'title' => 'Medication-Assisted Treatment (MAT)',
            'meta_title' => 'MAT Programs - Medication-Assisted Treatment | RehabFlow',
            'meta_desc' => 'Find MAT programs combining FDA-approved medications with counseling. Proven effective for opioid and alcohol addiction.',
            'hero_label' => 'Evidence-Based Care',
            'duration' => 'Ongoing (12+ months recommended)',
            'cost' => '$5,000 - $15,000/year',
            'insurance' => 'Required to be covered under ACA',
            'overview' => 'Medication-Assisted Treatment combines FDA-approved medications — such as buprenorphine (Suboxone), methadone, or naltrexone (Vivitrol) — with counseling and behavioral therapies. MAT is clinically proven to reduce opioid use, prevent overdose deaths, decrease criminal activity, and improve treatment retention.',
            'who' => 'MAT is most effective for individuals with opioid use disorder (heroin, fentanyl, prescription painkillers) or alcohol use disorder. It is not "replacing one drug with another" — it stabilizes brain chemistry, blocks euphoric effects, and relieves cravings so the person can focus on recovery work.',
            'what_includes' => ['Comprehensive medical assessment', 'FDA-approved medications (buprenorphine, methadone, naltrexone)', 'Individual and group counseling', 'Regular drug screening', 'Psychiatric support for co-occurring disorders', 'Care coordination and case management', 'Peer support and recovery coaching', 'Ongoing monitoring and dosage adjustments'],
            'success_rate' => '60-75%',
        ],
        'dual-diagnosis' => [
            'title' => 'Dual Diagnosis Treatment',
            'meta_title' => 'Dual Diagnosis Treatment Centers | RehabFlow',
            'meta_desc' => 'Find dual diagnosis treatment for co-occurring addiction and mental health disorders. Integrated care for lasting recovery.',
            'hero_label' => 'Integrated Care',
            'duration' => '60-90 days (residential) or 3-6 months (outpatient)',
            'cost' => '$20,000 - $50,000',
            'insurance' => 'Covered under mental health parity laws',
            'overview' => 'Dual diagnosis treatment addresses both substance use disorders and co-occurring mental health conditions simultaneously. About 50% of people with addiction also have a mental health disorder such as depression, anxiety, PTSD, bipolar disorder, or ADHD. Integrated treatment has been shown to produce significantly better outcomes than treating each condition separately.',
            'who' => 'Dual diagnosis treatment is essential for anyone struggling with addiction alongside mental health symptoms. Warning signs include using substances to self-medicate emotional pain, worsening mental health despite treatment, or being diagnosed with both conditions.',
            'what_includes' => ['Integrated psychiatric and addiction assessment', 'Medication management for both conditions', 'Trauma-informed therapy (EMDR, CPT)', 'Individual and group psychotherapy', 'CBT, DBT, and motivational interviewing', 'Psychiatric monitoring and medication adjustments', 'Holistic wellness (mindfulness, exercise)', 'Coordinated aftercare planning'],
            'success_rate' => '45-65%',
        ],
        'sober-living' => [
            'title' => 'Sober Living Homes',
            'meta_title' => 'Sober Living Homes & Halfway Houses | RehabFlow',
            'meta_desc' => 'Find sober living homes for structured, supportive recovery housing. Build stability after treatment.',
            'hero_label' => 'Transitional Housing',
            'duration' => '3-12 months',
            'cost' => '$500 - $3,000/month',
            'insurance' => 'Varies — some covered, many self-pay',
            'overview' => 'Sober living homes provide structured, substance-free housing for people in early recovery. Residents live together in a supportive community, follow house rules (curfews, chores, drug testing), attend recovery meetings, and gradually rebuild independent living skills. Sober living bridges the gap between intensive treatment and fully independent life.',
            'who' => 'Sober living is ideal for individuals who have completed a primary treatment program and need continued structure and support before returning to independent living. It is especially valuable for those without a stable, sober home environment.',
            'what_includes' => ['Substance-free living environment', 'House rules and accountability structure', 'Regular drug and alcohol testing', 'Peer support and community living', 'Recovery meeting attendance requirements', 'Life skills development (budgeting, cooking)', 'Employment and education support', 'Gradual increase in independence'],
            'success_rate' => 'Ongoing support',
        ],
        'intensive-outpatient' => [
            'title' => 'Intensive Outpatient Programs (IOP)',
            'meta_title' => 'Intensive Outpatient Programs (IOP) Near You | RehabFlow',
            'meta_desc' => 'Find IOP programs offering 9-20 hours/week of structured treatment while living at home. Best balance of care and flexibility.',
            'hero_label' => 'Structured Flexibility',
            'duration' => '2-4 months',
            'cost' => '$5,000 - $12,000',
            'insurance' => 'Covered by most insurance plans',
            'overview' => 'Intensive Outpatient Programs (IOP) provide a higher level of care than standard outpatient but allow patients to live at home. IOP typically involves 9-20 hours of programming per week, including group therapy, individual counseling, education, and skills building. Sessions are often available in morning, afternoon, or evening schedules.',
            'who' => 'IOP is ideal as a step-down from inpatient/residential treatment, for individuals whose addiction is moderate, or for those who need structured support but cannot commit to full-time residential care due to work, school, or family obligations.',
            'what_includes' => ['9-20 hours of weekly programming', 'Group therapy sessions (3-5 per week)', 'Individual counseling', 'Psychoeducation on addiction and recovery', 'Relapse prevention planning', 'Drug and alcohol screening', 'Family therapy options', 'Flexible scheduling (AM, PM, weekend tracks)'],
            'success_rate' => '35-55%',
        ],
    ];

    public function index()
    {
        return view('treatment.index', ['treatments' => $this->treatments]);
    }

    public function show($slug)
    {
        if (!isset($this->treatments[$slug])) {
            abort(404);
        }
        return view('treatment.show', [
            'treatment' => $this->treatments[$slug],
            'slug' => $slug,
            'allTreatments' => $this->treatments,
        ]);
    }
}
