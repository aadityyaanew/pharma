@extends('layouts.app')

@section('title', 'Privacy Policy | Jay Ambe Life Care')
@section('meta_description', 'Jay Ambe Life Care Privacy Policy. Learn how we protect commercial data, purchase orders, and partner information.')

@section('content')
<div class="pt-32 pb-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-16 border-b border-slate-200 pb-10">
            <h1 class="text-4xl md:text-5xl font-bold text-slate-900 font-serif mb-4">Privacy Policy</h1>
            <p class="text-xs text-teal-700 uppercase tracking-widest font-bold">Jay Ambe Life Care &bull; Last Updated: {{ date('F Y') }}</p>
        </div>

        <div class="prose prose-lg prose-slate max-w-none space-y-6 text-slate-700 leading-relaxed">
            <p>
                At <strong>Jay Ambe Life Care</strong> (operated under the leadership of Managing Director Mr. Dev Patel, Karjan, Vadodara, Gujarat), we uphold the strictest confidentiality regarding the commercial and personal information of our healthcare associates, PCD franchise partners, hospitals, and medical practitioners.
            </p>

            <h2 class="text-2xl font-serif font-bold text-slate-900 mt-8 mb-3">1. Information Collection</h2>
            <p>
                We collect essential commercial details when you submit an inquiry, apply for a PCD franchise, request product dossiers, or place wholesale formulation orders. This includes contact names, pharmacy or firm registration details, drug license identifiers, GST details, delivery destinations, and communication records.
            </p>

            <h2 class="text-2xl font-serif font-bold text-slate-900 mt-8 mb-3">2. Purpose of Information Use</h2>
            <p>
                Your information is solely utilized to:
            </p>
            <ul class="list-disc pl-6 space-y-1 text-sm">
                <li>Process, verify, and dispatch pharmaceutical orders under regulatory requirements.</li>
                <li>Coordinate logistics and delivery schedules with authorized carriers.</li>
                <li>Assign and safeguard territorial monopoly rights for registered PCD franchise associates.</li>
                <li>Transmit vital batch COAs, stability updates, and product formulation data.</li>
            </ul>

            <h2 class="text-2xl font-serif font-bold text-slate-900 mt-8 mb-3">3. Data Security & Commercial Confidentiality</h2>
            <p>
                We do not sell, rent, or trade your proprietary commercial data or client base information to any third parties. All operational records are maintained in secure systems adhering to Indian IT compliance standards.
            </p>

            <h2 class="text-2xl font-serif font-bold text-slate-900 mt-8 mb-3">4. Contacting the Compliance Officer</h2>
            <p>
                For inquiries regarding data confidentiality or regulatory filings, contact our desk at: 
                <strong>pdev63575@gmail.com</strong> or phone: <strong>+91 6352727517</strong>.
            </p>
        </div>

    </div>
</div>
@endsection
