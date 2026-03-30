@extends('layouts.app')
@section('title', 'Types of Childcare Programs — Compare All Options | DaycareHub')
@section('meta_description', 'Compare 8 types of licensed childcare programs: infant care, toddler, preschool, full-day, part-time, Montessori, after-school, and home daycare.')
@section('content')
<div style="margin-top:64px;padding:48px 20px;max-width:1000px;margin-left:auto;margin-right:auto;">
    <h1 style="font-size:2rem;font-weight:800;color:#1e3a5f;margin-bottom:12px;">Types of Childcare Programs</h1>
    <p style="color:#555;font-size:1rem;margin-bottom:36px;line-height:1.7;">Understanding the different program types helps you choose the best fit for your child's age, development stage, and your family's schedule.</p>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:20px;">
        <div style="background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:22px;">
            <div style="font-size:2rem;margin-bottom:10px;">🍼</div>
            <h2 style="font-size:1rem;font-weight:700;color:#1e3a5f;margin:0 0 4px;">Infant Care</h2>
            <div style="font-size:.78rem;color:#2563eb;font-weight:600;margin-bottom:8px;">Ages: 0–18 months</div>
            <p style="font-size:.87rem;color:#555;line-height:1.65;margin:0 0 14px;">Specialized care for babies. Lower ratios (1:3–4), feeding schedules, sleep routines, and developmental milestone monitoring.</p>
            <a href="/facilities?search=infant" style="display:inline-block;background:#eff6ff;color:#1d4ed8;padding:7px 16px;border-radius:6px;font-size:.82rem;font-weight:600;text-decoration:none;">Find Centers →</a>
        </div>
        <div style="background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:22px;">
            <div style="font-size:2rem;margin-bottom:10px;">🧒</div>
            <h2 style="font-size:1rem;font-weight:700;color:#1e3a5f;margin:0 0 4px;">Toddler Programs</h2>
            <div style="font-size:.78rem;color:#2563eb;font-weight:600;margin-bottom:8px;">Ages: 18 months – 3 years</div>
            <p style="font-size:.87rem;color:#555;line-height:1.65;margin:0 0 14px;">Focused on language development, walking, and early social skills. Play-based learning in small groups.</p>
            <a href="/facilities?search=toddler" style="display:inline-block;background:#eff6ff;color:#1d4ed8;padding:7px 16px;border-radius:6px;font-size:.82rem;font-weight:600;text-decoration:none;">Find Centers →</a>
        </div>
        <div style="background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:22px;">
            <div style="font-size:2rem;margin-bottom:10px;">🎒</div>
            <h2 style="font-size:1rem;font-weight:700;color:#1e3a5f;margin:0 0 4px;">Preschool</h2>
            <div style="font-size:.78rem;color:#2563eb;font-weight:600;margin-bottom:8px;">Ages: 3–5 years</div>
            <p style="font-size:.87rem;color:#555;line-height:1.65;margin:0 0 14px;">School-readiness programs developing literacy, numeracy, and social-emotional skills. Half-day or full-day options.</p>
            <a href="/facilities?search=preschool" style="display:inline-block;background:#eff6ff;color:#1d4ed8;padding:7px 16px;border-radius:6px;font-size:.82rem;font-weight:600;text-decoration:none;">Find Centers →</a>
        </div>
        <div style="background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:22px;">
            <div style="font-size:2rem;margin-bottom:10px;">🏫</div>
            <h2 style="font-size:1rem;font-weight:700;color:#1e3a5f;margin:0 0 4px;">Full-Day Childcare</h2>
            <div style="font-size:.78rem;color:#2563eb;font-weight:600;margin-bottom:8px;">Ages: All ages</div>
            <p style="font-size:.87rem;color:#555;line-height:1.65;margin:0 0 14px;">6–10 hours of structured care. Ideal for working parents needing coverage from early morning to evening.</p>
            <a href="/facilities?search=full" style="display:inline-block;background:#eff6ff;color:#1d4ed8;padding:7px 16px;border-radius:6px;font-size:.82rem;font-weight:600;text-decoration:none;">Find Centers →</a>
        </div>
        <div style="background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:22px;">
            <div style="font-size:2rem;margin-bottom:10px;">🌱</div>
            <h2 style="font-size:1rem;font-weight:700;color:#1e3a5f;margin:0 0 4px;">Montessori</h2>
            <div style="font-size:.78rem;color:#2563eb;font-weight:600;margin-bottom:8px;">Ages: 2–6 years</div>
            <p style="font-size:.87rem;color:#555;line-height:1.65;margin:0 0 14px;">Child-led learning based on the Montessori method. Mixed-age classrooms, independence, hands-on materials.</p>
            <a href="/facilities?search=montessori" style="display:inline-block;background:#eff6ff;color:#1d4ed8;padding:7px 16px;border-radius:6px;font-size:.82rem;font-weight:600;text-decoration:none;">Find Centers →</a>
        </div>
        <div style="background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:22px;">
            <div style="font-size:2rem;margin-bottom:10px;">📚</div>
            <h2 style="font-size:1rem;font-weight:700;color:#1e3a5f;margin:0 0 4px;">After-School Care</h2>
            <div style="font-size:.78rem;color:#2563eb;font-weight:600;margin-bottom:8px;">Ages: 5–12 years</div>
            <p style="font-size:.87rem;color:#555;line-height:1.65;margin:0 0 14px;">Before- and after-school programs. Includes homework help, enrichment activities, and safe supervision.</p>
            <a href="/facilities?search=school" style="display:inline-block;background:#eff6ff;color:#1d4ed8;padding:7px 16px;border-radius:6px;font-size:.82rem;font-weight:600;text-decoration:none;">Find Centers →</a>
        </div>
    </div>
</div>
@endsection
