@extends('layouts.app')

@section('title', 'Childcare Safety Guide: How to Verify a Daycare Is Safe (2026) | DaycareHub')
@section('meta_description', '8% of US childcare programs have serious unresolved violations. Learn how to check licenses, read inspection reports, verify background checks, and spot red flags before enrolling.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Childcare Safety Guide"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {"@@type": "Question", "name": "How do I check if a daycare is licensed?", "acceptedAnswer": {"@@type": "Answer", "text": "Ask to see the license (it must be posted visibly) and note the license number. Then independently verify on your state's childcare licensing database — search '[your state] childcare license lookup'. Check the license status (active/expired), expiration date, and the full inspection history including any violations and their resolution status."}},
        {"@@type": "Question", "name": "What is a serious childcare inspection violation?", "acceptedAnswer": {"@@type": "Answer", "text": "Serious violations (often called 'Class 1' or 'critical' depending on state) typically involve: inadequate supervision leading to child injury risk, ratio violations, failure to conduct required background checks, unsafe physical conditions, non-compliance with safe sleep requirements in infant rooms, or issues with medication administration. Minor violations (paperwork, cleaning schedules) are common and generally correctable."}},
        {"@@type": "Question", "name": "What background checks should a daycare have?", "acceptedAnswer": {"@@type": "Answer", "text": "At minimum, all licensed programs should have: state criminal history check, sex offender registry check, and child abuse/neglect registry check for all staff with child contact. Best practice includes FBI fingerprint-based national criminal check. For family daycare homes, checks should extend to all household members over 18. Ask specifically what checks were done and when — checks should be renewed periodically."}},
        {"@@type": "Question", "name": "What are AAP safe sleep guidelines for daycare?", "acceptedAnswer": {"@@type": "Answer", "text": "AAP guidelines require: every infant placed on their back to sleep (never prone or side-lying), firm flat surface (no soft mattresses or car seats), no soft objects in sleep area (no blankets, bumpers, pillows, stuffed animals), each infant in their own separate sleep space, room temperature kept at 68-72°F, and no head coverings. These apply in childcare exactly as at home. Any deviation is a licensing violation in most states."}},
        {"@@type": "Question", "name": "Can I see a daycare's inspection history?", "acceptedAnswer": {"@@type": "Answer", "text": "Yes — in most states, inspection reports are public record accessible online through your state's childcare licensing database. Search '[your state] childcare inspection records' or '[your state] childcare licensing lookup'. Some states require a records request. You can also ask the director for a copy during your tour — their willingness to share is itself informative."}},
        {"@@type": "Question", "name": "What does it mean if a daycare has had violations?", "acceptedAnswer": {"@@type": "Answer", "text": "Not all violations are equal. A single paperwork violation from 3 years ago is very different from repeat ratio violations last month. Look for: severity (critical vs. minor), frequency (one incident vs. pattern), recency, and resolution (was it corrected?). Programs with zero violations over many years are exceptional — more important is how they handle and resolve any violations that occur."}},
        {"@@type": "Question", "name": "Is a home daycare safer than a childcare center?", "acceptedAnswer": {"@@type": "Answer", "text": "Neither is inherently safer. Both licensed home daycares and childcare centers are state-regulated and inspected. Key safety factors apply to both: current license, background-checked staff, safe sleep compliance for infants, adequate supervision ratios, and clear emergency procedures. Home daycares tend to have smaller groups, which some parents prefer for infant care."}},
        {"@@type": "Question", "name": "What CPR certification should daycare staff have?", "acceptedAnswer": {"@@type": "Answer", "text": "Most states require at least one staff member with current pediatric CPR and first aid certification to be present at all times. Best practice is all staff being certified. CPR certification should be renewed every 2 years. Ask specifically for pediatric CPR (covers infants and children) — adult-only CPR is not sufficient. Check when certifications were last renewed."}},
        {"@@type": "Question", "name": "What are the biggest safety red flags at a daycare?", "acceptedAnswer": {"@@type": "Answer", "text": "Top red flags: lapsed or suspended license, unresolved serious inspection violations, inability to provide background check documentation, infant safe sleep violations (sleeping on stomachs, soft bedding in cribs), inadequate supervision (staff on phones, children unsupervised), evasiveness about any safety question, refusal to let parents visit unannounced after enrollment, high recent staff turnover, and no written emergency procedures."}},
        {"@@type": "Question", "name": "What playground safety standards should I look for?", "acceptedAnswer": {"@@type": "Answer", "text": "CPSC guidelines require: fall zones of 6 feet on all sides of equipment, appropriate fall surfacing (rubber, wood chips, sand — minimum 9-12 inches deep), age-appropriate equipment (separate zones for under 5 and over 5), no entrapment hazards (spaces between 3.5-9 inches can trap heads), monthly safety inspections, no peeling lead paint on older equipment. Ask when the playground was last inspected and by whom."}}
    ]
}
</script>
@endsection

@section('content')
<div style="margin-top:64px;">

<div style="max-width:900px;margin:0 auto;padding:14px 20px 0;font-size:.85rem;color:#666;">
    <a href="/" style="color:#065f46;text-decoration:none;">Home</a>
    <span style="margin:0 8px;color:#ccc;">/</span>
    <span style="color:#333;">Childcare Safety Guide</span>
</div>

<!-- Hero -->
<section style="background:linear-gradient(135deg,#065f46 0%,#047857 60%,#059669 100%);padding:52px 20px 44px;">
    <div style="max-width:850px;margin:0 auto;text-align:center;">
        <div style="display:inline-block;background:rgba(255,255,255,.15);color:#fff;padding:5px 14px;border-radius:20px;font-size:.78rem;font-weight:700;margin-bottom:16px;">PARENT SAFETY GUIDE</div>
        <h1 style="font-size:clamp(1.5rem,3.5vw,2.4rem);font-weight:800;color:#fff;margin:0 0 14px;line-height:1.2;">Childcare Safety Guide: How to Verify a Daycare Is Safe</h1>
        <p style="font-size:.97rem;color:rgba(255,255,255,.9);max-width:620px;margin:0 auto;line-height:1.65;"><strong style="color:#fff;">8% of US childcare programs have serious unresolved safety violations.</strong> Before enrolling, spend 30 minutes using this guide to check licenses, inspection records, background checks, and safety practices.</p>
    </div>
</section>

<!-- Quick Overview -->
<section style="background:#fef2f2;border-bottom:1px solid #fecaca;padding:18px 20px;">
    <div style="max-width:850px;margin:0 auto;display:flex;align-items:flex-start;gap:14px;">
        <div style="font-size:1.4rem;flex-shrink:0;">⚠️</div>
        <div>
            <strong style="color:#dc2626;">Why This Matters:</strong> <span style="color:#374151;">According to a 2024 HHS analysis, 8% of licensed childcare programs had at least one serious unresolved violation. Even licensed programs can have significant safety issues — a license is the floor, not a guarantee. This guide shows you how to go beyond the license.</span>
        </div>
    </div>
</section>

<!-- TOC -->
<section style="background:#fff;padding:20px;border-bottom:1px solid #e5e7eb;">
    <div style="max-width:850px;margin:0 auto;">
        <h2 style="font-size:.9rem;font-weight:700;color:#111;margin:0 0 10px;">7 Safety Topics — Jump to Section:</h2>
        <div style="display:flex;flex-wrap:wrap;gap:8px;">
            <a href="#license" style="background:#065f46;color:#fff;padding:6px 12px;border-radius:6px;text-decoration:none;font-size:.8rem;font-weight:600;">1. License Check</a>
            <a href="#inspections" style="background:#065f46;color:#fff;padding:6px 12px;border-radius:6px;text-decoration:none;font-size:.8rem;font-weight:600;">2. Inspections</a>
            <a href="#safe-sleep" style="background:#065f46;color:#fff;padding:6px 12px;border-radius:6px;text-decoration:none;font-size:.8rem;font-weight:600;">3. Safe Sleep</a>
            <a href="#background" style="background:#065f46;color:#fff;padding:6px 12px;border-radius:6px;text-decoration:none;font-size:.8rem;font-weight:600;">4. Background Checks</a>
            <a href="#playground" style="background:#065f46;color:#fff;padding:6px 12px;border-radius:6px;text-decoration:none;font-size:.8rem;font-weight:600;">5. Playground</a>
            <a href="#emergency" style="background:#065f46;color:#fff;padding:6px 12px;border-radius:6px;text-decoration:none;font-size:.8rem;font-weight:600;">6. Emergencies</a>
            <a href="#red-flags" style="background:#dc2626;color:#fff;padding:6px 12px;border-radius:6px;text-decoration:none;font-size:.8rem;font-weight:600;">🚩 7. Red Flags</a>
        </div>
    </div>
</section>

<!-- SECTION 1: LICENSE -->
<section id="license" style="padding:40px 20px;background:#fff;">
    <div style="max-width:850px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px;">
            <div style="width:44px;height:44px;background:#065f46;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.3rem;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/></svg></div>
            <div>
                <h2 style="font-size:1.4rem;font-weight:800;color:#111;margin:0 0 2px;">1. How to Check a Daycare License</h2>
                <div style="font-size:.83rem;color:#065f46;font-weight:600;">Takes 10 minutes · Do this before every tour</div>
            </div>
        </div>

        <p style="color:#444;line-height:1.75;margin:0 0 18px;"><strong>A current state license is the minimum requirement for operating a childcare facility.</strong> But many parents stop there. The license tells you the facility was compliant at its last renewal — the inspection history tells you how it's actually performing.</p>

        <h3 style="font-size:1rem;font-weight:700;color:#111;margin:0 0 10px;">Step-by-Step: Verify a Daycare License</h3>
        <div style="display:grid;gap:10px;margin-bottom:20px;">
            <div style="background:#f9fafb;border-left:4px solid #065f46;padding:14px 16px;border-radius:0 8px 8px 0;">
                <strong style="color:#111;">Step 1:</strong> <span style="color:#444;font-size:.88rem;">Ask the director for the license number and physical license (should be posted). Take a photo.</span>
            </div>
            <div style="background:#f9fafb;border-left:4px solid #065f46;padding:14px 16px;border-radius:0 8px 8px 0;">
                <strong style="color:#111;">Step 2:</strong> <span style="color:#444;font-size:.88rem;">Search "[your state] childcare license lookup" or "[state] childcare licensing database". Every state has one — some are easier to navigate than others.</span>
            </div>
            <div style="background:#f9fafb;border-left:4px solid #065f46;padding:14px 16px;border-radius:0 8px 8px 0;">
                <strong style="color:#111;">Step 3:</strong> <span style="color:#444;font-size:.88rem;">Verify: Is the license active? When does it expire? What is the licensed capacity? Does the address match?</span>
            </div>
            <div style="background:#f9fafb;border-left:4px solid #065f46;padding:14px 16px;border-radius:0 8px 8px 0;">
                <strong style="color:#111;">Step 4:</strong> <span style="color:#444;font-size:.88rem;">Pull the full inspection history. Look at the last 3 years. Note any violations — their type, severity, and whether they were resolved.</span>
            </div>
        </div>

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:14px;">
            <div style="background:#f0fdf4;border:1px solid #bbf7d0;border-radius:10px;padding:14px;">
                <div style="font-weight:700;color:#065f46;margin-bottom:6px;"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.5" style="display:inline;vertical-align:middle;"><polyline points="20,6 9,17 4,12"/></svg> What You Want to See</div>
                <ul style="color:#444;font-size:.85rem;line-height:1.8;padding-left:16px;margin:0;">
                    <li>License active and current</li>
                    <li>No serious (Class 1) violations</li>
                    <li>Any violations promptly resolved</li>
                    <li>Regular inspection history (not long gaps)</li>
                    <li>Capacity not exceeded</li>
                </ul>
            </div>
            <div style="background:#fef2f2;border:1px solid #fecaca;border-radius:10px;padding:14px;">
                <div style="font-weight:700;color:#dc2626;margin-bottom:6px;">🚩 Walk Away If You See</div>
                <ul style="color:#444;font-size:.85rem;line-height:1.8;padding-left:16px;margin:0;">
                    <li>Expired or suspended license</li>
                    <li>Serious unresolved violations</li>
                    <li>Pattern of repeat violations</li>
                    <li>License revocations in history</li>
                    <li>Capacity consistently over limit</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: INSPECTIONS -->
<section id="inspections" style="padding:40px 20px;background:#f9fafb;">
    <div style="max-width:850px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px;">
            <div style="width:44px;height:44px;background:#1e40af;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.3rem;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg></div>
            <div>
                <h2 style="font-size:1.4rem;font-weight:800;color:#111;margin:0 0 2px;">2. Understanding Inspection Reports</h2>
                <div style="font-size:.83rem;color:#1e40af;font-weight:600;">Violations are common — but not all are equal</div>
            </div>
        </div>

        <p style="color:#444;line-height:1.75;margin:0 0 18px;"><strong>Don't be alarmed by any violation — be alarmed by the right violations.</strong> Most licensed programs have minor violations on record. A violation for a missing sign is categorically different from a violation for inadequate supervision. Understanding the classification system helps you assess real risk.</p>

        <h3 style="font-size:1rem;font-weight:700;color:#111;margin:0 0 12px;">Violation Severity Levels (varies by state)</h3>
        <div style="display:grid;gap:10px;margin-bottom:20px;">
            <div style="background:#fff;border-left:4px solid #dc2626;border-radius:0 8px 8px 0;padding:14px 16px;">
                <div style="font-weight:700;color:#dc2626;margin-bottom:4px;">🔴 Critical / Class 1 — Walk Away</div>
                <p style="color:#444;font-size:.87rem;line-height:1.65;margin:0;">Involves immediate risk to child health or safety. Examples: inadequate supervision causing injury risk, ratio violation putting children in danger, failure to conduct required background checks, medication errors, infant safe sleep violations, physical hazards. These are reportable to state child welfare. One unresolved critical violation is disqualifying.</p>
            </div>
            <div style="background:#fff;border-left:4px solid #f59e0b;border-radius:0 8px 8px 0;padding:14px 16px;">
                <div style="font-weight:700;color:#b45309;margin-bottom:4px;">🟡 Significant / Class 2 — Investigate</div>
                <p style="color:#444;font-size:.87rem;line-height:1.65;margin:0;">Serious but not immediately dangerous. Examples: ratio violations without injury risk, inadequate records, staff with expired CPR certification, missing emergency contact information. A single isolated Class 2 resolved quickly is acceptable; recurring Class 2 violations suggest systemic issues.</p>
            </div>
            <div style="background:#fff;border-left:4px solid #22c55e;border-radius:0 8px 8px 0;padding:14px 16px;">
                <div style="font-weight:700;color:#15803d;margin-bottom:4px;">🟢 Minor / Technical — Context Needed</div>
                <p style="color:#444;font-size:.87rem;line-height:1.65;margin:0;">Administrative issues without direct safety implications. Examples: missing signature on a form, incorrect log format, late submission of paperwork. Some of the best programs in the country have minor technical violations — they're not indicative of care quality.</p>
            </div>
        </div>

        <div style="background:#e0f2fe;border:1px solid #7dd3fc;border-radius:10px;padding:14px 18px;">
            <strong><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M9 18h6"/><path d="M10 22h4"/><path d="M12 2a7 7 0 00-4 12.74V17h8v-2.26A7 7 0 0012 2z"/></svg> Pattern vs. Incident:</strong> <span style="color:#374151;font-size:.88rem;">One serious violation 3 years ago that was quickly resolved is less concerning than 5 minor violations over 6 months. The pattern tells you more than any single incident.</span>
        </div>
    </div>
</section>

<!-- SECTION 3: SAFE SLEEP -->
<section id="safe-sleep" style="padding:40px 20px;background:#fff;">
    <div style="max-width:850px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px;">
            <div style="width:44px;height:44px;background:#7c3aed;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.3rem;">😴</div>
            <div>
                <h2 style="font-size:1.4rem;font-weight:800;color:#111;margin:0 0 2px;">3. AAP Safe Sleep Standards for Infant Rooms</h2>
                <div style="font-size:.83rem;color:#7c3aed;font-weight:600;">Non-negotiable for infants · Verify every single point</div>
            </div>
        </div>

        <p style="color:#444;line-height:1.75;margin:0 0 18px;"><strong>Safe sleep violations are the leading cause of preventable childcare deaths.</strong> The American Academy of Pediatrics estimates that improper sleep practices contribute to 3,500 sudden infant deaths per year in the US. Licensed centers are required to follow AAP guidelines — but compliance requires active verification.</p>

        <h3 style="font-size:1rem;font-weight:700;color:#111;margin:0 0 12px;">The Complete AAP Safe Sleep Checklist for Infant Rooms</h3>
        <div style="display:grid;gap:8px;margin-bottom:20px;">
            @foreach([
                ['Back to Sleep — Always', 'Every infant must be placed on their back for every sleep. Side-lying and prone (stomach) positioning are not acceptable, even briefly. Ask: "Do you ever put infants on their stomachs?" The answer must be "never."'],
                ['Firm, Flat Sleep Surface', 'Cribs and playpens must have firm, flat mattresses. Soft mattresses, positioners, car seats (for routine sleep), bouncers, and swings are not approved sleep surfaces.'],
                ['No Soft Objects in Sleep Space', 'No blankets, bumpers, pillows, positioners, stuffed animals, or loose bedding in the crib. A wearable sleep sack for warmth is acceptable.'],
                ['One Infant Per Sleep Space', 'No co-sleeping or sharing cribs. Each infant must have their own dedicated sleep space.'],
                ['Temperature Control', 'Room temperature 68-72°F (20-22°C). Infants should not be overdressed — if the room is warm, a onesie is sufficient.'],
                ['No Head Coverings During Sleep', 'No hats, hoods, or head coverings during sleep. These increase overheating risk.'],
                ['Active Supervision During Nap', 'Staff must visually check each sleeping infant at regular intervals. Baby monitors do not replace in-person checks.'],
            ] as $item)
            <div style="background:#faf5ff;border:1px solid #e9d5ff;border-radius:9px;padding:14px 16px;display:flex;gap:12px;">
                <span style="color:#7c3aed;font-size:1.1rem;flex-shrink:0;">✓</span>
                <div>
                    <div style="font-weight:700;color:#111;font-size:.9rem;margin-bottom:4px;">{{ $item[0] }}</div>
                    <p style="color:#555;font-size:.85rem;line-height:1.65;margin:0;">{{ $item[1] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div style="background:#fef2f2;border-left:4px solid #dc2626;border-radius:0 8px 8px 0;padding:14px 18px;">
            <strong style="color:#dc2626;">If You Observe Any Violation:</strong> <span style="color:#444;font-size:.88rem;">If you see an infant sleeping on their stomach, with soft bedding in the crib, or in a bouncer/car seat during routine sleep — report it to your state licensing agency. Safe sleep violations are mandatory reporting situations in most states.</span>
        </div>
    </div>
</section>

<!-- SECTION 4: BACKGROUND CHECKS -->
<section id="background" style="padding:40px 20px;background:#f9fafb;">
    <div style="max-width:850px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px;">
            <div style="width:44px;height:44px;background:#0f766e;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.3rem;"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></div>
            <div>
                <h2 style="font-size:1.4rem;font-weight:800;color:#111;margin:0 0 2px;">4. Background Check Requirements</h2>
                <div style="font-size:.83rem;color:#0f766e;font-weight:600;">State requirements vary widely — know what's required in yours</div>
            </div>
        </div>

        <p style="color:#444;line-height:1.75;margin:0 0 18px;"><strong>All licensed childcare staff must pass background checks — but what those checks include varies dramatically by state.</strong> Some states require only a name-based state criminal check (which misses out-of-state crimes). Best practice is FBI fingerprint-based national checks. Ask specifically what was checked and when.</p>

        <h3 style="font-size:1rem;font-weight:700;color:#111;margin:0 0 12px;">What to Ask About Background Checks</h3>
        <div style="display:grid;gap:10px;margin-bottom:20px;">
            <div style="background:#fff;border:1px solid #e5e7eb;border-radius:9px;padding:14px 16px;">
                <div style="font-weight:700;color:#0f766e;margin-bottom:4px;">For ALL Staff with Child Contact</div>
                <ul style="color:#444;font-size:.86rem;line-height:1.8;padding-left:16px;margin:0;">
                    <li>State criminal history check</li>
                    <li>Federal criminal history (FBI fingerprint — best practice)</li>
                    <li>Sex offender registry check (national)</li>
                    <li>Child abuse and neglect registry check</li>
                </ul>
            </div>
            <div style="background:#fff;border:1px solid #e5e7eb;border-radius:9px;padding:14px 16px;">
                <div style="font-weight:700;color:#0f766e;margin-bottom:4px;">For Family Daycare Homes</div>
                <p style="color:#444;font-size:.86rem;line-height:1.65;margin:0;">Background checks should extend to ALL household members over 18, not just the licensed provider. Ask specifically: "Are background checks done on everyone living in the home?"</p>
            </div>
            <div style="background:#fff;border:1px solid #e5e7eb;border-radius:9px;padding:14px 16px;">
                <div style="font-weight:700;color:#0f766e;margin-bottom:4px;">Renewal Timing</div>
                <p style="color:#444;font-size:.86rem;line-height:1.65;margin:0;">Background checks aren't permanent — most states require renewal every 3-5 years. Ask: "When was the most recent background check for staff in my child's room?"</p>
            </div>
        </div>

        <div style="background:#f0fdfa;border:1px solid #99f6e4;border-radius:10px;padding:14px 18px;">
            <strong><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M9 18h6"/><path d="M10 22h4"/><path d="M12 2a7 7 0 00-4 12.74V17h8v-2.26A7 7 0 0012 2z"/></svg> Verification Tip:</strong> <span style="color:#444;font-size:.88rem;">You can verify whether a center is compliant with background check requirements by checking inspection reports (non-compliance is a citable violation) and by asking to see the center's background check policy in writing.</span>
        </div>
    </div>
</section>

<!-- SECTION 5: PLAYGROUND -->
<section id="playground" style="padding:40px 20px;background:#fff;">
    <div style="max-width:850px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px;">
            <div style="width:44px;height:44px;background:#b45309;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.3rem;">🛝</div>
            <div>
                <h2 style="font-size:1.4rem;font-weight:800;color:#111;margin:0 0 2px;">5. Playground & Outdoor Safety</h2>
                <div style="font-size:.83rem;color:#b45309;font-weight:600;">CPSC standards · Fall zones · Equipment age-appropriateness</div>
            </div>
        </div>

        <p style="color:#444;line-height:1.75;margin:0 0 18px;"><strong>Playground injuries are the most common type of childcare injury — 200,000 children visit emergency rooms annually for playground injuries.</strong> Most are preventable. Use this checklist when you tour the outdoor play area.</p>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:12px;margin-bottom:18px;">
            <div style="background:#fffbeb;border:1px solid #fde68a;border-radius:10px;padding:14px;">
                <div style="font-weight:700;color:#b45309;margin-bottom:6px;">Fall Zones & Surfacing</div>
                <ul style="color:#444;font-size:.85rem;line-height:1.75;padding-left:14px;margin:0;">
                    <li>6-foot clear zone on all sides of equipment</li>
                    <li>Approved fall surfacing (rubber, wood chips, pea gravel, sand)</li>
                    <li>Minimum 9-12 inches depth of loose fill</li>
                    <li>No concrete, asphalt, or packed dirt under equipment</li>
                </ul>
            </div>
            <div style="background:#fffbeb;border:1px solid #fde68a;border-radius:10px;padding:14px;">
                <div style="font-weight:700;color:#b45309;margin-bottom:6px;">Equipment Safety</div>
                <ul style="color:#444;font-size:.85rem;line-height:1.75;padding-left:14px;margin:0;">
                    <li>Age-appropriate: under-5 and over-5 areas separate</li>
                    <li>No entrapment hazards (spaces 3.5-9" trap heads)</li>
                    <li>No sharp edges, protruding bolts, or splintering</li>
                    <li>No peeling paint on older equipment (lead risk)</li>
                </ul>
            </div>
            <div style="background:#fffbeb;border:1px solid #fde68a;border-radius:10px;padding:14px;">
                <div style="font-weight:700;color:#b45309;margin-bottom:6px;">Supervision & Fencing</div>
                <ul style="color:#444;font-size:.85rem;line-height:1.75;padding-left:14px;margin:0;">
                    <li>Full fencing at least 4 feet high</li>
                    <li>Self-closing, self-latching gates</li>
                    <li>Adequate supervision during outdoor time</li>
                    <li>Shaded areas for heat/sun protection</li>
                </ul>
            </div>
        </div>

        <p style="color:#444;font-size:.88rem;line-height:1.7;margin:0;"><strong>Ask when the playground was last formally inspected</strong> and whether the center conducts monthly visual safety checks. The CPSC provides free playground safety checklists at cpsc.gov.</p>
    </div>
</section>

<!-- SECTION 6: EMERGENCY -->
<section id="emergency" style="padding:40px 20px;background:#f9fafb;">
    <div style="max-width:850px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px;">
            <div style="width:44px;height:44px;background:#be185d;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.3rem;">🚨</div>
            <div>
                <h2 style="font-size:1.4rem;font-weight:800;color:#111;margin:0 0 2px;">6. Emergency Preparedness</h2>
                <div style="font-size:.83rem;color:#be185d;font-weight:600;">Written plans · Drills · CPR · EpiPen protocols</div>
            </div>
        </div>

        <p style="color:#444;line-height:1.75;margin:0 0 18px;"><strong>Every licensed childcare program must have written emergency procedures</strong> — but the quality of those procedures varies enormously. Ask to see the written plan and verify it addresses each of these scenarios.</p>

        <div style="display:grid;gap:10px;margin-bottom:20px;">
            <div style="background:#fff;border:1px solid #e5e7eb;border-radius:9px;padding:14px 16px;">
                <div style="font-weight:700;color:#111;margin-bottom:4px;">Fire Evacuation</div>
                <p style="color:#555;font-size:.87rem;line-height:1.65;margin:0;">Ask: How often are fire drills held? (Monthly is best practice.) Where is the evacuation assembly point? How are non-ambulatory infants transported? Ask to see the drill log — it should show dates and participation.</p>
            </div>
            <div style="background:#fff;border:1px solid #e5e7eb;border-radius:9px;padding:14px 16px;">
                <div style="font-weight:700;color:#111;margin-bottom:4px;">Medical Emergency / CPR</div>
                <p style="color:#555;font-size:.87rem;line-height:1.65;margin:0;">Ask: Is there always at least one staff member with current pediatric CPR and first aid certification present? Who calls 911? Who stays with other children? How will you notify me immediately? Where is the first aid kit?</p>
            </div>
            <div style="background:#fff;border:1px solid #e5e7eb;border-radius:9px;padding:14px 16px;">
                <div style="font-weight:700;color:#111;margin-bottom:4px;">Severe Allergy / EpiPen Protocol</div>
                <p style="color:#555;font-size:.87rem;line-height:1.65;margin:0;">Ask: How many staff are trained to administer an EpiPen? Where are EpiPens stored (must be accessible, not locked away)? Are allergy action plans shared with ALL staff including substitutes? Is the center peanut-free if there are severe peanut allergies enrolled?</p>
            </div>
            <div style="background:#fff;border:1px solid #e5e7eb;border-radius:9px;padding:14px 16px;">
                <div style="font-weight:700;color:#111;margin-bottom:4px;">Lockdown / Shelter-in-Place</div>
                <p style="color:#555;font-size:.87rem;line-height:1.65;margin:0;">Ask: Do you have a lockdown procedure? How are parents notified during a lockdown? Is there a designated safe room? Are exterior doors kept locked during operating hours? Who controls building access?</p>
            </div>
            <div style="background:#fff;border:1px solid #e5e7eb;border-radius:9px;padding:14px 16px;">
                <div style="font-weight:700;color:#111;margin-bottom:4px;">Child Gone Missing / Abduction Prevention</div>
                <p style="color:#555;font-size:.87rem;line-height:1.65;margin:0;">Ask: How do you verify the identity of adults picking up children? What happens if someone not on the authorized list shows up? Is there a "code word" system? How quickly would I be notified if my child wasn't accounted for?</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 7: RED FLAGS -->
<section id="red-flags" style="padding:40px 20px;background:#fff;">
    <div style="max-width:850px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px;">
            <div style="width:44px;height:44px;background:#dc2626;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.3rem;">🚩</div>
            <div>
                <h2 style="font-size:1.4rem;font-weight:800;color:#111;margin:0 0 2px;">7. Ten Red Flags — Walk Away Immediately</h2>
                <div style="font-size:.83rem;color:#dc2626;font-weight:600;">Trust these signals. Not every issue is worth investigating.</div>
            </div>
        </div>

        <p style="color:#444;line-height:1.75;margin:0 0 20px;"><strong>Some issues are disqualifying on sight.</strong> If you observe any of the following during a tour or visit, leave and don't look back. These aren't minor concerns — they indicate systemic safety failures.</p>

        <div style="display:grid;gap:10px;">
            @foreach([
                ['Staff on phones while supervising children', 'This isn\'t about a quick glance — it\'s about habitual phone use during child supervision. If you see it during a 30-minute tour, it\'s constant when you\'re not watching.'],
                ['Crying infant not responded to', 'A crying baby being ignored — not for 30 seconds during a necessary handoff, but unattended while staff chat, do paperwork, or look at phones — is an attachment and safety failure.'],
                ['Infant sleeping on stomach, in car seat, or with soft bedding', 'This is an immediate safe sleep violation. It\'s a citable offense in all states and a direct SIDS risk. Don\'t wait to see if it\'s corrected.'],
                ['Lapsed license or refused to show it', 'You have every right to see a valid, current license. Inability to produce it, expired dates, or evasiveness are disqualifying — immediately.'],
                ['Refusal to allow unannounced visits after enrollment', 'You have a right to visit your child during operating hours. Centers that prohibit unannounced visits are hiding something.'],
                ['Vague or defensive answers to ratio questions', '"We always have enough staff" is not an answer. You need a number. Defensiveness about this basic question signals they know they\'re not meeting standards.'],
                ['Children clearly out of adult line-of-sight', 'Active supervision means adults can see and reach children at all times. If you observe unsupervised children during your tour — in bathrooms, outdoors, or in hallways — this is a critical supervision failure.'],
                ['Harsh discipline — yelling, shaming, isolation', 'Raising a voice to a child, public shaming ("look how she can\'t follow directions"), or putting a child alone in an enclosed space for behavior management are all unacceptable. Any you observe are disqualifying.'],
                ['Poorly maintained facility with visible hazards', 'Crumbling plaster, exposed wiring, broken equipment that hasn\'t been repaired, mold, persistent strong odors — these indicate a pattern of deferred maintenance that affects all safety standards.'],
                ['High recent turnover in your child\'s specific room', 'If the teacher your child would have has been there 6 weeks, ask why the previous teacher left. If there\'s been a pattern of turnover in that room, ask more. A room with a revolving door of caregivers cannot provide consistent, attachment-based care for young children.'],
            ] as $i => $item)
            <div style="background:#fef2f2;border-left:4px solid #dc2626;border-radius:0 9px 9px 0;padding:14px 16px;display:flex;gap:12px;">
                <span style="background:#dc2626;color:#fff;width:24px;height:24px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:.8rem;font-weight:800;flex-shrink:0;margin-top:1px;">{{ $i+1 }}</span>
                <div>
                    <div style="font-weight:700;color:#111;margin-bottom:4px;font-size:.9rem;">{{ $item[0] }}</div>
                    <p style="color:#555;font-size:.85rem;line-height:1.65;margin:0;">{{ $item[1] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- FAQ -->
<section style="padding:40px 20px;background:#f9fafb;">
    <div style="max-width:800px;margin:0 auto;">
        <h2 style="font-size:1.3rem;font-weight:800;color:#111;margin:0 0 6px;text-align:center;">Frequently Asked Questions</h2>
        <p style="color:#555;text-align:center;margin:0 0 24px;font-size:.88rem;">Common questions about childcare safety.</p>
        <div style="display:grid;gap:8px;">
            <details style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:14px 18px;font-weight:600;color:#111;cursor:pointer;font-size:.9rem;list-style:none;">How do I check if a daycare is licensed?</summary>
                <div style="padding:0 18px 14px;color:#444;font-size:.88rem;line-height:1.7;">Ask to see the physical license during your tour. Then independently verify on your state's childcare licensing database (search "[your state] childcare license lookup"). Check active status, expiration date, and the full inspection history with any violations and their resolution.</div>
            </details>
            <details style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:14px 18px;font-weight:600;color:#111;cursor:pointer;font-size:.9rem;list-style:none;">What are AAP safe sleep guidelines for infant rooms?</summary>
                <div style="padding:0 18px 14px;color:#444;font-size:.88rem;line-height:1.7;">Every infant on their back, on a firm flat surface, with no soft objects (no blankets, bumpers, pillows, stuffed animals), each in their own sleep space. Room at 68-72°F, no head coverings. These are non-negotiable — any deviation is a licensing violation and a direct safety risk.</div>
            </details>
            <details style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:14px 18px;font-weight:600;color:#111;cursor:pointer;font-size:.9rem;list-style:none;">What background checks should daycare staff have?</summary>
                <div style="padding:0 18px 14px;color:#444;font-size:.88rem;line-height:1.7;">At minimum: state criminal history, sex offender registry, and child abuse/neglect registry for all staff. Best practice includes FBI fingerprint-based national criminal check. For family daycare homes, all household members over 18 should be checked. Checks should be renewed every 3-5 years.</div>
            </details>
            <details style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:14px 18px;font-weight:600;color:#111;cursor:pointer;font-size:.9rem;list-style:none;">Should I report a safety concern I observed?</summary>
                <div style="padding:0 18px 14px;color:#444;font-size:.88rem;line-height:1.7;">Yes. Contact your state's childcare licensing agency to file a complaint. Reports can be anonymous. The agency will investigate and, if a violation is found, require correction or take licensing action. You can also contact local child protective services if you believe a child is in immediate danger.</div>
            </details>
            <details style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:14px 18px;font-weight:600;color:#111;cursor:pointer;font-size:.9rem;list-style:none;">Is a program with violations still safe?</summary>
                <div style="padding:0 18px 14px;color:#444;font-size:.88rem;line-height:1.7;">Depends on the violation. Minor administrative violations (paperwork errors, late form submissions) don't indicate safety issues. Serious violations involving supervision, ratios, safe sleep, or background checks require follow-up. Key questions: Was it serious? Was it resolved? Has it recurred? A program that quickly corrects a violation and has no repeat issues can still be excellent.</div>
            </details>
        </div>
    </div>
</section>

<!-- CTA -->
<section style="padding:36px 20px;background:#065f46;">
    <div style="max-width:800px;margin:0 auto;text-align:center;">
        <h2 style="font-size:1.2rem;font-weight:700;color:#fff;margin:0 0 10px;">Find Safe, Licensed Daycare Near You</h2>
        <p style="color:rgba(255,255,255,.88);margin:0 0 20px;font-size:.9rem;">Browse 26,000+ licensed centers with verified licensing status.</p>
        <div style="display:flex;flex-wrap:wrap;gap:10px;justify-content:center;">
            <a href="/facilities" style="background:#fff;color:#065f46;padding:11px 22px;border-radius:8px;font-weight:700;text-decoration:none;font-size:.92rem;">Browse Centers</a>
            <a href="/checklist" style="background:rgba(255,255,255,.15);color:#fff;padding:11px 22px;border-radius:8px;font-weight:700;text-decoration:none;font-size:.92rem;border:1px solid rgba(255,255,255,.3);">Tour Checklist</a>
            <a href="/blog/daycare-red-flags-signs-to-walk-away" style="background:rgba(255,255,255,.15);color:#fff;padding:11px 22px;border-radius:8px;font-weight:700;text-decoration:none;font-size:.92rem;border:1px solid rgba(255,255,255,.3);">Red Flags Guide</a>
        </div>
    </div>
</section>

<div style="max-width:850px;margin:0 auto;padding:12px 20px;text-align:center;">
    <p style="font-size:.75rem;color:#aaa;">Last updated: {{ date('F j, Y') }} · Sources: AAP Safe Sleep Guidelines 2022, CPSC Playground Safety, HHS/ACF, Child Care Aware of America</p>
</div>

</div>
@endsection
