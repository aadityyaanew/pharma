@php
    $brand = config('velora.brand');
@endphp

<footer class="bg-slate-950 text-slate-400 pt-12 sm:pt-20 pb-8 sm:pb-10 border-t border-slate-800/80 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-8 mb-10 sm:mb-16">
            
            <!-- Brand & Executive Overview -->
            <div class="lg:col-span-5 space-y-6 pr-0 lg:pr-10">
                <div class="flex items-center gap-3.5">
                    <div class="w-14 h-14 rounded-2xl bg-white p-1.5 shadow-md border border-slate-700 flex items-center justify-center shrink-0">
                        <img src="{{ asset('images/logo.png') }}" alt="{{ $brand['name'] ?? 'Jay Ambe Life Care' }}" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <h2 class="font-serif font-bold text-2xl text-white tracking-wide">{{ $brand['name'] ?? 'Jay Ambe Life Care' }}</h2>
                        <p class="text-[10px] uppercase tracking-widest text-teal-400 font-extrabold mt-0.5">
                            Pharmaceutical & Healthcare Solutions
                        </p>
                    </div>
                </div>
                
                <p class="text-sm text-slate-300 leading-relaxed font-light">
                    {{ $brand['tagline'] ?? 'COMMITTED TO HEALTH • DEDICATED TO LIFE' }}. Under the leadership of <strong>Managing Director Mr. Dev Patel</strong>, Jay Ambe Life Care manufactures and supplies WHO-GMP certified pharmaceuticals, tablets, oral liquids, sterile injectables, and nutraceuticals to hospitals, distributors, and PCD franchise partners nationwide.
                </p>

                <!-- Executive Desk Strip -->
                <div class="p-4 rounded-2xl bg-slate-900 border border-slate-800 text-xs text-slate-300 space-y-1.5">
                    <p class="font-bold text-white flex items-center gap-2">
                        <i class="fa-solid fa-user-tie text-teal-400"></i> Managing Director: {{ $brand['managing_director'] ?? 'Mr. Dev Patel' }}
                    </p>
                    <p class="text-slate-400 text-[11px]">
                        Corporate HQ: Karjan, District Vadodara, Gujarat - 391240
                    </p>
                </div>
            </div>

            <!-- Links Sections -->
            <div class="lg:col-span-7 grid grid-cols-2 sm:grid-cols-3 gap-8">
                
                <!-- Medicine Divisions -->
                <div>
                    <h4 class="font-bold text-white text-xs uppercase tracking-wider mb-5 text-teal-400">Our Medicines</h4>
                    <ul class="space-y-3.5 text-xs font-light">
                        <li><a href="{{ route('products.index') }}" class="hover:text-white transition-colors">Tablets & Capsules</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-white transition-colors">Liquid Orals & Syrups</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-white transition-colors">Sterile Injections</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-white transition-colors">Ointments & Gels</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-white transition-colors">Nutraceuticals</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-teal-400 transition-colors text-teal-400 font-medium">PCD Franchise Monopoly</a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div>
                    <h4 class="font-bold text-white text-xs uppercase tracking-wider mb-5 text-teal-400">Company</h4>
                    <ul class="space-y-3.5 text-xs font-light">
                        <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">About Jay Ambe Life Care</a></li>
                        <li><a href="{{ route('home') }}#leadership" class="hover:text-white transition-colors">Managing Director</a></li>
                        <li><a href="{{ route('home') }}#why-choose-us" class="hover:text-white transition-colors">Why Choose Us</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors">Contact Us</a></li>
                        <li><a href="{{ route('blog.index') }}" class="hover:text-white transition-colors">Pharma Journal</a></li>
                        <li><a href="{{ route('privacy') }}" class="hover:text-white transition-colors">Privacy Policy</a></li>
                        <li><a href="{{ route('terms') }}" class="hover:text-white transition-colors">Terms of Supply</a></li>
                    </ul>
                </div>

                <!-- Connect / Address & Contacts -->
                <div class="col-span-2 sm:col-span-1 mt-4 sm:mt-0">
                    <h4 class="font-bold text-white text-xs uppercase tracking-wider mb-5 text-teal-400">Headquarters</h4>
                    <ul class="space-y-3.5 text-xs font-light">
                        @if(!empty($brand['phone']))
                            <li>
                                <a href="tel:{{ $brand['phone_raw'] ?? preg_replace('/[^0-9+]/', '', $brand['phone']) }}" class="hover:text-white transition-colors flex items-center gap-2.5">
                                    <span class="w-7 h-7 rounded-lg bg-slate-900 border border-slate-800 flex items-center justify-center text-sky-400 shrink-0"><i class="fa-solid fa-phone text-[10px]"></i></span>
                                    <span class="font-bold text-slate-200">{{ $brand['phone'] }}</span>
                                </a>
                            </li>
                        @endif

                        @if(!empty($brand['whatsapp_number']))
                            <li>
                                <a href="https://wa.me/{{ $brand['whatsapp_number'] }}" target="_blank" rel="noopener noreferrer" class="hover:text-white transition-colors flex items-center gap-2.5">
                                    <span class="w-7 h-7 rounded-lg bg-slate-900 border border-slate-800 flex items-center justify-center text-emerald-400 shrink-0"><i class="fa-brands fa-whatsapp text-xs"></i></span>
                                    <span>WhatsApp Desk</span>
                                </a>
                            </li>
                        @endif

                        @if(!empty($brand['email']))
                            <li>
                                <a href="mailto:{{ $brand['email'] }}" class="hover:text-white transition-colors flex items-center gap-2.5">
                                    <span class="w-7 h-7 rounded-lg bg-slate-900 border border-slate-800 flex items-center justify-center text-teal-400 shrink-0"><i class="fa-solid fa-envelope text-[10px]"></i></span>
                                    <span class="break-all">{{ $brand['email'] }}</span>
                                </a>
                            </li>
                        @endif

                        @if(!empty($brand['address']))
                            <li class="pt-2 text-slate-400 flex items-start gap-2.5">
                                <span class="w-7 h-7 rounded-lg bg-slate-900 border border-slate-800 flex items-center justify-center text-teal-400 shrink-0 mt-0.5"><i class="fa-solid fa-location-dot text-[10px]"></i></span>
                                <span class="leading-relaxed text-[11px]">{{ $brand['address'] }}</span>
                            </li>
                        @endif
                    </ul>
                </div>

            </div>
        </div>

        <!-- Copyright Bar -->
        <div class="border-t border-slate-800/80 pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs font-light text-slate-500">
            <div class="flex items-center gap-2 text-[11px]">
                <i class="fa-solid fa-shield-halved text-teal-400"></i>
                <span>Pharmaceuticals & Healthcare Solutions • Vadodara, Gujarat</span>
            </div>
            
            <p class="text-center md:text-left">
                &copy; {{ date('Y') }} {{ $brand['name'] ?? 'Jay Ambe Life Care' }}. All Rights Reserved.
            </p>
            
            <a href="#hero" class="hover:text-white transition-colors flex items-center gap-2 font-medium text-xs">
                Back to Top <i class="fa-solid fa-arrow-up text-[10px]"></i>
            </a>
        </div>

    </div>
</footer>
