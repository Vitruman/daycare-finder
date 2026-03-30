@extends('layouts.app')
@section('title', 'Childcare Subsidies & Financial Assistance Programs | DaycareHub')
@section('meta_description', 'Learn about CCAP, Head Start, Child Care Tax Credit, and other programs that can reduce or eliminate childcare costs. Find subsidies by state.')
@section('content')
<div style="margin-top:64px;padding:48px 20px;max-width:960px;margin-left:auto;margin-right:auto;">
    <h1 style="font-size:2rem;font-weight:800;color:#065f46;margin-bottom:12px;">Childcare Financial Assistance Programs</h1>
    <p style="color:#555;font-size:1rem;margin-bottom:36px;line-height:1.7;">Childcare costs average $10,000–$30,000 per year. Multiple federal and state programs can significantly reduce your costs.</p>

    <div style="display:grid;gap:20px;">

        <div style="background:#eff6ff;border:1px solid #bfdbfe;border-radius:12px;padding:22px;">
            <h2 style="font-size:1.05rem;font-weight:700;color:#1d4ed8;margin:0 0 8px;">🏛️ Child Care and Development Fund (CCAP)</h2>
            <p style="font-size:.88rem;color:#444;line-height:1.7;margin:0 0 10px;">The primary federal childcare subsidy. Provides vouchers to qualifying low- and moderate-income families. Eligibility based on income, family size, and work/school status.</p>
            <div style="font-size:.82rem;background:rgba(255,255,255,.7);padding:10px 14px;border-radius:8px;"><strong>How to apply:</strong> Search "CCAP" or "childcare assistance" + your state name, or contact your state's social services agency.</div>
        </div>

        <div style="background:#f0fdf4;border:1px solid #bbf7d0;border-radius:12px;padding:22px;">
            <h2 style="font-size:1.05rem;font-weight:700;color:#065f46;margin:0 0 8px;">⭐ Head Start & Early Head Start</h2>
            <p style="font-size:.88rem;color:#444;line-height:1.7;margin:0 0 10px;">Free comprehensive early childhood education for children up to age 5 from low-income families. Federally funded, locally operated, includes health, nutrition, and parent involvement.</p>
            <div style="font-size:.82rem;background:rgba(255,255,255,.7);padding:10px 14px;border-radius:8px;"><strong>How to apply:</strong> Visit headstart.gov or contact your local Head Start program directly.</div>
        </div>

        <div style="background:#f5f3ff;border:1px solid #ddd6fe;border-radius:12px;padding:22px;">
            <h2 style="font-size:1.05rem;font-weight:700;color:#7c3aed;margin:0 0 8px;">💵 Child and Dependent Care Tax Credit</h2>
            <p style="font-size:.88rem;color:#444;line-height:1.7;margin:0 0 10px;">A federal tax credit of 20–35% of qualified childcare expenses (up to $3,000 for one child, $6,000 for two+). Available to working parents regardless of income level.</p>
            <div style="font-size:.82rem;background:rgba(255,255,255,.7);padding:10px 14px;border-radius:8px;"><strong>How to apply:</strong> Claim on IRS Form 2441 when filing federal taxes. Keep receipts and your provider's EIN.</div>
        </div>

        <div style="background:#fffbeb;border:1px solid #fde68a;border-radius:12px;padding:22px;">
            <h2 style="font-size:1.05rem;font-weight:700;color:#b45309;margin:0 0 8px;">🏦 Dependent Care FSA (DCFSA)</h2>
            <p style="font-size:.88rem;color:#444;line-height:1.7;margin:0 0 10px;">A pre-tax benefit offered by many employers. Contribute up to $5,000/year tax-free for childcare expenses. Can be combined with the Child and Dependent Care Tax Credit.</p>
            <div style="font-size:.82rem;background:rgba(255,255,255,.7);padding:10px 14px;border-radius:8px;"><strong>How to apply:</strong> Enroll through your employer's benefits portal during open enrollment.</div>
        </div>

        <div style="background:#f0fdfa;border:1px solid #99f6e4;border-radius:12px;padding:22px;">
            <h2 style="font-size:1.05rem;font-weight:700;color:#0f766e;margin:0 0 8px;">🎒 State Pre-K Programs</h2>
            <p style="font-size:.88rem;color:#444;line-height:1.7;margin:0 0 10px;">44 states offer publicly funded pre-K programs for 3- and 4-year-olds. Many are free or low-cost. Quality and availability varies significantly by state.</p>
            <div style="font-size:.82rem;background:rgba(255,255,255,.7);padding:10px 14px;border-radius:8px;"><strong>How to apply:</strong> Contact your local school district or state Department of Education.</div>
        </div>

    </div>

    <div style="background:#1e3a5f;color:#fff;border-radius:12px;padding:28px;margin-top:32px;text-align:center;">
        <h3 style="font-size:1.1rem;font-weight:700;margin-bottom:8px;">Find Licensed Daycare in Your Area</h3>
        <p style="opacity:.85;margin-bottom:18px;font-size:.9rem;">Browse 26,000+ verified centers and filter by program type and location.</p>
        <a href="/facilities" style="display:inline-block;background:#f59e0b;color:#fff;padding:13px 28px;border-radius:8px;font-weight:700;text-decoration:none;">Search Centers</a>
    </div>
</div>
@endsection
