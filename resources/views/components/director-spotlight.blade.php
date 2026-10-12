@php
    $brand = config('velora.brand');
@endphp

<section id="leadership" class="py-20 lg:py-28 bg-white relative overflow-hidden border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="bg-gradient-to-br from-slate-900 via-sky-950 to-slate-900 rounded-3xl p-8 sm:p-14 lg:p-16 text-white shadow-2xl relative overflow-hidden">
            
            <!-- Ambient Highlights -->
            <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-teal-500/15 blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-32 -left-32 w-96 h-96 rounded-full bg-sky-500/15 blur-3xl pointer-events-none"></div>
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10">
                
                <!-- Left Executive Profile -->
                <div class="lg:col-span-5 flex flex-col items-center text-center">
                    <div class="relative mb-6">
                        <div class="w-48 h-48 sm:w-56 sm:h-56 rounded-3xl p-2 bg-gradient-to-tr from-sky-400/30 via-teal-300/30 to-emerald-400/30 border border-slate-700 shadow-2xl flex items-center justify-center bg-slate-900">
                            <img src="{{ asset('images/3d/doctor.png') }}" alt="Managing Director Mr. Dev Patel" class="w-40 h-40 sm:w-48 sm:h-48 object-contain drop-shadow-xl">
                        </div>
                        <div class="absolute -bottom-3 bg-emerald-600 text-white text-[11px] font-bold uppercase tracking-wider px-4 py-1 rounded-full shadow-lg border border-emerald-400/30">
                            Managing Director
                        </div>
                    </div>

                    <h3 class="font-serif text-3xl font-bold text-white tracking-tight mt-2">
                        {{ $brand['managing_director'] ?? 'Mr. Dev Patel' }}
                    </h3>
                    <p class="text-xs uppercase tracking-wider text-teal-400 font-bold mt-1">
                        Managing Director &bull; Jay Ambe Life Care
                    </p>

                    <!-- Direct Connect Pills -->
                    <div class="mt-6 flex flex-col w-full max-w-xs gap-2.5 text-xs">
                        <a href="tel:{{ $brand['phone_raw'] ?? '+916352727517' }}" 
                           class="flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-slate-800/90 hover:bg-slate-700 text-teal-300 border border-slate-700 transition">
                            <i class="fa-solid fa-phone text-teal-400"></i>
                            <span class="font-bold">{{ $brand['phone'] ?? '+91 6352727517' }}</span>
                        </a>

                        <a href="mailto:{{ $brand['email'] ?? 'pdev63575@gmail.com' }}" 
                           class="flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-slate-800/90 hover:bg-slate-700 text-sky-300 border border-slate-700 transition">
                            <i class="fa-solid fa-envelope text-sky-400"></i>
                            <span class="font-medium">{{ $brand['email'] ?? 'pdev63575@gmail.com' }}</span>
                        </a>
                    </div>
                </div>

                <!-- Right Message & Vision -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-teal-400 bg-teal-500/10 px-3.5 py-1 rounded-full border border-teal-400/20">
                        <i class="fa-solid fa-quote-left"></i> Managing Director's Message
                    </div>

                    <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl font-medium text-white leading-tight">
                        "Committed to Honest Healthcare and Sustainable Growth for Our Partners."
                    </h2>

                    <div class="space-y-4 text-slate-300 text-sm sm:text-base leading-relaxed font-light">
                        <p>
                            "Welcome to <strong>Jay Ambe Life Care</strong>. When we established our pharmaceutical base at Karjan, Vadodara, our principle was simple: every batch must be therapeutically reliable, and every business association must be built on mutual trust and transparency."
                        </p>
                        <p>
                            "We understand the responsibilities of our franchise partners, chemists, and hospital procurement teams. You need consistent batch availability, authenticated COA reports, strict territorial monopoly, and direct access to leadership. Whether you are expanding your distribution in Gujarat or securing exclusive PCD rights, my desk is directly accessible to you."
                        </p>
                    </div>

                    <!-- Authentic Commercial Guarantees -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-4 border-t border-slate-800">
                        <div class="p-3 rounded-xl bg-slate-800/50 border border-slate-700/60">
                            <p class="font-bold text-white text-sm">Monopoly Protection</p>
                            <p class="text-xs text-slate-400 mt-1">Guaranteed district-wise exclusivity</p>
                        </div>
                        <div class="p-3 rounded-xl bg-slate-800/50 border border-slate-700/60">
                            <p class="font-bold text-white text-sm">Complete Visual Aids</p>
                            <p class="text-xs text-slate-400 mt-1">LBLs, MR bags & product catch covers</p>
                        </div>
                        <div class="p-3 rounded-xl bg-slate-800/50 border border-slate-700/60">
                            <p class="font-bold text-white text-sm">Vadodara Dispatch</p>
                            <p class="text-xs text-slate-400 mt-1">Same-day order processing</p>
                        </div>
                    </div>

                    <!-- Direct WhatsApp Action -->
                    <div class="pt-2">
                        <a href="https://wa.me/{{ $brand['whatsapp_number'] ?? '916352727517' }}?text={{ urlencode('Hello Mr. Dev Patel, I would like to schedule a direct discussion regarding Jay Ambe Life Care pharma supply / PCD franchise.') }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="inline-flex items-center gap-2.5 px-6 py-3.5 rounded-full bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs tracking-wider uppercase transition shadow-lg">
                            <i class="fa-brands fa-whatsapp text-base"></i> Message Mr. Dev Patel Directly
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
