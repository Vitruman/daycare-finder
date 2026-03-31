@extends('layouts.app')

@section('title', 'Daycare Tour Checklist: 30 Questions to Ask Before Enrolling (2026) | DaycareHub')
@section('meta_description', 'The complete daycare tour checklist for parents: 30 questions to ask across 6 categories. Safety, staff ratios, curriculum, health, costs, and communication. Free printable guide.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Daycare Tour Checklist"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {"@@type": "Question", "name": "What questions should I ask when touring a daycare?", "acceptedAnswer": {"@@type": "Answer", "text": "Ask about: current state license and last inspection result, staff-to-child ratios in your child's specific room, average tenure of lead teachers, curriculum approach, daily schedule, sick child policy, how they communicate with parents, and full fee schedule. Our checklist covers 30 questions across 6 categories."}},
        {"@@type": "Question", "name": "How many daycares should I tour before choosing?", "acceptedAnswer": {"@@type": "Answer", "text": "Tour at least 3 centers before making a decision, ideally 4-5. Each tour gives you a comparison point. First tours always reveal things you didn't know to look for — by your third tour you'll have much better questions."}},
        {"@@type": "Question", "name": "Should I visit without an appointment?", "acceptedAnswer": {"@@type": "Answer", "text": "Do both. Schedule an initial tour for a full walkthrough and conversation with the director. Then do a second unannounced visit during mid-morning (9:30-11 AM is ideal) to see the program in action without preparation. Quality centers welcome drop-ins. Those that don't are showing you something important."}},
        {"@@type": "Question", "name": "What is a good staff-to-child ratio?", "acceptedAnswer": {"@@type": "Answer", "text": "NAEYC recommends: Infants (0-12 months) 1:3-4, young toddlers 1:4-5, older toddlers 1:6, preschool 1:8-10, school-age 1:10-15. Many states allow higher ratios — always ask for the ratio in your child's specific room at typical staffing levels, not just the maximum allowed."}},
        {"@@type": "Question", "name": "How do I verify a daycare is licensed?", "acceptedAnswer": {"@@type": "Answer", "text": "Ask to see the current license (it should be posted). Then independently verify on your state's childcare licensing database. Search '[your state] childcare license lookup'. You can also check inspection history — violations, dates, and resolution. DaycareHub links to state licensing sources on each facility profile."}},
        {"@@type": "Question", "name": "What are red flags during a daycare tour?", "acceptedAnswer": {"@@type": "Answer", "text": "Red flags: staff on phones near children, crying babies not being picked up, vague answers about ratios, refusal to let you visit unannounced, high staff turnover (ask directly), TV/screens on in infant rooms, no hand-washing after diaper changes, unlicensed or recently suspended license, poor outdoor safety, evasion about discipline policy."}},
        {"@@type": "Question", "name": "What is a deposit and is it refundable?", "acceptedAnswer": {"@@type": "Answer", "text": "Most centers charge an enrollment deposit (typically $100-500) and require 2-4 weeks notice to withdraw. Ask specifically: Is the deposit refundable? What happens if we enroll but need to withdraw before start date? What's the notice period? Get everything in writing before signing."}},
        {"@@type": "Question", "name": "What curriculum approaches exist and which is best?", "acceptedAnswer": {"@@type": "Answer", "text": "Common approaches: Play-based (child-led exploration), structured academic (teacher-led lessons), Montessori (child-led with specific materials, mixed ages), Reggio Emilia (project-based, documentation), Creative Curriculum (research-backed, widely used). No single approach is universally best. Match it to your child's temperament and your family values."}},
        {"@@type": "Question", "name": "How do daycares handle sick children?", "acceptedAnswer": {"@@type": "Answer", "text": "Ask for the written sick child policy. Key questions: What symptoms require a child to be picked up (fever threshold, vomiting, diarrhea, pink eye)? How quickly must you pick up a sick child? When can a recovered child return? Who should I call if I can't pick up? Have policies been updated post-COVID?"}},
        {"@@type": "Question", "name": "Should I bring my child on the tour?", "acceptedAnswer": {"@@type": "Answer", "text": "For the first 1-2 tours, consider going alone — you'll be more observant. Once you've narrowed to 2-3 finalists, bring your child. Their reaction can be telling. An open, curious child who makes eye contact with caregivers is a good sign. Watch how staff respond to your child — do they get down to their level? Engage warmly? Or ignore them?"}}
    ]
}
</script>
@endsection

@section('content')
<div style="margin-top:64px;">

<div style="max-width:900px;margin:0 auto;padding:14px 20px 0;font-size:.85rem;color:#666;">
    <a href="/" style="color:#065f46;text-decoration:none;">Home</a>
    <span style="margin:0 8px;color:#ccc;">/</span>
    <span style="color:#333;">Daycare Tour Checklist</span>
</div>

<!-- Hero -->
<section style="background:linear-gradient(135deg,#065f46 0%,#047857 60%,#059669 100%);padding:52px 20px 44px;">
    <div style="max-width:850px;margin:0 auto;text-align:center;">
        <div style="display:inline-block;background:rgba(255,255,255,.15);color:#fff;padding:5px 14px;border-radius:20px;font-size:.78rem;font-weight:700;margin-bottom:16px;">FREE PARENT GUIDE</div>
        <h1 style="font-size:clamp(1.5rem,3.5vw,2.4rem);font-weight:800;color:#fff;margin:0 0 14px;line-height:1.2;">Daycare Tour Checklist: 30 Questions to Ask Before Enrolling</h1>
        <p style="font-size:.97rem;color:rgba(255,255,255,.9);max-width:620px;margin:0 auto 0;line-height:1.65;">Most parents ask 3-4 questions on a daycare tour. The ones who ask all 30 avoid 90% of surprises. This checklist covers 6 critical categories — print it before your next tour.</p>
    </div>
</section>

<!-- Key takeaway -->
<section style="background:#f0fdf4;border-bottom:1px solid #d1fae5;padding:20px;">
    <div style="max-width:850px;margin:0 auto;display:flex;align-items:flex-start;gap:14px;">
        <div style="font-size:1.5rem;flex-shrink:0;"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M9 18h6"/><path d="M10 22h4"/><path d="M12 2a7 7 0 00-4 12.74V17h8v-2.26A7 7 0 0012 2z"/></svg></div>
        <div>
            <strong style="color:#065f46;">Key Finding:</strong> <span style="color:#374151;">According to Child Care Aware, 40% of parents who switched daycares within the first year said they wished they'd asked more questions during the tour. The most common regrets: not asking about staff turnover, sick child policy, and what happens on snow days.</span>
        </div>
    </div>
</section>

<!-- TOC -->
<section style="background:#fff;padding:24px 20px;border-bottom:1px solid #e5e7eb;">
    <div style="max-width:850px;margin:0 auto;">
        <h2 style="font-size:.9rem;font-weight:700;color:#111;margin:0 0 10px;">6 Categories — Jump to Section:</h2>
        <div style="display:flex;flex-wrap:wrap;gap:8px;">
            <a href="#safety" style="background:#065f46;color:#fff;padding:6px 14px;border-radius:6px;text-decoration:none;font-size:.82rem;font-weight:600;">🔒 Safety</a>
            <a href="#staff" style="background:#047857;color:#fff;padding:6px 14px;border-radius:6px;text-decoration:none;font-size:.82rem;font-weight:600;">👩‍<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg> Staff</a>
            <a href="#curriculum" style="background:#059669;color:#fff;padding:6px 14px;border-radius:6px;text-decoration:none;font-size:.82rem;font-weight:600;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg> Curriculum</a>
            <a href="#communication" style="background:#065f46;color:#fff;padding:6px 14px;border-radius:6px;text-decoration:none;font-size:.82rem;font-weight:600;">💬 Communication</a>
            <a href="#health" style="background:#047857;color:#fff;padding:6px 14px;border-radius:6px;text-decoration:none;font-size:.82rem;font-weight:600;">🏥 Health</a>
            <a href="#costs" style="background:#059669;color:#fff;padding:6px 14px;border-radius:6px;text-decoration:none;font-size:.82rem;font-weight:600;">💵 Costs</a>
        </div>
    </div>
</section>

<!-- SECTION 1: SAFETY -->
<section id="safety" style="padding:40px 20px;background:#fff;">
    <div style="max-width:850px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px;">
            <div style="width:44px;height:44px;background:#065f46;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.3rem;">🔒</div>
            <div>
                <h2 style="font-size:1.4rem;font-weight:800;color:#111;margin:0 0 2px;">Category 1: Safety & Licensing</h2>
                <div style="font-size:.83rem;color:#065f46;font-weight:600;">Questions 1–5 · Verify before you walk in the door</div>
            </div>
        </div>

        <p style="color:#444;line-height:1.75;margin:0 0 20px;"><strong>License and inspection history are the foundation of your assessment.</strong> A center can have gorgeous facilities and warm staff — but if licensing is lapsed or inspection records show unresolved serious violations, walk away. These questions take 10 minutes and protect your child.</p>

        <div style="display:grid;gap:14px;">
            <div style="background:#f9fafb;border-left:4px solid #065f46;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q1. Is your license current, and can I see it?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0 0 8px;">The license should be posted visibly. Ask for the license number so you can verify independently on your state's childcare licensing database. Also ask: when does it expire?</p>
                <div style="background:#e0f2fe;border-radius:6px;padding:8px 12px;font-size:.82rem;color:#0369a1;"><strong>What to do:</strong> After the tour, look up the license at your state's licensing website. Check inspection history — not just whether they're licensed.</div>
            </div>

            <div style="background:#f9fafb;border-left:4px solid #065f46;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q2. When was your last inspection, and were there any violations?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0 0 8px;">Minor violations (a missing form, a dated first aid kit) are common and fixable. Serious violations involving child supervision, ratios, or safety hazards are red flags — especially if repeat or unresolved. Ask: "Can I see the last inspection report?"</p>
                <div style="background:#fef3c7;border-radius:6px;padding:8px 12px;font-size:.82rem;color:#92400e;"><strong>Red flag:</strong> Evasiveness, inability to locate the report, or "we handled it" without specifics.</div>
            </div>

            <div style="background:#f9fafb;border-left:4px solid #065f46;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q3. What background checks do you run on all staff?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0 0 8px;">All licensed centers must do background checks, but scope varies by state. Best practice is FBI fingerprint checks for all staff AND household members (for home daycares). Ask: "Does this include sex offender registry checks? Nationwide or just state?"</p>
            </div>

            <div style="background:#f9fafb;border-left:4px solid #065f46;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q4. What is your emergency plan if a child is injured or sick?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0 0 8px;">They should have a written emergency plan. Key details: How quickly will you be notified? What's the protocol if 911 is needed? Is there always a CPR-certified adult present? For infants specifically: what are your safe sleep practices?</p>
            </div>

            <div style="background:#f9fafb;border-left:4px solid #065f46;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q5. What is your sick child policy — when must I pick up?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0 0 8px;">You need to know BEFORE your child is sick: what temperature threshold triggers a call? What about vomiting, diarrhea, pink eye, rash? How quickly must you arrive once called? Most centers require pickup within 30-60 minutes. This affects your work contingency planning.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: STAFF -->
<section id="staff" style="padding:40px 20px;background:#f9fafb;">
    <div style="max-width:850px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px;">
            <div style="width:44px;height:44px;background:#1e40af;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.3rem;">👩‍<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg></div>
            <div>
                <h2 style="font-size:1.4rem;font-weight:800;color:#111;margin:0 0 2px;">Category 2: Staff & Ratios</h2>
                <div style="font-size:.83rem;color:#1e40af;font-weight:600;">Questions 6–10 · The single biggest predictor of quality</div>
            </div>
        </div>

        <p style="color:#444;line-height:1.75;margin:0 0 20px;"><strong>Staff quality and consistency is the strongest predictor of childcare outcomes.</strong> Research consistently shows that caregiver sensitivity and responsiveness matters more than facility amenities. High turnover destroys attachment relationships. Ask these questions with specificity — you want the ratio in YOUR child's room, not the center average.</p>

        <div style="display:grid;gap:14px;">
            <div style="background:#fff;border-left:4px solid #1e40af;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q6. What is the adult-to-child ratio in my child's specific room right now?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0 0 8px;">Don't accept the maximum allowed — ask the actual current ratio. Then ask: "Is this typical, or is today unusually high/low?" NAEYC recommendations: infants 1:3-4, toddlers 1:4-6, preschool 1:8-10.</p>
                <div style="background:#dbeafe;border-radius:6px;padding:8px 12px;font-size:.82rem;color:#1e40af;"><strong>Tip:</strong> Also ask: "What happens to ratios if a teacher calls in sick?"</div>
            </div>

            <div style="background:#fff;border-left:4px solid #1e40af;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q7. How long has the lead teacher in my child's room been here?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0 0 8px;">Ask about the specific teacher your child would have, not the center average. Under 6 months is a yellow flag. Under 3 months is a red flag — it suggests something drove out the previous teacher. Bonus: ask to meet the teacher before enrolling.</p>
            </div>

            <div style="background:#fff;border-left:4px solid #1e40af;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q8. What is your staff turnover rate in the past year?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0 0 8px;">The national average childcare turnover is 30-40% per year — meaning roughly 1 in 3 teachers leaves annually. Under 15% is excellent. Over 50% is a serious problem. Directors may be reluctant to share this — watch their reaction to the question as much as the answer.</p>
            </div>

            <div style="background:#fff;border-left:4px solid #1e40af;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q9. What are the qualifications of lead teachers?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0 0 8px;">State minimums vary widely — some require only a high school diploma and a few training hours. Better programs require CDA (Child Development Associate) credential, early childhood education degree, or equivalent. For infants especially, ask about specific infant development training.</p>
            </div>

            <div style="background:#fff;border-left:4px solid #1e40af;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q10. How do you handle substitute or coverage situations?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0 0 8px;">What happens when a teacher is sick? Are substitutes pre-vetted with background checks? Do children know the subs, or are strangers brought in? Do you combine classrooms? For toddlers and infants, unexpected changes in caregivers are genuinely distressing.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: CURRICULUM -->
<section id="curriculum" style="padding:40px 20px;background:#fff;">
    <div style="max-width:850px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px;">
            <div style="width:44px;height:44px;background:#7c3aed;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.3rem;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></div>
            <div>
                <h2 style="font-size:1.4rem;font-weight:800;color:#111;margin:0 0 2px;">Category 3: Daily Schedule & Curriculum</h2>
                <div style="font-size:.83rem;color:#7c3aed;font-weight:600;">Questions 11–15 · Your child's actual days</div>
            </div>
        </div>

        <p style="color:#444;line-height:1.75;margin:0 0 20px;"><strong>A quality daycare isn't supervised babysitting — it has intentional programming.</strong> You should be able to get a detailed daily schedule and a clear explanation of the curriculum approach. Vague answers like "we play and learn" without specifics signal a lack of intentional programming.</p>

        <div style="display:grid;gap:14px;">
            <div style="background:#faf5ff;border-left:4px solid #7c3aed;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q11. Can I see the written daily schedule for my child's age group?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">A good schedule balances: structured learning time, free play, outdoor time (daily, even in mild cold), meals/snacks, rest/nap, and transition activities. For infants, it follows individual routines rather than group schedules.</p>
            </div>

            <div style="background:#faf5ff;border-left:4px solid #7c3aed;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q12. How much outdoor time do children get each day?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">NAEYC recommends a minimum of 60 minutes outdoor time daily for children 3 and up. Ask: What weather conditions cancel outdoor time? Is outdoor time active play or just standing around? What's the outdoor space like?</p>
            </div>

            <div style="background:#faf5ff;border-left:4px solid #7c3aed;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q13. What is your screen time policy?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">AAP recommends no screen time for children under 18-24 months (except video calls) and limited, high-quality programming for 2-5 year olds. Ask: "Are screens used? For what purposes? How many minutes per day?" TV on as background noise is a red flag for any age group.</p>
            </div>

            <div style="background:#faf5ff;border-left:4px solid #7c3aed;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q14. What curriculum approach do you use and why?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">Common approaches: Creative Curriculum (research-backed, widely used), High/Scope, Montessori, Reggio Emilia, play-based. Ask: "How does your curriculum connect to kindergarten readiness?" A good answer includes specifics. "We play and learn together" is a non-answer.</p>
            </div>

            <div style="background:#faf5ff;border-left:4px solid #7c3aed;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q15. How do you handle difficult transitions — drop-off tears, nap resistance, meltdowns?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">Watch the answer closely. Good answers involve acknowledging feelings, consistent routines, and individualized approaches. Red flag answers: "we just let them cry it out" or minimizing that transitions can be hard, especially for young toddlers.</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: COMMUNICATION -->
<section id="communication" style="padding:40px 20px;background:#f9fafb;">
    <div style="max-width:850px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px;">
            <div style="width:44px;height:44px;background:#0f766e;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.3rem;">💬</div>
            <div>
                <h2 style="font-size:1.4rem;font-weight:800;color:#111;margin:0 0 2px;">Category 4: Communication & Parent Involvement</h2>
                <div style="font-size:.83rem;color:#0f766e;font-weight:600;">Questions 16–20 · How connected you'll feel</div>
            </div>
        </div>

        <p style="color:#444;line-height:1.75;margin:0 0 20px;"><strong>You need to stay connected to your child's day — even when you're at work.</strong> Modern quality centers use apps (Brightwheel, HiMama, Tadpoles) to send photos, feeding updates, and daily reports. Centers that still rely on paper notes or verbal pickup summaries will leave you feeling disconnected.</p>

        <div style="display:grid;gap:14px;">
            <div style="background:#fff;border-left:4px solid #0f766e;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q16. How do you communicate with parents daily?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">Ask specifically: Do you use a parent communication app? How often do infants/toddlers get activity updates? Are there photos? How will I know if there was an incident or behavior concern?</p>
            </div>
            <div style="background:#fff;border-left:4px solid #0f766e;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q17. Can I drop in unannounced after enrollment?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">The answer should be yes, with reasonable limits (e.g., not during nap time). Centers that require advance notice for all visits have something to hide. Licensing often requires reasonable parent access.</p>
            </div>
            <div style="background:#fff;border-left:4px solid #0f766e;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q18. What is your pickup and dropoff procedure?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">Key details: Who is authorized to pick up? How is ID verified for people you've added? What happens if someone not on the list arrives? What if you're running late? What's the late pickup fee? (Yes, ask this now.)</p>
            </div>
            <div style="background:#fff;border-left:4px solid #0f766e;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q19. How do you handle concerns or complaints from parents?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">Ask: "If I was concerned about something I observed, what's the process?" Good centers have a clear escalation path: classroom teacher → director → ownership/board. Watch for defensiveness in the answer.</p>
            </div>
            <div style="background:#fff;border-left:4px solid #0f766e;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q20. Are there parent-teacher conferences or progress reports?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">Quality programs do formal developmental check-ins 1-2 times per year. Ask: How do you track developmental milestones? What happens if you observe a developmental concern? Do you refer families to specialists?</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 5: HEALTH -->
<section id="health" style="padding:40px 20px;background:#fff;">
    <div style="max-width:850px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px;">
            <div style="width:44px;height:44px;background:#b45309;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.3rem;">🏥</div>
            <div>
                <h2 style="font-size:1.4rem;font-weight:800;color:#111;margin:0 0 2px;">Category 5: Health & Nutrition</h2>
                <div style="font-size:.83rem;color:#b45309;font-weight:600;">Questions 21–25 · Hygiene, food, and safety protocols</div>
            </div>
        </div>

        <div style="display:grid;gap:14px;">
            <div style="background:#fffbeb;border-left:4px solid #b45309;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q21. Describe your diaper changing procedure.</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">This one is revealing. The answer should include: dedicated changing surface, disposable liner, staff washing hands before AND after with soap, used diaper in covered trash, wiping down surface with disinfectant. Watch for hesitation — it suggests the procedure isn't standardized.</p>
            </div>
            <div style="background:#fffbeb;border-left:4px solid #b45309;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q22. Do you provide food/formula, or do parents bring it?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">Centers vary widely — some provide all meals (CACFP-reimbursed nutrition program), some require parent-provided. Ask: Do meals meet USDA nutrition standards? Is there a menu available? Are birthday treats or outside food allowed? What's the nut allergy policy?</p>
            </div>
            <div style="background:#fffbeb;border-left:4px solid #b45309;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q23. How do you handle severe allergies (peanuts, eggs, dairy)?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">For allergy families, this is critical. Ask: Is the center nut-free? What is the EpiPen protocol? How are staff trained on allergen management? Are allergy plans documented and shared with all staff, including subs?</p>
            </div>
            <div style="background:#fffbeb;border-left:4px solid #b45309;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q24. What immunization records do you require?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">All licensed centers are required to follow state immunization requirements. Ask: What vaccines are required? Do you accept medical exemptions? What happens if there's a disease outbreak among enrolled children?</p>
            </div>
            <div style="background:#fffbeb;border-left:4px solid #b45309;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q25. How do you handle nap time for my child's age group?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">For infants: is EVERY infant placed on their back on a firm surface with no soft bedding? (AAP mandates this.) For toddlers/preschool: are children forced to sleep or allowed quiet rest? Can you send your child's comfort item? What if your child resists nap?</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 6: COSTS -->
<section id="costs" style="padding:40px 20px;background:#f9fafb;">
    <div style="max-width:850px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px;">
            <div style="width:44px;height:44px;background:#be185d;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;font-size:1.3rem;">💵</div>
            <div>
                <h2 style="font-size:1.4rem;font-weight:800;color:#111;margin:0 0 2px;">Category 6: Costs & Policies</h2>
                <div style="font-size:.83rem;color:#be185d;font-weight:600;">Questions 26–30 · Get everything in writing</div>
            </div>
        </div>

        <p style="color:#444;line-height:1.75;margin:0 0 20px;"><strong>Financial surprises are the #1 cause of early disenrollment.</strong> Get the full fee schedule in writing before signing. Ask every question below — the answers compound: a $25 late fee charged every 15 minutes, 3 days with sick coverage gaps, and 2 weeks notice period can turn a good center into a costly mistake.</p>

        <div style="display:grid;gap:14px;">
            <div style="background:#fff;border-left:4px solid #be185d;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q26. Can I have the complete written fee schedule?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">The base rate is just the start. Request the full schedule including: enrollment/registration fee, supply fee (often $50-200/semester), activity fees, late pickup fees (typically $1-5/minute after closing), and what "full-time" vs "part-time" means in hours.</p>
            </div>
            <div style="background:#fff;border-left:4px solid #be185d;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q27. What is your policy for holidays and center closures?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">Ask for the list of all closures for the year. Many centers close 10-15 federal holidays plus professional development days. Do you still pay full tuition on closure days? This effectively raises your hourly rate. Is there emergency backup if a teacher is sick?</p>
            </div>
            <div style="background:#fff;border-left:4px solid #be185d;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q28. What is the deposit amount, and is it refundable?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">Deposits range from $100-500. Some are applied to your first month; others are non-refundable holding deposits. Ask: What happens if we need to withdraw before the start date? What if the center's start date changes?</p>
            </div>
            <div style="background:#fff;border-left:4px solid #be185d;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q29. What is the required notice period to withdraw?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">Most centers require 2-4 weeks notice. Some require 30 or even 60 days. Failure to give proper notice typically means forfeiting your deposit or paying tuition during the notice period. Life circumstances change — know this before you sign.</p>
            </div>
            <div style="background:#fff;border-left:4px solid #be185d;padding:16px 18px;border-radius:0 10px 10px 0;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">Q30. Do you accept CCAP, Head Start, or other subsidies?</div>
                <p style="color:#555;font-size:.88rem;line-height:1.65;margin:0;">Not all licensed centers are CCAP-certified — they must apply separately. Ask: Are you certified to accept CCAP vouchers? Do you accept any state subsidy programs? What's the process if we apply for assistance after enrollment? See our <a href="/subsidies" style="color:#065f46;font-weight:600;">full subsidy guide</a> to understand your options.</p>
            </div>
        </div>
    </div>
</section>

<!-- Printable Checklist -->
<section style="padding:40px 20px;background:#fff;border-top:2px dashed #e5e7eb;">
    <div style="max-width:850px;margin:0 auto;">
        <h2 style="font-size:1.3rem;font-weight:800;color:#111;margin:0 0 8px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/></svg> Quick-Print Checklist</h2>
        <p style="color:#555;font-size:.88rem;margin:0 0 20px;">Print this condensed version before your tour. Check each box as you ask the question.</p>
        <div style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:12px;padding:24px;">
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(360px,1fr));gap:4px;">
                @foreach(['License current & posted','Last inspection + violations','Background checks (all staff)','Emergency/injury plan','Sick child policy & pickup time','Ratio in my child\'s room','Lead teacher tenure','Staff turnover rate','Teacher qualifications','Substitute coverage plan','Daily schedule (written)','Outdoor time (how much/when)','Screen time policy','Curriculum approach explained','Transitions & meltdown handling','Daily parent communication method','Unannounced visit policy','Pickup/dropoff procedure','Complaint process','Developmental reports','Diaper change procedure','Food provided or parent-packed','Allergy management','Immunization requirements','Nap/sleep procedures','Full written fee schedule','Holiday & closure calendar','Deposit amount & refund policy','Notice period to withdraw','Subsidies accepted (CCAP)'] as $q)
                <div style="display:flex;align-items:center;gap:10px;padding:6px 0;border-bottom:1px solid #f3f4f6;font-size:.83rem;color:#444;">
                    <span style="width:18px;height:18px;border:2px solid #065f46;border-radius:3px;flex-shrink:0;display:inline-block;"></span>
                    {{ $q }}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section style="padding:40px 20px;background:#f9fafb;">
    <div style="max-width:800px;margin:0 auto;">
        <h2 style="font-size:1.3rem;font-weight:800;color:#111;margin:0 0 6px;text-align:center;">Frequently Asked Questions</h2>
        <p style="color:#555;text-align:center;margin:0 0 24px;font-size:.88rem;">Common questions about touring and choosing daycare.</p>
        <div style="display:grid;gap:8px;">
            @foreach([
                ['What questions should I ask when touring a daycare?','Ask about: current license and last inspection, staff ratios in your child\'s specific room, teacher tenure and turnover, curriculum approach, sick child policy, how they communicate daily, and full fee schedule including all fees and notice period.'],
                ['How many daycares should I tour?','Tour at least 3 centers before deciding — ideally 4-5. Each tour gives you comparison points. Your first tour will reveal things you didn\'t know to look for; by your third you\'ll ask much better questions.'],
                ['Should I visit without an appointment?','Yes — do both. Schedule an initial guided tour, then do an unannounced visit at mid-morning (9:30-11 AM) to see the program in action. Quality centers welcome drop-ins. Those that don\'t are showing you something important.'],
                ['How do I verify a daycare is licensed?','Ask to see the license (should be posted). Then independently check your state\'s childcare licensing database for current status and inspection history. Search "[your state] childcare license lookup".'],
                ['Should I bring my child on the tour?','For initial tours, consider going alone — you\'ll be more observant. Once you\'ve narrowed to 2-3 finalists, bring your child. Watch how staff greet and engage with your child — this is revealing.']
            ] as $qa)
            <details style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:14px 18px;font-weight:600;color:#111;cursor:pointer;font-size:.9rem;list-style:none;">{{ $qa[0] }}</summary>
                <div style="padding:0 18px 14px;color:#444;font-size:.88rem;line-height:1.7;">{{ $qa[1] }}</div>
            </details>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section style="padding:36px 20px;background:#065f46;">
    <div style="max-width:800px;margin:0 auto;text-align:center;">
        <h2 style="font-size:1.2rem;font-weight:700;color:#fff;margin:0 0 10px;">Ready to Start Touring?</h2>
        <p style="color:rgba(255,255,255,.88);margin:0 0 20px;font-size:.9rem;">Find licensed daycare centers near you to tour this week.</p>
        <div style="display:flex;flex-wrap:wrap;gap:10px;justify-content:center;">
            <a href="/facilities" style="background:#fff;color:#065f46;padding:11px 22px;border-radius:8px;font-weight:700;text-decoration:none;font-size:.92rem;">Browse Centers</a>
            <a href="/blog/daycare-red-flags-signs-to-walk-away" style="background:rgba(255,255,255,.15);color:#fff;padding:11px 22px;border-radius:8px;font-weight:700;text-decoration:none;font-size:.92rem;border:1px solid rgba(255,255,255,.3);">Red Flags Guide</a>
        </div>
    </div>
</section>

<div style="max-width:850px;margin:0 auto;padding:12px 20px;text-align:center;">
    <p style="font-size:.75rem;color:#aaa;">Last updated: {{ date('F j, Y') }} · Sources: NAEYC, Child Care Aware of America, AAP, HHS/ACF</p>
</div>

</div>
@endsection
