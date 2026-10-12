@extends('layouts.app')

@section('title', 'Terms of Supply & Service | Jay Ambe Life Care')
@section('meta_description', 'Terms of Supply and Service for Jay Ambe Life Care. Commercial agreements, PCD franchise norms, and batch quality guarantees.')

@section('content')
<div class="pt-32 pb-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-16 border-b border-slate-200 pb-10">
            <h1 class="text-4xl md:text-5xl font-bold text-slate-900 font-serif mb-4">Terms of Supply & Service</h1>
            <p class="text-xs text-teal-700 uppercase tracking-widest font-bold">Jay Ambe Life Care &bull; Last Updated: {{ date('F Y') }}</p>
        </div>

        <div class="prose prose-lg prose-slate max-w-none space-y-6 text-slate-700 leading-relaxed">
            <p>
                Welcome to <strong>Jay Ambe Life Care</strong>. By engaging with our commercial desk, procuring pharmaceutical formulations, or applying for PCD franchise distribution rights, you agree to comply with the following operational terms.
            </p>

            <h2 class="text-2xl font-serif font-bold text-slate-900 mt-8 mb-3">1. Commercial & Regulatory Compliance</h2>
            <p>
                All purchasers, distributors, and franchise partners must possess valid drug licenses and GST registrations under applicable statutory laws of India. Orders are executed subject to batch availability and credit approvals authorized by Managing Director Mr. Dev Patel.
            </p>

            <h2 class="text-2xl font-serif font-bold text-slate-900 mt-8 mb-3">2. Product Quality & Storage Protocol</h2>
            <p>
                Jay Ambe Life Care warrants that all formulations meet WHO-GMP and pharmacopoeial specifications at the point of release. It is the responsibility of the receiving distributor, hospital, or chemist to preserve products under recommended temperature and moisture storage conditions to protect formulation stability.
            </p>

            <h2 class="text-2xl font-serif font-bold text-slate-900 mt-8 mb-3">3. Territorial Monopoly Terms</h2>
            <p>
                PCD Franchise agreements confer exclusive marketing rights strictly within the geographically demarcated district. Cross-border territory infiltration without written clearance from our head office is grounds for immediate termination of franchise privilege.
            </p>

            <h2 class="text-2xl font-serif font-bold text-slate-900 mt-8 mb-3">4. Intellectual Property</h2>
            <p>
                The Jay Ambe Life Care brand name, trade dress, caduceus logo emblem, formulation packaging, and digital assets are protected intellectual property. Unauthorized replication or imitation will be prosecuted under Indian trademark and copyright law.
            </p>

            <h2 class="text-2xl font-serif font-bold text-slate-900 mt-8 mb-3">5. Jurisdiction & Governance</h2>
            <p>
                These terms are governed by the laws of India. Any legal disputes arising out of commercial contracts shall be subject to the exclusive jurisdiction of the competent courts in <strong>Vadodara, Gujarat</strong>.
            </p>
        </div>

    </div>
</div>
@endsection
