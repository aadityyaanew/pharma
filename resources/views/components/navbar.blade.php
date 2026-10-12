@php
    $brand = config('velora.brand');
@endphp

<header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-slate-200/90 shadow-xs transition duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <!-- Brand Emblem & Identity (Left) -->
            <a href="{{ route('home') }}" class="flex items-center gap-3.5 group shrink-0">
                <div class="relative w-12 h-12 rounded-2xl overflow-hidden p-1 bg-gradient-to-tr from-sky-600 via-teal-500 to-emerald-500 shadow-xs group-hover:scale-105 transition duration-300 flex items-center justify-center">
                    <img src="{{ asset('images/logo.png') }}" alt="{{ $brand['name'] ?? 'Jay Ambe Life Care' }}" class="w-full h-full object-contain rounded-xl bg-white p-0.5">
                </div>
                <div>
                    <div class="flex items-baseline gap-1.5">
                        <span class="font-serif text-2xl font-extrabold tracking-tight text-slate-900 group-hover:text-teal-700 transition">
                            JAY AMBE
                        </span>
                        <span class="font-sans text-[11px] tracking-widest text-teal-600 font-extrabold uppercase">LIFE CARE</span>
                    </div>
                    <p class="text-[9px] tracking-widest uppercase text-slate-400 font-semibold flex items-center gap-1.5 -mt-0.5">
                        <span>PHARMA</span>
                        <span class="text-teal-500">•</span>
                        <span>KARJAN, VADODARA</span>
                    </p>
                </div>
            </a>

            <!-- Desktop Navigation Links (Center) -->
            <nav class="hidden lg:flex items-center gap-1.5 bg-slate-50/80 p-1.5 rounded-full border border-slate-200/70 text-sm font-medium text-slate-700 shadow-2xs">
                <a href="{{ route('about') }}" 
                   class="px-4 py-2 rounded-full transition-all duration-200 whitespace-nowrap {{ request()->routeIs('about') ? 'bg-white text-teal-800 font-bold shadow-xs' : 'hover:text-teal-700 hover:bg-white/60' }}">
                    About Us
                </a>
                <a href="{{ route('products.index') }}" 
                   class="px-4 py-2 rounded-full transition-all duration-200 whitespace-nowrap {{ request()->routeIs('products.*') ? 'bg-white text-teal-800 font-bold shadow-xs' : 'hover:text-teal-700 hover:bg-white/60' }}">
                    Our Medicines
                </a>
                <a href="{{ route('blog.index') }}" 
                   class="px-4 py-2 rounded-full transition-all duration-200 whitespace-nowrap {{ request()->routeIs('blog.*') ? 'bg-white text-teal-800 font-bold shadow-xs' : 'hover:text-teal-700 hover:bg-white/60' }}">
                    Pharma Journal
                </a>
                <a href="{{ route('contact') }}" 
                   class="px-4 py-2 rounded-full transition-all duration-200 whitespace-nowrap {{ request()->routeIs('contact') ? 'bg-white text-teal-800 font-bold shadow-xs' : 'hover:text-teal-700 hover:bg-white/60' }}">
                    Contact Desk
                </a>
            </nav>

            <!-- Header Actions (Right) -->
            <div class="hidden lg:flex items-center gap-3 shrink-0">
                @if(!empty($brand['whatsapp_number']))
                    <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Jay Ambe Life Care, I would like to make an enquiry regarding pharmaceutical supply / franchise.') }}"
                       target="_blank"
                       rel="noopener noreferrer"
                       id="header-whatsapp-btn"
                       class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-xs px-4 py-2.5 rounded-full shadow-xs hover:shadow transition duration-200 whitespace-nowrap">
                        <i class="fa-brands fa-whatsapp text-sm"></i> WhatsApp Desk
                    </a>
                @endif
                <a href="{{ route('contact') }}" 
                   id="header-enquiry-btn"
                   class="inline-flex items-center gap-2 bg-slate-900 hover:bg-teal-800 text-white font-semibold text-xs px-5 py-2.5 rounded-full shadow-xs hover:shadow transition duration-200 whitespace-nowrap">
                    <span>Enquire Now</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>
            </div>

            <!-- Mobile Navigation Toggle (strictly hidden on lg and above) -->
            <div class="flex items-center lg:hidden">
                <button @click="mobileMenu = !mobileMenu" 
                        id="mobile-menu-toggle"
                        class="text-slate-700 hover:text-slate-900 p-2.5 rounded-xl hover:bg-slate-100 transition focus:outline-none" 
                        aria-label="Toggle Navigation">
                    <i :class="mobileMenu ? 'fa-solid fa-xmark text-xl text-slate-900' : 'fa-solid fa-bars text-xl text-slate-800'"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer -->
    <div x-show="mobileMenu" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="lg:hidden bg-white border-b border-slate-200 px-6 py-6 space-y-3 shadow-xl"
         style="display: none;">
        <a @click="mobileMenu = false" href="{{ route('about') }}" class="block px-3 py-2 rounded-xl text-slate-800 hover:bg-slate-50 font-medium {{ request()->routeIs('about') ? 'bg-teal-50 text-teal-800 font-bold' : '' }}">About Jay Ambe Life Care</a>
        <a @click="mobileMenu = false" href="{{ route('products.index') }}" class="block px-3 py-2 rounded-xl text-slate-800 hover:bg-slate-50 font-medium {{ request()->routeIs('products.*') ? 'bg-teal-50 text-teal-800 font-bold' : '' }}">Our Medicines</a>
        <a @click="mobileMenu = false" href="{{ route('blog.index') }}" class="block px-3 py-2 rounded-xl text-slate-800 hover:bg-slate-50 font-medium {{ request()->routeIs('blog.*') ? 'bg-teal-50 text-teal-800 font-bold' : '' }}">Pharma Journal</a>
        <a @click="mobileMenu = false" href="{{ route('contact') }}" class="block px-3 py-2 rounded-xl text-slate-800 hover:bg-slate-50 font-medium {{ request()->routeIs('contact') ? 'bg-teal-50 text-teal-800 font-bold' : '' }}">Contact Desk</a>
        
        <div class="pt-4 border-t border-slate-100 flex flex-col gap-2.5">
            @if(!empty($brand['whatsapp_number']))
                <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Jay Ambe Life Care, I would like to make an enquiry regarding pharmaceutical supply.') }}"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="flex items-center justify-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-xs py-3 rounded-xl shadow-xs">
                    <i class="fa-brands fa-whatsapp text-base"></i> Direct WhatsApp Chat
                </a>
            @endif
            <a @click="mobileMenu = false" href="{{ route('contact') }}"
               class="flex items-center justify-center gap-2 bg-slate-900 hover:bg-sky-800 text-white font-semibold text-xs py-3 rounded-xl">
                Online Enquiry Form
            </a>
        </div>
    </div>
</header>
