@php
    $brand = config('velora.brand');
@endphp

<section id="hero" class="relative min-h-[90vh] flex items-center pt-16 pb-20 overflow-hidden bg-slate-100">
    
    <!-- Hero Background Animation GIF -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <img src="{{ asset('images/pa.gif') }}" 
             alt="Pharmaceutical Animation Background" 
             class="w-full h-full object-cover object-center opacity-60">
        <!-- Soft White Gradient to ensure typography readability -->
        <div class="absolute inset-0 bg-white/70 backdrop-blur-[1px]"></div>
    </div>
    
    <!-- Sophisticated Subtle Medical Grid Background -->
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none bg-[radial-gradient(#0284c7_1.5px,transparent_1.5px)] [background-size:28px_28px]"></div>
    <div class="absolute top-10 left-1/3 w-[600px] h-[350px] bg-sky-200/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-20 right-10 w-[400px] h-[300px] bg-teal-200/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Hero Content -->
            <div class="lg:col-span-7 text-center lg:text-left space-y-7">
                


                <!-- Main Headline -->
                <h1 class="text-4xl sm:text-5xl lg:text-[4rem] font-bold text-slate-900 leading-[1.14] tracking-tight">
                    Reliable Medicines.<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-700 via-teal-700 to-emerald-700">
                        Dedicated Life Care.
                    </span>
                </h1>

                <!-- Clear, Simple Subtext -->
                <p class="text-base sm:text-lg text-slate-600 leading-relaxed font-normal max-w-2xl mx-auto lg:mx-0">
                    Trusted pharmaceutical supplier based in <strong>Karjan, Vadodara</strong>. Led by <strong>Managing Director Mr. Dev Patel</strong>, we provide quality medicines, prompt delivery, and monopoly PCD franchise opportunities across Gujarat and India.
                </p>

                <!-- 3D Icon Features Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3.5 pt-1 max-w-2xl mx-auto lg:mx-0 text-left">
                    
                    <div class="p-3.5 rounded-2xl bg-white border border-slate-200/90 shadow-2xs flex items-center gap-3 hover:shadow-xs transition duration-200">
                        <div class="w-12 h-12 rounded-xl bg-teal-50 p-1 flex items-center justify-center shrink-0">
                            <img src="{{ asset('images/3d/tablet_pack.png') }}" alt="Tablets & Capsules" class="w-10 h-10 object-contain">
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900">Tablets & Capsules</p>
                            <p class="text-[11px] text-slate-500">Alu-Alu Packing</p>
                        </div>
                    </div>

                    <div class="p-3.5 rounded-2xl bg-white border border-slate-200/90 shadow-2xs flex items-center gap-3 hover:shadow-xs transition duration-200">
                        <div class="w-12 h-12 rounded-xl bg-sky-50 p-1 flex items-center justify-center shrink-0">
                            <img src="{{ asset('images/3d/transfusion.png') }}" alt="Syrups & Injections" class="w-10 h-10 object-contain">
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900">Syrups & Injections</p>
                            <p class="text-[11px] text-slate-500">Hospital Supply</p>
                        </div>
                    </div>

                    <div class="p-3.5 rounded-2xl bg-white border border-slate-200/90 shadow-2xs flex items-center gap-3 hover:shadow-xs transition duration-200">
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 p-1 flex items-center justify-center shrink-0">
                            <img src="{{ asset('images/3d/first_aid.png') }}" alt="PCD Franchise" class="w-10 h-10 object-contain">
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900">PCD Monopoly</p>
                            <p class="text-[11px] text-slate-500">District Rights</p>
                        </div>
                    </div>

                </div>

                <!-- Simple Action Buttons -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3.5 pt-2">
                    @if(!empty($brand['whatsapp_number']))
                        <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hello Mr. Dev Patel, I would like to enquire about medicines and PCD franchise from Jay Ambe Life Care.') }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           id="hero-whatsapp-btn"
                           class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-sm px-7 py-3.5 rounded-full transition shadow-sm hover:shadow">
                            <i class="fa-brands fa-whatsapp text-lg"></i>
                            <span>WhatsApp MD Desk</span>
                        </a>
                    @endif

                    <a href="{{ route('products.index') }}"
                       id="hero-explore-btn"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-slate-900 hover:bg-teal-800 text-white font-semibold text-sm px-7 py-3.5 rounded-full transition shadow-sm">
                        <span>View Our Medicines</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>

                <!-- Trust Bar -->
                <div class="pt-2 flex items-center justify-center lg:justify-start gap-6 text-xs text-slate-500 font-medium">
                    <span class="flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-check text-emerald-600"></i> Quality Formulations
                    </span>
                    <span class="flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-check text-emerald-600"></i> Fast Dispatch
                    </span>
                    <span class="flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-check text-emerald-600"></i> Ethical Business
                    </span>
                </div>

            </div>

            <!-- Right Hero Card with 3D Medicon Accent -->
            <div class="lg:col-span-5 flex flex-col items-center">
                <div class="relative w-full max-w-md">
                    


                    <!-- Main Card -->
                    <div class="relative bg-white rounded-3xl p-7 sm:p-8 border border-slate-200/90 shadow-lg space-y-5">
                        
                        <!-- Official Brand Emblem Display -->
                        <div class="relative mx-auto w-40 h-40 sm:w-44 sm:h-44 rounded-2xl p-3 bg-gradient-to-b from-sky-50 to-teal-50/40 border border-sky-100 flex items-center justify-center shadow-inner group">
                            <img src="{{ asset('images/logo.png') }}" 
                                 alt="Jay Ambe Life Care Logo" 
                                 class="max-h-full max-w-full object-contain drop-shadow-md group-hover:scale-105 transition duration-300">
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
                        <div class="space-y-2 text-xs">
                            <div class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-slate-500 font-medium flex items-center gap-2">
                                    <i class="fa-solid fa-map-pin text-sky-600"></i> Location
                                </span>
                                <span class="font-bold text-slate-800">Karjan, Vadodara, Gujarat</span>
                            </div>

                            <div class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-slate-500 font-medium flex items-center gap-2">
                                    <i class="fa-solid fa-phone text-emerald-600"></i> Phone
                                </span>
                                <a href="tel:{{ $brand['phone_raw'] ?? '+916352727517' }}" class="font-bold text-teal-700 hover:underline">
                                    {{ $brand['phone'] ?? '+91 6352727517' }}
                                </a>
                            </div>

                            <div class="flex items-center justify-between p-3 rounded-xl bg-slate-50 border border-slate-100">
                                <span class="text-slate-500 font-medium flex items-center gap-2">
                                    <i class="fa-solid fa-envelope text-teal-600"></i> Email
                                </span>
                                <span class="font-semibold text-slate-700 truncate max-w-[180px]">{{ $brand['email'] ?? 'pdev63575@gmail.com' }}</span>
                            </div>
                        </div>

                        <!-- Action Button -->
                        <a href="#enquiry-section" 
                           class="w-full flex items-center justify-center gap-2 bg-slate-900 hover:bg-teal-800 text-white font-semibold text-xs py-3.5 rounded-xl shadow-xs transition">
                            <i class="fa-solid fa-paper-plane text-xs"></i>
                            <span>Send Us an Inquiry</span>
                        </a>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
