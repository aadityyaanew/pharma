@php
    $brand = config('velora.brand');
@endphp

<section id="solid-orals" class="py-20 lg:py-28 bg-white border-b border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 items-center gap-12 lg:gap-20">

            {{-- Left Content --}}
            <div class="max-w-2xl space-y-6">
                <div class="flex items-center gap-3">
                    <span class="w-8 h-px bg-teal-600"></span>
                    <span class="text-sm font-bold tracking-wide text-teal-800 uppercase">
                        Solid Oral Formulation Division
                    </span>
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold tracking-tight leading-tight text-slate-900">
                    Pharmaceutical Tablets
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-sky-700 to-teal-700">
                        & Capsule Formulations
                    </span>
                </h2>

                <p class="text-base sm:text-lg leading-relaxed text-slate-600 font-normal">
                    Under the supervision of <strong>Managing Director Mr. Dev Patel</strong>, Jay Ambe Life Care supplies solid oral dosage forms tested against pharmacopoeial specifications. Our rotary compression and automated encapsulation lines guarantee high bioavailability and physical stability across shelf life.
                </p>

                {{-- Feature Grid with 3D Icons --}}
                <div class="grid sm:grid-cols-2 gap-6 pt-2">

                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-white p-1 shadow-xs flex items-center justify-center shrink-0">
                            <img src="{{ asset('images/3d/tablet_pack.png') }}" alt="Tablets" class="w-10 h-10 object-contain">
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-slate-900">
                                10x10 Alu-Alu Blister
                            </h3>
                            <p class="mt-1 text-xs text-slate-600 leading-relaxed">
                                Barrier foils protecting molecules from humidity and temperature fluctuations.
                            </p>
                        </div>
                    </div>

                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-white p-1 shadow-xs flex items-center justify-center shrink-0">
                            <img src="{{ asset('images/3d/prescription_pills.png') }}" alt="Pills" class="w-10 h-10 object-contain">
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-slate-900">
                                Bio-Equivalence & IPQC
                            </h3>
                            <p class="mt-1 text-xs text-slate-600 leading-relaxed">
                                Regular monitoring of dissolution profiles, friability, and active compound potency.
                            </p>
                        </div>
                    </div>

                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-white p-1 shadow-xs flex items-center justify-center shrink-0">
                            <img src="{{ asset('images/3d/shield.png') }}" alt="Quality" class="w-10 h-10 object-contain">
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-slate-900">
                                WHO-GMP Compliant
                            </h3>
                            <p class="mt-1 text-xs text-slate-600 leading-relaxed">
                                Formulated under positive-pressure HVAC cleanroom conditions.
                            </p>
                        </div>
                    </div>

                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-white p-1 shadow-xs flex items-center justify-center shrink-0">
                            <img src="{{ asset('images/3d/ambulance.png') }}" alt="Dispatch" class="w-10 h-10 object-contain">
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-slate-900">
                                Karjan Logistics Hub
                            </h3>
                            <p class="mt-1 text-xs text-slate-600 leading-relaxed">
                                Express dispatch across Vadodara, Ahmedabad, Surat, and all districts.
                            </p>
                        </div>
                    </div>

                </div>

                {{-- Action Buttons --}}
                <div class="pt-4 flex flex-col sm:flex-row gap-4">
                    @if(!empty($brand['whatsapp_number']))
                        <a
                            href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Jay Ambe Life Care, I would like to enquire about bulk supply for Tablets & Capsules.') }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2.5 px-7 py-3.5 rounded-full bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold uppercase tracking-wider transition-colors shadow-md"
                        >
                            <i class="fa-brands fa-whatsapp text-lg"></i>
                            WhatsApp Formulations Desk
                        </a>
                    @endif

                    <button
                        @click="openEnquiryFor('Tablets & Capsules', 'PCD Pharma Franchise')"
                        type="button"
                        class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-full border border-slate-300 bg-white hover:bg-slate-50 text-slate-900 text-xs font-bold uppercase tracking-wider transition-colors shadow-2xs"
                    >
                        Request Rate List
                        <i class="fa-solid fa-arrow-right text-teal-600"></i>
                    </button>
                </div>
            </div>

            {{-- Right Visual Showcase --}}
            <div class="relative">
                <div class="overflow-hidden rounded-3xl bg-gradient-to-br from-slate-900 via-sky-950 to-teal-950 p-8 sm:p-12 text-white shadow-2xl border border-sky-500/20 space-y-6">
                    <div class="flex items-center justify-between">
                        <span class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-teal-300 bg-teal-500/10 px-3.5 py-1.5 rounded-full border border-teal-400/20">
                            Solid Orals Specification
                        </span>
                        <div class="w-14 h-14 rounded-2xl bg-white/10 p-2 flex items-center justify-center">
                            <img src="{{ asset('images/3d/tablet_pack.png') }}" alt="Tablet Pack" class="w-10 h-10 object-contain">
                        </div>
                    </div>

                    <h3 class="font-serif text-2xl sm:text-3xl font-bold text-white">
                        DCGI Registered Therapeutic Segments
                    </h3>

                    <p class="text-slate-300 text-sm leading-relaxed font-light">
                        Our solid oral catalog covers essential healthcare categories demanded by practicing medical specialists, civil hospitals, and retail pharmacies:
                    </p>

                    <div class="space-y-3 pt-2 text-xs">
                        <div class="flex items-center justify-between p-3 rounded-xl bg-slate-800/80 border border-slate-700">
                            <span class="text-slate-300 font-medium">Antibiotics & Antimicrobials</span>
                            <span class="font-bold text-teal-400">Alu-Alu Strip Packaging</span>
                        </div>
                        <div class="flex items-center justify-between p-3 rounded-xl bg-slate-800/80 border border-slate-700">
                            <span class="text-slate-300 font-medium">Cardiovascular & Antidiabetic</span>
                            <span class="font-bold text-teal-400">Sustained Release Formats</span>
                        </div>
                        <div class="flex items-center justify-between p-3 rounded-xl bg-slate-800/80 border border-slate-700">
                            <span class="text-slate-300 font-medium">Gastroenterology (PPIs & Antacids)</span>
                            <span class="font-bold text-teal-400">Enteric-Coated Pellets</span>
                        </div>
                        <div class="flex items-center justify-between p-3 rounded-xl bg-slate-800/80 border border-slate-700">
                            <span class="text-slate-300 font-medium">Analgesics & Anti-Inflammatory</span>
                            <span class="font-bold text-teal-400">Fast Dispersible Formulations</span>
                        </div>
                    </div>

                    <div class="pt-2 border-t border-slate-800 text-[11px] text-slate-400 flex items-center justify-between">
                        <span>Monopoly Franchise Available</span>
                        <span class="text-emerald-400 font-semibold">Immediate Dispatch</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
