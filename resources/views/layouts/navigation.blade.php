<header class="dh-header">
    <div class="dh-inner">
        <a href="/" class="dh-logo">
            <div class="dh-logo-box">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            </div>
            <div style="display:flex;flex-direction:column;">
                <span class="dh-logo-name">DaycareHub</span>
                <span class="dh-logo-sub">Find Licensed Childcare</span>
            </div>
        </a>

        <nav class="dh-nav-links">
            <a href="/facilities">Find Daycare</a>
            <a href="/programs">Programs</a>
            <a href="/states">States</a>
            <a href="/subsidies">Subsidies</a>
            <a href="/blog">Blog</a>
            <a href="/facilities" class="dh-nav-cta" style="margin-left:6px;">Search Centers</a>
        </nav>

        <button class="dh-burger" id="dh-burger" aria-label="Open menu" style="display:flex;" onclick="var d=document.getElementById('dh-dd');d.classList.toggle('open');">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#374151" stroke-width="2.5" stroke-linecap="round">
                <line x1="3" y1="7" x2="21" y2="7"/>
                <line x1="3" y1="12" x2="21" y2="12"/>
                <line x1="3" y1="17" x2="21" y2="17"/>
            </svg>
        </button>
    </div>

    <nav class="dh-dropdown" id="dh-dd">
        <a href="/facilities">🏫 Find Daycare Centers</a>
        <a href="/programs">📚 Program Types</a>
        <a href="/states">🗺️ Browse by State</a>
        <a href="/subsidies">💰 Subsidies &amp; Aid</a>
        <a href="/blog">✍️ Parent Blog</a>
        <a href="/checklist">📋 Tour Checklist</a>
        <a href="/about">ℹ️ About</a>
        <a href="/facilities" class="dh-dropdown-cta">Search Centers →</a>
    </nav>
</header>
<script>
if(window.innerWidth>=768){
  var b=document.getElementById('dh-burger');
  if(b)b.style.display='none';
  var n=document.querySelector('.dh-nav-links');
  if(n)n.style.display='flex';
}
window.addEventListener('resize',function(){
  var b=document.getElementById('dh-burger');
  var n=document.querySelector('.dh-nav-links');
  if(!b||!n)return;
  if(window.innerWidth>=768){b.style.display='none';n.style.display='flex';}
  else{b.style.display='flex';n.style.display='none';}
});
</script>
