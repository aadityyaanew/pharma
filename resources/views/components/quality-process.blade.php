@php
    $stages = config('velora.purification_stages', []);
@endphp

<section id="quality" class="py-24 lg:py-32 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
            <div class="inline-flex items-center justify-center gap-3 mb-2">
                <span class="h-[1px] w-8 bg-teal-600"></span>
                <span class="text-teal-800 text-xs font-bold tracking-[0.2em] uppercase">Testing & Regulatory Standards</span>
                <span class="h-[1px] w-8 bg-teal-600"></span>
            </div>
            
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-medium text-slate-900 tracking-tight">
                7-Stage Pharmaceutical <br><span class="italic font-serif text-teal-700">Quality Assurance</span>
            </h2>
            <p class="text-slate-600 text-base sm:text-lg leading-relaxed font-normal mt-4">
                Formulations released by Jay Ambe Life Care undergo chemical assaying, stability chamber testing, and microbiological validation compliant with WHO-GMP and IP/BP/USP standards.
            </p>
        </div>

        <!-- 4 Key Quality Pillars with 3D Icons -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            
            <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200/80 text-center space-y-3 hover:shadow-md transition">
                <div class="w-16 h-16 mx-auto rounded-2xl bg-white p-2.5 shadow-sm border border-slate-100 flex items-center justify-center">
                    <img src="{{ asset('images/3d/flask.png') }}" alt="API Testing" class="w-12 h-12 object-contain">
                </div>
                <h3 class="text-base font-bold text-slate-900">API Purity Assay</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Active Pharmaceutical Ingredients verified for potency via HPLC and spectroscopic analysis.
                </p>
            </div>

            <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200/80 text-center space-y-3 hover:shadow-md transition">
                <div class="w-16 h-16 mx-auto rounded-2xl bg-white p-2.5 shadow-sm border border-slate-100 flex items-center justify-center">
                    <img src="{{ asset('images/3d/shield.png') }}" alt="Cleanroom" class="w-12 h-12 object-contain">
                </div>
                <h3 class="text-base font-bold text-slate-900">HVAC Cleanrooms</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Class 100 to 10,000 cleanroom environments maintaining positive air pressure and zero contamination.
                </p>
            </div>

            <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200/80 text-center space-y-3 hover:shadow-md transition">
                <div class="w-16 h-16 mx-auto rounded-2xl bg-white p-2.5 shadow-sm border border-slate-100 flex items-center justify-center">
                    <img src="{{ asset('images/3d/dna.png') }}" alt="Stability" class="w-12 h-12 object-contain">
                </div>
                <h3 class="text-base font-bold text-slate-900">Stability Chamber</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Accelerated temperature and humidity stress testing ensuring shelf-life integrity.
                </p>
            </div>

            <div class="p-6 rounded-3xl bg-slate-50 border border-slate-200/80 text-center space-y-3 hover:shadow-md transition">
                <div class="w-16 h-16 mx-auto rounded-2xl bg-white p-2.5 shadow-sm border border-slate-100 flex items-center justify-center">
                    <img src="{{ asset('images/3d/stethoscope.png') }}" alt="COA Release" class="w-12 h-12 object-contain">
                </div>
                <h3 class="text-base font-bold text-slate-900">Batch COA Release</h3>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Every consignment accompanied by an authenticated Certificate of Analysis and lot barcode.
                </p>
            </div>

        </div>

        <!-- 7 Stages Detailed Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            @foreach($stages as $stage)
                <div class="bg-slate-50 rounded-3xl p-7 flex flex-col justify-between group transition-all duration-300 hover:-translate-y-1 hover:bg-white shadow-2xs hover:shadow-md border border-slate-100">
                    <div>
                        <div class="flex items-center gap-3 mb-5">
                            <span class="w-10 h-10 rounded-full bg-teal-100 text-teal-800 flex items-center justify-center font-bold text-sm">
                                {{ $stage['num'] }}
                            </span>
                        </div>
                        <h3 class="text-sm font-bold text-slate-900 mb-2">
                            {{ $stage['title'] }}
                        </h3>
                        <p class="text-xs text-slate-600 font-normal leading-relaxed">
                            {{ $stage['desc'] }}
                        </p>
                    </div>
                </div>
            @endforeach

            <!-- Final Batch Certification Summary Card -->
            <div class="bg-gradient-to-br from-slate-900 to-sky-950 text-white rounded-3xl p-7 flex flex-col justify-between shadow-lg">
                <div>
                    <span class="text-[10px] font-bold uppercase tracking-widest text-teal-400 block mb-3 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span> Complete Lot Traceability
                    </span>
                    <h3 class="font-serif text-xl font-bold text-white mb-2">
                        Authentic Batch COA
                    </h3>
                    <p class="text-xs text-slate-300 font-light leading-relaxed">
                        Clinicians, hospitals, and distributors receive documented assay results verifying physical, chemical, and microbiological compliance.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-800 text-[11px] text-teal-300 font-bold tracking-wide uppercase">
                    WHO-GMP Standards &bull; Schedule M
                </div>
            </div>
        </div>

        <!-- Authentic Regulatory Strip -->
        <div class="bg-slate-50 rounded-3xl p-8 border border-slate-200/80 shadow-xs grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="space-y-1.5">
                <p class="text-xs font-bold text-slate-900 uppercase">WHO-GMP Compliant</p>
                <p class="text-[11px] text-slate-500">Good Manufacturing Practices</p>
            </div>
            <div class="space-y-1.5">
                <p class="text-xs font-bold text-slate-900 uppercase">ISO 9001:2015</p>
                <p class="text-[11px] text-slate-500">Quality Management System</p>
            </div>
            <div class="space-y-1.5">
                <p class="text-xs font-bold text-slate-900 uppercase">DCGI Approved</p>
                <p class="text-[11px] text-slate-500">Drug Regulatory Standards</p>
            </div>
            <div class="space-y-1.5">
                <p class="text-xs font-bold text-slate-900 uppercase">FSSAI Certified</p>
                <p class="text-[11px] text-slate-500">Nutraceutical Formulations</p>
            </div>
        </div>

    </div>
</section>
