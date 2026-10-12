@php
    $sectors = config('velora.sectors', []);
    $brand = config('velora.brand', []);
    $firstKey = !empty($sectors) ? array_key_first($sectors) : 'hospital';
@endphp

<section id="sectors" class="py-24 lg:py-32 bg-slate-50" x-data="{ currentSector: '{{ $firstKey }}' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <div class="inline-flex items-center justify-center gap-3 mb-2">
                <span class="h-[1px] w-8 bg-sky-600"></span>
                <span class="text-sky-800 text-xs font-bold tracking-[0.2em] uppercase">Commercial Alliances</span>
                <span class="h-[1px] w-8 bg-sky-600"></span>
            </div>

            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-medium text-slate-900 tracking-tight">
                Pharmaceutical <br><span class="italic font-serif text-teal-700">Commercial Sectors</span>
            </h2>
            <p class="text-slate-500 text-lg leading-relaxed font-light mt-4">
                We supply scheduled, high-volume pharmaceutical formulations to hospitals, PCD monopoly franchise associates, pharmacy chains, and contract manufacturing clients.
            </p>
        </div>

        <!-- Sector Switcher Tabs -->
        <div class="flex flex-wrap justify-center gap-3 mb-14">
            @foreach($sectors as $secKey => $sector)
                <button @click="currentSector = '{{ $secKey }}'"
                        :class="currentSector === '{{ $secKey }}' 
                            ? 'bg-slate-900 text-white shadow-xl shadow-slate-900/20 scale-105 ring-4 ring-slate-900/10' 
                            : 'bg-white text-slate-600 hover:text-slate-900 hover:bg-slate-50 border border-slate-200'"
                        class="px-6 py-3.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all duration-300 flex items-center gap-2.5">
                    <i class="fa-solid {{ $sector['icon'] }} text-sm text-teal-400"></i>
                    <span>{{ $sector['title'] }}</span>
                </button>
            @endforeach
        </div>

        <!-- Sector Tab Contents -->
        <div class="relative">
            @foreach($sectors as $secKey => $sector)
                <div x-show="currentSector === '{{ $secKey }}'" 
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 translate-y-8"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="bg-slate-900 rounded-[2.5rem] p-10 lg:p-16 shadow-2xl shadow-slate-900/20 border border-slate-800 overflow-hidden relative"
                     style="display: none;">
                    
                    <!-- Atmospheric Background Accents -->
                    <div class="absolute top-0 right-0 -mr-32 -mt-32 w-96 h-96 rounded-full bg-sky-900/40 blur-3xl"></div>
                    <div class="absolute bottom-0 left-0 -ml-32 -mb-32 w-96 h-96 rounded-full bg-teal-900/25 blur-3xl"></div>

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center relative z-10">
                        
                        <!-- Left Content Area -->
                        <div class="lg:col-span-7 space-y-8">
                            <div class="text-[10px] font-bold uppercase tracking-widest text-teal-400 flex items-center gap-2">
                                <i class="fa-solid {{ $sector['icon'] }}"></i>
                                <span>{{ $sector['subtitle'] }}</span>
                            </div>
                            
                            <h3 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-medium text-white leading-tight">
                                {{ $sector['title'] }}
                            </h3>
                            
                            <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-light">
                                {{ $sector['lead'] }}
                            </p>
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-4 pt-6 border-t border-slate-700/60">
                                @foreach($sector['features'] as $feature)
                                    <div class="flex items-start gap-3 text-xs sm:text-sm text-slate-400 font-light">
                                        <div class="mt-0.5 shrink-0 w-5 h-5 rounded-full bg-teal-500/10 flex items-center justify-center">
                                            <i class="fa-solid fa-check text-teal-400 text-[10px]"></i>
                                        </div>
                                        <span>{{ $feature }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Right Interactive Action Box -->
                        <div class="lg:col-span-5 flex flex-col gap-4">
                            <div class="bg-slate-800/70 p-8 sm:p-10 rounded-[2rem] border border-slate-700/60 backdrop-blur-md shadow-xl space-y-6">
                                <div>
                                    <h4 class="text-white font-medium text-xl font-serif">Partner with Jay Ambe Life Care</h4>
                                    <p class="text-slate-400 text-xs sm:text-sm font-light mt-2 leading-relaxed">
                                        Connect directly with <strong>Managing Director Mr. Dev Patel</strong> to discuss territorial monopoly rights, bulk pricing, and dispatch logistics.
                                    </p>
                                </div>
                                
                                <div class="space-y-3">
                                    @if(!empty($brand['whatsapp_number']))
                                        <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode($sector['whatsapp_text']) }}"
                                           target="_blank"
                                           rel="noopener noreferrer"
                                           class="w-full text-center bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs tracking-wider uppercase py-4 rounded-full transition-all duration-300 flex justify-center items-center gap-2.5 shadow-lg shadow-emerald-900/30 hover:-translate-y-0.5">
                                            <i class="fa-brands fa-whatsapp text-lg"></i> Direct WhatsApp Inquiry
                                        </a>
                                    @endif
                                    
                                    <button @click="openEnquiryFor('{{ $sector['title'] }}', 'PCD Pharma Franchise')"
                                            class="w-full text-center bg-transparent hover:bg-slate-700 text-white font-bold uppercase tracking-wider text-xs py-4 rounded-full transition-all duration-300 border border-slate-600 hover:border-slate-500">
                                        Request Commercial Proposal
                                    </button>
                                </div>

                                <div class="pt-4 border-t border-slate-700/50 flex items-center justify-between text-[11px] text-slate-400">
                                    <span>HQ: Karjan, Vadodara</span>
                                    <span class="text-teal-400 font-semibold">Tel: {{ $brand['phone'] ?? '+91 6352727517' }}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
