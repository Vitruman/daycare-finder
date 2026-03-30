<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'How to Choose a Rehabilitation Center: Complete Guide',
                'slug' => 'how-to-choose-rehabilitation-center-complete-guide',
                'excerpt' => 'Detailed guide to choosing the right rehabilitation center. Learn what to pay attention to when selecting a treatment program.',
                'content' => '<h2>Introduction</h2>
<p>Choosing a rehabilitation center is one of the most important steps on the path to recovery. The wrong choice can lead to treatment not bringing the expected results. In this article, we will detail how to properly choose a rehabilitation center.</p>

<h2>Main Selection Criteria</h2>
<h3>1. License and Accreditation</h3>
<p>First of all, make sure the center has all necessary licenses and accreditations. Check if the facility meets medical care quality standards.</p>

<h3>2. Center Specialization</h3>
<p>Different centers specialize in different types of addiction. Choose a center that has experience working specifically with your problem.</p>

<h3>3. Treatment Methods</h3>
<p>Modern centers use various approaches: medication treatment, psychotherapy, group sessions, sports programs, etc.</p>

<h3>4. Staff Qualification</h3>
<p>Pay attention to the experience and qualifications of doctors, psychologists, and counselors. Check their certificates and reviews.</p>

<h2>Factors Affecting the Choice</h2>
<h3>Treatment Cost</h3>
<p>Rehabilitation prices can vary significantly. Clarify what is included in the cost and if there are additional payments.</p>

<h3>Center Location</h3>
<p>Convenient location is important for visits by loved ones. However, sometimes changing the environment can be beneficial for recovery.</p>

<h3>Reviews and Reputation</h3>
<p>Study reviews from former patients and their loved ones. Pay attention to the success rate of treatment.</p>

<h2>Conclusion</h2>
<p>Choosing a rehabilitation center is an individual process. We recommend visiting several centers, talking with staff and patients. Don\'t rush your choice — your future depends on it.</p>',
                'author_name' => 'Dr. Anna Petrova',
                'author_email' => 'anna.petrova@rehab-center.com',
                'meta_keywords' => ['rehabilitation', 'choosing center', 'addiction treatment', 'recommendations'],
                'meta_description' => 'Complete guide to choosing the best rehabilitation center for your recovery journey.',
                'is_published' => true,
                'published_at' => now()->subDays(7),
            ],
            [
                'title' => 'Stages of Recovery: What to Expect After Rehabilitation',
                'slug' => 'stages-of-recovery-what-to-expect-after-rehabilitation',
                'excerpt' => 'Understanding the recovery process and what stages you will go through after completing rehabilitation treatment.',
                'content' => '<h2>The Recovery Journey</h2>
<p>Recovery from addiction is a lifelong process that continues long after you leave the rehabilitation center. Understanding these stages will help you prepare for the challenges ahead and celebrate your progress.</p>

<h2>Stage 1: Early Recovery (First 30-90 Days)</h2>
<p>This is the most vulnerable period. Your body and mind are still adjusting to sobriety. Focus on:</p>
<ul>
<li>Building new habits and routines</li>
<li>Avoiding triggers and high-risk situations</li>
<li>Attending support group meetings</li>
<li>Working with a sponsor or counselor</li>
</ul>

<h2>Stage 2: Maintenance (3-12 Months)</h2>
<p>During this stage, you\'re working to maintain your sobriety while rebuilding your life. Key activities include:</p>
<ul>
<li>Developing healthy coping mechanisms</li>
<li>Rebuilding relationships with family and friends</li>
<li>Finding employment or returning to work</li>
<li>Continuing therapy and support meetings</li>
</ul>

<h2>Stage 3: Long-term Recovery (1+ Years)</h2>
<p>This stage involves ongoing personal growth and giving back to others. You may:</p>
<ul>
<li>Become a sponsor for others in recovery</li>
<li>Volunteer in the recovery community</li>
<li>Pursue advanced education or career goals</li>
<li>Help others who are struggling</li>
</ul>

<h2>Common Challenges</h2>
<h3>Emotional Triggers</h3>
<p>Learn to identify and manage emotional triggers that can lead to relapse.</p>

<h3>Life Changes</h3>
<p>Major life changes like job loss, relationship issues, or stress can be particularly dangerous during early recovery.</p>

<h3>Complacency</h3>
<p>As time passes, some people become overconfident and stop practicing recovery behaviors.</p>

<h2>Support Systems</h2>
<p>Building a strong support network is crucial for long-term success. This includes:</p>
<ul>
<li>Regular attendance at support group meetings</li>
<li>Ongoing individual or group therapy</li>
<li>Strong relationships with sober friends and family</li>
<li>Participation in sober activities and hobbies</li>
</ul>

<h2>Celebrating Progress</h2>
<p>Remember to celebrate your milestones and achievements. Recovery is a journey, not a destination. Each day of sobriety is a victory worth celebrating.</p>',
                'author_name' => 'Dr. Michael Johnson',
                'author_email' => 'michael.johnson@rehab-center.com',
                'meta_keywords' => ['recovery stages', 'rehabilitation', 'sobriety', 'addiction recovery'],
                'meta_description' => 'Learn about the different stages of recovery after rehabilitation and what to expect on your sobriety journey.',
                'is_published' => true,
                'published_at' => now()->subDays(14),
            ],
            [
                'title' => 'Family Therapy in Rehabilitation: Why It Matters',
                'slug' => 'family-therapy-in-rehabilitation-why-it-matters',
                'excerpt' => 'The importance of family involvement in addiction treatment and how family therapy can improve recovery outcomes.',
                'content' => '<h2>The Role of Family in Addiction Recovery</h2>
<p>Addiction affects not just the individual struggling with substance use, but their entire family system. Family therapy has become an essential component of comprehensive addiction treatment.</p>

<h2>Why Family Therapy Matters</h2>
<h3>Breaking the Cycle of Codependency</h3>
<p>Many families develop unhealthy patterns of interaction around addiction. Family therapy helps identify and change these destructive patterns.</p>

<h3>Healing Family Relationships</h3>
<p>Addiction often damages trust and communication within families. Therapy provides a safe space to rebuild these essential connections.</p>

<h3>Education and Understanding</h3>
<p>Family members learn about addiction as a disease, reducing stigma and increasing empathy and support.</p>

<h2>What Happens in Family Therapy</h2>
<h3>Joint Sessions</h3>
<p>The entire family participates in therapy sessions to work on communication, trust, and mutual understanding.</p>

<h3>Educational Components</h3>
<p>Families learn about addiction, recovery, and how to support their loved one effectively.</p>

<h3>Individual Family Member Support</h3>
<p>While the primary focus is on the family system, individual family members may also receive personal support.</p>

<h2>Benefits of Family Involvement</h2>
<h3>Improved Treatment Outcomes</h3>
<p>Studies show that patients with involved families have higher rates of successful recovery and lower relapse rates.</p>

<h3>Better Family Functioning</h3>
<p>Families learn healthier ways of relating to each other, benefiting everyone involved.</p>

<h3>Stronger Support Network</h3>
<p>A supportive family provides crucial emotional and practical support during recovery.</p>

<h2>When to Involve Family</h2>
<p>Family therapy can be beneficial at any stage of treatment, but it\'s particularly important when:</p>
<ul>
<li>The family has been significantly impacted by addiction</li>
<li>There are ongoing family conflicts</li>
<li>Family members need education about addiction</li>
<li>The patient wants family support in recovery</li>
</ul>

<h2>Getting Started</h2>
<p>If you\'re considering family therapy, talk to your treatment provider. They can help determine the best approach for your family\'s unique situation.</p>',
                'author_name' => 'Dr. Sarah Williams',
                'author_email' => 'sarah.williams@rehab-center.com',
                'meta_keywords' => ['family therapy', 'addiction recovery', 'family support', 'codependency'],
                'meta_description' => 'Discover why family therapy is crucial for successful addiction recovery and how it can help heal family relationships.',
                'is_published' => true,
                'published_at' => now()->subDays(21),
            ],
            [
                'title' => 'Myths About Rehabilitation: What\'s Not True',
                'slug' => 'myths-about-rehabilitation-whats-not-true',
                'excerpt' => 'Common misconceptions about rehabilitation centers and addiction treatment that prevent people from seeking help.',
                'content' => '<h2>Introduction</h2>
<p>There are many myths and misconceptions about rehabilitation and addiction treatment. These false beliefs often prevent people from seeking the help they need. Let\'s debunk some of the most common myths.</p>

<h2>Myth 1: "Rehab Doesn\'t Work"</h2>
<p><strong>Reality:</strong> Research shows that rehabilitation is highly effective. According to the National Institute on Drug Abuse, treatment reduces drug use by 40-60% and significantly decreases criminal activity and improves employment outcomes.</p>

<h2>Myth 2: "You Can Quit Cold Turkey Without Help"</h2>
<p><strong>Reality:</strong> While some people can quit on their own, many need professional help. Withdrawal symptoms can be dangerous and medical supervision is often necessary, especially for alcohol and benzodiazepines.</p>

<h2>Myth 3: "Rehab is Only for the Homeless"</h2>
<p><strong>Reality:</strong> People from all walks of life seek treatment for addiction. Professionals, executives, students, and people from all socioeconomic backgrounds benefit from rehabilitation services.</p>

<h2>Myth 4: "Once You\'re Clean, You\'re Cured"</h2>
<p><strong>Reality:</strong> Addiction is a chronic disease. While rehabilitation provides tools for recovery, ongoing support and lifestyle changes are necessary to maintain long-term sobriety.</p>

<h2>Myth 5: "All Rehab Centers Are the Same"</h2>
<p><strong>Reality:</strong> Rehabilitation centers vary greatly in their approaches, quality, and effectiveness. It\'s important to research and choose a center that matches your specific needs.</p>

<h2>Myth 6: "Rehab is Expensive and Not Covered by Insurance"</h2>
<p><strong>Reality:</strong> While some luxury programs are expensive, many affordable options exist. Most insurance plans, including Medicaid and Medicare, cover addiction treatment.</p>

<h2>Myth 7: "You Have to Hit Rock Bottom Before Getting Help"</h2>
<p><strong>Reality:</strong> Seeking help at any stage of addiction is beneficial. Early intervention often leads to better outcomes and less damage to relationships and health.</p>

<h2>Myth 8: "Relapse Means Treatment Failed"</h2>
<p><strong>Reality:</strong> Relapse is a common part of recovery for many people. It doesn\'t mean treatment failed; it means the treatment plan needs adjustment. Most people who recover have at least one relapse.</p>

<h2>Why Myths Persist</h2>
<p>These myths often stem from stigma, lack of education, and media portrayals of addiction. Breaking down these barriers is essential for people to seek the help they need.</p>

<h2>Getting Accurate Information</h2>
<p>When researching rehabilitation options, consult reputable sources like:</p>
<ul>
<li>Medical professionals</li>
<li>Certified treatment centers</li>
<li>Government health agencies</li>
<li>Support groups like AA or NA</li>
</ul>

<h2>Conclusion</h2>
<p>Don\'t let myths prevent you from seeking help. Rehabilitation can be life-changing when you find the right program and support system for your needs.</p>',
                'author_name' => 'Dr. Robert Davis',
                'author_email' => 'robert.davis@rehab-center.com',
                'meta_keywords' => ['rehab myths', 'addiction treatment', 'recovery misconceptions', 'rehabilitation facts'],
                'meta_description' => 'Common myths about rehabilitation debunked. Learn the truth about addiction treatment and recovery.',
                'is_published' => true,
                'published_at' => now()->subDays(28),
            ],
            [
                'title' => '12-Step Programs: The Foundation of Modern Rehabilitation',
                'slug' => '12-step-programs-foundation-modern-rehabilitation',
                'excerpt' => 'How 12-step programs like Alcoholics Anonymous revolutionized addiction treatment and continue to help millions recover.',
                'content' => '<h2>The Birth of 12-Step Programs</h2>
<p>The 12-step approach to addiction recovery originated with Alcoholics Anonymous (AA) in 1935. Founded by Bill Wilson and Dr. Bob Smith, AA developed a spiritual approach to recovery that has helped millions worldwide.</p>

<h2>The 12 Steps</h2>
<ol>
<li><strong>We admitted we were powerless over alcohol—that our lives had become unmanageable.</strong> Recognizing the need for help is the first step.</li>
<li><strong>Came to believe that a Power greater than ourselves could restore us to sanity.</strong> Developing faith in a higher power.</li>
<li><strong>Made a decision to turn our will and our lives over to the care of God as we understood Him.</strong> Surrendering control.</li>
<li><strong>Made a searching and fearless moral inventory of ourselves.</strong> Self-reflection and honesty.</li>
<li><strong>Admitted to God, to ourselves, and to another human being the exact nature of our wrongs.</strong> Confession and accountability.</li>
<li><strong>Were entirely ready to have God remove all these defects of character.</strong> Willingness for change.</li>
<li><strong>Humbly asked Him to remove our shortcomings.</strong> Seeking help with personal growth.</li>
<li><strong>Made a list of all persons we had harmed, and became willing to make amends to them all.</strong> Making amends preparation.</li>
<li><strong>Made direct amends to such people wherever possible, except when to do so would injure them or others.</strong> Restitution.</li>
<li><strong>Continued to take personal inventory and when we were wrong promptly admitted it.</strong> Ongoing self-reflection.</li>
<li><strong>Sought through prayer and meditation to improve our conscious contact with God as we understood Him.</strong> Spiritual growth.</li>
<li><strong>Having had a spiritual awakening as the result of these steps, we tried to carry this message to alcoholics, and to practice these principles in all our affairs.</strong> Service and helping others.</li>
</ol>

<h2>Why 12-Step Programs Work</h2>
<h3>Peer Support</h3>
<p>The fellowship provides a supportive community of people who understand the challenges of recovery.</p>

<h3>Structured Approach</h3>
<p>The steps provide a clear roadmap for recovery, reducing confusion and providing direction.</p>

<h3>Accountability</h3>
<p>Working with a sponsor provides accountability and guidance through the recovery process.</p>

<h3>Spiritual Component</h3>
<p>The spiritual aspects help many people find meaning and purpose beyond their addiction.</p>

<h2>Modern Applications</h2>
<p>While originally developed for alcohol addiction, 12-step principles have been adapted for many other addictions and compulsive behaviors:</p>
<ul>
<li>Narcotics Anonymous (NA)</li>
<li>Al-Anon (for families)</li>
<li>Gamblers Anonymous</li>
<li>Overeaters Anonymous</li>
<li>Sex and Love Addicts Anonymous</li>
</ul>

<h2>Integration with Professional Treatment</h2>
<p>Many rehabilitation centers incorporate 12-step principles into their treatment programs, combining them with evidence-based therapies for comprehensive care.</p>

<h2>Evidence of Effectiveness</h2>
<p>Research shows that participation in 12-step programs significantly improves recovery outcomes. A study published in the Journal of Substance Abuse Treatment found that AA participation was associated with higher rates of abstinence.</p>

<h2>Getting Started</h2>
<p>If you\'re interested in 12-step programs:</p>
<ul>
<li>Find a meeting in your area</li>
<li>Attend as an observer first</li>
<li>Get a sponsor when you\'re ready</li>
<li>Work the steps with guidance</li>
</ul>

<h2>Conclusion</h2>
<p>The 12-step approach has helped millions achieve lasting recovery. While it may not be for everyone, its proven track record and supportive community make it a valuable resource for many in recovery.</p>',
                'author_name' => 'Dr. Jennifer Martinez',
                'author_email' => 'jennifer.martinez@rehab-center.com',
                'meta_keywords' => ['12-step programs', 'AA', 'alcoholics anonymous', 'addiction recovery', 'sobriety'],
                'meta_description' => 'Learn about the history and effectiveness of 12-step programs in addiction recovery.',
                'is_published' => true,
                'published_at' => now()->subDays(35),
            ],
            [
                'title' => 'Nutrition During Rehabilitation: How to Properly Restore Your Body',
                'slug' => 'nutrition-during-rehabilitation-how-to-restore-body',
                'excerpt' => 'The role of proper nutrition in addiction recovery and how to rebuild your health through diet and nutrition.',
                'content' => '<h2>The Impact of Addiction on Nutrition</h2>
<p>Addiction takes a significant toll on the body\'s nutritional status. Alcohol and drugs can interfere with nutrient absorption, metabolism, and appetite regulation. During rehabilitation, proper nutrition becomes crucial for recovery.</p>

<h2>Common Nutritional Deficiencies</h2>
<h3>Vitamin Deficiencies</h3>
<ul>
<li><strong>Vitamin B1 (Thiamine):</strong> Critical for brain function, often depleted in alcoholics</li>
<li><strong>Vitamin B12:</strong> Important for nerve health and red blood cell formation</li>
<li><strong>Vitamin C:</strong> Antioxidant that supports immune function</li>
<li><strong>Vitamin D:</strong> Essential for bone health and mood regulation</li>
</ul>

<h3>Mineral Deficiencies</h3>
<ul>
<li><strong>Magnesium:</strong> Important for muscle and nerve function</li>
<li><strong>Zinc:</strong> Supports immune function and wound healing</li>
<li><strong>Potassium:</strong> Essential for heart and muscle function</li>
<li><strong>Iron:</strong> Necessary for oxygen transport in blood</li>
</ul>

<h2>Nutritional Goals During Rehab</h2>
<h3>Restore Nutrient Stores</h3>
<p>Replenish depleted vitamins and minerals through diet and supplements under medical supervision.</p>

<h3>Support Liver Function</h3>
<p>The liver is often damaged by substance use. Foods that support liver health include leafy greens, garlic, and turmeric.</p>

<h3>Stabilize Blood Sugar</h3>
<p>Many people with addiction have unstable blood sugar. Eating regular, balanced meals helps stabilize mood and energy.</p>

<h3>Support Brain Health</h3>
<p>Omega-3 fatty acids, antioxidants, and B vitamins support brain healing and neurotransmitter balance.</p>

<h2>Recommended Foods</h2>
<h3>Lean Proteins</h3>
<p>Chicken, turkey, fish, eggs, legumes, and nuts provide amino acids needed for tissue repair.</p>

<h3>Whole Grains</h3>
<p>Oats, brown rice, quinoa, and whole wheat provide sustained energy and fiber.</p>

<h3>Fruits and Vegetables</h3>
<p>Colorful produce provides vitamins, minerals, and antioxidants. Aim for 5-9 servings daily.</p>

<h3>Healthy Fats</h3>
<p>Avocados, olive oil, nuts, and seeds support brain health and hormone balance.</p>

<h2>Hydration</h2>
<p>Proper hydration is crucial during recovery. Water helps flush toxins from the body and supports all metabolic processes. Aim for 8-10 glasses of water daily.</p>

<h2>Meal Planning</h2>
<h3>Breakfast</h3>
<p>Oatmeal with fruits and nuts, or eggs with vegetables and whole grain toast.</p>

<h3>Lunch</h3>
<p>Grilled chicken salad with mixed greens, vegetables, and olive oil dressing.</p>

<h3>Dinner</h3>
<p>Baked fish with quinoa and steamed vegetables.</p>

<h3>Snacks</h3>
<p>Greek yogurt, fresh fruit, nuts, or vegetable sticks with hummus.</p>

<h2>Foods to Avoid</h2>
<ul>
<li>Processed foods high in sugar and unhealthy fats</li>
<li>Caffeine and energy drinks</li>
<li>Alcohol and recreational drugs</li>
<li>Excessive salt and artificial sweeteners</li>
</ul>

<h2>Supplements</h2>
<p>Under medical supervision, supplements may be recommended to address specific deficiencies:</p>
<ul>
<li>Multivitamin</li>
<li>Omega-3 fish oil</li>
<li>Probiotics for gut health</li>
<li>Magnesium and zinc</li>
</ul>

<h2>Working with Professionals</h2>
<p>Many rehabilitation centers have registered dietitians who can create personalized nutrition plans. They consider your specific needs, preferences, and any medical conditions.</p>

<h2>Long-term Benefits</h2>
<p>Proper nutrition during rehab not only supports physical recovery but also:</p>
<ul>
<li>Improves mood and mental clarity</li>
<li>Increases energy levels</li>
<li>Reduces cravings</li>
<li>Supports immune function</li>
<li>Promotes overall healing</li>
</ul>

<h2>Conclusion</h2>
<p>Nutrition is a powerful tool in addiction recovery. Working with healthcare professionals to develop a balanced eating plan can significantly improve your recovery outcomes and overall health.</p>',
                'author_name' => 'Dr. Lisa Chen',
                'author_email' => 'lisa.chen@rehab-center.com',
                'meta_keywords' => ['nutrition', 'rehabilitation', 'recovery diet', 'nutrient deficiencies', 'healthy eating'],
                'meta_description' => 'Learn about the importance of nutrition in addiction recovery and how to rebuild your health through proper diet.',
                'is_published' => true,
                'published_at' => now()->subDays(42),
            ]
        ];

        foreach ($blogs as $blog) {
            \App\Models\Blog::create($blog);
        }
    }
}