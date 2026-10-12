@extends('layouts.app')

@section('title', 'About Us | Jay Ambe Life Care - Pharmaceutical & Life Care Company')
@section('meta_description', 'Learn about Jay Ambe Life Care, guided by Managing Director Mr. Dev Patel. High-quality pharmaceuticals, WHO-GMP compliance, and dedicated patient care based in Karjan, Vadodara, Gujarat.')

@php
    $brand = config('velora.brand');
@endphp

@section('content')
<!-- Header Banner -->
<section class="relative bg-gradient-to-b from-slate-900 via-sky-950 to-slate-900 text-white pt-16 pb-12 sm:pt-24 sm:pb-20 overflow-hidden">
    <div class="absolute inset-0 opacity-15 pointer-events-none bg-[radial-gradient(#38bdf8_1px,transparent_1px)] [background-size:24px_24px]"></div>
    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4 sm:space-y-6">
        <div class="inline-flex items-center gap-2 px-3.5 sm:px-4 py-1.5 rounded-full bg-teal-500/10 border border-teal-400/30 text-teal-300 text-[11px] sm:text-xs font-bold tracking-wider uppercase">
            <i class="fa-solid fa-staff-snake"></i> JAY AMBE LIFE CARE
        </div>
        <h1 class="font-serif text-3xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-white leading-tight">
            Committed to Health.<br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 via-teal-300 to-emerald-400">
                Dedicated to Life Care.
            </span>
        </h1>
        <p class="max-w-2xl mx-auto text-slate-300 text-xs sm:text-base lg:text-lg font-light leading-relaxed">
            Pioneering affordable, high-efficacy healthcare solutions and empowering pharmaceutical partnerships across Gujarat and pan-India.
        </p>
    </div>
</section>

<!-- About Content Body -->
<section class="py-12 sm:py-20 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10 sm:space-y-16">
        
        <!-- Leadership Spotlight in About -->
        <div class="bg-slate-50 rounded-2xl sm:rounded-3xl p-5 sm:p-10 lg:p-12 border border-slate-200/80 shadow-sm flex flex-col md:flex-row items-center gap-6 sm:gap-8">
            <div class="relative w-28 h-28 sm:w-36 sm:h-36 rounded-2xl sm:rounded-3xl bg-gradient-to-tr from-sky-600 to-teal-500 p-1 shadow-lg shrink-0 flex items-center justify-center">
                <div class="w-full h-full bg-white rounded-xl sm:rounded-[22px] p-2 flex items-center justify-center relative overflow-hidden">
                    <img src="{{ asset('images/3d/doctor.png') }}" alt="MD Mr. Dev Patel" class="w-full h-full object-contain filter drop-shadow">
                </div>
                <div class="absolute -bottom-2 -right-2 bg-slate-900 text-white p-1.5 sm:p-2 rounded-lg sm:rounded-xl border-2 border-white shadow">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-5 h-5 sm:w-6 sm:h-6 object-contain">
                </div>
            </div>
            <div class="space-y-3 text-center md:text-left">
                <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-teal-700 bg-teal-100/60 px-3 py-1 rounded-full">
                    Executive Leadership
                </div>
                <h2 class="font-serif text-2xl sm:text-3xl font-bold text-slate-900">
                    Led by Managing Director {{ $brand['managing_director'] ?? 'Mr. Dev Patel' }}
                </h2>
                <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                    Led by Managing Director Mr. Dev Patel, Jay Ambe Life Care is dedicated to supplying healthcare professionals, distributors, and chemists with reliable, high-quality medicines backed by consistent availability and strict standards.
                </p>
            </div>
        </div>

        <!-- Narrative Section -->
        <div class="prose prose-lg prose-slate max-w-none space-y-8 text-slate-700">
            <div>
                <h3 class="text-2xl font-serif font-bold text-slate-900 mb-3">About Our Company</h3>
                <p class="leading-relaxed text-sm sm:text-base text-slate-600 font-normal">
                    <strong>Jay Ambe Life Care</strong> is based at <em>Nilkanth Sky, Shop No. 88 Ground Floor, Opp APMC Nava Bazar Flyover, Karjan, District Vadodara, Gujarat (PIN: 391240)</em>. We bridge reliable pharmaceutical manufacturing with prompt healthcare supply across Gujarat and pan-India.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2 not-prose">
                <div class="p-7 rounded-3xl bg-slate-50 border border-slate-200/80 space-y-3 hover:shadow-xs transition">
                    <div class="w-14 h-14 rounded-2xl bg-sky-100/70 p-2.5 flex items-center justify-center">
                        <img src="{{ asset('images/3d/dna.png') }}" alt="Our Mission" class="w-full h-full object-contain filter drop-shadow">
                    </div>
                    <div>
                        <h4 class="font-serif font-bold text-lg text-slate-900">Our Mission</h4>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-light mt-1.5">
                            To supply safe, effective, and affordable medicines while offering our PCD franchise partners long-term commercial growth and dedicated district support.
                        </p>
                    </div>
                </div>

                <div class="p-7 rounded-3xl bg-slate-50 border border-slate-200/80 space-y-3 hover:shadow-xs transition">
                    <div class="w-14 h-14 rounded-2xl bg-teal-100/70 p-2.5 flex items-center justify-center">
                        <img src="{{ asset('images/3d/shield.png') }}" alt="Quality Commitment" class="w-full h-full object-contain filter drop-shadow">
                    </div>
                    <div>
                        <h4 class="font-serif font-bold text-lg text-slate-900">Quality Commitment</h4>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-light mt-1.5">
                            Zero compromise on medicine potency, sterility, or packaging. Every batch is thoroughly tested to guarantee patient safety and shelf-life stability.
                        </p>
                    </div>
                </div>
            </div>

            <div class="pt-6">
                <h3 class="text-2xl font-serif font-bold text-slate-900 mb-6">Our Therapeutic Spectrum</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 not-prose">
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/70 text-center space-y-2 hover:bg-white hover:shadow-sm transition">
                        <img src="{{ asset('images/3d/tablet_pack.png') }}" alt="Oral Dosage" class="w-12 h-12 mx-auto object-contain">
                        <div class="text-xs font-bold text-slate-800">Tablets & Capsules</div>
                        <div class="text-[10px] text-slate-500">Alu-Alu & Blistering</div>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/70 text-center space-y-2 hover:bg-white hover:shadow-sm transition">
                        <img src="{{ asset('images/3d/medicine_bottle.png') }}" alt="Liquid Orals" class="w-12 h-12 mx-auto object-contain">
                        <div class="text-xs font-bold text-slate-800">Liquid Orals & Syrups</div>
                        <div class="text-[10px] text-slate-500">Pet Amber bottles</div>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/70 text-center space-y-2 hover:bg-white hover:shadow-sm transition">
                        <img src="{{ asset('images/3d/transfusion.png') }}" alt="Sterile Injectables" class="w-12 h-12 mx-auto object-contain">
                        <div class="text-xs font-bold text-slate-800">Sterile Injectables</div>
                        <div class="text-[10px] text-slate-500">Aseptic Parenterals</div>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/70 text-center space-y-2 hover:bg-white hover:shadow-sm transition">
                        <img src="{{ asset('images/3d/first_aid.png') }}" alt="Derma Care" class="w-12 h-12 mx-auto object-contain">
                        <div class="text-xs font-bold text-slate-800">Dermatological Topicals</div>
                        <div class="text-[10px] text-slate-500">Ointments & Gels</div>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/70 text-center space-y-2 hover:bg-white hover:shadow-sm transition">
                        <img src="{{ asset('images/3d/heart.png') }}" alt="Cardio & Diabetic" class="w-12 h-12 mx-auto object-contain">
                        <div class="text-xs font-bold text-slate-800">Cardio & Lifestyle</div>
                        <div class="text-[10px] text-slate-500">Efficacy Formulations</div>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/70 text-center space-y-2 hover:bg-white hover:shadow-sm transition">
                        <img src="{{ asset('images/3d/stethoscope.png') }}" alt="PCD Franchise" class="w-12 h-12 mx-auto object-contain">
                        <div class="text-xs font-bold text-slate-800">PCD Monopoly Rights</div>
                        <div class="text-[10px] text-slate-500">Territorial Protection</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Headquarters Card -->
        <div class="bg-gradient-to-r from-slate-900 to-sky-950 p-8 sm:p-10 rounded-3xl text-white shadow-xl flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="space-y-2 text-center md:text-left">
                <span class="text-xs font-bold uppercase tracking-widest text-teal-400">Head Office & Commercial Desk</span>
                <h3 class="text-xl font-bold font-serif">Visit or Contact Jay Ambe Life Care</h3>
                <p class="text-xs text-slate-300 max-w-xl leading-relaxed">
                    {{ $brand['address'] }}
                </p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 shrink-0">
                <a href="tel:{{ $brand['phone_raw'] ?? '+916352727517' }}" 
                   class="px-6 py-3 rounded-full bg-teal-600 hover:bg-teal-500 text-white font-semibold text-xs tracking-wider uppercase transition text-center">
                    <i class="fa-solid fa-phone mr-1.5"></i> {{ $brand['phone'] }}
                </a>
                <a href="{{ route('contact') }}" 
                   class="px-6 py-3 rounded-full bg-white hover:bg-slate-100 text-slate-900 font-semibold text-xs tracking-wider uppercase transition text-center">
                    Enquire Online
                </a>
            </div>
        </div>

    </div>
</section>
@endsection
