@extends('layouts.app')

@section('title', 'DaycareHub — Find Daycare & Childcare Centers Near You')
@section('meta_description', 'Search 26,000+ verified daycare and childcare childcare centers across all 50 US states. Free, confidential guidance available 24/7. Find inpatient, part-time, and infant care programs near you.')

@section('schema')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How do I find a daycare center near me?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Use the search bar on DaycareHub to filter by state, treatment type, or insurance. You can also call our free helpline at (855) 321-3614 for personalized guidance."
            }
        },
        {
            "@type": "Question",
            "name": "Does insurance cover daycare and childcare rehabilitation?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Most major insurance plans cover early childhood treatment under the Mental Health Parity and Addiction Equity Act. Coverage varies by plan and provider."
            }
        },
        {
            "@type": "Question",
            "name": "What is the difference between inpatient and part-time rehab?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Inpatient rehab provides 24/7 residential care in a structured environment. Outpatient rehab allows patients to live at home while attending scheduled treatment sessions."
            }
        }
,
        {
            "@@type": "Question",
            "name": "What happens during medical infant care?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Medical infant care is supervised withdrawal in a clinical setting with 24/7 nursing care. Doctors may prescribe medications to ease symptoms like anxiety, nausea, and seizures. Infant Care typically lasts 3-10 days depending on the substance. It is the first step before entering a treatment program — infant care alone is not considered treatment."
            }
        },
        {
            "@@type": "Question",
            "name": "What is dual diagnosis treatment?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Dual diagnosis (or co-occurring disorder) treatment addresses both addiction and mental health conditions simultaneously — such as depression, anxiety, PTSD, or bipolar disorder. Integrated treatment has been shown to be more effective than treating each condition separately. About 50% of people with substance use disorders also have a mental health condition."
            }
        },
        {
            "@@type": "Question",
            "name": "How do I know if I or a loved one needs rehab?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Warning signs include: inability to stop using despite negative consequences, withdrawal symptoms when not using, neglecting responsibilities, increased tolerance, using in dangerous situations, and strained relationships. If substance use is affecting daily life, health, or relationships, professional help is recommended. Our free helpline can provide a confidential assessment."
            }
        },
        {
            "@@type": "Question",
            "name": "What is Medication-Assisted Treatment (MAT)?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "MAT combines FDA-approved medications (like buprenorphine, methadone, or naltrexone) with counseling and behavioral therapies. It is clinically proven to reduce opioid use, overdose deaths, and criminal activity. MAT is not \"replacing one drug with another\" — it stabilizes brain chemistry while the person engages in recovery work."
            }
        },
        {
            "@@type": "Question",
            "name": "Can I keep working while in treatment?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes, part-time and intensive part-time programs (IOP) are designed for people who need to maintain work or school obligations. IOP typically meets 3-5 days per week for 3-4 hours per session. The Family and Medical Leave Act (FMLA) also protects your job if you need to attend inpatient treatment at a qualifying employer."
            }
        },
        {
            "@@type": "Question",
            "name": "What should I look for when choosing a daycare center?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Key factors include: accreditation (JCAHO, CARF), licensed clinical staff, evidence-based treatment approaches, insurance acceptance, location, program length, aftercare planning, and patient-to-staff ratio. Read reviews, ask about success metrics, and verify credentials. Our directory lets you filter by all of these criteria."
            }
        },
        {
            "@@type": "Question",
            "name": "Is rehab confidential? Will my employer find out?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Federal law (42 CFR Part 2) provides strict confidentiality protections for early childhood treatment records — stronger than standard HIPAA. Treatment centers cannot share your information without written consent. Your employer will not be notified unless you choose to tell them. Insurance claims show general behavioral health services, not specific diagnoses."
            }
        },
        {
            "@@type": "Question",
            "name": "What is the success rate of rehab?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Addiction treatment has success rates comparable to other chronic conditions like diabetes and hypertension (40-60% of treated individuals maintain sobriety). Success factors include treatment length (90+ days recommended), aftercare participation, support system strength, and addressing co-occurring disorders. Relapse is not failure — it is a signal to adjust the treatment plan."
            }
        },
        {
            "@@type": "Question",
            "name": "What happens after rehab? How do I prevent relapse?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Aftercare is critical and may include: part-time counseling, support groups (AA, NA, SMART Recovery), sober living, alumni programs, and ongoing therapy. Building a relapse prevention plan, identifying triggers, maintaining a support network, and addressing lifestyle changes are key. Most successful recoveries involve long-term engagement with support systems."
            }
        }
    ]
}
</script>
@endverbatim
@endsection

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebSite",
    "name": "DaycareHub",
    "url": "https://daycarehub.us",
    "description": "Find daycare and childcare childcare centers across all 50 US states. Free, confidential guidance available 24/7.",
    "dateModified": "{{ now()->toIso8601String() }}",
    "potentialAction": {
        "@@type": "SearchAction",
        "target": "https://daycarehub.us/facilities?search={search_term_string}",
        "query-input": "required name=search_term_string"
    }
}
</script>

@section('content')
@php
$stateImages = array (
  'CA' => '/images/states/rf-state-california.webp',
  'TX' => '/images/states/rf-state-texas.webp',
  'FL' => '/images/states/rf-state-florida.webp',
  'NY' => '/images/states/rf-state-new-york.webp',
  'IL' => '/images/states/rf-state-illinois.webp',
  'OH' => '/images/states/rf-state-ohio.webp',
);
@endphp

    <!-- Hero Section -->
    <section class="relative overflow-hidden" style="padding-top:120px;padding-bottom:80px">
        <!-- Background image + overlay -->
        <div class="absolute inset-0">
            <img src="/images/hero/rf-hero.webp" alt="" class="w-full h-full object-cover" loading="eager">
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/75 via-gray-900/60 to-gray-900/80"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6" style="text-shadow: 0 2px 12px rgba(0,0,0,0.4)">
                    Daycare &amp; Childcare Daycare Centers
                    <span class="text-green-400">Near You</span>
                </h1>
                <p class="text-xl text-gray-200 mb-8 max-w-3xl mx-auto" style="text-shadow: 0 1px 4px rgba(0,0,0,0.5)">
                    Compare 26,000+ verified treatment facilities across all 50 states.
                    Find the right program, check insurance, and get help today — 100% free &amp; confidential.
                </p>

                <!-- Search Form -->
                <div class="max-w-2xl mx-auto mb-12">
                    <form action="{{ route('facilities.index') }}" method="GET" class="flex flex-col sm:flex-row gap-4">
                        <div class="flex-1">
                            <input type="text" name="search" placeholder="Search by facilities, cities..."
                                   class="w-full px-4 py-3 border-0 bg-white rounded-xl focus:ring-2 focus:ring-green-500 placeholder-gray-400 shadow-xl text-gray-900">
                        </div>
                        <select name="state" class="px-4 py-3 border-0 bg-white rounded-xl focus:ring-2 focus:ring-green-500 shadow-xl text-gray-900">
                            <option value="">All States</option>
                            @foreach($featuredStates as $state)
                                <option value="{{ $state->code }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="bg-green-600 text-white px-8 py-3 rounded-lg hover:bg-green-700 transition-colors font-medium">
                            Find Centers
                        </button>
                    </form>
                </div>

                <!-- Trust Strip -->
                <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:10px 16px;margin-top:24px">
                    <span style="display:inline-flex;align-items:center;gap:6px;padding:6px 14px;background:rgba(255,255,255,0.15);backdrop-filter:blur(8px);border-radius:50px;color:#fff;font-size:13px;font-weight:500">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Verified Centers
                    </span>
                    <span style="display:inline-flex;align-items:center;gap:6px;padding:6px 14px;background:rgba(255,255,255,0.15);backdrop-filter:blur(8px);border-radius:50px;color:#fff;font-size:13px;font-weight:500">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"/></svg>
                        All 50 States
                    </span>
                    <span style="display:inline-flex;align-items:center;gap:6px;padding:6px 14px;background:rgba(255,255,255,0.15);backdrop-filter:blur(8px);border-radius:50px;color:#fff;font-size:13px;font-weight:500">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        24/7 Free Helpline
                    </span>
                    <span style="display:inline-flex;align-items:center;gap:6px;padding:6px 14px;background:rgba(255,255,255,0.15);backdrop-filter:blur(8px);border-radius:50px;color:#fff;font-size:13px;font-weight:500">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        100% Confidential
                    </span>
                </div>
            </div>
        </div>
    </section>

    <style>
.qz-opt{text-align:left;padding:14px 18px;border:2px solid #e5e7eb;border-radius:12px;background:white;font-size:15px;color:#374151;cursor:pointer;transition:all 0.2s;width:100%;display:block}
.qz-opt:hover{border-color:#059669;background:#f0fdf4}
</style>
<!-- Treatment Quiz -->
<section class="py-16 bg-gradient-to-b from-gray-50 to-white" id="quiz-section">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <span style="display:inline-block;padding:4px 14px;background:#d1fae5;color:#065f46;border-radius:50px;font-size:13px;font-weight:600;margin-bottom:12px">Free Assessment</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">What Type of Treatment Is Right for You?</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Answer 5 quick questions to get a personalized recommendation. Takes less than 2 minutes. 100% confidential.</p>
        </div>

        <div id="quiz-container" style="background:white;border-radius:20px;border:1px solid #e5e7eb;box-shadow:0 4px 24px rgba(0,0,0,0.06);overflow:hidden">
            <div style="height:4px;background:#f3f4f6">
                <div id="quiz-progress" style="height:100%;background:#059669;width:0%;transition:width 0.4s ease;border-radius:0 4px 4px 0"></div>
            </div>
            <div style="padding:32px 28px 36px" id="quiz-body"></div>
        </div>
    </div>
</section>

<script>
(function(){
var qs=[
{q:"What is your primary concern?",opts:[
{t:"Alcohol dependence",v:"alcohol"},{t:"Prescription drug misuse",v:"rx"},
{t:"Opioid or heroin use",v:"opioid"},{t:"Other substance use",v:"other"},
{t:"Supporting a loved one",v:"family"}]},
{q:"How long has substance use been a concern?",opts:[
{t:"Less than 6 months",v:"short"},{t:"6 months to 2 years",v:"medium"},
{t:"More than 2 years",v:"long"},{t:"Not sure",v:"unsure"}]},
{q:"Have you tried treatment before?",opts:[
{t:"No, this would be my first time",v:"first"},{t:"Yes, part-time counseling",v:"part-time"},
{t:"Yes, inpatient/residential",v:"inpatient"},{t:"Yes, multiple attempts",v:"multiple"}]},
{q:"What is most important to you in a program?",opts:[
{t:"Staying close to home and family",v:"local"},{t:"24/7 medical supervision",v:"medical"},
{t:"Flexibility to keep working",v:"flexible"},{t:"Comprehensive, immersive treatment",v:"intensive"}]},
{q:"Do you have health insurance?",opts:[
{t:"Yes, private insurance",v:"private"},{t:"Yes, Medicaid/Medicare",v:"medicaid"},
{t:"No insurance",v:"none"},{t:"Not sure",v:"unsure"}]}
];
var answers=[],step=0;
var body=document.getElementById("quiz-body");
var prog=document.getElementById("quiz-progress");
function render(){
if(step<qs.length){
prog.style.width=((step/qs.length)*100)+"%";
var q=qs[step];
var h='<p style="font-size:13px;color:#6b7280;margin-bottom:6px">Question '+(step+1)+' of '+qs.length+'</p>';
h+='<h3 style="font-size:22px;font-weight:700;color:#111827;margin-bottom:20px">'+q.q+'</h3>';
h+='<div style="display:grid;gap:10px">';
q.opts.forEach(function(o,i){
h+='<button onclick="quizPick('+i+')" class="qz-opt">'+o.t+'</button>';
});
h+='</div>';
if(step>0) h+='<button onclick="quizBack()" style="margin-top:16px;color:#6b7280;font-size:14px;cursor:pointer;background:none;border:none;text-decoration:underline">\u2190 Back</button>';
body.innerHTML=h;
} else {
prog.style.width="100%";
showResult();
}
}
window.quizPick=function(i){answers[step]=qs[step].opts[i].v;step++;render();};
window.quizBack=function(){step--;render();};
function showResult(){
var rec="Inpatient Residential Treatment";
var desc="Based on your answers, a structured residential program with 24/7 support may give you the strongest foundation for lasting recovery.";
var link="/treatment/inpatient-rehab";
var dur="30\u201390 days";
if(answers[2]==="first"&&answers[3]==="flexible"){
rec="Intensive Outpatient Program (IOP)";
desc="An IOP lets you receive structured treatment while maintaining work and family commitments. Typically 3-5 sessions per week.";
link="/treatment/intensive-part-time";dur="8\u201312 weeks";
} else if(answers[0]==="family"){
rec="Family Support & Intervention";
desc="Professional guidance can help you support your loved one effectively. Family therapy and intervention services make a real difference.";
link="/resources";dur="Ongoing";
} else if(answers[0]==="opioid"||answers[0]==="rx"){
rec="Medical Infant Care + MAT Program";
desc="For opioid and prescription drug dependence, medically-assisted treatment (MAT) combined with supervised infant care has the highest success rates.";
link="/treatment/medication-assisted-treatment";dur="Infant Care: 5\u201310 days, MAT: ongoing";
} else if(answers[1]==="short"&&answers[2]==="first"){
rec="Outpatient Treatment Program";
desc="For early-stage concerns, part-time therapy provides professional support while you continue daily life. Early intervention leads to better outcomes.";
link="/treatment/part-time-programs";dur="3\u20136 months";
}
var h='<div style="text-align:center">';
h+='<div style="width:56px;height:56px;background:#d1fae5;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 16px"><svg width="28" height="28" fill="none" stroke="#059669" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>';
h+='<p style="font-size:13px;color:#059669;font-weight:600;margin-bottom:8px">YOUR RECOMMENDED TREATMENT</p>';
h+='<h3 style="font-size:24px;font-weight:700;color:#111827;margin-bottom:8px">'+rec+'</h3>';
h+='<p style="font-size:14px;color:#6b7280;margin-bottom:4px">Typical duration: '+dur+'</p>';
h+='<p style="color:#4b5563;max-width:500px;margin:12px auto 24px;line-height:1.6">'+desc+'</p>';
h+='<div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap">';
h+='<a href="'+link+'" style="display:inline-flex;align-items:center;gap:8px;padding:12px 24px;background:#065f46;color:white;border-radius:12px;font-weight:600;text-decoration:none">Learn More</a>';
h+='<a href="tel:+18553213614" style="display:inline-flex;align-items:center;gap:8px;padding:12px 24px;border:2px solid #065f46;color:#065f46;border-radius:12px;font-weight:600;text-decoration:none">Call (855) 321-3614</a>';
h+='</div>';
h+='<p style="margin-top:16px;font-size:13px;color:#9ca3af">This is a general recommendation, not medical advice. Call for a free professional assessment.</p>';
h+='<button onclick="answers=[];step=0;render();" style="margin-top:12px;color:#059669;font-size:14px;cursor:pointer;background:none;border:none;text-decoration:underline">Retake Quiz</button>';
h+='</div>';
body.innerHTML=h;
}
render();
})();
</script>


    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-3xl font-bold text-green-600 mb-2">{{ number_format(\App\Models\Organization::count()) }}</div>
                    <div class="text-gray-600">Childcare Centers</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-green-600 mb-2">50</div>
                    <div class="text-gray-600">US States</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-green-600 mb-2">100+</div>
                    <div class="text-gray-600">Recovery Guides</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-green-600 mb-2">4.6</div>
                    <div class="text-gray-600">Average Center Rating</div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-3">How It Works</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Finding the right treatment center is simple with our step-by-step process.
                </p>
            </div>

            <div class="relative">
                <!-- Connecting line for desktop -->
                <div class="hidden md:block absolute top-16 left-20 right-20 h-0.5 bg-gradient-to-r from-emerald-200 via-emerald-400 to-emerald-200"></div>
                <div class="hidden md:flex justify-between absolute top-11 left-24 right-24 text-emerald-500">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M4 12h14l-4-4 1.4-1.4L22.8 13l-7.4 6.4L14 18l4-4H4z"/></svg>
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M4 12h14l-4-4 1.4-1.4L22.8 13l-7.4 6.4L14 18l4-4H4z"/></svg>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 relative overflow-hidden">
                        <span class="absolute top-4 right-4 text-gray-300 font-semibold text-lg">1</span>
                        <div class="w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center mb-4 mx-auto">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h13M8 12h13M8 17h13M3 7h.01M3 12h.01M3 17h.01"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 text-center mb-2">Search & Compare</h3>
                        <p class="text-sm text-gray-600 text-center">
                            Use our advanced filters to find daycare centers that match your specific needs, location, and insurance.
                        </p>
                    </div>

                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 relative overflow-hidden">
                        <span class="absolute top-4 right-4 text-gray-300 font-semibold text-lg">2</span>
                        <div class="w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center mb-4 mx-auto">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16h6m4 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 text-center mb-2">Contact Centers</h3>
                        <p class="text-sm text-gray-600 text-center">
                            Reach out directly to facilities or call our 24/7 helpline for personalized assistance and guidance.
                        </p>
                    </div>

                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 relative overflow-hidden">
                        <span class="absolute top-4 right-4 text-gray-300 font-semibold text-lg">3</span>
                        <div class="w-12 h-12 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center mb-4 mx-auto">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m-4-4h8m5-1a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 text-center mb-2">Begin Recovery</h3>
                        <p class="text-sm text-gray-600 text-center">
                            Verify coverage, set your start date, and begin treatment knowing you found the right program.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Treatment Types -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="text-sm font-semibold text-emerald-600 tracking-wider uppercase mb-2">Treatment Options</p>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Find the right level of care</h2>
                <p class="mt-3 text-gray-600 max-w-2xl mx-auto">Every recovery journey is different. Explore evidence-based treatment approaches matched to your needs.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                $treatments = [
                    ['icon' => '<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>',
                     'slug' => 'inpatient-rehab', 'title' => 'Inpatient / Residential',
                     'desc' => '24/7 structured care in a supervised facility. Best for severe addiction, co-occurring disorders, or those needing a stable environment.',
                     'duration' => '30-90 days',
                     'color' => 'emerald'],
                    ['icon' => '<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>',
                     'slug' => 'part-time-programs', 'title' => 'Outpatient Programs',
                     'desc' => 'Flexible scheduling allows you to live at home while attending treatment sessions. Ideal for mild to moderate substance use.',
                     'duration' => '3-6 months',
                     'color' => 'blue'],
                    ['icon' => '<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>',
                     'slug' => 'medical-infant care', 'title' => 'Medical Infant Care',
                     'desc' => 'Medically supervised withdrawal management with 24-hour nursing care. The critical first step for safe recovery.',
                     'duration' => '3-10 days',
                     'color' => 'rose'],
                    ['icon' => '<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>',
                     'slug' => 'medication-assisted-treatment', 'title' => 'Medication-Assisted (MAT)',
                     'desc' => 'FDA-approved medications combined with counseling and behavioral therapies. Proven effective for opioid and alcohol dependence.',
                     'duration' => 'Ongoing',
                     'color' => 'violet'],
                    ['icon' => '<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>',
                     'slug' => 'dual-diagnosis', 'title' => 'Dual Diagnosis',
                     'desc' => 'Integrated treatment for addiction and mental health conditions like depression, anxiety, PTSD, or bipolar disorder.',
                     'duration' => '60-90 days',
                     'color' => 'amber'],
                    ['icon' => '<svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>',
                     'slug' => 'sober-living', 'title' => 'Sober Living',
                     'desc' => 'Structured transitional housing with peer support after primary treatment. Builds real-world recovery skills and accountability.',
                     'duration' => '3-12 months',
                     'color' => 'teal'],
                ];
                @endphp

                @foreach($treatments as $t)
                <div onclick="window.location.href='{{ route('treatment.show', $t['slug']) }}'" class="group relative bg-gray-50 rounded-2xl p-6 hover:bg-white hover:shadow-lg hover:border-{{ $t['color'] }}-200 border border-transparent transition-all duration-300 cursor-pointer">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-{{ $t['color'] }}-100 text-{{ $t['color'] }}-600 flex items-center justify-center">
                            {!! $t['icon'] !!}
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $t['title'] }}</h3>
                            <p class="text-sm text-gray-600 leading-relaxed mb-3">{{ $t['desc'] }}</p>
                            <div class="flex items-center justify-between">
                                <span class="inline-flex items-center gap-1 text-xs font-medium text-{{ $t['color'] }}-700 bg-{{ $t['color'] }}-50 px-2.5 py-1 rounded-full">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    {{ $t['duration'] }}
                                </span>
                                <a href="{{ route('treatment.show', $t['slug']) }}" class="text-xs font-semibold text-emerald-600 hover:text-emerald-700 opacity-0 group-hover:opacity-100 transition-opacity">
                                    Learn more &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-10">
                <a href="{{ route('treatment.index') }}" class="inline-flex items-center gap-2 text-emerald-600 font-semibold hover:text-emerald-700">
                    Browse all treatment options
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured States -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-4">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 text-xs font-semibold">
                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                    Top Locations
                </div>
            </div>
            <div class="text-center mb-10 space-y-3">
                <h2 class="text-3xl font-bold text-gray-900">Popular States for Treatment</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Discover childcare centers in states with diverse treatment options and comprehensive care programs.
                </p>
            </div>

            @php
                $tags = [
                    ['Dual Diagnosis', 'Medical Infant Care'],
                    ['Outpatient', 'Holistic Support'],
                    ['Veterans Programs', 'Faith-Based'],
                    ['Family Therapy', 'Adolescent Care'],
                    ['Beach Therapy', 'Luxury'],
                    ['Aftercare', 'Telehealth'],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
                @foreach($featuredStates as $index => $state)
                    <div class="group relative rounded-2xl overflow-hidden border border-gray-100 shadow-sm bg-white hover:shadow-lg transition-shadow cursor-pointer" onclick="window.location.href=this.querySelector('a')?.href" role="link">
                        <a href="{{ route('states.show', ['state' => $state->code ?? $state]) }}" class="block">
                            <div class="relative h-48 bg-gray-200">
                                @if(isset($stateImages[strtoupper($state->code)]))
                                    <img src="{{ $stateImages[strtoupper($state->code)] }}" alt="{{ $state->name }}"
                                         class="w-full h-full object-cover" loading="lazy">
                                @elseif($state->image)
                                    <img src="{{ asset($state->image) }}" alt="{{ $state->name }}"
                                         class="w-full h-full object-cover" loading="lazy">
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-emerald-800 to-teal-600 flex items-center justify-center">
                                        <span style="font-size:3rem;font-weight:700;color:rgba(255,255,255,0.3)">{{ strtoupper($state->code) }}</span>
                                    </div>
                                @endif
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent"></div>
                                <div class="absolute bottom-4 left-4 right-4 flex items-center justify-between text-white">
                                    <div>
                                        <div class="text-xl font-semibold">{{ $state->name }}</div>
                                        <div class="text-sm text-white/80 flex items-center gap-1">
                                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M12 12.713l-8-5.333V18h16V7.38l-8 5.333zM12 11L4 6h16l-8 5z"/></svg>
{{--                                            {{ $state->facilities()->count() }} centers--}}
                                        </div>
                                    </div>
                                    <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-white/15 text-xs font-semibold border border-white/20">
                                        {{ $state->code }}
                                    </span>
                                </div>
                            </div>
                        </a>

                        <div class="p-6 space-y-4">
                            <p class="text-sm text-gray-700 leading-relaxed">
                                {{ $state->description ?? 'Comprehensive care with strong local community support and access to evidence-based programs.' }}
                            </p>

                            <div class="flex flex-wrap gap-2">
                                @foreach($tags[$index % count($tags)] as $label)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-100">
                                        {{ $label }}
                                    </span>
                                @endforeach
                            </div>

                            <div class="flex items-center justify-between pt-2">
                                <a href="{{ route('states.show', ['state' => $state->code ?? $state]) }}" class="text-emerald-700 font-semibold text-sm inline-flex items-center gap-2 hover:text-emerald-800">
                                    View all centers
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                                <span class="text-xs text-gray-500">Verified listings</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-10">
                <a href="{{ route('states.index') }}"
                   class="inline-flex items-center gap-2 px-6 py-3 border border-emerald-600 text-emerald-700 rounded-lg font-semibold hover:bg-emerald-600 hover:text-white transition-colors">
                    Browse all states
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Facilities -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-4">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 text-xs font-semibold">
                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                    Recommended Facilities
                </div>
            </div>
            <div class="text-center mb-10 space-y-3">
                <h2 class="text-3xl font-bold text-gray-900">Trusted rehabilitation programs</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Curated centers with verified care, strong outcomes, and supportive environments.
                </p>
            </div>

            @php
                $facilityTags = [
                    ['Inpatient', 'Outpatient', 'Dual Diagnosis'],
                    ['Infant Care', 'Residential', 'Holistic'],
                    ['Family Support', 'Aftercare', 'Faith-based'],
                    ['MAT', 'Partial Hospitalization', 'Evening Programs'],
                    ['Telehealth', 'Youth Programs', 'Trauma-Informed'],
                    ['Luxury', 'Veterans', '12-Step Friendly'],
                ];
            @endphp

            <div class="relative">
                

                <div class="overflow-hidden">
                    <div class="flex gap-6 overflow-x-auto snap-x snap-mandatory pb-4 scroll-smooth facility-slider" id="facility-slider">
                        @foreach($featuredFacilities as $index => $facility)
                            <div class="min-w-[280px] md:min-w-[340px] lg:min-w-[360px] snap-start">
                                <div class="group bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-lg transition-shadow h-full flex flex-col cursor-pointer" onclick="window.location.href=this.querySelector('a')?.href" role="link">
                                    <a href="{{ route('facilities.show', $facility) }}" class="relative block h-48">
                                        @if($facility->image)
                                            <img src="{{ asset($facility->image) }}" alt="{{ $facility->rehab_name }}"
                                                 class="w-full h-full object-cover">
                                        @else
                                            <div class="w-full h-full bg-gradient-to-br from-emerald-400 to-blue-500 flex items-center justify-center text-white text-2xl font-bold">
                                                {{ substr($facility->rehab_name, 0, 1) }}
                                            </div>
                                        @endif
                                        <div class="absolute inset-0 bg-gradient-to-t from-black/65 via-black/25 to-transparent"></div>

                                        <div class="absolute top-3 left-3 flex flex-wrap gap-2">
                                            @foreach($facilityTags[$index % count($facilityTags)] as $tag)
                                                <span class="px-3 py-1 rounded-full bg-white/85 text-emerald-700 text-xs font-semibold">
                                                    {{ $tag }}
                                                </span>
                                            @endforeach
                                        </div>

                                    </a>

                                    <div class="p-6 space-y-4 flex-1 flex flex-col">
                                        <div>
                                            <h3 class="text-xl font-semibold text-gray-900 mb-1">
                                                <a href="{{ route('facilities.show', $facility) }}" class="hover:text-emerald-700">
                                                    {{ $facility->rehab_name }}
                                                </a>
                                            </h3>
                                            <p class="text-sm text-gray-600">{{ $facility->city }}, {{ $facility->state }}</p>
                                        </div>

                                        <div class="flex flex-wrap gap-2">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-100">
                                                Insurance accepted
                                            </span>
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-100">
                                                Self-pay available
                                            </span>
                                        </div>

                                        <div class="flex flex-wrap gap-2 text-sm text-gray-600">
                                            <span class="flex items-center gap-1">
                                                <svg class="w-4 h-4 text-emerald-500" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                </svg>
                                                Accredited
                                            </span>
                                            <span class="flex items-center gap-1">
                                                <svg class="w-4 h-4 text-emerald-500" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                </svg>
                                                Co-occurring support
                                            </span>
                                        </div>

                                        <div class="flex items-center gap-3 pt-2 mt-auto">
                                            <a href="{{ route('facilities.show', $facility) }}"
                                               class="flex-1 inline-flex items-center justify-center px-4 py-3 rounded-lg bg-emerald-600 text-white font-semibold hover:bg-emerald-700 transition-colors">
                                                View details
                                            </a>
                                            <a href="{{ route('facilities.index') }}"
                                               class="px-4 py-3 rounded-lg border border-emerald-200 text-emerald-700 font-semibold hover:bg-emerald-50">
                                                Explore more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const slider = document.getElementById('facility-slider');
                    
                });
            </script>
            <style>
                .facility-slider,
                .blog-slider {
                    -ms-overflow-style: none;
                    scrollbar-width: none;
                    -webkit-overflow-scrolling: touch;
                }
                .facility-slider::-webkit-scrollbar,
                .blog-slider::-webkit-scrollbar {
                    display: none;
                }
            </style>

            <div class="text-center mt-10">
                <a href="{{ route('facilities.index') }}"
                   class="inline-flex items-center gap-2 px-6 py-3 border border-emerald-600 text-emerald-700 rounded-lg font-semibold hover:bg-emerald-600 hover:text-white transition-colors">
                    Browse all facilities
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Blog Preview -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Helpful Articles</h2>
                <p class="text-xl text-gray-600">Learn more about rehabilitation and recovery</p>
            </div>

            <div class="relative">
                

                <div class="overflow-hidden">
                    <div class="flex gap-6 overflow-x-auto snap-x snap-mandatory pb-4 scroll-smooth blog-slider" id="blog-slider">
                        @foreach($recentBlogs as $blog)
                            <article class="min-w-[260px] md:min-w-[320px] lg:min-w-[340px] snap-start bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow cursor-pointer" onclick="window.location.href=this.querySelector('a')?.href" role="link">
                                @if($blog->featured_image)
                                    <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}"
                                         class="w-full h-48 object-cover">
                                @else
                                    <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-purple-500 flex items-center justify-center">
                                        <span class="text-white text-2xl font-bold">{{ substr($blog->title, 0, 1) }}</span>
                                    </div>
                                @endif

                                <div class="p-6">
                                    <h3 class="text-xl font-semibold text-gray-900 mb-3">
                                        <a href="{{ route('blog.show', $blog) }}" class="hover:text-green-600">
                                            {{ $blog->title }}
                                        </a>
                                    </h3>

                                    @if($blog->excerpt)
                                        <p class="text-gray-600 mb-4">{{ Str::limit($blog->excerpt, 120) }}</p>
                                    @endif

                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-gray-500">
                                            {{ $blog->published_at ? $blog->published_at->format('M j, Y') : $blog->created_at->format('M j, Y') }}
                                        </span>
                                        <a href="{{ route('blog.show', $blog) }}"
                                           class="text-green-600 hover:text-green-700 font-medium text-sm">
                                            Read More →
                                        </a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="{{ route('blog.index') }}"
                   class="inline-flex items-center px-6 py-3 border border-green-600 text-green-600 rounded-lg hover:bg-green-600 hover:text-white transition-colors">
                    All Articles
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Capture CTA -->
    <section class="py-14 bg-emerald-700 text-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
            <h2 class="text-3xl font-bold">Ready to start your recovery journey?</h2>
            <p class="text-lg text-emerald-50 max-w-3xl mx-auto">
                Our compassionate counselors are standing by to help you find the right treatment center. Confidential and free.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 sm:gap-6">
                <a href="tel:{{ \App\Models\Setting::getValue('phone', '+1 (555) 123-4567') }}"
                   class="inline-flex items-center justify-center px-6 py-3 rounded-lg bg-white text-emerald-800 font-semibold shadow hover:-translate-y-0.5 transition-transform">
                    <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h2l2 5-2 2a11 11 0 005 5l2-2 5 2v2a2 2 0 01-2 2h-1C7.82 19 3 14.18 3 8V7a2 2 0 010-2z"/>
                    </svg>
                    Call Now
                </a>
                <a href="{{ route('facilities.index') }}"
                   class="inline-flex items-center justify-center px-6 py-3 rounded-lg border border-white/70 text-white font-semibold hover:bg-white hover:text-emerald-700 transition-colors">
                    <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z"/>
                    </svg>
                    Search Centers
                </a>
            </div>
            <p class="text-emerald-100 text-sm">No obligation • 100% confidential • Available 24/7</p>
        </div>
    </section>



    <!-- What to Expect Timeline -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <p class="text-sm font-semibold text-emerald-600 tracking-wider uppercase mb-2">Your Recovery Journey</p>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">What to expect during treatment</h2>
                <p class="mt-3 text-gray-600 max-w-2xl mx-auto">Recovery follows a proven path. Here is what each stage looks like, so you can feel prepared and confident.</p>
            </div>

            <div class="relative">
                <!-- Vertical line (desktop) -->
                <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-0.5 bg-emerald-200 -translate-x-1/2"></div>

                <!-- Step 1: Assessment -->
                <div class="relative flex flex-col md:flex-row items-start md:items-center gap-6 md:gap-12 mb-12">
                    <div class="md:w-1/2 md:text-right md:pr-12 order-2 md:order-1">
                        <span class="inline-block px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold mb-2">Day 1</span>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Assessment &amp; Intake</h3>
                        <p class="text-gray-600 leading-relaxed">A clinical team evaluates your physical health, mental state, substance history, and personal goals. This determines your personalized treatment plan. Expect a confidential interview, medical screening, and insurance verification.</p>
                    </div>
                    <div class="relative z-10 flex-shrink-0 w-12 h-12 rounded-full bg-emerald-600 text-white flex items-center justify-center font-bold text-lg shadow-lg order-1 md:order-2">1</div>
                    <div class="md:w-1/2 md:pl-12 order-3 hidden md:block">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 rounded-full bg-white border border-gray-200 text-gray-600 text-xs">Medical screening</span>
                            <span class="px-3 py-1 rounded-full bg-white border border-gray-200 text-gray-600 text-xs">Insurance check</span>
                            <span class="px-3 py-1 rounded-full bg-white border border-gray-200 text-gray-600 text-xs">Treatment plan</span>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Infant Care -->
                <div class="relative flex flex-col md:flex-row items-start md:items-center gap-6 md:gap-12 mb-12">
                    <div class="md:w-1/2 md:text-right md:pr-12 order-2 md:order-3 hidden md:block">
                        <div class="flex flex-wrap gap-2 justify-end">
                            <span class="px-3 py-1 rounded-full bg-white border border-gray-200 text-gray-600 text-xs">24/7 medical care</span>
                            <span class="px-3 py-1 rounded-full bg-white border border-gray-200 text-gray-600 text-xs">Medication support</span>
                            <span class="px-3 py-1 rounded-full bg-white border border-gray-200 text-gray-600 text-xs">Comfort management</span>
                        </div>
                    </div>
                    <div class="relative z-10 flex-shrink-0 w-12 h-12 rounded-full bg-emerald-600 text-white flex items-center justify-center font-bold text-lg shadow-lg order-1">2</div>
                    <div class="md:w-1/2 md:pl-12 order-2 md:order-3">
                        <span class="inline-block px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-bold mb-2">Days 1-10</span>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Medical Infant Care</h3>
                        <p class="text-gray-600 leading-relaxed">Your body safely clears substances under medical supervision. Doctors manage withdrawal symptoms with FDA-approved medications. Nurses monitor vitals around the clock. This stage focuses on physical stabilization before therapy begins.</p>
                    </div>
                </div>

                <!-- Step 3: Active Treatment -->
                <div class="relative flex flex-col md:flex-row items-start md:items-center gap-6 md:gap-12 mb-12">
                    <div class="md:w-1/2 md:text-right md:pr-12 order-2 md:order-1">
                        <span class="inline-block px-3 py-1 rounded-full bg-violet-100 text-violet-700 text-xs font-bold mb-2">Weeks 2-12</span>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Active Treatment</h3>
                        <p class="text-gray-600 leading-relaxed">The core of recovery: individual therapy, group counseling, cognitive behavioral therapy (CBT), and skills workshops. You will identify triggers, build coping strategies, address underlying trauma, and develop a relapse prevention plan. Family therapy may be included.</p>
                    </div>
                    <div class="relative z-10 flex-shrink-0 w-12 h-12 rounded-full bg-emerald-600 text-white flex items-center justify-center font-bold text-lg shadow-lg order-1 md:order-2">3</div>
                    <div class="md:w-1/2 md:pl-12 order-3 hidden md:block">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 rounded-full bg-white border border-gray-200 text-gray-600 text-xs">Individual therapy</span>
                            <span class="px-3 py-1 rounded-full bg-white border border-gray-200 text-gray-600 text-xs">Group sessions</span>
                            <span class="px-3 py-1 rounded-full bg-white border border-gray-200 text-gray-600 text-xs">CBT / DBT</span>
                            <span class="px-3 py-1 rounded-full bg-white border border-gray-200 text-gray-600 text-xs">Family therapy</span>
                        </div>
                    </div>
                </div>

                <!-- Step 4: Transition -->
                <div class="relative flex flex-col md:flex-row items-start md:items-center gap-6 md:gap-12 mb-12">
                    <div class="md:w-1/2 md:text-right md:pr-12 order-2 md:order-3 hidden md:block">
                        <div class="flex flex-wrap gap-2 justify-end">
                            <span class="px-3 py-1 rounded-full bg-white border border-gray-200 text-gray-600 text-xs">Sober living</span>
                            <span class="px-3 py-1 rounded-full bg-white border border-gray-200 text-gray-600 text-xs">Life skills</span>
                            <span class="px-3 py-1 rounded-full bg-white border border-gray-200 text-gray-600 text-xs">Employment support</span>
                        </div>
                    </div>
                    <div class="relative z-10 flex-shrink-0 w-12 h-12 rounded-full bg-emerald-600 text-white flex items-center justify-center font-bold text-lg shadow-lg order-1">4</div>
                    <div class="md:w-1/2 md:pl-12 order-2 md:order-3">
                        <span class="inline-block px-3 py-1 rounded-full bg-amber-100 text-amber-700 text-xs font-bold mb-2">Month 3+</span>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Transition &amp; Step-Down</h3>
                        <p class="text-gray-600 leading-relaxed">Moving from intensive care to independent living. This may include IOP, sober living, or PHP. Focus shifts to real-world application: returning to work/school, rebuilding relationships, managing finances, and practicing recovery skills daily.</p>
                    </div>
                </div>

                <!-- Step 5: Aftercare -->
                <div class="relative flex flex-col md:flex-row items-start md:items-center gap-6 md:gap-12">
                    <div class="md:w-1/2 md:text-right md:pr-12 order-2 md:order-1">
                        <span class="inline-block px-3 py-1 rounded-full bg-teal-100 text-teal-700 text-xs font-bold mb-2">Ongoing</span>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Aftercare &amp; Long-Term Recovery</h3>
                        <p class="text-gray-600 leading-relaxed">Recovery is a lifelong journey. Aftercare includes alumni programs, support groups (AA, NA, SMART Recovery), ongoing therapy, and relapse prevention planning. Research shows that people who engage in aftercare for 12+ months have significantly better long-term outcomes.</p>
                    </div>
                    <div class="relative z-10 flex-shrink-0 w-12 h-12 rounded-full bg-emerald-600 text-white flex items-center justify-center font-bold text-lg shadow-lg order-1 md:order-2">5</div>
                    <div class="md:w-1/2 md:pl-12 order-3 hidden md:block">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 rounded-full bg-white border border-gray-200 text-gray-600 text-xs">Support groups</span>
                            <span class="px-3 py-1 rounded-full bg-white border border-gray-200 text-gray-600 text-xs">Alumni network</span>
                            <span class="px-3 py-1 rounded-full bg-white border border-gray-200 text-gray-600 text-xs">Ongoing therapy</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-14">
                <p class="text-gray-600 mb-4">Ready to take the first step?</p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <a href="tel:+18553213614" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-emerald-600 text-white font-semibold hover:bg-emerald-700 transition-colors shadow-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        Call (855) 321-3614
                    </a>
                    <a href="{{ route('facilities.index') }}" class="inline-flex items-center justify-center px-6 py-3 rounded-xl border-2 border-emerald-200 text-emerald-700 font-semibold hover:bg-emerald-50 transition-colors">
                        Browse daycare centers
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section (SEO) -->
    <section style="padding:64px 0;background:#f9fafb">
        <div style="max-width:800px;margin:0 auto;padding:0 16px">
            <div style="text-align:center;margin-bottom:40px">
                <h2 style="font-size:1.875rem;font-weight:700;color:#111827;margin-bottom:8px">Frequently Asked Questions</h2>
                <p style="color:#6b7280;font-size:1.125rem">Common questions about finding rehabilitation treatment</p>
            </div>
            <div style="display:flex;flex-direction:column;gap:12px" x-data="{open:null}">
                <div style="border:1px solid #e5e7eb;border-radius:12px;background:#fff;overflow:hidden">
                    <button @click="open=open===1?null:1" style="width:100%;padding:16px 20px;display:flex;justify-content:space-between;align-items:center;border:none;background:none;cursor:pointer;text-align:left">
                        <span style="font-weight:600;color:#111827;font-size:1rem">How do I find the right daycare center for me?</span>
                        <svg :style="open===1?'transform:rotate(180deg)':''" width="18" height="18" style="color:#9ca3af;transition:transform 0.2s;flex-shrink:0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open===1" x-collapse style="padding:0 20px 16px;color:#4b5563;line-height:1.6">
                        Start by identifying your needs: substance type, severity, location preference, and insurance. Use our search filters to compare verified centers by treatment type, amenities, and accepted insurance. You can also call our free helpline at {{ \App\Models\Setting::getValue('phone', '+1(855) 321-3614') }} for personalized guidance.
                    </div>
                </div>
                <div style="border:1px solid #e5e7eb;border-radius:12px;background:#fff;overflow:hidden">
                    <button @click="open=open===2?null:2" style="width:100%;padding:16px 20px;display:flex;justify-content:space-between;align-items:center;border:none;background:none;cursor:pointer;text-align:left">
                        <span style="font-weight:600;color:#111827;font-size:1rem">Does insurance cover daycare and childcare rehabilitation?</span>
                        <svg :style="open===2?'transform:rotate(180deg)':''" width="18" height="18" style="color:#9ca3af;transition:transform 0.2s;flex-shrink:0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open===2" x-collapse style="padding:0 20px 16px;color:#4b5563;line-height:1.6">
                        Yes, most major insurance plans cover early childhood treatment under the Mental Health Parity and Addiction Equity Act (MHPAEA). Coverage varies by plan — common providers include Aetna, BlueCross BlueShield, Cigna, United Healthcare, and Anthem. We can help verify your coverage for free.
                    </div>
                </div>
                <div style="border:1px solid #e5e7eb;border-radius:12px;background:#fff;overflow:hidden">
                    <button @click="open=open===3?null:3" style="width:100%;padding:16px 20px;display:flex;justify-content:space-between;align-items:center;border:none;background:none;cursor:pointer;text-align:left">
                        <span style="font-weight:600;color:#111827;font-size:1rem">What is the difference between inpatient and part-time rehab?</span>
                        <svg :style="open===3?'transform:rotate(180deg)':''" width="18" height="18" style="color:#9ca3af;transition:transform 0.2s;flex-shrink:0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open===3" x-collapse style="padding:0 20px 16px;color:#4b5563;line-height:1.6">
                        Inpatient (residential) rehab provides 24/7 care in a structured facility, typically for 28-90 days. Outpatient rehab allows you to live at home while attending scheduled sessions. Inpatient is recommended for severe addiction; part-time works well for mild-to-moderate cases or as a step-down from residential treatment.
                    </div>
                </div>
                <div style="border:1px solid #e5e7eb;border-radius:12px;background:#fff;overflow:hidden">
                    <button @click="open=open===4?null:4" style="width:100%;padding:16px 20px;display:flex;justify-content:space-between;align-items:center;border:none;background:none;cursor:pointer;text-align:left">
                        <span style="font-weight:600;color:#111827;font-size:1rem">How much does rehab cost without insurance?</span>
                        <svg :style="open===4?'transform:rotate(180deg)':''" width="18" height="18" style="color:#9ca3af;transition:transform 0.2s;flex-shrink:0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open===4" x-collapse style="padding:0 20px 16px;color:#4b5563;line-height:1.6">
                        Costs vary widely. Outpatient programs typically cost $5,000-$10,000 for a 3-month program. Inpatient rehab ranges from $10,000-$30,000 for 30 days. State-funded programs, Medicaid, sliding-scale fees, and free community centers are available for those without insurance. Call us to explore affordable options.
                    </div>
                </div>
                <div style="border:1px solid #e5e7eb;border-radius:12px;background:#fff;overflow:hidden">
                    <button @click="open=open===5?null:5" style="width:100%;padding:16px 20px;display:flex;justify-content:space-between;align-items:center;border:none;background:none;cursor:pointer;text-align:left">
                        <span style="font-weight:600;color:#111827;font-size:1rem">How long does rehabilitation treatment last?</span>
                        <svg :style="open===5?'transform:rotate(180deg)':''" width="18" height="18" style="color:#9ca3af;transition:transform 0.2s;flex-shrink:0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open===5" x-collapse style="padding:0 20px 16px;color:#4b5563;line-height:1.6">
                        Treatment duration depends on the program: medical infant care takes 3-7 days, short-term rehab is 28-30 days, and long-term residential care is 60-90 days. Outpatient programs typically run 8-12 weeks with 2-3 sessions per week. Research shows longer treatment correlates with better outcomes.
                    </div>
                </div>
                <div style="border:1px solid #e5e7eb;border-radius:12px;background:#fff;overflow:hidden">
                    <button @click="open=open===6?null:6" style="width:100%;padding:16px 20px;display:flex;justify-content:space-between;align-items:center;border:none;background:none;cursor:pointer;text-align:left">
                        <span style="font-weight:600;color:#111827;font-size:1rem">Can I get treatment if I have no insurance or money?</span>
                        <svg :style="open===6?'transform:rotate(180deg)':''" width="18" height="18" style="color:#9ca3af;transition:transform 0.2s;flex-shrink:0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open===6" x-collapse style="padding:0 20px 16px;color:#4b5563;line-height:1.6">
                        Yes. State-funded treatment programs, Medicaid-covered facilities, and free community health centers serve people regardless of ability to pay. SAMHSA's helpline (1-800-662-4357) can connect you with local resources. Many private centers also offer sliding-scale fees or scholarship programs.
                    </div>
                </div>
                <div style="border:1px solid #e5e7eb;border-radius:12px;background:#fff;overflow:hidden">
                    <button @click="open=open===7?null:7" style="width:100%;padding:16px 20px;display:flex;justify-content:space-between;align-items:center;border:none;background:none;cursor:pointer;text-align:left">
                        <span style="font-weight:600;color:#111827;font-size:1rem">What happens during medical infant care?</span>
                        <svg :style="open===7?'transform:rotate(180deg)':''" width="18" height="18" style="color:#9ca3af;transition:transform 0.2s;flex-shrink:0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open===7" x-collapse style="padding:0 20px 16px;color:#4b5563;line-height:1.6">
                        Medical infant care is supervised withdrawal in a clinical setting with 24/7 nursing care. Doctors may prescribe medications to ease symptoms like anxiety, nausea, and seizures. Infant Care typically lasts 3-10 days depending on the substance. It is the first step before entering a treatment program — infant care alone is not considered treatment.
                    </div>
                </div>
                <div style="border:1px solid #e5e7eb;border-radius:12px;background:#fff;overflow:hidden">
                    <button @click="open=open===8?null:8" style="width:100%;padding:16px 20px;display:flex;justify-content:space-between;align-items:center;border:none;background:none;cursor:pointer;text-align:left">
                        <span style="font-weight:600;color:#111827;font-size:1rem">What is dual diagnosis treatment?</span>
                        <svg :style="open===8?'transform:rotate(180deg)':''" width="18" height="18" style="color:#9ca3af;transition:transform 0.2s;flex-shrink:0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open===8" x-collapse style="padding:0 20px 16px;color:#4b5563;line-height:1.6">
                        Dual diagnosis (or co-occurring disorder) treatment addresses both addiction and mental health conditions simultaneously — such as depression, anxiety, PTSD, or bipolar disorder. Integrated treatment has been shown to be more effective than treating each condition separately. About 50% of people with substance use disorders also have a mental health condition.
                    </div>
                </div>
                <div style="border:1px solid #e5e7eb;border-radius:12px;background:#fff;overflow:hidden">
                    <button @click="open=open===9?null:9" style="width:100%;padding:16px 20px;display:flex;justify-content:space-between;align-items:center;border:none;background:none;cursor:pointer;text-align:left">
                        <span style="font-weight:600;color:#111827;font-size:1rem">How do I know if I or a loved one needs rehab?</span>
                        <svg :style="open===9?'transform:rotate(180deg)':''" width="18" height="18" style="color:#9ca3af;transition:transform 0.2s;flex-shrink:0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open===9" x-collapse style="padding:0 20px 16px;color:#4b5563;line-height:1.6">
                        Warning signs include: inability to stop using despite negative consequences, withdrawal symptoms when not using, neglecting responsibilities, increased tolerance, using in dangerous situations, and strained relationships. If substance use is affecting daily life, health, or relationships, professional help is recommended. Our free helpline can provide a confidential assessment.
                    </div>
                </div>
                <div style="border:1px solid #e5e7eb;border-radius:12px;background:#fff;overflow:hidden">
                    <button @click="open=open===10?null:10" style="width:100%;padding:16px 20px;display:flex;justify-content:space-between;align-items:center;border:none;background:none;cursor:pointer;text-align:left">
                        <span style="font-weight:600;color:#111827;font-size:1rem">What is Medication-Assisted Treatment (MAT)?</span>
                        <svg :style="open===10?'transform:rotate(180deg)':''" width="18" height="18" style="color:#9ca3af;transition:transform 0.2s;flex-shrink:0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open===10" x-collapse style="padding:0 20px 16px;color:#4b5563;line-height:1.6">
                        MAT combines FDA-approved medications (like buprenorphine, methadone, or naltrexone) with counseling and behavioral therapies. It is clinically proven to reduce opioid use, overdose deaths, and criminal activity. MAT is not "replacing one drug with another" — it stabilizes brain chemistry while the person engages in recovery work.
                    </div>
                </div>
                <div style="border:1px solid #e5e7eb;border-radius:12px;background:#fff;overflow:hidden">
                    <button @click="open=open===11?null:11" style="width:100%;padding:16px 20px;display:flex;justify-content:space-between;align-items:center;border:none;background:none;cursor:pointer;text-align:left">
                        <span style="font-weight:600;color:#111827;font-size:1rem">Can I keep working while in treatment?</span>
                        <svg :style="open===11?'transform:rotate(180deg)':''" width="18" height="18" style="color:#9ca3af;transition:transform 0.2s;flex-shrink:0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open===11" x-collapse style="padding:0 20px 16px;color:#4b5563;line-height:1.6">
                        Yes, part-time and intensive part-time programs (IOP) are designed for people who need to maintain work or school obligations. IOP typically meets 3-5 days per week for 3-4 hours per session. The Family and Medical Leave Act (FMLA) also protects your job if you need to attend inpatient treatment at a qualifying employer.
                    </div>
                </div>
                <div style="border:1px solid #e5e7eb;border-radius:12px;background:#fff;overflow:hidden">
                    <button @click="open=open===12?null:12" style="width:100%;padding:16px 20px;display:flex;justify-content:space-between;align-items:center;border:none;background:none;cursor:pointer;text-align:left">
                        <span style="font-weight:600;color:#111827;font-size:1rem">What should I look for when choosing a daycare center?</span>
                        <svg :style="open===12?'transform:rotate(180deg)':''" width="18" height="18" style="color:#9ca3af;transition:transform 0.2s;flex-shrink:0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open===12" x-collapse style="padding:0 20px 16px;color:#4b5563;line-height:1.6">
                        Key factors include: accreditation (JCAHO, CARF), licensed clinical staff, evidence-based treatment approaches, insurance acceptance, location, program length, aftercare planning, and patient-to-staff ratio. Read reviews, ask about success metrics, and verify credentials. Our directory lets you filter by all of these criteria.
                    </div>
                </div>
                <div style="border:1px solid #e5e7eb;border-radius:12px;background:#fff;overflow:hidden">
                    <button @click="open=open===13?null:13" style="width:100%;padding:16px 20px;display:flex;justify-content:space-between;align-items:center;border:none;background:none;cursor:pointer;text-align:left">
                        <span style="font-weight:600;color:#111827;font-size:1rem">Is rehab confidential? Will my employer find out?</span>
                        <svg :style="open===13?'transform:rotate(180deg)':''" width="18" height="18" style="color:#9ca3af;transition:transform 0.2s;flex-shrink:0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open===13" x-collapse style="padding:0 20px 16px;color:#4b5563;line-height:1.6">
                        Federal law (42 CFR Part 2) provides strict confidentiality protections for early childhood treatment records — stronger than standard HIPAA. Treatment centers cannot share your information without written consent. Your employer will not be notified unless you choose to tell them. Insurance claims show general behavioral health services, not specific diagnoses.
                    </div>
                </div>
                <div style="border:1px solid #e5e7eb;border-radius:12px;background:#fff;overflow:hidden">
                    <button @click="open=open===14?null:14" style="width:100%;padding:16px 20px;display:flex;justify-content:space-between;align-items:center;border:none;background:none;cursor:pointer;text-align:left">
                        <span style="font-weight:600;color:#111827;font-size:1rem">What is the success rate of rehab?</span>
                        <svg :style="open===14?'transform:rotate(180deg)':''" width="18" height="18" style="color:#9ca3af;transition:transform 0.2s;flex-shrink:0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open===14" x-collapse style="padding:0 20px 16px;color:#4b5563;line-height:1.6">
                        Addiction treatment has success rates comparable to other chronic conditions like diabetes and hypertension (40-60% of treated individuals maintain sobriety). Success factors include treatment length (90+ days recommended), aftercare participation, support system strength, and addressing co-occurring disorders. Relapse is not failure — it is a signal to adjust the treatment plan.
                    </div>
                </div>
                <div style="border:1px solid #e5e7eb;border-radius:12px;background:#fff;overflow:hidden">
                    <button @click="open=open===15?null:15" style="width:100%;padding:16px 20px;display:flex;justify-content:space-between;align-items:center;border:none;background:none;cursor:pointer;text-align:left">
                        <span style="font-weight:600;color:#111827;font-size:1rem">What happens after rehab? How do I prevent relapse?</span>
                        <svg :style="open===15?'transform:rotate(180deg)':''" width="18" height="18" style="color:#9ca3af;transition:transform 0.2s;flex-shrink:0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="open===15" x-collapse style="padding:0 20px 16px;color:#4b5563;line-height:1.6">
                        Aftercare is critical and may include: part-time counseling, support groups (AA, NA, SMART Recovery), sober living, alumni programs, and ongoing therapy. Building a relapse prevention plan, identifying triggers, maintaining a support network, and addressing lifestyle changes are key. Most successful recoveries involve long-term engagement with support systems.
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Treatment Comparison -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="text-sm font-semibold text-emerald-600 tracking-wider uppercase mb-2">Compare Programs</p>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Which treatment is right for you?</h2>
                <p class="mt-3 text-gray-600 max-w-2xl mx-auto">Understanding the differences helps you choose the best path forward.</p>
            </div>

            <!-- Mobile: Cards -->
            <div class="lg:hidden space-y-4">
                <div class="border border-gray-200 rounded-xl p-5 space-y-3">
                    <h3 class="text-lg font-bold text-gray-900">Inpatient / Residential</h3>
                    <div class="grid grid-cols-2 gap-3 text-sm">
                        <div><span class="text-gray-500">Setting:</span><br><span class="font-medium">Live at facility 24/7</span></div>
                        <div><span class="text-gray-500">Duration:</span><br><span class="font-medium">30-90 days</span></div>
                        <div><span class="text-gray-500">Cost:</span><br><span class="font-medium">$15k-$30k</span></div>
                        <div><span class="text-gray-500">Completion:</span><br><span class="font-medium">40-60%</span></div>
                    </div>
                    <div class="text-sm"><span class="text-gray-500">Best for:</span> <span class="font-medium">Severe addiction, co-occurring disorders</span></div>
                </div>
                <div class="border border-gray-200 rounded-xl p-5 space-y-3">
                    <h3 class="text-lg font-bold text-gray-900">Outpatient Programs</h3>
                    <div class="grid grid-cols-2 gap-3 text-sm">
                        <div><span class="text-gray-500">Setting:</span><br><span class="font-medium">Live at home</span></div>
                        <div><span class="text-gray-500">Duration:</span><br><span class="font-medium">3-6 months</span></div>
                        <div><span class="text-gray-500">Cost:</span><br><span class="font-medium">$5k-$10k</span></div>
                        <div><span class="text-gray-500">Completion:</span><br><span class="font-medium">30-50%</span></div>
                    </div>
                    <div class="text-sm"><span class="text-gray-500">Best for:</span> <span class="font-medium">Mild-moderate, strong support system</span></div>
                </div>
                <div class="border border-gray-200 rounded-xl p-5 space-y-3">
                    <h3 class="text-lg font-bold text-gray-900">Medical Infant Care</h3>
                    <div class="grid grid-cols-2 gap-3 text-sm">
                        <div><span class="text-gray-500">Setting:</span><br><span class="font-medium">Medical facility</span></div>
                        <div><span class="text-gray-500">Duration:</span><br><span class="font-medium">3-10 days</span></div>
                        <div><span class="text-gray-500">Cost:</span><br><span class="font-medium">$3k-$10k</span></div>
                        <div><span class="text-gray-500">Completion:</span><br><span class="font-medium">70-80%</span></div>
                    </div>
                    <div class="text-sm"><span class="text-gray-500">Best for:</span> <span class="font-medium">Physical dependence, safe withdrawal</span></div>
                </div>
                <div class="border border-gray-200 rounded-xl p-5 space-y-3">
                    <h3 class="text-lg font-bold text-gray-900">Intensive Outpatient (IOP)</h3>
                    <div class="grid grid-cols-2 gap-3 text-sm">
                        <div><span class="text-gray-500">Setting:</span><br><span class="font-medium">Home + 9-20 hrs/week</span></div>
                        <div><span class="text-gray-500">Duration:</span><br><span class="font-medium">2-4 months</span></div>
                        <div><span class="text-gray-500">Cost:</span><br><span class="font-medium">$5k-$12k</span></div>
                        <div><span class="text-gray-500">Completion:</span><br><span class="font-medium">35-55%</span></div>
                    </div>
                    <div class="text-sm"><span class="text-gray-500">Best for:</span> <span class="font-medium">Step-down from inpatient, work/school</span></div>
                </div>
                <div class="border border-gray-200 rounded-xl p-5 space-y-3">
                    <h3 class="text-lg font-bold text-gray-900">Sober Living</h3>
                    <div class="grid grid-cols-2 gap-3 text-sm">
                        <div><span class="text-gray-500">Setting:</span><br><span class="font-medium">Group residence</span></div>
                        <div><span class="text-gray-500">Duration:</span><br><span class="font-medium">3-12 months</span></div>
                        <div><span class="text-gray-500">Cost:</span><br><span class="font-medium">$500-$3k/mo</span></div>
                        <div><span class="text-gray-500">Completion:</span><br><span class="font-medium">Ongoing</span></div>
                    </div>
                    <div class="text-sm"><span class="text-gray-500">Best for:</span> <span class="font-medium">Post-treatment stability</span></div>
                </div>
            </div>

            <!-- Desktop: Table -->
            <div class="hidden lg:block overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="text-left py-4 px-5 text-sm font-semibold text-gray-500 uppercase tracking-wide border-b-2 border-gray-200"></th>
                            <th class="text-center py-4 px-5 border-b-2 border-emerald-500"><span class="block text-lg font-bold text-gray-900">Inpatient</span><span class="text-xs text-emerald-600 font-semibold">Most Comprehensive</span></th>
                            <th class="text-center py-4 px-5 border-b-2 border-blue-400"><span class="block text-lg font-bold text-gray-900">Outpatient</span><span class="text-xs text-blue-600 font-semibold">Most Flexible</span></th>
                            <th class="text-center py-4 px-5 border-b-2 border-rose-400"><span class="block text-lg font-bold text-gray-900">Infant Care</span><span class="text-xs text-rose-600 font-semibold">First Step</span></th>
                            <th class="text-center py-4 px-5 border-b-2 border-violet-400"><span class="block text-lg font-bold text-gray-900">IOP</span><span class="text-xs text-violet-600 font-semibold">Best Balance</span></th>
                            <th class="text-center py-4 px-5 border-b-2 border-amber-400"><span class="block text-lg font-bold text-gray-900">Sober Living</span><span class="text-xs text-amber-600 font-semibold">Long-Term</span></th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        <tr class="border-b border-gray-100"><td class="py-4 px-5 font-semibold text-gray-700">Setting</td><td class="py-4 px-5 text-center text-gray-600">Live at facility 24/7</td><td class="py-4 px-5 text-center text-gray-600">Live at home</td><td class="py-4 px-5 text-center text-gray-600">Medical facility</td><td class="py-4 px-5 text-center text-gray-600">Home + 9-20 hrs/week</td><td class="py-4 px-5 text-center text-gray-600">Group residence</td></tr>
                        <tr class="border-b border-gray-100 bg-gray-50"><td class="py-4 px-5 font-semibold text-gray-700">Duration</td><td class="py-4 px-5 text-center font-medium">30-90 days</td><td class="py-4 px-5 text-center font-medium">3-6 months</td><td class="py-4 px-5 text-center font-medium">3-10 days</td><td class="py-4 px-5 text-center font-medium">2-4 months</td><td class="py-4 px-5 text-center font-medium">3-12 months</td></tr>
                        <tr class="border-b border-gray-100"><td class="py-4 px-5 font-semibold text-gray-700">Cost Range</td><td class="py-4 px-5 text-center text-gray-600">$15,000 - $30,000</td><td class="py-4 px-5 text-center text-gray-600">$5,000 - $10,000</td><td class="py-4 px-5 text-center text-gray-600">$3,000 - $10,000</td><td class="py-4 px-5 text-center text-gray-600">$5,000 - $12,000</td><td class="py-4 px-5 text-center text-gray-600">$500 - $3,000/mo</td></tr>
                        <tr class="border-b border-gray-100 bg-gray-50"><td class="py-4 px-5 font-semibold text-gray-700">Insurance</td><td class="py-4 px-5 text-center text-emerald-600 font-medium">Usually covered</td><td class="py-4 px-5 text-center text-emerald-600 font-medium">Usually covered</td><td class="py-4 px-5 text-center text-emerald-600 font-medium">Usually covered</td><td class="py-4 px-5 text-center text-emerald-600 font-medium">Usually covered</td><td class="py-4 px-5 text-center text-gray-500">Varies</td></tr>
                        <tr class="border-b border-gray-100"><td class="py-4 px-5 font-semibold text-gray-700">Best For</td><td class="py-4 px-5 text-center text-gray-600">Severe addiction</td><td class="py-4 px-5 text-center text-gray-600">Mild-moderate</td><td class="py-4 px-5 text-center text-gray-600">Physical dependence</td><td class="py-4 px-5 text-center text-gray-600">Step-down care</td><td class="py-4 px-5 text-center text-gray-600">Post-treatment</td></tr>
                        <tr><td class="py-4 px-5 font-semibold text-gray-700">Completion</td><td class="py-4 px-5 text-center"><span class="px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 font-bold text-sm">40-60%</span></td><td class="py-4 px-5 text-center"><span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700 font-bold text-sm">30-50%</span></td><td class="py-4 px-5 text-center"><span class="px-3 py-1 rounded-full bg-rose-100 text-rose-700 font-bold text-sm">70-80%</span></td><td class="py-4 px-5 text-center"><span class="px-3 py-1 rounded-full bg-violet-100 text-violet-700 font-bold text-sm">35-55%</span></td><td class="py-4 px-5 text-center"><span class="px-3 py-1 rounded-full bg-amber-100 text-amber-700 font-bold text-sm">Ongoing</span></td></tr>
                    </tbody>
                </table>
            </div>

            <div class="text-center mt-8">
                <p class="text-sm text-gray-500 mb-4">Not sure which program fits? We can help.</p>
                <a href="tel:+18553213614" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-emerald-600 text-white font-semibold hover:bg-emerald-700 transition-colors shadow-lg shadow-emerald-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    Talk to a specialist — free call
                </a>
                <div class="mt-4">
                    <a href="{{ route('treatment.index') }}" class="text-emerald-600 font-semibold hover:text-emerald-700 text-sm inline-flex items-center gap-1">
                        Compare all treatment types in detail
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section (Social Proof for SEO) -->
    <section style="padding:64px 0;background:#fff">
        <div style="max-width:1200px;margin:0 auto;padding:0 16px">
            <div style="text-align:center;margin-bottom:40px">
                <h2 style="font-size:1.875rem;font-weight:700;color:#111827;margin-bottom:8px">Recovery Stories</h2>
                <p style="color:#6b7280;font-size:1.125rem">Real people who found help through our directory</p>
            </div>
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:24px">
                <div style="background:#f9fafb;border-radius:16px;padding:28px;border:1px solid #f3f4f6">
                    <div style="display:flex;gap:4px;margin-bottom:16px">
                        <svg width="18" height="18" fill="#f59e0b" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg width="18" height="18" fill="#f59e0b" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg width="18" height="18" fill="#f59e0b" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg width="18" height="18" fill="#f59e0b" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg width="18" height="18" fill="#f59e0b" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p style="color:#374151;line-height:1.7;margin-bottom:16px">&ldquo;DaycareHub helped me find an affordable treatment center near my family in Florida. I was overwhelmed by options but the search filters made it easy. 14 months clean now.&rdquo;</p>
                    <div style="display:flex;align-items:center;gap:12px">
                        <div style="width:40px;height:40px;border-radius:50%;background:linear-gradient(135deg,#059669,#0d9488);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:14px">MR</div>
                        <div><div style="font-weight:600;color:#111827;font-size:14px">Michael R.</div><div style="color:#9ca3af;font-size:12px">Florida &bull; Verified</div></div>
                    </div>
                </div>
                <div style="background:#f9fafb;border-radius:16px;padding:28px;border:1px solid #f3f4f6">
                    <div style="display:flex;gap:4px;margin-bottom:16px">
                        <svg width="18" height="18" fill="#f59e0b" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg width="18" height="18" fill="#f59e0b" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg width="18" height="18" fill="#f59e0b" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg width="18" height="18" fill="#f59e0b" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg width="18" height="18" fill="#f59e0b" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p style="color:#374151;line-height:1.7;margin-bottom:16px">&ldquo;My sister was struggling and I didn&rsquo;t know where to start. DaycareHub showed me options I didn&rsquo;t know existed — including centers that took her Medicaid. She&rsquo;s been in recovery for 8 months.&rdquo;</p>
                    <div style="display:flex;align-items:center;gap:12px">
                        <div style="width:40px;height:40px;border-radius:50%;background:linear-gradient(135deg,#7c3aed,#6366f1);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:14px">JT</div>
                        <div><div style="font-weight:600;color:#111827;font-size:14px">Jessica T.</div><div style="color:#9ca3af;font-size:12px">Texas &bull; Family Member</div></div>
                    </div>
                </div>
                <div style="background:#f9fafb;border-radius:16px;padding:28px;border:1px solid #f3f4f6">
                    <div style="display:flex;gap:4px;margin-bottom:16px">
                        <svg width="18" height="18" fill="#f59e0b" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg width="18" height="18" fill="#f59e0b" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg width="18" height="18" fill="#f59e0b" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg width="18" height="18" fill="#f59e0b" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg width="18" height="18" fill="#f59e0b" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p style="color:#374151;line-height:1.7;margin-bottom:16px">&ldquo;After two failed attempts, I finally found the right program through this site. The center in New York had exactly the dual-diagnosis treatment I needed. 2 years sober and counting.&rdquo;</p>
                    <div style="display:flex;align-items:center;gap:12px">
                        <div style="width:40px;height:40px;border-radius:50%;background:linear-gradient(135deg,#2563eb,#3b82f6);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:14px">DK</div>
                        <div><div style="font-weight:600;color:#111827;font-size:14px">David K.</div><div style="color:#9ca3af;font-size:12px">New York &bull; Verified</div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Insurance Verification -->
    <section class="py-16 bg-gradient-to-b from-emerald-50 to-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <p class="text-sm font-semibold text-emerald-600 tracking-wider uppercase mb-2">Insurance Accepted</p>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Check if your insurance covers treatment</h2>
                <p class="mt-3 text-gray-600 max-w-2xl mx-auto">Most major plans cover rehab under the Mental Health Parity Act. Select your provider to find out.</p>
            </div>

            <!-- Logo strip -->
            <div class="flex flex-wrap justify-center gap-6 mb-10">
                <img src="/images/insurance/aetna.svg" alt="Aetna" class="h-7 opacity-40 hover:opacity-80 transition-opacity">
                <img src="/images/insurance/bcbs.svg" alt="BCBS" class="h-7 opacity-40 hover:opacity-80 transition-opacity">
                <img src="/images/insurance/cigna.svg" alt="Cigna" class="h-7 opacity-40 hover:opacity-80 transition-opacity">
                <img src="/images/insurance/uhc.svg" alt="UHC" class="h-7 opacity-40 hover:opacity-80 transition-opacity">
                <img src="/images/insurance/anthem.svg" alt="Anthem" class="h-7 opacity-40 hover:opacity-80 transition-opacity">
                <img src="/images/insurance/humana.svg" alt="Humana" class="h-7 opacity-40 hover:opacity-80 transition-opacity">
                <img src="/images/insurance/kaiser.svg" alt="Kaiser" class="h-7 opacity-40 hover:opacity-80 transition-opacity">
                <img src="/images/insurance/medicare.svg" alt="Medicare" class="h-7 opacity-40 hover:opacity-80 transition-opacity">
                <img src="/images/insurance/medicaid.svg" alt="Medicaid" class="h-7 opacity-40 hover:opacity-80 transition-opacity">
                <img src="/images/insurance/tricare.svg" alt="TRICARE" class="h-7 opacity-40 hover:opacity-80 transition-opacity">
            </div>

            <!-- Verification widget -->
            <div class="max-w-lg mx-auto bg-white rounded-2xl shadow-lg border border-gray-100 p-8" x-data="{selected:'', submitted:false}">
                <div x-show="!submitted">
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Select your insurance provider</label>
                    <select x-model="selected" class="w-full px-4 py-3.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent text-gray-900 text-lg mb-4">
                        <option value="">Choose your insurance...</option>
                        <option>Aetna</option>
                        <option>Anthem</option>
                        <option>BlueCross BlueShield</option>
                        <option>Cigna</option>
                        <option>Humana</option>
                        <option>Kaiser Permanente</option>
                        <option>Medicaid</option>
                        <option>Medicare</option>
                        <option>UnitedHealthcare</option>
                        <option>TRICARE</option>
                        <option>Other Insurance</option>
                        <option>No Insurance / Self-Pay</option>
                    </select>
                    <button x-on:click="if(selected) submitted=true"
                            class="w-full py-4 px-6 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl transition-colors shadow-lg text-lg cursor-pointer"
                            x-bind:disabled="!selected"
                            style="opacity: 1"
                            x-bind:style="selected ? 'opacity:1' : 'opacity:0.5;cursor:not-allowed'">
                        Check My Coverage
                    </button>
                </div>

                <!-- Result screen -->
                <div x-show="submitted" x-transition x-cloak class="text-center space-y-5">
                    <div class="w-16 h-16 rounded-full bg-emerald-100 flex items-center justify-center mx-auto">
                        <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Good news!</h3>
                        <p class="text-gray-600 mt-2">
                            <span x-show="selected !== 'No Insurance / Self-Pay'">
                                <strong x-text="selected"></strong> plans typically cover early childhood treatment.
                                Coverage includes infant care, inpatient, and part-time programs.
                            </span>
                            <span x-show="selected === 'No Insurance / Self-Pay'">
                                Many facilities offer sliding-scale fees, payment plans, and state-funded programs for uninsured patients.
                            </span>
                        </p>
                    </div>

                    <div class="bg-emerald-50 rounded-xl p-5 space-y-2">
                        <p class="text-sm font-semibold text-emerald-800">To verify your exact benefits, speak with a specialist:</p>
                        <a href="tel:+18553213614" class="block text-2xl font-bold text-emerald-700 hover:text-emerald-800">(855) 321-3614</a>
                        <p class="text-xs text-emerald-600">Free &bull; Confidential &bull; Available 24/7</p>
                    </div>

                    <button x-on:click="submitted=false; selected=''" class="text-sm text-gray-500 hover:text-gray-700 underline">
                        Check another provider
                    </button>
                </div>
            </div>

            <p class="text-center text-sm text-gray-500 mt-6">+ Most PPO, HMO, and employer-sponsored plans accepted</p>
            <div class="text-center mt-4">
                <a href="{{ route('insurance.index') }}" class="text-emerald-600 font-semibold hover:text-emerald-700 text-sm inline-flex items-center gap-1">
                    Learn more about subsidy programs
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>



    <!-- Sticky Scroll CTA -->
    @endsection
