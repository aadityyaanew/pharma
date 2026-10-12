@extends('layouts.app')

@section('title', 'Contact Us | Jay Ambe Life Care - Commercial & Franchise Desk')
@section('meta_description', 'Contact Jay Ambe Life Care and Managing Director Mr. Dev Patel. Head office in Karjan, Vadodara, Gujarat. Phone: +91 6352727517, Email: pdev63575@gmail.com.')

@php
    $brand = config('velora.brand');
@endphp

@section('content')
<!-- Contact Header Banner -->
<section class="bg-gradient-to-b from-slate-900 via-sky-950 to-slate-900 text-white pt-24 pb-16 text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-teal-500/10 border border-teal-400/30 text-teal-300 text-xs font-bold tracking-wider uppercase mb-2">
            <i class="fa-solid fa-headset"></i> DIRECT COMMERCIAL & LEADERSHIP DESK
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-serif font-bold tracking-tight text-white">
            Connect with Jay Ambe Life Care
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto font-light leading-relaxed">
            Whether you require institutional hospital supply, monopoly PCD franchise allocation, or wish to connect directly with <strong>Managing Director Mr. Dev Patel</strong>, our team is ready to assist you.
        </p>
    </div>
</section>

<!-- Direct Contact Cards Grid with 3D Medicons -->
<section class="py-12 bg-white border-b border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Phone / WhatsApp Hotline -->
            <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200/80 text-center space-y-4 hover:shadow-xl transition group duration-300">
                <div class="w-20 h-20 rounded-2xl bg-white shadow-sm flex items-center justify-center mx-auto border border-slate-100 group-hover:scale-105 transition p-3">
                    <img src="{{ asset('images/3d/medical_chat.png') }}" alt="Direct Telephone & WhatsApp" class="w-full h-full object-contain filter drop-shadow">
                </div>
                <div>
                    <h3 class="font-serif text-xl font-bold text-slate-900">Direct Hotline & WhatsApp</h3>
                    <p class="text-xs text-slate-500 font-light mt-1">Managing Director & Commercial Desk</p>
                </div>
                <div class="pt-2">
                    <a href="tel:{{ $brand['phone_raw'] ?? '+916352727517' }}" class="text-lg font-bold text-teal-700 hover:text-teal-800 transition">
                        {{ $brand['phone'] ?? '+91 6352727517' }}
                    </a>
                    <div class="mt-2">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 text-xs font-semibold">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Mon – Sat: 9:00 AM – 8:00 PM
                        </span>
                    </div>
                </div>
            </div>

            <!-- Email Correspondence -->
            <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200/80 text-center space-y-4 hover:shadow-xl transition group duration-300">
                <div class="w-20 h-20 rounded-2xl bg-white shadow-sm flex items-center justify-center mx-auto border border-slate-100 group-hover:scale-105 transition p-3">
                    <img src="{{ asset('images/3d/prescription.png') }}" alt="Email PO & Dossiers" class="w-full h-full object-contain filter drop-shadow">
                </div>
                <div>
                    <h3 class="font-serif text-xl font-bold text-slate-900">Official Correspondence</h3>
                    <p class="text-xs text-slate-500 font-light mt-1">Dossiers, Purchase Orders & COA Inquiries</p>
                </div>
                <div class="pt-2">
                    <a href="mailto:{{ $brand['email'] ?? 'pdev63575@gmail.com' }}" class="text-base font-bold text-teal-700 hover:text-teal-800 transition break-all">
                        {{ $brand['email'] ?? 'pdev63575@gmail.com' }}
                    </a>
                    <div class="mt-2">
                        <span class="text-xs text-slate-400">Direct dispatch acknowledgement within 24h</span>
                    </div>
                </div>
            </div>

            <!-- Facility Address -->
            <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200/80 text-center space-y-4 hover:shadow-xl transition group duration-300">
                <div class="w-20 h-20 rounded-2xl bg-white shadow-sm flex items-center justify-center mx-auto border border-slate-100 group-hover:scale-105 transition p-3">
                    <img src="{{ asset('images/3d/location.png') }}" alt="Karjan Vadodara Facility" class="w-full h-full object-contain filter drop-shadow">
                </div>
                <div>
                    <h3 class="font-serif text-xl font-bold text-slate-900">Corporate & Dispatch Desk</h3>
                    <p class="text-xs text-slate-500 font-light mt-1">Karjan, Vadodara, Gujarat</p>
                </div>
                <div class="pt-2 text-xs font-medium text-slate-700 leading-relaxed">
                    Nilkanth Sky, Shop No. 88 Ground Floor,<br>
                    Opp APMC Nava Bazar Flyover, Karjan,<br>
                    Dist: Vadodara, Gujarat – 391240
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Reusing the robust enquiry form component -->
@include('components.enquiry-form')

@endsection
