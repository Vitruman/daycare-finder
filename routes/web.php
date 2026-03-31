<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\AddictionController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\StateController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');


// Blog routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');

// State routes
Route::get('/states', [StateController::class, 'index'])->name('states.index');
Route::get('/states/{state}', [StateController::class, 'show'])->name('states.show');

// Facility routes
Route::get('/facilities', [FacilityController::class, 'index'])->name('facilities.index');
Route::get('/facilities/{facility:name_id}', [FacilityController::class, 'show'])->name('facilities.show');

// Robots.txt

Route::get('/programs', fn() => view('programs.index'))->name('programs.index');
Route::redirect('/treatment', '/programs', 301);
Route::redirect('/treatment/{slug}', '/programs', 301);

Route::redirect('/addiction', '/programs', 301);
Route::redirect('/addiction/{slug}', '/programs', 301);


Route::get('/subsidies', fn() => view('subsidies.index'))->name('subsidies.index');
Route::redirect('/insurance', '/subsidies', 301);
Route::redirect('/insurance/{slug}', '/subsidies', 301);

Route::redirect('/resources', '/blog', 301);
Route::redirect('/resources/{slug}', '/blog', 301);

Route::get('/contact', fn() => view('pages.contact'))->name('contact');
Route::get('/checklist', fn() => view('pages.checklist'))->name('checklist');
Route::get('/childcare-cost', fn() => view('pages.cost-calculator'))->name('cost-calculator');
Route::get('/childcare-safety', fn() => view('pages.safety'))->name('safety');
Route::get('/privacy-policy', fn() => view('pages.privacy'))->name('privacy');
Route::get('/terms-of-service', fn() => view('pages.terms'))->name('terms');

Route::get('/robots.txt', function () {
    $sitemap = url('/sitemap.xml');
    return response("User-agent: *\nAllow: /\nDisallow: /admin\nDisallow: /livewire\n\nSitemap: {$sitemap}\n", 200)
        ->header('Content-Type', 'text/plain');
});


// Compare (vs) pages
Route::redirect('/compare', '/programs', 301);
Route::redirect('/compare/{slug}', '/programs', 301);
// Sitemap
Route::get('/sitemap.xml', function () {
    $urls = [
        ['loc' => url('/'), 'lastmod' => now()->toAtomString()],
        ['loc' => route('about'), 'lastmod' => now()->toAtomString()],
        ['loc' => route('blog.index'), 'lastmod' => now()->toAtomString()],
        ['loc' => route('facilities.index'), 'lastmod' => now()->toAtomString()],
        ['loc' => route('states.index'), 'lastmod' => now()->toAtomString()],
    ];

    // Blog posts
    Blog::published()->select('slug', 'updated_at')->latest('updated_at')->chunk(200, function ($blogs) use (&$urls) {
        foreach ($blogs as $blog) {
            $urls[] = [
                'loc' => route('blog.show', $blog),
                'lastmod' => optional($blog->updated_at)->toAtomString(),
            ];
        }
    });

    // Treatment pages
    foreach (['inpatient-rehab','outpatient-programs','medical-detox','medication-assisted-treatment','dual-diagnosis','sober-living','intensive-outpatient'] as $slug) {
        $urls[] = ['loc' => url("/treatment/$slug"), 'lastmod' => now()->toAtomString()];
    }
    $urls[] = ['loc' => url('/treatment'), 'lastmod' => now()->toAtomString()];

    // Insurance pages
    foreach (['aetna','anthem','bcbs','cigna','humana','kaiser','medicaid','medicare','tricare','uhc'] as $slug) {
        $urls[] = ['loc' => url("/insurance/$slug"), 'lastmod' => now()->toAtomString()];
    }
    $urls[] = ['loc' => url('/insurance'), 'lastmod' => now()->toAtomString()];

    // Addiction pages
    foreach (['alcohol','opioids','cocaine','methamphetamine','heroin','prescription-drugs','benzodiazepines','fentanyl'] as $slug) {
        $urls[] = ['loc' => url("/addiction/$slug"), 'lastmod' => now()->toAtomString()];
    }
    $urls[] = ['loc' => url('/addiction'), 'lastmod' => now()->toAtomString()];

    // Resources pages
    foreach (['how-to-choose-rehab','what-to-expect-in-rehab','paying-for-treatment','family-guide','relapse-prevention'] as $slug) {
        $urls[] = ['loc' => url("/resources/$slug"), 'lastmod' => now()->toAtomString()];
    }
    $urls[] = ['loc' => url('/resources'), 'lastmod' => now()->toAtomString()];
    $urls[] = ['loc' => url('/contact'), 'lastmod' => now()->toAtomString()];


    // Compare pages
    $urls[] = ['loc' => route('compare.index'), 'lastmod' => now()->toAtomString()];
    foreach (['inpatient-vs-outpatient','cbt-vs-dbt','methadone-vs-suboxone','30-day-vs-90-day-rehab','aetna-vs-bcbs','luxury-vs-standard-rehab','aa-vs-smart-recovery','private-vs-state-funded','detox-vs-residential','individual-vs-group-therapy','holistic-vs-traditional','cigna-vs-uhc','faith-based-vs-secular','short-term-vs-long-term-mat','rehab-vs-therapy-only','vivitrol-vs-suboxone','php-vs-iop','medicaid-vs-private-insurance','sober-living-vs-halfway-house','emdr-vs-cbt','family-therapy-vs-individual','court-ordered-vs-voluntary','telehealth-vs-in-person','12-step-vs-non-12-step','dual-diagnosis-vs-standard','naltrexone-vs-disulfiram','medication-free-vs-mat','men-vs-women-rehab','adolescent-vs-adult-rehab','detox-at-home-vs-medical','in-state-vs-out-of-state','evidence-based-vs-experimental','group-home-vs-private-rehab','morning-vs-evening-iop','rapid-detox-vs-traditional-detox','executive-vs-standard-rehab','contingency-management-vs-cbt','acamprosate-vs-naltrexone','suboxone-vs-methadone-clinic','wilderness-vs-traditional-rehab','relapse-prevention-vs-12-step','trauma-focused-vs-general-rehab','free-vs-paid-rehab','short-stay-vs-long-stay','christian-vs-secular-rehab','art-therapy-vs-talk-therapy','opioid-detox-vs-alcohol-detox'] as $slug) {
        $urls[] = ['loc' => url("/compare/$slug"), 'lastmod' => now()->toAtomString()];
    }

    // State pages
    $states = \App\Models\Organization::query()
        ->whereNotNull('state')
        ->select('state')
        ->distinct()
        ->pluck('state');
    foreach ($states as $state) {
        $urls[] = [
            'loc' => route('states.show', strtolower($state)),
            'lastmod' => now()->toAtomString(),
        ];
    }

    $xml = view('sitemap', ['urls' => $urls]);
    return response($xml, 200)->header('Content-Type', 'application/xml');
});

Route::redirect('/guides', '/blog');
Route::redirect('/guides/', '/blog');

// ZIP routes  
Route::get('/zip', [\App\Http\Controllers\ZipController::class, 'index'])->name('zip.index');
Route::get('/zip/{zip}', [\App\Http\Controllers\ZipController::class, 'show'])->name('zip.show');

// City routes
Route::get('/cities/{state}/{city}', [\App\Http\Controllers\CityController::class, 'show'])->name('cities.show');

// Sitemap
Route::get('/sitemap.xml', function() {
    return response()->view('sitemap')->header('Content-Type', 'application/xml');
});
