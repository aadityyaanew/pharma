<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'The Role of WHO-GMP Standards in High-Efficacy Pharmaceutical Formulations',
                'slug' => 'role-of-who-gmp-standards-pharmaceutical-formulations',
                'category' => 'Quality & Compliance',
                'author_name' => 'Jay Ambe Life Care Quality Wing',
                'excerpt' => 'An in-depth perspective on how Good Manufacturing Practices (GMP) and strict cleanroom validation safeguard therapeutic outcomes for clinical patients.',
                'content' => '<h2>Understanding Pharmaceutical Integrity Beyond the Laboratory</h2>
<p>In modern healthcare, patient recovery hinges upon the absolute precision of every tablet, capsule, and injectable ampoule produced. At <strong>Jay Ambe Life Care</strong>, our quality protocols adhere to international WHO-GMP benchmarks.</p>
<h3>1. Controlled Cleanroom Environments (ISO Standards)</h3>
<p>Cross-contamination during formulation is averted through HEPA-filtered HVAC systems maintaining positive pressure gradients. This ensures every solid and liquid oral dosage retains sterile molecular purity.</p>
<h3>2. High-Performance Liquid Chromatography (HPLC) Assays</h3>
<p>Each production batch undergoes quantitative assaying using advanced chromatographic systems. We verify that Active Pharmaceutical Ingredients (APIs) match exact labeled potencies without breakdown degradation.</p>
<h3>3. Stability Testing in Controlled Climates</h3>
<p>Medicines must maintain full bio-efficacy throughout shelf life in Indian tropical conditions. Our accelerated stability chambers validate packaging integrity under high temperature and humidity profiles.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'How to Start a High-Growth PCD Pharma Franchise in Gujarat and Western India',
                'slug' => 'start-high-growth-pcd-pharma-franchise-gujarat',
                'category' => 'Pharma Business & Franchise',
                'author_name' => 'Mr. Dev Patel (Managing Director)',
                'excerpt' => 'Strategic guidance from Managing Director Mr. Dev Patel on selecting therapeutic segments, securing monopoly rights, and leveraging promotional collaterals for maximum growth.',
                'content' => '<h2>Unlocking Entrepreneurial Success in the Pharma Sector</h2>
<p>The pharmaceutical industry in Gujarat continues to lead the nation in formulation innovation and commercial opportunity. For medical representatives, distributors, and entrepreneurs, partnering with an established pharmaceutical house is key.</p>
<h3>Monopoly Territorial Allocation</h3>
<p>Under the stewardship of Managing Director Mr. Dev Patel, Jay Ambe Life Care offers district-wise exclusive monopoly agreements, empowering our franchise partners to build secure, long-term physician relationships without internal pricing competition.</p>
<h3>Comprehensive Marketing & Promotional Arsenal</h3>
<p>Every franchise partner receives comprehensive physician visual aids, catch covers, sample kits, product glossaries, and MR bags designed to drive brand recall across practicing doctors and hospitals.</p>
<h3>Rapid Supply Chain & Stock Availability</h3>
<p>Based out of Karjan, Vadodara, our logistics infrastructure ensures uninterrupted replenishment and prompt dispatch across all key formulation categories.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Critical Care Injectables: Engineering Sterile Parenterals for Emergency Medicine',
                'slug' => 'critical-care-injectables-engineering-sterile-parenterals',
                'category' => 'Hospital & Therapeutics',
                'author_name' => 'Clinical Research & Formulations Desk',
                'excerpt' => 'A scientific look at aseptic lyophilization, pyrogen testing, and hermetic glass vial sealing in hospital-grade emergency injectables.',
                'content' => '<h2>Zero Tolerance for Endotoxins in Parenteral Care</h2>
<p>When medications are administered directly into the bloodstream, product sterility is a matter of life preservation. Jay Ambe Life Care supplies hospitals and intensive care units with verified parenteral medications.</p>
<h3>The Lyophilization & Aseptic Advantage</h3>
<ul>
    <li><strong>Freeze-Drying (Lyophilization):</strong> Protects delicate antibacterial and emergency biomolecules from thermal breakdown.</li>
    <li><strong>Endotoxin-Free Testing:</strong> Limulus Amebocyte Lysate (LAL) testing guarantees absolute absence of pyrogenic bacterial debris.</li>
    <li><strong>Hermetic Seal Integrity:</strong> Pharmaceutical-grade neutral glass ampoules and rubber-stoppered vials eliminate moisture ingress.</li>
</ul>
<p>Connect with our Karjan, Vadodara office to inspect hospital formularies and institutional contract options.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(9),
            ],
        ];

        foreach ($posts as $postData) {
            Post::firstOrCreate(
                ['slug' => $postData['slug']],
                $postData
            );
        }
    }
}
