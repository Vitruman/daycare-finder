@extends('layouts.app')

@section('title', 'Types of Childcare Programs: Complete Guide for Parents (2026) | DaycareHub')
@section('meta_description', 'Compare 6 types of childcare programs: infant care, toddler, preschool, school-age, Head Start, and family daycare. Includes costs, ratios, and how to choose. Free guide.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Program Types"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {"@@type": "Question", "name": "What type of childcare is best for infants?", "acceptedAnswer": {"@@type": "Answer", "text": "For infants (0-12 months), center-based infant care with a 1:3 or 1:4 ratio is best. Look for NAEYC-accredited programs with consistent caregivers, safe sleep practices following AAP guidelines, and daily feeding logs. Family daycare homes can also be excellent for infants due to smaller group sizes."}},
        {"@@type": "Question", "name": "What is the difference between preschool and daycare?", "acceptedAnswer": {"@@type": "Answer", "text": "Preschool typically runs part-day (3-5 hours) and focuses on school readiness for ages 3-5. Daycare/childcare centers offer full-day coverage (6-12 hours) for a wider age range. Many centers offer both — a preschool program in the morning with extended care available for working parents."}},
        {"@@type": "Question", "name": "What is Head Start and who qualifies?", "acceptedAnswer": {"@@type": "Answer", "text": "Head Start is a free federal program for children ages 3-5 from families at or below the federal poverty level. Early Head Start serves pregnant women and children ages 0-3. Services include education, health screenings, nutrition, and family support. Apply at headstart.gov or through your local program."}},
        {"@@type": "Question", "name": "How much does childcare cost by program type?", "acceptedAnswer": {"@@type": "Answer", "text": "Average monthly costs: Infant care $1,000-2,500, Toddler programs $900-2,000, Preschool $700-1,500, School-age before/after care $200-700, Head Start $0 (free for eligible families), Family daycare $500-1,500. Costs vary significantly by state — Massachusetts and California are among the most expensive."}},
        {"@@type": "Question", "name": "What is a good staff-to-child ratio?", "acceptedAnswer": {"@@type": "Answer", "text": "NAEYC recommends: Infants 1:3-4, Toddlers (1-2 years) 1:4-5, Toddlers (2-3 years) 1:6, Preschool (3-5 years) 1:7-10, School-age 1:10-15. Lower ratios mean more individual attention. Always ask about the ratio in the specific classroom your child will be in, not just the overall center average."}},
        {"@@type": "Question", "name": "What is Montessori childcare?", "acceptedAnswer": {"@@type": "Answer", "text": "Montessori is a child-led educational approach where children choose their own activities from a prepared environment with specific materials. Mixed-age classrooms (typically 3-6), emphasis on independence and hands-on learning. Authentic Montessori programs are accredited by AMS or AMI. Typically more expensive than standard daycare."}},
        {"@@type": "Question", "name": "What is a family daycare home?", "acceptedAnswer": {"@@type": "Answer", "text": "A family daycare home is a childcare setting in a residential home, typically caring for 4-6 children. State-licensed in most states. Often more affordable than center-based care, with smaller group sizes. Can be a good option for infants and toddlers who do better in smaller, home-like settings."}},
        {"@@type": "Question", "name": "How do I choose between full-day and part-day childcare?", "acceptedAnswer": {"@@type": "Answer", "text": "Choose full-day care if both parents work full-time — you need 8-12 hours of coverage. Part-day preschool (3-5 hours) works if one parent has flexible hours or works part-time. Many centers offer both options. If using CCAP subsidies, check whether part-day programs qualify for assistance in your state."}},
        {"@@type": "Question", "name": "What is NAEYC accreditation?", "acceptedAnswer": {"@@type": "Answer", "text": "NAEYC (National Association for the Education of Young Children) accreditation is the gold standard for childcare quality. Accredited programs meet rigorous standards for curriculum, staff qualifications, health and safety, family engagement, and assessment. Only about 10% of US childcare programs are NAEYC-accredited."}},
        {"@@type": "Question", "name": "Can my child attend more than one type of program?", "acceptedAnswer": {"@@type": "Answer", "text": "Yes. A common arrangement is Head Start in the morning with CCAP-subsidized extended care in the afternoon. Or a part-day preschool combined with a before/after school program. Check with your state's CCAP program to see which combinations qualify for subsidy assistance."}}
    ]
}
</script>
@endsection

@section('content')
<div>
@include("components.breadcrumbs")

<!-- Hero -->
<section style="background:linear-gradient(135deg,#065f46 0%,#047857 60%,#059669 100%);padding:56px 20px 48px;">
    <div style="max-width:900px;margin:0 auto;text-align:center;">
        <div style="display:inline-block;background:rgba(255,255,255,.15);color:#fff;padding:5px 14px;border-radius:20px;font-size:.78rem;font-weight:700;margin-bottom:16px;letter-spacing:.04em;">CHILDCARE PROGRAM GUIDE</div>
        <h1 style="font-size:clamp(1.6rem,3.5vw,2.6rem);font-weight:800;color:#fff;margin:0 0 14px;line-height:1.2;">Types of Childcare Programs: Which Is Right for Your Child?</h1>
        <p style="font-size:1rem;color:rgba(255,255,255,.88);max-width:640px;margin:0 auto 28px;line-height:1.65;">
            <strong style="color:#fff;">6 main program types serve children from birth through age 12.</strong> Understanding the differences — cost, ratios, schedule, and curriculum — helps you make a confident choice. This guide covers everything, backed by NAEYC and HHS data.
        </p>
        <div style="display:flex;flex-wrap:wrap;gap:10px;justify-content:center;">
            <a href="#infant" style="background:rgba(255,255,255,.2);color:#fff;padding:8px 18px;border-radius:20px;text-decoration:none;font-size:.85rem;font-weight:600;">Infant Care</a>
            <a href="#toddler" style="background:rgba(255,255,255,.2);color:#fff;padding:8px 18px;border-radius:20px;text-decoration:none;font-size:.85rem;font-weight:600;">Toddler</a>
            <a href="#preschool" style="background:rgba(255,255,255,.2);color:#fff;padding:8px 18px;border-radius:20px;text-decoration:none;font-size:.85rem;font-weight:600;">Preschool</a>
            <a href="#school-age" style="background:rgba(255,255,255,.2);color:#fff;padding:8px 18px;border-radius:20px;text-decoration:none;font-size:.85rem;font-weight:600;">School-Age</a>
            <a href="#head-start" style="background:rgba(255,255,255,.2);color:#fff;padding:8px 18px;border-radius:20px;text-decoration:none;font-size:.85rem;font-weight:600;">Head Start</a>
            <a href="#family-daycare" style="background:rgba(255,255,255,.2);color:#fff;padding:8px 18px;border-radius:20px;text-decoration:none;font-size:.85rem;font-weight:600;">Family Daycare</a>
        </div>
    </div>
</section>

<!-- Quick Stats -->
<section style="background:#fff;border-bottom:1px solid #e5e7eb;padding:24px 20px;">
    <div style="max-width:900px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(150px,1fr));gap:20px;text-align:center;">
        <div><div style="font-size:1.8rem;font-weight:800;color:#065f46;">6</div><div style="font-size:.82rem;color:#666;">Program Types</div></div>
        <div><div style="font-size:1.8rem;font-weight:800;color:#065f46;">$0–$2,500</div><div style="font-size:.82rem;color:#666;">Monthly Range</div></div>
        <div><div style="font-size:1.8rem;font-weight:800;color:#065f46;">0–12</div><div style="font-size:.82rem;color:#666;">Age Range (years)</div></div>
        <div><div style="font-size:1.8rem;font-weight:800;color:#065f46;">26,000+</div><div style="font-size:.82rem;color:#666;">Licensed Centers</div></div>
    </div>
</section>

<!-- Comparison Table -->
<section style="background:#f9fafb;padding:40px 20px;">
    <div style="max-width:1000px;margin:0 auto;">
        <h2 style="font-size:1.4rem;font-weight:800;color:#111;margin:0 0 6px;text-align:center;">Program Types at a Glance</h2>
        <p style="color:#555;text-align:center;margin:0 0 24px;font-size:.9rem;">All key details compared in one table — click any row to jump to the full guide.</p>
        <div style="overflow-x:auto;border-radius:12px;border:1px solid #e5e7eb;">
            <table style="width:100%;border-collapse:collapse;background:#fff;font-size:.87rem;">
                <thead>
                    <tr style="background:#065f46;color:#fff;">
                        <th style="padding:12px 16px;text-align:left;font-weight:700;">Program</th>
                        <th style="padding:12px 16px;text-align:left;font-weight:700;">Ages</th>
                        <th style="padding:12px 16px;text-align:left;font-weight:700;">Hours</th>
                        <th style="padding:12px 16px;text-align:left;font-weight:700;">Monthly Cost</th>
                        <th style="padding:12px 16px;text-align:left;font-weight:700;">Ratio</th>
                        <th style="padding:12px 16px;text-align:left;font-weight:700;">Best For</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-top:1px solid #f3f4f6;">
                        <td style="padding:12px 16px;font-weight:600;color:#065f46;"><a href="#infant" style="color:#065f46;text-decoration:none;">Infant Care</a></td>
                        <td style="padding:12px 16px;color:#444;">0–12 months</td>
                        <td style="padding:12px 16px;color:#444;">Full-day</td>
                        <td style="padding:12px 16px;color:#444;font-weight:600;">$1,000–$2,500</td>
                        <td style="padding:12px 16px;color:#444;">1:3–4</td>
                        <td style="padding:12px 16px;color:#444;">Working parents, newborns</td>
                    </tr>
                    <tr style="border-top:1px solid #f3f4f6;background:#fafafa;">
                        <td style="padding:12px 16px;font-weight:600;color:#065f46;"><a href="#toddler" style="color:#065f46;text-decoration:none;">Toddler Programs</a></td>
                        <td style="padding:12px 16px;color:#444;">1–3 years</td>
                        <td style="padding:12px 16px;color:#444;">Full-day</td>
                        <td style="padding:12px 16px;color:#444;font-weight:600;">$900–$2,000</td>
                        <td style="padding:12px 16px;color:#444;">1:4–6</td>
                        <td style="padding:12px 16px;color:#444;">Language, social skills</td>
                    </tr>
                    <tr style="border-top:1px solid #f3f4f6;">
                        <td style="padding:12px 16px;font-weight:600;color:#065f46;"><a href="#preschool" style="color:#065f46;text-decoration:none;">Preschool / Pre-K</a></td>
                        <td style="padding:12px 16px;color:#444;">3–5 years</td>
                        <td style="padding:12px 16px;color:#444;">Part or full-day</td>
                        <td style="padding:12px 16px;color:#444;font-weight:600;">$700–$1,500</td>
                        <td style="padding:12px 16px;color:#444;">1:8–10</td>
                        <td style="padding:12px 16px;color:#444;">School readiness</td>
                    </tr>
                    <tr style="border-top:1px solid #f3f4f6;background:#fafafa;">
                        <td style="padding:12px 16px;font-weight:600;color:#065f46;"><a href="#school-age" style="color:#065f46;text-decoration:none;">School-Age Care</a></td>
                        <td style="padding:12px 16px;color:#444;">5–12 years</td>
                        <td style="padding:12px 16px;color:#444;">Before/after school</td>
                        <td style="padding:12px 16px;color:#444;font-weight:600;">$200–$700</td>
                        <td style="padding:12px 16px;color:#444;">1:10–15</td>
                        <td style="padding:12px 16px;color:#444;">Working parents, K–5</td>
                    </tr>
                    <tr style="border-top:1px solid #f3f4f6;">
                        <td style="padding:12px 16px;font-weight:600;color:#065f46;"><a href="#head-start" style="color:#065f46;text-decoration:none;">Head Start</a></td>
                        <td style="padding:12px 16px;color:#444;">0–5 years</td>
                        <td style="padding:12px 16px;color:#444;">Part-day (many)</td>
                        <td style="padding:12px 16px;color:#444;font-weight:600;color:#065f46;">FREE (income-eligible)</td>
                        <td style="padding:12px 16px;color:#444;">1:8</td>
                        <td style="padding:12px 16px;color:#444;">Income-eligible families</td>
                    </tr>
                    <tr style="border-top:1px solid #f3f4f6;background:#fafafa;">
                        <td style="padding:12px 16px;font-weight:600;color:#065f46;"><a href="#family-daycare" style="color:#065f46;text-decoration:none;">Family Daycare Home</a></td>
                        <td style="padding:12px 16px;color:#444;">0–12 years</td>
                        <td style="padding:12px 16px;color:#444;">Flexible</td>
                        <td style="padding:12px 16px;color:#444;font-weight:600;">$500–$1,500</td>
                        <td style="padding:12px 16px;color:#444;">1:6 (max)</td>
                        <td style="padding:12px 16px;color:#444;">Smaller groups, home feel</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- INFANT CARE -->
<section id="infant" style="padding:48px 20px;background:#fff;">
    <div style="max-width:900px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:14px;margin-bottom:20px;">
            <div style="font-size:2.5rem;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M10 2h4"/><path d="M12 14v4"/><path d="M8 6h8l1 8a5 5 0 01-10 0z"/></svg></div>
            <div>
                <h2 style="font-size:1.6rem;font-weight:800;color:#111;margin:0 0 4px;">Infant Care (Ages 0–12 Months)</h2>
                <div style="font-size:.85rem;color:#065f46;font-weight:600;">Most expensive childcare type · Highest staffing needs · Critical for attachment</div>
            </div>
        </div>

        <p style="font-size:1rem;color:#333;line-height:1.75;margin:0 0 18px;"><strong>Infant care is the most expensive and most regulated childcare type because babies require constant one-on-one attention.</strong> The national average cost is $1,000–$2,500/month — higher than in-state college tuition in many states. Despite the cost, quality infant care is linked to better cognitive and social-emotional development.</p>

        <h3 style="font-size:1.1rem;font-weight:700;color:#111;margin:24px 0 10px;">What Makes Infant Care Different</h3>
        <p style="color:#444;line-height:1.75;margin:0 0 14px;">Infants (0–12 months) cannot communicate needs verbally, cannot regulate their own body temperature or sleep, and require feeding on demand. This means:</p>
        <ul style="color:#444;line-height:1.9;padding-left:20px;margin:0 0 18px;">
            <li><strong>Staff ratios must be very low</strong> — NAEYC recommends no more than 3-4 infants per caregiver. Many states allow 1:5 or even 1:6, which is higher than recommended.</li>
            <li><strong>Safe sleep is non-negotiable</strong> — all cribs must follow AAP guidelines (back-to-sleep, firm flat surface, no blankets or bumpers). Ask to see the sleep room.</li>
            <li><strong>Feeding support matters</strong> — whether breastfed or bottle-fed, a good infant program has a system for tracking feeds, storing breast milk properly, and communicating with parents.</li>
            <li><strong>Consistent caregivers</strong> — attachment research (Ainsworth, Bowlby) shows infants need consistent relationships. High staff turnover is a serious red flag in infant rooms.</li>
        </ul>

        <h3 style="font-size:1.1rem;font-weight:700;color:#111;margin:24px 0 10px;">Average Costs by Region</h3>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:12px;margin:0 0 18px;">
            <div style="background:#f0fdf4;border:1px solid #bbf7d0;border-radius:10px;padding:14px;">
                <div style="font-weight:700;color:#065f46;margin-bottom:4px;">Most Affordable States</div>
                <div style="font-size:.85rem;color:#444;">Mississippi: ~$650/mo<br>Arkansas: ~$700/mo<br>Alabama: ~$730/mo</div>
            </div>
            <div style="background:#fef2f2;border:1px solid #fecaca;border-radius:10px;padding:14px;">
                <div style="font-weight:700;color:#dc2626;margin-bottom:4px;">Most Expensive States</div>
                <div style="font-size:.85rem;color:#444;">Massachusetts: ~$2,400/mo<br>Washington DC: ~$2,700/mo<br>California: ~$2,100/mo</div>
            </div>
            <div style="background:#f0f9ff;border:1px solid #bae6fd;border-radius:10px;padding:14px;">
                <div style="font-weight:700;color:#0369a1;margin-bottom:4px;">National Average</div>
                <div style="font-size:.85rem;color:#444;">Center-based: $1,230/mo<br>Family daycare: $800/mo<br>Nanny: $2,500–$5,000/mo</div>
            </div>
        </div>

        <div style="background:#fef3c7;border-left:4px solid #f59e0b;border-radius:0 8px 8px 0;padding:14px 18px;margin:0 0 18px;">
            <strong><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M9 18h6"/><path d="M10 22h4"/><path d="M12 2a7 7 0 00-4 12.74V17h8v-2.26A7 7 0 0012 2z"/></svg> Money-Saving Tip:</strong> Apply for CCAP subsidies before your baby is born — waitlists can be 3–6 months long. <a href="/subsidies" style="color:#065f46;font-weight:600;">See subsidy programs →</a>
        </div>

        <a href="/facilities?search=infant" style="display:inline-block;background:#065f46;color:#fff;padding:12px 24px;border-radius:8px;font-weight:700;text-decoration:none;margin-top:8px;">Find Infant Care Near You →</a>
    </div>
</section>

<!-- TODDLER -->
<section id="toddler" style="padding:48px 20px;background:#f9fafb;">
    <div style="max-width:900px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:14px;margin-bottom:20px;">
            <div style="font-size:2.5rem;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 10-16 0"/></svg></div>
            <div>
                <h2 style="font-size:1.6rem;font-weight:800;color:#111;margin:0 0 4px;">Toddler Programs (Ages 1–3 Years)</h2>
                <div style="font-size:.85rem;color:#065f46;font-weight:600;">Language explosion phase · Play-based learning · Social skill development</div>
            </div>
        </div>

        <p style="font-size:1rem;color:#333;line-height:1.75;margin:0 0 18px;"><strong>Toddler programs serve the most rapidly developing period in a child's life — from first words to full sentences, first steps to running, parallel play to early cooperation.</strong> A quality toddler room is intentionally designed for this: low shelves with accessible materials, soft surfaces for tumbles, language-rich interactions throughout the day.</p>

        <h3 style="font-size:1.1rem;font-weight:700;color:#111;margin:24px 0 10px;">What to Look for in a Toddler Program</h3>
        <ul style="color:#444;line-height:1.9;padding-left:20px;margin:0 0 18px;">
            <li><strong>Language immersion</strong> — teachers should be narrating everything ("Now we're washing hands with soap..."), reading to small groups, and responding to each child's verbal attempts</li>
            <li><strong>Predictable routines</strong> — toddlers need consistency. Ask for the daily schedule and check that it's actually followed</li>
            <li><strong>Appropriate activities</strong> — sensory play, simple puzzles, art with non-toxic materials, outdoor time daily regardless of weather</li>
            <li><strong>Potty training support</strong> — most programs start between 18-36 months. Ask about their approach: child-led vs. scheduled, how accidents are handled</li>
            <li><strong>Ratio</strong> — NAEYC recommends 1:4 for ages 1-2, 1:6 for ages 2-3. Many states allow higher ratios — verify</li>
        </ul>

        <h3 style="font-size:1.1rem;font-weight:700;color:#111;margin:24px 0 10px;">Cost Range: $900–$2,000/Month</h3>
        <p style="color:#444;line-height:1.75;margin:0 0 18px;">Toddler programs are slightly less expensive than infant care because ratios improve. Full-time toddler care averages $1,100–$1,800/month nationally. Part-time options (3 days/week) typically cost $600–$1,100/month. Family daycare homes usually charge $500–$900/month for toddlers.</p>

        <a href="/facilities?search=toddler" style="display:inline-block;background:#065f46;color:#fff;padding:12px 24px;border-radius:8px;font-weight:700;text-decoration:none;margin-top:8px;">Find Toddler Programs →</a>
    </div>
</section>

<!-- PRESCHOOL -->
<section id="preschool" style="padding:48px 20px;background:#fff;">
    <div style="max-width:900px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:14px;margin-bottom:20px;">
            <div style="font-size:2.5rem;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M16 20V10a4 4 0 00-8 0v10"/><rect x="4" y="10" width="16" height="11" rx="2"/><path d="M9 4h6"/></svg></div>
            <div>
                <h2 style="font-size:1.6rem;font-weight:800;color:#111;margin:0 0 4px;">Preschool & Pre-K (Ages 3–5 Years)</h2>
                <div style="font-size:.85rem;color:#065f46;font-weight:600;">School readiness focus · Academic and social-emotional skills · Part or full-day</div>
            </div>
        </div>

        <p style="font-size:1rem;color:#333;line-height:1.75;margin:0 0 18px;"><strong>Preschool is the most researched phase of early childhood education — high-quality programs at ages 3-5 show measurable benefits in kindergarten readiness, long-term academic achievement, and even economic outcomes into adulthood.</strong> The Perry Preschool Project found that high-quality preschool participants earned 40% more by age 40 compared to controls.</p>

        <h3 style="font-size:1.1rem;font-weight:700;color:#111;margin:24px 0 10px;">What a Quality Preschool Teaches</h3>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:14px;margin:0 0 20px;">
            <div style="background:#f0fdf4;border:1px solid #bbf7d0;border-radius:10px;padding:14px;">
                <div style="font-weight:700;color:#065f46;margin-bottom:8px;">Academic Foundations</div>
                <ul style="color:#444;font-size:.87rem;line-height:1.7;padding-left:16px;margin:0;">
                    <li>Letter recognition (pre-reading)</li>
                    <li>Counting and number sense</li>
                    <li>Shapes, colors, patterns</li>
                    <li>Pencil grip and fine motor</li>
                </ul>
            </div>
            <div style="background:#f0f9ff;border:1px solid #bae6fd;border-radius:10px;padding:14px;">
                <div style="font-weight:700;color:#0369a1;margin-bottom:8px;">Social-Emotional Skills</div>
                <ul style="color:#444;font-size:.87rem;line-height:1.7;padding-left:16px;margin:0;">
                    <li>Taking turns and sharing</li>
                    <li>Following multi-step directions</li>
                    <li>Managing emotions with support</li>
                    <li>Working in small groups</li>
                </ul>
            </div>
            <div style="background:#f5f3ff;border:1px solid #ddd6fe;border-radius:10px;padding:14px;">
                <div style="font-weight:700;color:#7c3aed;margin-bottom:8px;">Executive Function</div>
                <ul style="color:#444;font-size:.87rem;line-height:1.7;padding-left:16px;margin:0;">
                    <li>Sitting still for short periods</li>
                    <li>Transitioning between activities</li>
                    <li>Listening to a story</li>
                    <li>Waiting in line</li>
                </ul>
            </div>
        </div>

        <h3 style="font-size:1.1rem;font-weight:700;color:#111;margin:24px 0 10px;">Preschool Types: Standard, Montessori, Reggio Emilia</h3>
        <p style="color:#444;line-height:1.75;margin:0 0 14px;"><strong>Standard preschool</strong> follows a structured curriculum with teacher-led activities, circle time, and play-based learning. Most common and affordable option ($700–$1,200/month full-time).</p>
        <p style="color:#444;line-height:1.75;margin:0 0 14px;"><strong>Montessori preschool</strong> uses child-led learning with specific Montessori materials. Mixed-age classrooms (typically 3-6). Authentic programs are accredited by AMS or AMI. Generally costs 20-40% more than standard preschool.</p>
        <p style="color:#444;line-height:1.75;margin:0 0 18px;"><strong>Reggio Emilia-inspired</strong> programs emphasize project-based learning, creativity, and documentation of children's work. Less standardized than Montessori — quality varies widely.</p>

        <p style="color:#444;line-height:1.75;margin:0 0 18px;"><strong>Cost: $700–$1,500/month full-day</strong>. Part-day preschool (3-5 hours) typically costs $300–$700/month. Many states offer free or subsidized Pre-K programs — check your state's Department of Education.</p>

        <a href="/facilities?search=preschool" style="display:inline-block;background:#065f46;color:#fff;padding:12px 24px;border-radius:8px;font-weight:700;text-decoration:none;margin-top:8px;">Find Preschool Programs →</a>
    </div>
</section>

<!-- SCHOOL AGE -->
<section id="school-age" style="padding:48px 20px;background:#f9fafb;">
    <div style="max-width:900px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:14px;margin-bottom:20px;">
            <div style="font-size:2.5rem;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></div>
            <div>
                <h2 style="font-size:1.6rem;font-weight:800;color:#111;margin:0 0 4px;">School-Age Care (Ages 5–12 Years)</h2>
                <div style="font-size:.85rem;color:#065f46;font-weight:600;">Most affordable option · Before/after school · Summer programs</div>
            </div>
        </div>

        <p style="font-size:1rem;color:#333;line-height:1.75;margin:0 0 18px;"><strong>School-age care fills the supervision gap for children in kindergarten through 5th/6th grade, typically covering 6-8:30 AM before school and 3-6 PM after school — the hours when working parents are still at the office.</strong> According to the Afterschool Alliance, 25 million K-8 children are unsupervised after school in the US.</p>

        <h3 style="font-size:1.1rem;font-weight:700;color:#111;margin:24px 0 10px;">Types of School-Age Programs</h3>
        <ul style="color:#444;line-height:1.9;padding-left:20px;margin:0 0 18px;">
            <li><strong>Center-based before/after care</strong> — licensed programs often affiliated with a daycare center or preschool. Most regulated option. $200–$500/month</li>
            <li><strong>School-based programs</strong> — operated on school grounds, often less expensive. Includes YMCA and Boys & Girls Club programs. $150–$400/month</li>
            <li><strong>Summer programs</strong> — full-day coverage during summer months. Many include enrichment activities, field trips, and sports. $1,000–$2,500/month</li>
            <li><strong>Drop-in care</strong> — flexible hourly options for irregular schedules. $10–$20/hour</li>
        </ul>

        <p style="color:#444;line-height:1.75;margin:0 0 18px;"><strong>What to look for:</strong> Homework help time, enrichment activities (sports, arts, STEM), licensed staff with background checks, secure pickup procedures, and outdoor time. Ask about the ratio — NAEYC recommends 1:10-15 for school-age children.</p>

        <div style="background:#e0f2fe;border:1px solid #7dd3fc;border-radius:10px;padding:14px 18px;margin:0 0 18px;">
            <strong>Did you know?</strong> The Child and Dependent Care Tax Credit covers after-school care costs. If you spend $3,000+ on one child's care, you may claim 20-35% as a credit. <a href="/subsidies" style="color:#065f46;font-weight:600;">See all subsidy options →</a>
        </div>

        <a href="/facilities?search=school+age" style="display:inline-block;background:#065f46;color:#fff;padding:12px 24px;border-radius:8px;font-weight:700;text-decoration:none;margin-top:8px;">Find School-Age Programs →</a>
    </div>
</section>

<!-- HEAD START -->
<section id="head-start" style="padding:48px 20px;background:#fff;">
    <div style="max-width:900px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:14px;margin-bottom:20px;">
            <div style="font-size:2.5rem;"><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></div>
            <div>
                <h2 style="font-size:1.6rem;font-weight:800;color:#111;margin:0 0 4px;">Head Start & Early Head Start (Free)</h2>
                <div style="font-size:.85rem;color:#065f46;font-weight:600;">Free for income-eligible families · Comprehensive services · 1.3M+ children served annually</div>
            </div>
        </div>

        <p style="font-size:1rem;color:#333;line-height:1.75;margin:0 0 18px;"><strong>Head Start is completely free for income-eligible families and provides not just childcare, but comprehensive health, nutrition, and family support services — making it the most comprehensive early childhood program available in the US.</strong> The program has served 40 million children since 1965.</p>

        <h3 style="font-size:1.1rem;font-weight:700;color:#111;margin:24px 0 10px;">Head Start vs. Early Head Start</h3>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:16px;margin:0 0 20px;">
            <div style="background:#f0fdf4;border:2px solid #065f46;border-radius:12px;padding:18px;">
                <div style="font-weight:800;color:#065f46;margin-bottom:8px;font-size:1rem;">Early Head Start</div>
                <ul style="color:#444;font-size:.87rem;line-height:1.8;padding-left:16px;margin:0;">
                    <li>Pregnant women + children 0–3 years</li>
                    <li>Home visits and/or center-based</li>
                    <li>Prenatal support available</li>
                    <li>Income: at or below 100% FPL</li>
                    <li>Foster children qualify automatically</li>
                </ul>
            </div>
            <div style="background:#f0fdf4;border:2px solid #065f46;border-radius:12px;padding:18px;">
                <div style="font-weight:800;color:#065f46;margin-bottom:8px;font-size:1rem;">Head Start</div>
                <ul style="color:#444;font-size:.87rem;line-height:1.8;padding-left:16px;margin:0;">
                    <li>Children ages 3–5 (pre-K)</li>
                    <li>Center-based (typically part-day)</li>
                    <li>10% of slots for children with disabilities</li>
                    <li>Income: at or below 100% FPL</li>
                    <li>Some programs offer full-day</li>
                </ul>
            </div>
        </div>

        <h3 style="font-size:1.1rem;font-weight:700;color:#111;margin:24px 0 10px;">What's Included (Beyond Childcare)</h3>
        <ul style="color:#444;line-height:1.9;padding-left:20px;margin:0 0 18px;">
            <li><strong>Health screenings</strong> — vision, hearing, dental, developmental. Referrals to specialists included</li>
            <li><strong>Nutrition</strong> — meals meet USDA nutrition standards, all food provided</li>
            <li><strong>Parent engagement</strong> — parenting classes, family support workers, leadership opportunities</li>
            <li><strong>Disabilities services</strong> — children with IEPs served. 10% of enrollment reserved for children with disabilities</li>
        </ul>

        <div style="background:#fef3c7;border-left:4px solid #f59e0b;border-radius:0 8px 8px 0;padding:14px 18px;margin:0 0 18px;">
            <strong>⏰ Apply Early:</strong> Head Start waitlists are often 6–18 months. Apply during pregnancy for Early Head Start. Use <a href="https://eclkc.hhs.gov/center-locator" target="_blank" rel="noopener" style="color:#065f46;font-weight:600;">Head Start's locator</a> to find your nearest program.
        </div>

        <a href="/facilities?search=head+start" style="display:inline-block;background:#065f46;color:#fff;padding:12px 24px;border-radius:8px;font-weight:700;text-decoration:none;margin-top:8px;">Find Head Start Programs →</a>
    </div>
</section>

<!-- FAMILY DAYCARE -->
<section id="family-daycare" style="padding:48px 20px;background:#f9fafb;">
    <div style="max-width:900px;margin:0 auto;">
        <div style="display:flex;align-items:center;gap:14px;margin-bottom:20px;">
            <div style="font-size:2.5rem;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg></div>
            <div>
                <h2 style="font-size:1.6rem;font-weight:800;color:#111;margin:0 0 4px;">Family Daycare Homes</h2>
                <div style="font-size:.85rem;color:#065f46;font-weight:600;">Home-based · Smaller groups · Often more affordable · State-licensed</div>
            </div>
        </div>

        <p style="font-size:1rem;color:#333;line-height:1.75;margin:0 0 18px;"><strong>Family daycare homes provide childcare in a residential setting, typically with 4–6 children under the care of a licensed provider — offering a more intimate, home-like environment that many families prefer for infants and toddlers.</strong> All states license family daycare homes separately from childcare centers.</p>

        <h3 style="font-size:1.1rem;font-weight:700;color:#111;margin:24px 0 10px;">Pros and Cons of Family Daycare</h3>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin:0 0 20px;">
            <div style="background:#f0fdf4;border:1px solid #bbf7d0;border-radius:10px;padding:16px;">
                <div style="font-weight:700;color:#065f46;margin-bottom:8px;">✓ Advantages</div>
                <ul style="color:#444;font-size:.87rem;line-height:1.8;padding-left:16px;margin:0;">
                    <li>Smaller group size (typically 4-6)</li>
                    <li>More flexible hours/schedule</li>
                    <li>Often 10-30% less expensive than centers</li>
                    <li>Mixed-age groups (siblings together)</li>
                    <li>Home-like environment</li>
                    <li>Often more individual attention</li>
                </ul>
            </div>
            <div style="background:#fef2f2;border:1px solid #fecaca;border-radius:10px;padding:16px;">
                <div style="font-weight:700;color:#dc2626;margin-bottom:8px;">✗ Potential Drawbacks</div>
                <ul style="color:#444;font-size:.87rem;line-height:1.8;padding-left:16px;margin:0;">
                    <li>Provider illness = no backup coverage</li>
                    <li>Less oversight than center-based care</li>
                    <li>Fewer resources/materials</li>
                    <li>Less opportunity for socialization</li>
                    <li>Provider turnover risk</li>
                    <li>Quality varies widely</li>
                </ul>
            </div>
        </div>

        <h3 style="font-size:1.1rem;font-weight:700;color:#111;margin:24px 0 10px;">What to Verify Before Enrolling</h3>
        <p style="color:#444;line-height:1.75;margin:0 0 14px;">Always verify: (1) current state license — check your state's childcare licensing database, (2) background checks for all household members over 18, (3) CPR/first aid certification, (4) last inspection report. Many states post inspection records online.</p>

        <a href="/facilities?search=home+daycare" style="display:inline-block;background:#065f46;color:#fff;padding:12px 24px;border-radius:8px;font-weight:700;text-decoration:none;margin-top:8px;">Find Family Daycare Homes →</a>
    </div>
</section>

<!-- HOW TO CHOOSE -->
<section style="padding:48px 20px;background:#fff;border-top:1px solid #e5e7eb;">
    <div style="max-width:900px;margin:0 auto;">
        <h2 style="font-size:1.5rem;font-weight:800;color:#111;margin:0 0 12px;">How to Choose the Right Program Type</h2>
        <p style="color:#444;line-height:1.75;margin:0 0 20px;"><strong>The right program depends on your child's age, your work schedule, and your budget — in that order.</strong> Start with the age requirements, then filter by schedule compatibility, then compare costs.</p>

        <div style="display:grid;gap:16px;margin:0 0 28px;">
            <div style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;padding:18px;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">If your child is under 12 months:</div>
                <p style="color:#444;font-size:.9rem;line-height:1.7;margin:0;">Look for dedicated infant rooms with 1:3-4 ratios, consistent caregivers, and AAP-compliant safe sleep. Apply for CCAP now — waitlists are long. Family daycare is worth considering for smaller group sizes.</p>
            </div>
            <div style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;padding:18px;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">If your child is 1–3 years old:</div>
                <p style="color:#444;font-size:.9rem;line-height:1.7;margin:0;">Prioritize language-rich environments. Ask how many words/sentences staff say to children daily. Apply for Early Head Start if income-eligible. Check whether the program aligns with your potty training approach.</p>
            </div>
            <div style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;padding:18px;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">If your child is 3–5 years old:</div>
                <p style="color:#444;font-size:.9rem;line-height:1.7;margin:0;">Focus on school readiness. Apply for Head Start if eligible. Check if your state has a free Pre-K program. If choosing private preschool, look for NAEYC accreditation. Consider curriculum approach (Montessori, Reggio, standard).</p>
            </div>
            <div style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;padding:18px;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">If your child is school-age (5–12):</div>
                <p style="color:#444;font-size:.9rem;line-height:1.7;margin:0;">Look for before/after school programs near your child's school. YMCA and Boys & Girls Club often have excellent programs. Check whether costs are covered by the Child and Dependent Care Tax Credit.</p>
            </div>
        </div>

        <div style="text-align:center;">
            <a href="/facilities" style="display:inline-block;background:#065f46;color:#fff;padding:14px 32px;border-radius:10px;font-weight:700;font-size:1rem;text-decoration:none;margin-right:12px;">Browse All Centers</a>
            <a href="/subsidies" style="display:inline-block;background:#f59e0b;color:#fff;padding:14px 32px;border-radius:10px;font-weight:700;font-size:1rem;text-decoration:none;">Check Subsidies</a>
        </div>
    </div>
</section>

<!-- FAQ -->
<section style="padding:48px 20px;background:#f9fafb;">
    <div style="max-width:800px;margin:0 auto;">
        <h2 style="font-size:1.5rem;font-weight:800;color:#111;margin:0 0 8px;text-align:center;">Frequently Asked Questions</h2>
        <p style="color:#555;text-align:center;margin:0 0 28px;font-size:.9rem;">Answers to the most common questions about childcare program types.</p>

        <div style="display:grid;gap:10px;">
            <details style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:16px 20px;font-weight:600;color:#111;cursor:pointer;list-style:none;display:flex;justify-content:space-between;align-items:center;">What type of childcare is best for infants? <span>+</span></summary>
                <div style="padding:0 20px 16px;color:#444;font-size:.9rem;line-height:1.7;">For infants (0-12 months), center-based infant care with a 1:3 or 1:4 ratio is best. Look for NAEYC-accredited programs with consistent caregivers, safe sleep practices following AAP guidelines, and daily feeding logs. Family daycare homes can also be excellent for infants due to smaller group sizes and a more personal relationship with one caregiver.</div>
            </details>
            <details style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:16px 20px;font-weight:600;color:#111;cursor:pointer;list-style:none;display:flex;justify-content:space-between;align-items:center;">What is the difference between preschool and daycare? <span>+</span></summary>
                <div style="padding:0 20px 16px;color:#444;font-size:.9rem;line-height:1.7;">Preschool typically runs part-day (3-5 hours) and focuses on school readiness for ages 3-5. Daycare/childcare centers offer full-day coverage (6-12 hours) for a wider age range. Many centers offer both — a preschool program in the morning with extended care available for working parents. The lines have blurred significantly as both increasingly focus on early education.</div>
            </details>
            <details style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:16px 20px;font-weight:600;color:#111;cursor:pointer;list-style:none;display:flex;justify-content:space-between;align-items:center;">How much does childcare cost by program type? <span>+</span></summary>
                <div style="padding:0 20px 16px;color:#444;font-size:.9rem;line-height:1.7;">Average monthly costs: Infant care $1,000–$2,500, Toddler programs $900–$2,000, Preschool $700–$1,500, School-age before/after care $200–$700, Head Start $0 (free for eligible families), Family daycare $500–$1,500. Costs vary significantly by state — Massachusetts and California are among the most expensive, while Mississippi and Arkansas are the most affordable.</div>
            </details>
            <details style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:16px 20px;font-weight:600;color:#111;cursor:pointer;list-style:none;display:flex;justify-content:space-between;align-items:center;">What is a good staff-to-child ratio? <span>+</span></summary>
                <div style="padding:0 20px 16px;color:#444;font-size:.9rem;line-height:1.7;">NAEYC recommends: Infants (0-12 months) 1:3-4, Young toddlers (1-2 years) 1:4-5, Older toddlers (2-3 years) 1:6, Preschool (3-5 years) 1:7-10, School-age 1:10-15. Lower ratios mean more individual attention. Always ask about the ratio in the specific classroom your child will be in, not just the overall center average. State minimums often allow higher ratios than NAEYC recommends.</div>
            </details>
            <details style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:16px 20px;font-weight:600;color:#111;cursor:pointer;list-style:none;display:flex;justify-content:space-between;align-items:center;">What is Head Start and who qualifies? <span>+</span></summary>
                <div style="padding:0 20px 16px;color:#444;font-size:.9rem;line-height:1.7;">Head Start is a free federal program for children ages 3-5 from families at or below the federal poverty level. Early Head Start serves pregnant women and children ages 0-3. Both programs include education, health screenings, nutrition, and family support. Foster children qualify automatically regardless of income. Apply at <a href="https://eclkc.hhs.gov/center-locator" target="_blank" rel="noopener" style="color:#065f46;">headstart.gov</a> or through your local program. Waitlists are common — apply early.</div>
            </details>
            <details style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:16px 20px;font-weight:600;color:#111;cursor:pointer;list-style:none;display:flex;justify-content:space-between;align-items:center;">What is NAEYC accreditation and does it matter? <span>+</span></summary>
                <div style="padding:0 20px 16px;color:#444;font-size:.9rem;line-height:1.7;">NAEYC (National Association for the Education of Young Children) accreditation is the gold standard for childcare quality. Accredited programs meet rigorous standards covering curriculum, staff qualifications, health and safety, family engagement, and more. Only about 10% of US childcare programs are NAEYC-accredited, making it a meaningful quality signal. That said, many excellent programs haven't pursued accreditation due to cost — don't rule out non-accredited options.</div>
            </details>
            <details style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:16px 20px;font-weight:600;color:#111;cursor:pointer;list-style:none;display:flex;justify-content:space-between;align-items:center;">Is a family daycare home safe? <span>+</span></summary>
                <div style="padding:0 20px 16px;color:#444;font-size:.9rem;line-height:1.7;">Licensed family daycare homes are regulated by state agencies and subject to inspections. Before enrolling, verify the current license on your state's licensing database, check for inspection violations, confirm background checks for all household members over 18, and verify CPR/first aid certification. Unlicensed family daycare is riskier — in most states it's illegal to operate without a license if caring for more than 1-2 children who aren't family members.</div>
            </details>
            <details style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:16px 20px;font-weight:600;color:#111;cursor:pointer;list-style:none;display:flex;justify-content:space-between;align-items:center;">Can I use subsidies for any program type? <span>+</span></summary>
                <div style="padding:0 20px 16px;color:#444;font-size:.9rem;line-height:1.7;">CCAP/CCDF subsidies can be used at any licensed childcare provider — centers, family daycare homes, and in some states, relatives. The provider must be CCAP-certified, which most licensed providers are. Head Start is a separate program from CCAP. The Child and Dependent Care Tax Credit applies to all types of paid childcare, including after-school programs and summer camps. See our <a href="/subsidies" style="color:#065f46;">subsidies guide</a> for details.</div>
            </details>
        </div>
    </div>
</section>

<!-- Cross-links CTA -->
<section style="padding:40px 20px;background:#065f46;">
    <div style="max-width:900px;margin:0 auto;text-align:center;">
        <h2 style="font-size:1.4rem;font-weight:800;color:#fff;margin:0 0 12px;">Ready to Start Your Search?</h2>
        <p style="color:rgba(255,255,255,.88);margin:0 0 24px;font-size:.95rem;">Browse 26,000+ licensed childcare centers and filter by program type, age group, and location.</p>
        <div style="display:flex;flex-wrap:wrap;gap:12px;justify-content:center;">
            <a href="/facilities" style="background:#fff;color:#065f46;padding:12px 24px;border-radius:8px;font-weight:700;text-decoration:none;font-size:.95rem;">Browse All Centers</a>
            <a href="/states" style="background:rgba(255,255,255,.15);color:#fff;padding:12px 24px;border-radius:8px;font-weight:700;text-decoration:none;font-size:.95rem;border:1px solid rgba(255,255,255,.3);">Browse by State</a>
            <a href="/subsidies" style="background:rgba(255,255,255,.15);color:#fff;padding:12px 24px;border-radius:8px;font-weight:700;text-decoration:none;font-size:.95rem;border:1px solid rgba(255,255,255,.3);">Check Subsidies</a>
        </div>
    </div>
</section>

<div style="max-width:900px;margin:0 auto;padding:16px 20px;text-align:center;">
    <p style="font-size:.78rem;color:#888;">Last updated: {{ date('F j, Y') }} · DaycareHub Editorial Team · Sources: NAEYC, Child Care Aware of America, HHS/ACF, NIEER</p>
</div>

</div>
@endsection
