@php
    $brand = config('velora.brand');
@endphp

<section id="critical-care" class="py-24 lg:py-32 bg-slate-950 text-white relative overflow-hidden">
    <!-- Subtle Background Radial Glow -->
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-teal-900/25 via-slate-950 to-slate-950 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            
            <!-- Left Editorial & Technical Content -->
            <div class="space-y-8">
                
                <div class="inline-flex items-center gap-3 mb-2">
                    <span class="h-[1px] w-8 bg-teal-500"></span>
                    <span class="text-teal-400 text-xs font-bold tracking-[0.2em] uppercase">Hospital Critical Care & Sterile Parenterals</span>
                </div>

                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-medium leading-[1.1] text-white tracking-tight">
                    Sterile Injections & <br>
                    <span class="text-teal-300 italic font-serif">Critical Care Parenterals</span>
                </h2>

                <p class="text-slate-400 text-base sm:text-lg leading-relaxed font-light">
                    Engineered for ICU setups, emergency trauma care, and clinical nursing homes. Formulated in positive-pressure Class 100 cleanroom environments with zero endotoxin tolerance and complete terminal sterility assurance.
                </p>

                <!-- Technical Attributes Table with 3D Icons -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 pt-4">
                    
                    <div class="p-4 rounded-2xl bg-slate-900/80 border border-slate-800 text-center space-y-2">
                        <div class="w-14 h-14 mx-auto rounded-xl bg-slate-800/80 p-2 flex items-center justify-center">
                            <img src="{{ asset('images/3d/transfusion.png') }}" alt="Endotoxin Free" class="w-11 h-11 object-contain">
                        </div>
                        <div class="text-xs font-bold uppercase tracking-wider text-teal-300">0% Endotoxin</div>
                        <p class="text-[11px] text-slate-400 font-light">LAL-tested for direct vascular injection safety.</p>
                    </div>

                    <div class="p-4 rounded-2xl bg-slate-900/80 border border-slate-800 text-center space-y-2">
                        <div class="w-14 h-14 mx-auto rounded-xl bg-slate-800/80 p-2 flex items-center justify-center">
                            <img src="{{ asset('images/3d/lungs.png') }}" alt="Cleanroom" class="w-11 h-11 object-contain">
                        </div>
                        <div class="text-xs font-bold uppercase tracking-wider text-teal-300">Class 100</div>
                        <p class="text-[11px] text-slate-400 font-light">Laminar airflow sterile vial and ampoule fill.</p>
                    </div>

                    <div class="p-4 rounded-2xl bg-slate-900/80 border border-slate-800 text-center space-y-2">
                        <div class="w-14 h-14 mx-auto rounded-xl bg-slate-800/80 p-2 flex items-center justify-center">
                            <img src="{{ asset('images/3d/heart.png') }}" alt="Critical Care" class="w-11 h-11 object-contain">
                        </div>
                        <div class="text-xs font-bold uppercase tracking-wider text-teal-300">Emergency ICU</div>
                        <p class="text-[11px] text-slate-400 font-light">Antibacterial infusions, antidotes & steroids.</p>
                    </div>

                </div>

                <!-- Commercial CTAs -->
                <div class="pt-4 flex flex-col sm:flex-row gap-4">
                    <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Jay Ambe Life Care, I am interested in hospital supply for Critical Care Injectables and Parenterals.') }}"
                       target="_blank"
                       class="inline-flex justify-center items-center gap-3 bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs tracking-wider uppercase px-8 py-4 rounded-full shadow-lg transition-all duration-300">
                        <i class="fa-brands fa-whatsapp text-lg"></i> WhatsApp Hospital Order
                    </a>
                    <button @click="openEnquiryFor('Sterile Parenterals & Injectables', 'Institutional Hospital Supply')"
                            class="inline-flex justify-center items-center gap-2 bg-slate-900 hover:bg-slate-800 text-teal-300 border border-teal-800/80 font-bold uppercase tracking-wider text-xs px-8 py-4 rounded-full transition-colors duration-300">
                        Hospital Formulary Quote
                    </button>
                </div>

            </div>

            <!-- Right Visual: Cleanroom Card -->
            <div class="flex justify-center relative group">
                <div class="absolute inset-0 bg-teal-500 rounded-full blur-[100px] opacity-10 group-hover:opacity-20 transition-opacity duration-700"></div>
                <div class="w-full max-w-md bg-gradient-to-b from-slate-900 to-slate-950 p-8 sm:p-10 rounded-3xl border border-teal-500/30 shadow-2xl relative z-10 transition-transform duration-700 group-hover:-translate-y-1 space-y-6">
                    <div class="flex items-center justify-between">
                        <div class="w-16 h-16 rounded-2xl bg-teal-500/10 border border-teal-500/30 p-2.5 flex items-center justify-center">
                            <img src="{{ asset('images/3d/transfusion.png') }}" alt="Transfusion" class="w-12 h-12 object-contain">
                        </div>
                        <span class="text-[11px] font-bold text-teal-300 bg-teal-900/60 px-3 py-1 rounded-full border border-teal-700">
                            Hospital Supply
                        </span>
                    </div>

                    <h3 class="font-serif text-2xl sm:text-3xl font-bold text-white">
                        Emergency & Critical ICU Formulary
                    </h3>
                    
                    <p class="text-slate-400 text-sm leading-relaxed font-light">
                        Direct-to-hospital procurement contracts with verified cold-chain dispatch from Karjan, Vadodara.
                    </p>

                    <div class="space-y-3 pt-2 border-t border-slate-800 text-xs">
                        <div class="flex items-center justify-between p-3 rounded-xl bg-slate-900/90 border border-slate-800">
                            <span class="text-slate-300">Dry Powder Lyophilized Vials</span>
                            <span class="font-bold text-teal-400">Available</span>
                        </div>
                        <div class="flex items-center justify-between p-3 rounded-xl bg-slate-900/90 border border-slate-800">
                            <span class="text-slate-300">Sterile Water for Injection (SWFI)</span>
                            <span class="font-bold text-teal-400">Available</span>
                        </div>
                        <div class="flex items-center justify-between p-3 rounded-xl bg-slate-900/90 border border-slate-800">
                            <span class="text-slate-300">Emergency Antidotes & Corticosteroids</span>
                            <span class="font-bold text-teal-400">Ready Stock</span>
                        </div>
                    </div>

                    <div class="p-3.5 rounded-2xl bg-teal-950/40 border border-teal-500/30 text-xs text-teal-300 flex items-center gap-3">
                        <i class="fa-solid fa-truck-fast text-emerald-400 text-base"></i>
                        <span>Priority Delivery Across Vadodara, Bharuch & Gujarat</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
