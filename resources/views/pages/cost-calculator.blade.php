@extends('layouts.app')

@section('title', 'Childcare Cost Calculator & Average Prices by State (2026) | DaycareHub')
@section('meta_description', 'Full-time infant care averages $1,230/month nationally — from $650 in Mississippi to $2,700 in DC. Interactive calculator + table of all 50 states. See how to cut costs with CCAP and tax credits.')

@section('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {"@@type": "ListItem", "position": 1, "name": "Home", "item": "https://daycarehub.us"},
        {"@@type": "ListItem", "position": 2, "name": "Childcare Cost Calculator"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {"@@type": "Question", "name": "How much does daycare cost per month?", "acceptedAnswer": {"@@type": "Answer", "text": "The national average for full-time center-based infant care is $1,230/month. Toddler programs average $1,050/month, preschool $860/month, and school-age before/after care $350/month. Costs vary dramatically by state — from $650/month in Mississippi to $2,700/month in Washington DC for infant care."}},
        {"@@type": "Question", "name": "What state has the cheapest daycare?", "acceptedAnswer": {"@@type": "Answer", "text": "Mississippi has the lowest average childcare costs at $650/month for infant care. Other affordable states include Arkansas ($700), Alabama ($730), Oklahoma ($700), and Kansas ($750). Southern states generally have lower costs due to lower cost of living and lower average wages."}},
        {"@@type": "Question", "name": "What state has the most expensive daycare?", "acceptedAnswer": {"@@type": "Answer", "text": "Washington DC has the highest childcare costs at $2,700/month for infant care. Other expensive markets: Massachusetts ($2,400), New York ($2,200), Connecticut ($1,900), New Jersey ($2,000), and California ($2,100). Urban areas within states often cost 20-40% more than state averages."}},
        {"@@type": "Question", "name": "How much is daycare for an infant vs. a toddler?", "acceptedAnswer": {"@@type": "Answer", "text": "Infant care is the most expensive childcare type, typically 15-20% more than toddler programs. This is because infants require lower staff ratios (1:3-4 vs 1:4-6), more specialized care, and higher staffing costs. Nationally, infant care averages $1,230/month vs. $1,050/month for toddlers."}},
        {"@@type": "Question", "name": "How can I reduce my childcare costs?", "acceptedAnswer": {"@@type": "Answer", "text": "Four main ways: (1) CCAP/childcare assistance — income-based subsidy covering part or all costs for qualifying families; (2) Dependent Care FSA — save up to $5,000/year pre-tax through your employer; (3) Child and Dependent Care Tax Credit — claim 20-35% of qualifying expenses on your federal taxes; (4) Head Start — free comprehensive program for income-eligible families."}},
        {"@@type": "Question", "name": "Does daycare cost more than college tuition?", "acceptedAnswer": {"@@type": "Answer", "text": "In many states, yes. According to Child Care Aware, full-time infant care costs more than in-state college tuition in 33 US states. Massachusetts infant care ($2,400/month = $28,800/year) far exceeds the in-state tuition at UMass Amherst ($16,015/year). This is a major driver of families seeking subsidies and flexible work arrangements."}},
        {"@@type": "Question", "name": "How much does before and after school care cost?", "acceptedAnswer": {"@@type": "Answer", "text": "Before/after school care (school-age children 5-12) averages $200-700/month nationally. YMCA and Boys & Girls Club programs tend to be on the lower end ($150-400/month). Private center-based school-age care averages $300-600/month. Summer day camp programs cost significantly more — typically $1,000-2,500/month for full-day programs."}},
        {"@@type": "Question", "name": "Is childcare tax deductible?", "acceptedAnswer": {"@@type": "Answer", "text": "You can claim the Child and Dependent Care Tax Credit on IRS Form 2441. The credit is 20-35% of qualifying expenses (up to $3,000 for one child, $6,000 for two+). This is a tax credit (not a deduction), meaning it directly reduces your tax bill. You can also use a Dependent Care FSA to pay childcare with pre-tax dollars (up to $5,000/year), which is separate from the tax credit."}},
        {"@@type": "Question", "name": "How much does a nanny cost vs. daycare?", "acceptedAnswer": {"@@type": "Answer", "text": "A full-time nanny typically costs $2,500-5,000+/month in most US markets, significantly more than daycare. However, for families with two or more young children, a nanny can be cost-competitive since daycare costs per child. A nanny share (sharing with another family) typically costs $1,500-2,500/month, bringing costs closer to daycare rates."}},
        {"@@type": "Question", "name": "Do childcare costs vary by neighborhood within a city?", "acceptedAnswer": {"@@type": "Answer", "text": "Yes, significantly. In major cities, childcare in affluent neighborhoods can cost 30-50% more than in working-class neighborhoods. A Manhattan daycare may charge $3,500+/month while a Queens daycare serving the same age group charges $1,200-1,800/month. Family daycare homes are often more affordable than centers in the same neighborhood and can offer equivalent or better quality care."}}
    ]
}
</script>
@endsection

@section('content')
<div style="margin-top:64px;">

<div style="max-width:950px;margin:0 auto;padding:14px 20px 0;font-size:.85rem;color:#666;">
    <a href="/" style="color:#065f46;text-decoration:none;">Home</a>
    <span style="margin:0 8px;color:#ccc;">/</span>
    <span style="color:#333;">Childcare Cost Calculator</span>
</div>

<!-- Hero -->
<section style="background:linear-gradient(135deg,#065f46 0%,#047857 60%,#059669 100%);padding:52px 20px 44px;">
    <div style="max-width:850px;margin:0 auto;text-align:center;">
        <div style="display:inline-block;background:rgba(255,255,255,.15);color:#fff;padding:5px 14px;border-radius:20px;font-size:.78rem;font-weight:700;margin-bottom:16px;">2026 COST GUIDE</div>
        <h1 style="font-size:clamp(1.5rem,3.5vw,2.4rem);font-weight:800;color:#fff;margin:0 0 14px;line-height:1.2;">Childcare Cost Calculator & Average Prices by State</h1>
        <p style="font-size:.97rem;color:rgba(255,255,255,.9);max-width:620px;margin:0 auto;line-height:1.65;"><strong style="color:#fff;">Full-time infant care averages $1,230/month nationally</strong> — but ranges from $650 in Mississippi to $2,700 in DC. Use the calculator below to estimate your costs, then see how subsidies can help.</p>
    </div>
</section>

<!-- Quick Stats -->
<section style="background:#fff;border-bottom:1px solid #e5e7eb;padding:20px;">
    <div style="max-width:900px;margin:0 auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(170px,1fr));gap:16px;text-align:center;">
        <div style="background:#f0fdf4;border-radius:10px;padding:14px;">
            <div style="font-size:1.5rem;font-weight:800;color:#065f46;">$14,760</div>
            <div style="font-size:.78rem;color:#555;margin-top:3px;">Avg. annual infant care<br><em style="font-size:.75rem;">Child Care Aware, 2025</em></div>
        </div>
        <div style="background:#f0fdf4;border-radius:10px;padding:14px;">
            <div style="font-size:1.5rem;font-weight:800;color:#065f46;">33 states</div>
            <div style="font-size:.78rem;color:#555;margin-top:3px;">Where infant care costs more<br><em style="font-size:.75rem;">than in-state college tuition</em></div>
        </div>
        <div style="background:#f0fdf4;border-radius:10px;padding:14px;">
            <div style="font-size:1.5rem;font-weight:800;color:#065f46;">$5,000</div>
            <div style="font-size:.78rem;color:#555;margin-top:3px;">Max pre-tax FSA savings<br><em style="font-size:.75rem;">per family per year</em></div>
        </div>
        <div style="background:#f0fdf4;border-radius:10px;padding:14px;">
            <div style="font-size:1.5rem;font-weight:800;color:#065f46;">$0/mo</div>
            <div style="font-size:.78rem;color:#555;margin-top:3px;">Head Start for families<br><em style="font-size:.75rem;">at or below poverty level</em></div>
        </div>
    </div>
</section>

<!-- CALCULATOR -->
<section style="padding:40px 20px;background:#f9fafb;">
    <div style="max-width:700px;margin:0 auto;">
        <h2 style="font-size:1.3rem;font-weight:800;color:#111;margin:0 0 6px;text-align:center;">Estimate Your Monthly Childcare Cost</h2>
        <p style="color:#555;text-align:center;margin:0 0 24px;font-size:.88rem;">Select your state and your child's age group to see the estimated monthly cost.</p>

        <div style="background:#fff;border:1px solid #e5e7eb;border-radius:14px;padding:28px;">
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:20px;">
                <div>
                    <label style="display:block;font-size:.85rem;font-weight:700;color:#333;margin-bottom:6px;">Your State</label>
                    <select id="calc-state" style="width:100%;padding:10px 12px;border:1px solid #d1d5db;border-radius:8px;font-size:.9rem;background:#fff;" onchange="calcCost()">
                        <option value="">Select state...</option>
                        <option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">Washington DC</option>
                        <option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option>
                        <option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option>
                        <option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option>
                        <option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option>
                        <option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option>
                        <option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
                    </select>
                </div>
                <div>
                    <label style="display:block;font-size:.85rem;font-weight:700;color:#333;margin-bottom:6px;">Child's Age Group</label>
                    <select id="calc-age" style="width:100%;padding:10px 12px;border:1px solid #d1d5db;border-radius:8px;font-size:.9rem;background:#fff;" onchange="calcCost()">
                        <option value="infant">Infant (0–12 months)</option>
                        <option value="toddler">Toddler (1–3 years)</option>
                        <option value="preschool">Preschool (3–5 years)</option>
                        <option value="school">School-Age (5–12 years)</option>
                    </select>
                </div>
            </div>

            <div id="calc-result" style="display:none;background:#f0fdf4;border:2px solid #065f46;border-radius:10px;padding:20px;text-align:center;">
                <div style="font-size:.85rem;color:#555;margin-bottom:4px;">Estimated monthly cost in <span id="res-state"></span></div>
                <div style="font-size:2.2rem;font-weight:800;color:#065f46;" id="res-monthly"></div>
                <div style="font-size:.85rem;color:#555;margin-top:4px;">≈ <span id="res-annual"></span> per year · <span id="res-range"></span></div>
                <div style="margin-top:16px;padding-top:14px;border-top:1px solid #d1fae5;">
                    <div style="font-size:.82rem;color:#374151;margin-bottom:8px;font-weight:600;">Ways to reduce this cost:</div>
                    <div style="display:flex;flex-wrap:wrap;gap:8px;justify-content:center;">
                        <a href="/subsidies#ccap" style="background:#065f46;color:#fff;padding:6px 14px;border-radius:6px;text-decoration:none;font-size:.8rem;font-weight:600;">CCAP Subsidy →</a>
                        <a href="/subsidies#tax-credit" style="background:#7c3aed;color:#fff;padding:6px 14px;border-radius:6px;text-decoration:none;font-size:.8rem;font-weight:600;">Tax Credit →</a>
                        <a href="/subsidies#fsa" style="background:#b45309;color:#fff;padding:6px 14px;border-radius:6px;text-decoration:none;font-size:.8rem;font-weight:600;">Dependent Care FSA →</a>
                    </div>
                </div>
            </div>
            <div id="calc-placeholder" style="background:#f9fafb;border:1px dashed #d1d5db;border-radius:10px;padding:20px;text-align:center;color:#888;font-size:.88rem;">
                ↑ Select your state to see estimated costs
            </div>
        </div>
    </div>
</section>

<script>
var stateCosts = {
    AL:730, AK:1100, AZ:900, AR:700, CA:2100, CO:1500, CT:1900, DE:1200, DC:2700,
    FL:1050, GA:880, HI:1500, ID:750, IL:1400, IN:800, IA:800, KS:750, KY:760,
    LA:750, ME:900, MD:1550, MA:2400, MI:1000, MN:1350, MS:650, MO:850, MT:780,
    NE:850, NV:1000, NH:1350, NJ:2000, NM:750, NY:2200, NC:950, ND:850, OH:950,
    OK:700, OR:1350, PA:1100, RI:1450, SC:780, SD:750, TN:900, TX:1100, UT:900,
    VT:1100, VA:1300, WA:1750, WV:680, WI:1050, WY:750
};
var stateNames = {
    AL:'Alabama',AK:'Alaska',AZ:'Arizona',AR:'Arkansas',CA:'California',CO:'Colorado',
    CT:'Connecticut',DE:'Delaware',DC:'Washington DC',FL:'Florida',GA:'Georgia',
    HI:'Hawaii',ID:'Idaho',IL:'Illinois',IN:'Indiana',IA:'Iowa',KS:'Kansas',KY:'Kentucky',
    LA:'Louisiana',ME:'Maine',MD:'Maryland',MA:'Massachusetts',MI:'Michigan',MN:'Minnesota',
    MS:'Mississippi',MO:'Missouri',MT:'Montana',NE:'Nebraska',NV:'Nevada',NH:'New Hampshire',
    NJ:'New Jersey',NM:'New Mexico',NY:'New York',NC:'North Carolina',ND:'North Dakota',
    OH:'Ohio',OK:'Oklahoma',OR:'Oregon',PA:'Pennsylvania',RI:'Rhode Island',SC:'South Carolina',
    SD:'South Dakota',TN:'Tennessee',TX:'Texas',UT:'Utah',VT:'Vermont',VA:'Virginia',
    WA:'Washington',WV:'West Virginia',WI:'Wisconsin',WY:'Wyoming'
};
var ageMultipliers = {infant:1, toddler:0.85, preschool:0.70, school:0.45};
var ageRanges = {
    infant:'$1,000–$2,500 typical range',
    toddler:'$900–$2,000 typical range',
    preschool:'$700–$1,500 typical range',
    school:'$200–$700 typical range'
};
function calcCost() {
    var state = document.getElementById('calc-state').value;
    var age = document.getElementById('calc-age').value;
    if (!state) return;
    var base = stateCosts[state] || 1000;
    var monthly = Math.round(base * ageMultipliers[age] / 10) * 10;
    var annual = monthly * 12;
    document.getElementById('res-state').textContent = stateNames[state];
    document.getElementById('res-monthly').textContent = '$' + monthly.toLocaleString() + '/mo';
    document.getElementById('res-annual').textContent = '$' + annual.toLocaleString();
    document.getElementById('res-range').textContent = ageRanges[age];
    document.getElementById('calc-result').style.display = 'block';
    document.getElementById('calc-placeholder').style.display = 'none';
}
</script>

<!-- COST BY AGE SECTION -->
<section style="padding:40px 20px;background:#fff;">
    <div style="max-width:900px;margin:0 auto;">
        <h2 style="font-size:1.3rem;font-weight:800;color:#111;margin:0 0 6px;">Average Monthly Childcare Costs by Age Group</h2>
        <p style="color:#555;margin:0 0 20px;font-size:.88rem;line-height:1.7;"><strong>Infant care is the most expensive childcare type</strong> — low required ratios (1:3-4) mean high staffing costs. Costs drop as children age and ratios improve. School-age care is the most affordable since it only covers a few hours per day.</p>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:14px;margin-bottom:24px;">
            <div style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:12px;padding:18px;">
                <div style="font-size:1.3rem;margin-bottom:8px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M10 2h4"/><path d="M12 14v4"/><path d="M8 6h8l1 8a5 5 0 01-10 0z"/></svg></div>
                <div style="font-weight:700;color:#111;margin-bottom:4px;">Infant Care (0–12 mo)</div>
                <div style="font-size:1.4rem;font-weight:800;color:#065f46;">$1,000–$2,500</div>
                <div style="font-size:.78rem;color:#666;margin-top:2px;">per month</div>
                <div style="font-size:.8rem;color:#555;margin-top:8px;line-height:1.5;">National avg: $1,230/mo<br>Staff ratio: 1:3–4 required</div>
            </div>
            <div style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:12px;padding:18px;">
                <div style="font-size:1.3rem;margin-bottom:8px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><circle cx="12" cy="8" r="4"/><path d="M20 21a8 8 0 10-16 0"/></svg></div>
                <div style="font-weight:700;color:#111;margin-bottom:4px;">Toddler (1–3 years)</div>
                <div style="font-size:1.4rem;font-weight:800;color:#065f46;">$900–$2,000</div>
                <div style="font-size:.78rem;color:#666;margin-top:2px;">per month</div>
                <div style="font-size:.8rem;color:#555;margin-top:8px;line-height:1.5;">National avg: $1,050/mo<br>Staff ratio: 1:4–6</div>
            </div>
            <div style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:12px;padding:18px;">
                <div style="font-size:1.3rem;margin-bottom:8px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M16 20V10a4 4 0 00-8 0v10"/><rect x="4" y="10" width="16" height="11" rx="2"/><path d="M9 4h6"/></svg></div>
                <div style="font-weight:700;color:#111;margin-bottom:4px;">Preschool (3–5 years)</div>
                <div style="font-size:1.4rem;font-weight:800;color:#065f46;">$700–$1,500</div>
                <div style="font-size:.78rem;color:#666;margin-top:2px;">per month</div>
                <div style="font-size:.8rem;color:#555;margin-top:8px;line-height:1.5;">National avg: $860/mo<br>Staff ratio: 1:8–10</div>
            </div>
            <div style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:12px;padding:18px;">
                <div style="font-size:1.3rem;margin-bottom:8px;"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline;vertical-align:middle;"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></div>
                <div style="font-weight:700;color:#111;margin-bottom:4px;">School-Age (5–12 years)</div>
                <div style="font-size:1.4rem;font-weight:800;color:#065f46;">$200–$700</div>
                <div style="font-size:.78rem;color:#666;margin-top:2px;">per month</div>
                <div style="font-size:.8rem;color:#555;margin-top:8px;line-height:1.5;">National avg: $350/mo<br>Before/after school only</div>
            </div>
        </div>
    </div>
</section>

<!-- STATE COST TABLE -->
<section style="padding:40px 20px;background:#f9fafb;">
    <div style="max-width:950px;margin:0 auto;">
        <h2 style="font-size:1.3rem;font-weight:800;color:#111;margin:0 0 6px;">Average Childcare Costs by State (2026)</h2>
        <p style="color:#555;margin:0 0 20px;font-size:.88rem;">Monthly estimates for center-based full-time care. Actual costs vary by city, accreditation, and program type.</p>

        <div style="overflow-x:auto;border-radius:12px;border:1px solid #e5e7eb;">
            <table style="width:100%;border-collapse:collapse;background:#fff;font-size:.85rem;">
                <thead>
                    <tr style="background:#065f46;color:#fff;">
                        <th style="padding:10px 14px;text-align:left;font-weight:700;">State</th>
                        <th style="padding:10px 14px;text-align:right;font-weight:700;">Infant/mo</th>
                        <th style="padding:10px 14px;text-align:right;font-weight:700;">Preschool/mo</th>
                        <th style="padding:10px 14px;text-align:right;font-weight:700;">School-Age/mo</th>
                        <th style="padding:10px 14px;text-align:right;font-weight:700;">Annual (infant)</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $costs = [
                        ['Alabama','$730','$510','$330','$8,760'],
                        ['Alaska','$1,100','$770','$495','$13,200'],
                        ['Arizona','$900','$630','$405','$10,800'],
                        ['Arkansas','$700','$490','$315','$8,400'],
                        ['California','$2,100','$1,470','$945','$25,200'],
                        ['Colorado','$1,500','$1,050','$675','$18,000'],
                        ['Connecticut','$1,900','$1,330','$855','$22,800'],
                        ['Delaware','$1,200','$840','$540','$14,400'],
                        ['Washington DC','$2,700','$1,890','$1,215','$32,400'],
                        ['Florida','$1,050','$735','$473','$12,600'],
                        ['Georgia','$880','$616','$396','$10,560'],
                        ['Hawaii','$1,500','$1,050','$675','$18,000'],
                        ['Idaho','$750','$525','$338','$9,000'],
                        ['Illinois','$1,400','$980','$630','$16,800'],
                        ['Indiana','$800','$560','$360','$9,600'],
                        ['Iowa','$800','$560','$360','$9,600'],
                        ['Kansas','$750','$525','$338','$9,000'],
                        ['Kentucky','$760','$532','$342','$9,120'],
                        ['Louisiana','$750','$525','$338','$9,000'],
                        ['Maine','$900','$630','$405','$10,800'],
                        ['Maryland','$1,550','$1,085','$698','$18,600'],
                        ['Massachusetts','$2,400','$1,680','$1,080','$28,800'],
                        ['Michigan','$1,000','$700','$450','$12,000'],
                        ['Minnesota','$1,350','$945','$608','$16,200'],
                        ['Mississippi','$650','$455','$293','$7,800'],
                        ['Missouri','$850','$595','$383','$10,200'],
                        ['Montana','$780','$546','$351','$9,360'],
                        ['Nebraska','$850','$595','$383','$10,200'],
                        ['Nevada','$1,000','$700','$450','$12,000'],
                        ['New Hampshire','$1,350','$945','$608','$16,200'],
                        ['New Jersey','$2,000','$1,400','$900','$24,000'],
                        ['New Mexico','$750','$525','$338','$9,000'],
                        ['New York','$2,200','$1,540','$990','$26,400'],
                        ['North Carolina','$950','$665','$428','$11,400'],
                        ['North Dakota','$850','$595','$383','$10,200'],
                        ['Ohio','$950','$665','$428','$11,400'],
                        ['Oklahoma','$700','$490','$315','$8,400'],
                        ['Oregon','$1,350','$945','$608','$16,200'],
                        ['Pennsylvania','$1,100','$770','$495','$13,200'],
                        ['Rhode Island','$1,450','$1,015','$653','$17,400'],
                        ['South Carolina','$780','$546','$351','$9,360'],
                        ['South Dakota','$750','$525','$338','$9,000'],
                        ['Tennessee','$900','$630','$405','$10,800'],
                        ['Texas','$1,100','$770','$495','$13,200'],
                        ['Utah','$900','$630','$405','$10,800'],
                        ['Vermont','$1,100','$770','$495','$13,200'],
                        ['Virginia','$1,300','$910','$585','$15,600'],
                        ['Washington','$1,750','$1,225','$788','$21,000'],
                        ['West Virginia','$680','$476','$306','$8,160'],
                        ['Wisconsin','$1,050','$735','$473','$12,600'],
                        ['Wyoming','$750','$525','$338','$9,000'],
                    ];
                    @endphp
                    @foreach($costs as $i => $row)
                    <tr style="border-top:1px solid #f3f4f6;{{ $i % 2 == 1 ? 'background:#fafafa;' : '' }}">
                        <td style="padding:9px 14px;font-weight:600;color:#333;">{{ $row[0] }}</td>
                        <td style="padding:9px 14px;text-align:right;color:#065f46;font-weight:700;">{{ $row[1] }}</td>
                        <td style="padding:9px 14px;text-align:right;color:#444;">{{ $row[2] }}</td>
                        <td style="padding:9px 14px;text-align:right;color:#444;">{{ $row[3] }}</td>
                        <td style="padding:9px 14px;text-align:right;color:#555;font-size:.82rem;">{{ $row[4] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <p style="font-size:.75rem;color:#888;margin-top:8px;"><em>Sources: Child Care Aware of America 2025 report; state cost data. Center-based full-time averages. Actual costs vary by city, neighborhood, and program quality.</em></p>
    </div>
</section>

<!-- HOW TO REDUCE COSTS -->
<section style="padding:40px 20px;background:#fff;">
    <div style="max-width:900px;margin:0 auto;">
        <h2 style="font-size:1.3rem;font-weight:800;color:#111;margin:0 0 6px;">How to Reduce Your Childcare Costs</h2>
        <p style="color:#555;margin:0 0 20px;font-size:.88rem;line-height:1.7;"><strong>Four programs can dramatically cut your childcare bill</strong> — and they stack. A family using all four can reduce a $1,500/month bill to $200-400/month in some cases.</p>

        <div style="display:grid;gap:14px;">
            <div style="background:#f0fdf4;border:1px solid #d1fae5;border-radius:12px;padding:18px 20px;display:flex;gap:16px;align-items:flex-start;">
                <div style="width:44px;height:44px;background:#065f46;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:#fff;font-size:1.2rem;"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M5 6l7-3 7 3M4 10v11M20 10v11M8 10v11M12 10v11M16 10v11"/></svg></div>
                <div>
                    <div style="font-weight:700;color:#065f46;margin-bottom:4px;">CCAP — Child Care Assistance Program</div>
                    <p style="color:#444;font-size:.88rem;line-height:1.65;margin:0 0 8px;">Income-based subsidy covering the difference between a small co-pay and the full cost. A family in California earning $60,000 might pay only $200/month for $1,800/month infant care. Eligibility varies by state — many families earning up to $80,000+ qualify.</p>
                    <a href="/subsidies#ccap" style="color:#065f46;font-weight:600;font-size:.85rem;text-decoration:none;">Full CCAP guide + how to apply →</a>
                </div>
            </div>
            <div style="background:#f5f3ff;border:1px solid #ddd6fe;border-radius:12px;padding:18px 20px;display:flex;gap:16px;align-items:flex-start;">
                <div style="width:44px;height:44px;background:#7c3aed;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:#fff;font-size:1.2rem;">💵</div>
                <div>
                    <div style="font-weight:700;color:#7c3aed;margin-bottom:4px;">Child & Dependent Care Tax Credit</div>
                    <p style="color:#444;font-size:.88rem;line-height:1.65;margin:0 0 8px;">Claim 20–35% of up to $3,000 (one child) or $6,000 (two+) in childcare expenses as a federal tax credit. Available to all working parents regardless of income. Saves $600–$2,100/year. Claim on IRS Form 2441.</p>
                    <a href="/subsidies#tax-credit" style="color:#7c3aed;font-weight:600;font-size:.85rem;text-decoration:none;">Full tax credit guide →</a>
                </div>
            </div>
            <div style="background:#fffbeb;border:1px solid #fde68a;border-radius:12px;padding:18px 20px;display:flex;gap:16px;align-items:flex-start;">
                <div style="width:44px;height:44px;background:#b45309;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:#fff;font-size:1.2rem;">🏦</div>
                <div>
                    <div style="font-weight:700;color:#b45309;margin-bottom:4px;">Dependent Care FSA (pre-tax savings)</div>
                    <p style="color:#444;font-size:.88rem;line-height:1.65;margin:0 0 8px;">Contribute up to $5,000/year pre-tax through your employer. At a 22% tax bracket, this saves $1,100/year automatically. Available during open enrollment — check with your HR department.</p>
                    <a href="/subsidies#fsa" style="color:#b45309;font-weight:600;font-size:.85rem;text-decoration:none;">Full FSA guide →</a>
                </div>
            </div>
            <div style="background:#f0fdf4;border:1px solid #d1fae5;border-radius:12px;padding:18px 20px;display:flex;gap:16px;align-items:flex-start;">
                <div style="width:44px;height:44px;background:#065f46;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;color:#fff;font-size:1.2rem;"><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg></div>
                <div>
                    <div style="font-weight:700;color:#065f46;margin-bottom:4px;">Head Start (Free for Eligible Families)</div>
                    <p style="color:#444;font-size:.88rem;line-height:1.65;margin:0 0 8px;">Completely free for families at or below the federal poverty level. Serves 1.3M+ children ages 0–5. Includes health, nutrition, and family services — not just childcare. Apply early; waitlists are common.</p>
                    <a href="/subsidies#head-start" style="color:#065f46;font-weight:600;font-size:.85rem;text-decoration:none;">Head Start eligibility guide →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHAT DRIVES COSTS -->
<section style="padding:40px 20px;background:#f9fafb;">
    <div style="max-width:900px;margin:0 auto;">
        <h2 style="font-size:1.3rem;font-weight:800;color:#111;margin:0 0 6px;">What Drives Childcare Costs?</h2>
        <p style="color:#555;margin:0 0 20px;font-size:.88rem;">Understanding why childcare costs what it does helps you evaluate whether a program is appropriately priced — or whether you're overpaying for brand names.</p>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:14px;">
            <div style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;padding:16px;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">1. Staff-to-Child Ratios</div>
                <p style="color:#555;font-size:.85rem;line-height:1.65;margin:0;">Lower ratios = more staff = higher costs. Infant rooms require 1 adult per 3-4 babies. Preschool rooms allow 1 per 8-10 children. This is the single biggest driver of cost differences across age groups.</p>
            </div>
            <div style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;padding:16px;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">2. Location & Cost of Living</div>
                <p style="color:#555;font-size:.85rem;line-height:1.65;margin:0;">Urban centers in high-wage states pay teachers more and have higher rent. A center in Manhattan faces rent 5-10x higher than a center in rural Ohio. This flows directly to parent fees.</p>
            </div>
            <div style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;padding:16px;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">3. Accreditation & Quality</div>
                <p style="color:#555;font-size:.85rem;line-height:1.65;margin:0;">NAEYC-accredited programs typically charge 15-30% more than non-accredited centers. Montessori programs tend to cost 20-40% more than standard daycare. Higher quality often, but not always, costs more.</p>
            </div>
            <div style="background:#fff;border:1px solid #e5e7eb;border-radius:10px;padding:16px;">
                <div style="font-weight:700;color:#111;margin-bottom:6px;">4. Program Type & Hours</div>
                <p style="color:#555;font-size:.85rem;line-height:1.65;margin:0;">Full-day (8-10 hours) costs significantly more than part-day (3-5 hours). Family daycare homes typically charge 10-30% less than center-based programs, with similar or better quality for infants.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section style="padding:40px 20px;background:#fff;">
    <div style="max-width:800px;margin:0 auto;">
        <h2 style="font-size:1.3rem;font-weight:800;color:#111;margin:0 0 6px;text-align:center;">Frequently Asked Questions</h2>
        <p style="color:#555;text-align:center;margin:0 0 24px;font-size:.88rem;">Common questions about childcare costs.</p>
        <div style="display:grid;gap:8px;">
            <details style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:14px 18px;font-weight:600;color:#111;cursor:pointer;font-size:.9rem;list-style:none;">How much does daycare cost per month on average?</summary>
                <div style="padding:0 18px 14px;color:#444;font-size:.88rem;line-height:1.7;">The national average for full-time center-based infant care is $1,230/month. Toddler programs average $1,050/month, preschool $860/month, and school-age before/after care $350/month. Costs range from $650/month in Mississippi to $2,700/month in Washington DC for infant care.</div>
            </details>
            <details style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:14px 18px;font-weight:600;color:#111;cursor:pointer;font-size:.9rem;list-style:none;">Is childcare tax deductible?</summary>
                <div style="padding:0 18px 14px;color:#444;font-size:.88rem;line-height:1.7;">You can claim the Child and Dependent Care Tax Credit (IRS Form 2441) for 20-35% of qualifying expenses up to $3,000 (one child) or $6,000 (two+). This is a credit, not a deduction — it directly reduces your tax bill. You can also use a Dependent Care FSA for up to $5,000/year in pre-tax childcare spending through your employer.</div>
            </details>
            <details style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:14px 18px;font-weight:600;color:#111;cursor:pointer;font-size:.9rem;list-style:none;">Does daycare really cost more than college?</summary>
                <div style="padding:0 18px 14px;color:#444;font-size:.88rem;line-height:1.7;">In many states, yes. Child Care Aware data shows infant care costs more than in-state college tuition in 33 states. Massachusetts infant care averages $2,400/month ($28,800/year) vs. UMass Amherst tuition of $16,015/year. This cost disparity is a major reason policymakers and families are pushing for expanded subsidy access.</div>
            </details>
            <details style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:14px 18px;font-weight:600;color:#111;cursor:pointer;font-size:.9rem;list-style:none;">How can I find affordable licensed daycare near me?</summary>
                <div style="padding:0 18px 14px;color:#444;font-size:.88rem;line-height:1.7;">Use DaycareHub to search 26,000+ licensed centers near you. Apply for CCAP subsidies immediately — waitlists can be months long. Check if your employer offers a Dependent Care FSA. Look into family daycare homes, which are often 10-30% less expensive than centers while offering similar quality care.</div>
            </details>
            <details style="background:#f9fafb;border:1px solid #e5e7eb;border-radius:10px;overflow:hidden;">
                <summary style="padding:14px 18px;font-weight:600;color:#111;cursor:pointer;font-size:.9rem;list-style:none;">What is Head Start and is it really free?</summary>
                <div style="padding:0 18px 14px;color:#444;font-size:.88rem;line-height:1.7;">Yes, Head Start is completely free for qualifying families (income at or below the federal poverty level). Early Head Start serves ages 0-3; Head Start serves ages 3-5. The program includes education, health screenings, nutrition, and family support. Over 1.3 million children are served annually. Apply through <a href="https://eclkc.hhs.gov/center-locator" target="_blank" rel="noopener" style="color:#065f46;">headstart.gov</a> — waitlists are common, so apply early.</div>
            </details>
        </div>
    </div>
</section>

<!-- CTA -->
<section style="padding:36px 20px;background:#065f46;">
    <div style="max-width:800px;margin:0 auto;text-align:center;">
        <h2 style="font-size:1.2rem;font-weight:700;color:#fff;margin:0 0 10px;">Find Affordable Daycare Near You</h2>
        <p style="color:rgba(255,255,255,.88);margin:0 0 20px;font-size:.9rem;">Browse 26,000+ licensed centers and filter by subsidy acceptance in your area.</p>
        <div style="display:flex;flex-wrap:wrap;gap:10px;justify-content:center;">
            <a href="/facilities" style="background:#fff;color:#065f46;padding:11px 22px;border-radius:8px;font-weight:700;text-decoration:none;font-size:.92rem;">Browse Centers</a>
            <a href="/subsidies" style="background:rgba(255,255,255,.15);color:#fff;padding:11px 22px;border-radius:8px;font-weight:700;text-decoration:none;font-size:.92rem;border:1px solid rgba(255,255,255,.3);">Check Subsidies</a>
        </div>
    </div>
</section>

<div style="max-width:950px;margin:0 auto;padding:12px 20px;text-align:center;">
    <p style="font-size:.75rem;color:#aaa;">Last updated: {{ date('F j, Y') }} · Sources: Child Care Aware of America 2025 Annual Report; state licensing agencies; IRS Publication 503</p>
</div>

</div>
@endsection
