@php
    $brand = config('velora.brand');
@endphp

<section id="hero" class="relative min-h-[90vh] flex items-center pt-16 pb-20 overflow-hidden bg-gradient-to-b from-sky-50/60 via-white to-slate-50">
    
    <!-- Sophisticated Subtle Medical Grid Background -->
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none bg-[radial-gradient(#0284c7_1.5px,transparent_1.5px)] [background-size:28px_28px]"></div>
    <div class="absolute top-10 left-1/3 w-[600px] h-[350px] bg-sky-200/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-20 right-10 w-[400px] h-[300px] bg-teal-200/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Hero Content -->
            <div class="lg:col-span-7 text-center lg:text-left space-y-7">
                
                <!-- Trust & Compliance Badge -->
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-white border border-teal-200/80 shadow-xs text-xs font-semibold text-slate-800">
                    <span class="inline-flex items-center justify-center w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span class="text-teal-800 font-bold uppercase tracking-wider">WHO-GMP Compliant &bull; ISO 9001:2015</span>
                    <span class="text-slate-300">|</span>
                    <span class="text-slate-600 font-medium">Karjan, Vadodara (Gujarat)</span>
                </div>

                <!-- Main Headline -->
                <h1 class="text-4xl sm:text-5xl lg:text-[4rem] font-bold text-slate-900 leading-[1.14] tracking-tight">
                    Reliable Medicines.<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-700 via-teal-700 to-emerald-700">
                        Dedicated Life Care.
                    </span>
                </h1>

                <!-- Clear, Authentic Human Subtext -->
                <p class="text-base sm:text-lg text-slate-600 leading-relaxed font-normal max-w-2xl mx-auto lg:mx-0">
                    Established under the leadership of <strong>Managing Director Mr. Dev Patel</strong>, 
                    <strong class="text-slate-900">Jay Ambe Life Care</strong> is a trusted pharmaceutical marketing and distribution house based in Karjan, Vadodara. We supply certified tablets, oral syrups, sterile parenterals, and topical formulations to healthcare facilities, stockists, and franchise partners across Gujarat and India.
                </p>

                <!-- 3D Icon Features Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-1 max-w-2xl mx-auto lg:mx-0 text-left">
                    
                    <div class="p-4 rounded-2xl bg-white border border-slate-200/90 shadow-sm flex items-center gap-3.5 hover:shadow-md hover:border-teal-300 transition duration-300 group">
                        <div class="w-13 h-13 rounded-xl bg-teal-50/80 p-1 flex items-center justify-center shrink-0 group-hover:scale-105 transition">
                            <img src="{{ asset('images/3d/tablet_pack.png') }}" alt="Tablets & Capsules" class="w-11 h-11 object-contain drop-shadow-sm">
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900">Solid Oral Range</p>
                            <p class="text-[11px] text-slate-500">Alu-Alu Tablets & Caps</p>
                        </div>
                    </div>

                    <div class="p-4 rounded-2xl bg-white border border-slate-200/90 shadow-sm flex items-center gap-3.5 hover:shadow-md hover:border-teal-300 transition duration-300 group">
                        <div class="w-13 h-13 rounded-xl bg-sky-50/80 p-1 flex items-center justify-center shrink-0 group-hover:scale-105 transition">
                            <img src="{{ asset('images/3d/transfusion.png') }}" alt="Sterile Injections" class="w-11 h-11 object-contain drop-shadow-sm">
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900">Hospital Parenterals</p>
                            <p class="text-[11px] text-slate-500">Sterile ICU Injectables</p>
                        </div>
                    </div>

                    <div class="p-4 rounded-2xl bg-white border border-slate-200/90 shadow-sm flex items-center gap-3.5 hover:shadow-md hover:border-teal-300 transition duration-300 group">
                        <div class="w-13 h-13 rounded-xl bg-emerald-50/80 p-1 flex items-center justify-center shrink-0 group-hover:scale-105 transition">
                            <img src="{{ asset('images/3d/first_aid.png') }}" alt="PCD Franchise" class="w-11 h-11 object-contain drop-shadow-sm">
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900">PCD Monopoly</p>
                            <p class="text-[11px] text-slate-500">District Territory Rights</p>
                        </div>
                    </div>

                </div>

                <!-- CTAs -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
                    @if(!empty($brand['whatsapp_number']))
                        <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hello Mr. Dev Patel, I would like to enquire about pharmaceutical product supply and PCD franchise availability from Jay Ambe Life Care.') }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           id="hero-whatsapp-btn"
                           class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-sm px-8 py-4 rounded-full transition-all duration-300 shadow-lg shadow-emerald-600/20 hover:-translate-y-0.5">
                            <i class="fa-brands fa-whatsapp text-lg"></i>
                            <span>WhatsApp MD Desk</span>
                        </a>
                    @endif

                    <a href="tel:{{ $brand['phone_raw'] ?? '+916352727517' }}"
                       id="hero-call-btn"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 bg-slate-900 hover:bg-sky-800 text-white font-semibold text-sm px-7 py-4 rounded-full transition-all duration-300 shadow-md hover:-translate-y-0.5">
                        <i class="fa-solid fa-phone text-xs text-teal-400"></i>
                        <span>Call: {{ $brand['phone'] ?? '+91 6352727517' }}</span>
                    </a>

                    <a href="{{ route('products.index') }}"
                       id="hero-explore-btn"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-100 text-slate-800 font-bold text-sm px-7 py-4 rounded-full border border-slate-200 transition-all duration-300 shadow-xs hover:-translate-y-0.5">
                        <span>View All Medicines</span>
                        <i class="fa-solid fa-arrow-right text-[10px] text-slate-400"></i>
                    </a>
                </div>

                <!-- Grounded Trust Bar -->
                <div class="pt-2 flex items-center justify-center lg:justify-start gap-6 text-xs text-slate-500 font-medium">
                    <span class="flex items-center gap-1.5">
                        <i class="fa-solid fa-check text-emerald-600"></i> Ready Stock Dispatch
                    </span>
                    <span class="flex items-center gap-1.5">
                        <i class="fa-solid fa-check text-emerald-600"></i> Batch COA with every order
                    </span>
                    <span class="hidden sm:flex items-center gap-1.5">
                        <i class="fa-solid fa-check text-emerald-600"></i> GST Invoicing
                    </span>
                </div>

            </div>

            <!-- Right Hero Card with 3D Medicon Accent -->
            <div class="lg:col-span-5 flex flex-col items-center">
                <div class="relative w-full max-w-md">
                    
                    <!-- Decorative 3D pill floating badge -->
                    <div class="absolute -top-7 -right-5 z-20 w-20 h-20 bg-white/95 rounded-2xl shadow-xl border border-slate-100 p-2 flex items-center justify-center animate-bounce [animation-duration:3s]">
                        <img src="{{ asset('images/3d/prescription_pills.png') }}" alt="Pills" class="w-14 h-14 object-contain">
                    </div>

                    <!-- Decorative 3D DNA floating badge -->
                    <div class="absolute -bottom-6 -left-5 z-20 w-18 h-18 bg-white/95 rounded-2xl shadow-xl border border-slate-100 p-2 flex items-center justify-center">
                        <img src="{{ asset('images/3d/dna.png') }}" alt="R&D Quality" class="w-13 h-13 object-contain">
                    </div>

                    <!-- Main Card -->
                    <div class="relative bg-white rounded-3xl p-8 border border-slate-200 shadow-xl space-y-6">
                        
                        <!-- Official Brand Emblem Display -->
                        <div class="relative mx-auto w-44 h-44 sm:w-52 sm:h-52 rounded-2xl p-3 bg-gradient-to-b from-sky-50 to-teal-50/40 border border-sky-100 flex items-center justify-center shadow-inner group">
                            <img src="{{ asset('images/logo.png') }}" 
                                 alt="Jay Ambe Life Care Logo" 
                                 class="max-h-full max-w-full object-contain drop-shadow-md group-hover:scale-105 transition duration-500">
                        </div>

                        <!-- Brand & MD Badge -->
                        <div class="text-center pt-1 border-t border-slate-100">
                            <h2 class="font-serif text-2xl font-bold text-slate-900 tracking-tight">
                                Jay Ambe Life Care
                            </h2>
                            <p class="text-xs uppercase tracking-wider text-teal-700 font-extrabold mt-1">
                                Managing Director: {{ $brand['managing_director'] ?? 'Mr. Dev Patel' }}
                            </p>
                        </div>

                        <!-- Concrete Business Details -->
                        <div class="space-y-2.5 text-xs">
                            <div class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-slate-500 font-medium flex items-center gap-2">
                                    <i class="fa-solid fa-map-pin text-sky-600"></i> Location
                                </span>
                                <span class="font-bold text-slate-900">Karjan, Vadodara, Gujarat</span>
                            </div>

                            <div class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-slate-500 font-medium flex items-center gap-2">
                                    <i class="fa-solid fa-clock text-teal-600"></i> Operating Hours
                                </span>
                                <span class="font-bold text-slate-900">Mon - Sat: 9:00 AM - 7:30 PM</span>
                            </div>

                            <div class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-slate-500 font-medium flex items-center gap-2">
                                    <i class="fa-solid fa-phone-volume text-emerald-600"></i> Direct Desk
                                </span>
                                <span class="font-bold text-slate-900">{{ $brand['phone'] ?? '+91 6352727517' }}</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="#enquiry-section" 
                           class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-sky-700 to-teal-700 hover:from-sky-800 hover:to-teal-800 text-white font-bold text-xs py-3.5 rounded-xl shadow-md transition">
                            <i class="fa-solid fa-file-medical"></i>
                            <span>Inquire for Products / PCD Franchise</span>
                        </a>

                    </div>
                </div>
            </div>

        </div>

        <!-- Realistic Stat Ribbon -->
        <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-4 pt-8 border-t border-slate-200">
            <div class="text-center p-4 rounded-2xl bg-white border border-slate-200/80 shadow-2xs">
                <p class="font-serif text-3xl sm:text-4xl font-extrabold text-sky-800">250+</p>
                <p class="text-xs uppercase tracking-wider font-bold text-slate-600 mt-1">DCGI Formulations</p>
            </div>
            <div class="text-center p-4 rounded-2xl bg-white border border-slate-200/80 shadow-2xs">
                <p class="font-serif text-3xl sm:text-4xl font-extrabold text-teal-700">WHO-GMP</p>
                <p class="text-xs uppercase tracking-wider font-bold text-slate-600 mt-1">Certified Cleanroom</p>
            </div>
            <div class="text-center p-4 rounded-2xl bg-white border border-slate-200/80 shadow-2xs">
                <p class="font-serif text-3xl sm:text-4xl font-extrabold text-emerald-700">100%</p>
                <p class="text-xs uppercase tracking-wider font-bold text-slate-600 mt-1">Batch COA Assured</p>
            </div>
            <div class="text-center p-4 rounded-2xl bg-white border border-slate-200/80 shadow-2xs">
                <p class="font-serif text-3xl sm:text-4xl font-extrabold text-slate-900">Karjan Hub</p>
                <p class="text-xs uppercase tracking-wider font-bold text-slate-600 mt-1">Vadodara, Gujarat</p>
            </div>
        </div>

    </div>
</section>
