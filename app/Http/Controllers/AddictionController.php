<?php

namespace App\Http\Controllers;

class AddictionController extends Controller
{
    private $substances = [
        'alcohol' => [
            'title' => 'Alcohol Addiction Treatment',
            'meta_title' => 'Alcohol Rehab & Treatment Centers | RehabFlow',
            'meta_desc' => 'Find alcohol addiction treatment centers near you. Detox, inpatient, outpatient, and MAT programs for alcohol use disorder.',
            'substance' => 'Alcohol',
            'overview' => 'Alcohol use disorder (AUD) affects over 28 million Americans. Treatment typically begins with medical detox to safely manage withdrawal, which can be life-threatening. Evidence-based programs combine behavioral therapies (CBT, motivational interviewing) with FDA-approved medications like naltrexone, acamprosate, or disulfiram. Recovery rates improve significantly with treatment lasting 90+ days.',
            'signs' => ['Inability to limit drinking', 'Strong cravings or urges to drink', 'Continued drinking despite relationship or health problems', 'Needing more alcohol to feel its effects (tolerance)', 'Withdrawal symptoms when not drinking (shaking, sweating, nausea)', 'Giving up activities to drink instead', 'Drinking in dangerous situations (driving, operating machinery)'],
            'treatments' => ['Medical detox (3-7 days) for safe withdrawal', 'Inpatient rehabilitation (30-90 days)', 'Outpatient programs and IOP', 'Medication-Assisted Treatment (naltrexone, acamprosate)', 'Cognitive Behavioral Therapy (CBT)', 'AA and 12-Step programs', 'Family therapy and couples counseling'],
            'stats' => ['28.3 million adults had AUD in 2021', '95,000 deaths annually from alcohol-related causes', 'Only 7% of people with AUD receive treatment', 'Treatment reduces relapse risk by 40-60%'],
        ],
        'opioids' => [
            'title' => 'Opioid Addiction Treatment',
            'meta_title' => 'Opioid Rehab & Treatment Programs | RehabFlow',
            'meta_desc' => 'Find opioid addiction treatment including MAT, detox, and residential programs. Help for prescription painkillers, heroin, and fentanyl.',
            'substance' => 'Opioids',
            'overview' => 'The opioid epidemic has claimed over 500,000 lives since 1999. Opioid use disorder encompasses addiction to prescription painkillers (oxycodone, hydrocodone), heroin, and synthetic opioids like fentanyl. Medication-Assisted Treatment (MAT) with buprenorphine, methadone, or naltrexone is the gold standard, reducing overdose deaths by 50% or more.',
            'signs' => ['Taking opioids in larger amounts than prescribed', 'Inability to stop despite wanting to', 'Spending excessive time obtaining, using, or recovering', 'Cravings and urges', 'Continued use despite health consequences', 'Tolerance (needing higher doses)', 'Withdrawal symptoms (muscle aches, insomnia, diarrhea, vomiting)'],
            'treatments' => ['Medication-Assisted Treatment (buprenorphine/Suboxone, methadone, naltrexone/Vivitrol)', 'Medical detox with comfort medications', 'Residential childcare programs', 'Intensive outpatient programs', 'Cognitive Behavioral Therapy', 'Contingency management', 'Peer recovery support'],
            'stats' => ['2.7 million Americans have opioid use disorder', '80,000+ opioid overdose deaths annually', 'Fentanyl involved in 73% of opioid deaths', 'MAT reduces mortality by 50%+'],
        ],
        'cocaine' => [
            'title' => 'Cocaine Addiction Treatment',
            'meta_title' => 'Cocaine Rehab & Treatment Centers | RehabFlow',
            'meta_desc' => 'Find cocaine addiction childcare programs. Behavioral therapies, residential care, and outpatient options for cocaine and crack.',
            'substance' => 'Cocaine',
            'overview' => 'Cocaine is a powerful stimulant that creates intense but short-lived euphoria, leading to repeated use and rapid dependence. While there are no FDA-approved medications specifically for cocaine addiction, behavioral therapies like CBT and contingency management have proven highly effective. Treatment addresses the psychological grip of cocaine while building coping strategies for cravings and triggers.',
            'signs' => ['Intense euphoria followed by crashes', 'Dilated pupils and increased energy', 'Financial problems from funding the habit', 'Paranoia, anxiety, or irritability', 'Nosebleeds or nasal damage (snorting)', 'Social withdrawal and secrecy', 'Binge patterns followed by exhaustion'],
            'treatments' => ['Inpatient residential treatment', 'Cognitive Behavioral Therapy (CBT)', 'Contingency management (incentive-based)', 'Therapeutic communities', 'Outpatient counseling', 'Support groups (CA, NA)', 'Dual diagnosis treatment for co-occurring depression'],
            'stats' => ['5.2 million Americans used cocaine in 2021', '24,500+ cocaine overdose deaths annually', 'Often mixed with fentanyl unknowingly', 'CBT shows 60% improvement in outcomes'],
        ],
        'methamphetamine' => [
            'title' => 'Methamphetamine Addiction Treatment',
            'meta_title' => 'Meth Rehab & Treatment Programs | RehabFlow',
            'meta_desc' => 'Find methamphetamine addiction treatment centers. Behavioral therapies and residential programs for meth recovery.',
            'substance' => 'Methamphetamine',
            'overview' => 'Methamphetamine is a highly addictive stimulant that causes severe physical and psychological damage. Meth addiction treatment relies primarily on behavioral therapies, as no FDA-approved medications exist specifically for meth use disorder. The Matrix Model — combining behavioral therapy, family education, drug testing, and 12-step support — has shown strong results.',
            'signs' => ['Extreme weight loss and dental problems', 'Skin sores from picking', 'Paranoia, hallucinations, and violent behavior', 'Extended periods of wakefulness (days)', 'Severe mood swings and anxiety', 'Social isolation and neglecting responsibilities', 'Psychotic episodes'],
            'treatments' => ['Residential treatment (90+ days recommended)', 'The Matrix Model (16-week program)', 'Cognitive Behavioral Therapy', 'Contingency management', 'Motivational interviewing', 'Support groups (Crystal Meth Anonymous)', 'Dual diagnosis treatment (depression, psychosis)'],
            'stats' => ['2.5 million Americans used meth in 2021', '32,500+ stimulant deaths annually', 'Average treatment stay: 90+ days', 'Contingency management shows 60%+ improvement'],
        ],
        'heroin' => [
            'title' => 'Heroin Addiction Treatment',
            'meta_title' => 'Heroin Rehab & Treatment Centers | RehabFlow',
            'meta_desc' => 'Find heroin addiction treatment with MAT, medical detox, and residential care. Evidence-based programs for lasting recovery.',
            'substance' => 'Heroin',
            'overview' => 'Heroin is a highly addictive opioid that creates rapid physical dependence. Treatment follows the same evidence-based approach as other opioid use disorders: medical detox followed by Medication-Assisted Treatment combined with behavioral therapies. Because heroin withdrawal is intensely uncomfortable (though rarely fatal), medical detox is strongly recommended as the first step.',
            'signs' => ['Track marks or bruises from injection', 'Constricted pupils and drowsiness', 'Rapid weight loss and neglected appearance', 'Secretive behavior and lying', 'Financial difficulties and stealing', 'Withdrawal symptoms within hours of last use', 'Nausea, vomiting, and severe muscle pain'],
            'treatments' => ['Medical detox with comfort medications', 'MAT (buprenorphine, methadone, naltrexone)', 'Long-term residential treatment', 'Intensive outpatient programs', 'CBT and dialectical behavior therapy', 'Peer recovery coaches', 'Narcotics Anonymous and support groups'],
            'stats' => ['Over 1 million Americans have heroin use disorder', 'Often a gateway to fentanyl exposure', 'MAT reduces heroin use by 70%+', 'Longer treatment = better outcomes'],
        ],
        'prescription-drugs' => [
            'title' => 'Prescription Drug Addiction Treatment',
            'meta_title' => 'Prescription Drug Rehab & Treatment | RehabFlow',
            'meta_desc' => 'Find treatment for prescription drug addiction: painkillers, benzodiazepines, and stimulants. Medical detox and evidence-based care.',
            'substance' => 'Prescription Drugs',
            'overview' => 'Prescription drug misuse involves three main categories: opioid painkillers (OxyContin, Vicodin), benzodiazepines (Xanax, Valium), and stimulants (Adderall, Ritalin). Each requires a specific treatment approach. Medical detox is critical for opioids and benzos due to dangerous withdrawal. Treatment addresses both the physical dependence and the underlying conditions that led to misuse.',
            'signs' => ['Taking higher doses than prescribed', 'Doctor shopping or seeking multiple prescriptions', 'Using medications for non-medical reasons', 'Running out of prescriptions early', 'Combining medications with alcohol', 'Mood changes and social withdrawal', 'Continued use after the medical condition resolved'],
            'treatments' => ['Medical detox (especially for opioids and benzos)', 'Medication taper protocols', 'MAT for opioid painkillers', 'Inpatient and outpatient programs', 'Pain management alternatives', 'CBT and motivational enhancement therapy', 'Prescription monitoring and accountability'],
            'stats' => ['16 million Americans misuse prescription drugs', 'Opioid painkillers most commonly misused', 'Benzodiazepine withdrawal can be fatal without medical supervision', 'Treatment success rates: 40-60%'],
        ],
        'benzodiazepines' => [
            'title' => 'Benzodiazepine Addiction Treatment',
            'meta_title' => 'Benzo Rehab & Detox Programs | RehabFlow',
            'meta_desc' => 'Find benzodiazepine addiction treatment with safe medical detox. Gradual taper protocols for Xanax, Valium, Klonopin, and Ativan.',
            'substance' => 'Benzodiazepines',
            'overview' => 'Benzodiazepines (Xanax, Valium, Klonopin, Ativan) are prescribed for anxiety, insomnia, and seizures but carry high addiction potential. Benzo withdrawal is medically dangerous — seizures and death can occur without proper supervision. Treatment requires a carefully managed medical taper, gradually reducing the dosage over weeks or months under physician guidance.',
            'signs' => ['Needing higher doses for the same effect', 'Anxiety or panic when unable to take the medication', 'Memory problems and cognitive fog', 'Drowsiness and slurred speech', 'Combining benzos with alcohol or opioids', 'Doctor shopping for additional prescriptions', 'Withdrawal symptoms (tremors, seizures, insomnia)'],
            'treatments' => ['Medically supervised taper (gradual dose reduction)', 'Inpatient detox for heavy users', 'Switch to longer-acting benzo before taper', 'CBT for underlying anxiety disorders', 'Non-addictive anxiety medications', 'Residential treatment for severe cases', 'Outpatient monitoring and support'],
            'stats' => ['30% of opioid overdose deaths also involve benzos', '12% of Americans use benzodiazepines', 'Withdrawal can last weeks to months', 'Medical taper is the only safe approach'],
        ],
        'fentanyl' => [
            'title' => 'Fentanyl Addiction Treatment',
            'meta_title' => 'Fentanyl Addiction Treatment & Rehab | RehabFlow',
            'meta_desc' => 'Find fentanyl addiction treatment with MAT, medical detox, and long-term care. Help for the deadliest substance in America.',
            'substance' => 'Fentanyl',
            'overview' => 'Fentanyl is a synthetic opioid 50-100x stronger than morphine and the leading cause of overdose deaths in America. It is increasingly found mixed into heroin, cocaine, and counterfeit pills. Treatment follows opioid addiction protocols: medical detox, Medication-Assisted Treatment (buprenorphine/methadone), and long-term behavioral therapy. Due to fentanyl extreme potency, treatment often requires higher medication doses and longer stabilization periods.',
            'signs' => ['Extreme drowsiness and confusion', 'Slowed or stopped breathing', 'Tiny pinpoint pupils', 'Rapid tolerance development', 'Withdrawal within hours of last dose', 'Using despite near-fatal overdoses', 'Blue lips or fingertips (oxygen deprivation)'],
            'treatments' => ['Emergency medical detox', 'MAT with higher-dose buprenorphine or methadone', 'Naloxone (Narcan) training for overdose reversal', 'Long-term residential treatment (90+ days)', 'Intensive outpatient with frequent monitoring', 'Trauma-informed therapy', 'Long-term recovery support and aftercare'],
            'stats' => ['Fentanyl involved in 73% of all overdose deaths', '150+ Americans die daily from synthetic opioids', '50-100x more potent than morphine', 'Treatment can reduce mortality by 50%+'],
        ],
    ];

    public function index()
    {
        return view('addiction.index', ['substances' => $this->substances]);
    }

    public function show($slug)
    {
        if (!isset($this->substances[$slug])) abort(404);
        return view('addiction.show', [
            'substance' => $this->substances[$slug],
            'slug' => $slug,
            'allSubstances' => $this->substances,
        ]);
    }
}
