@php
    $brand = config('velora.brand');
@endphp

<div class="bg-slate-900 border-b border-slate-800 text-xs py-2.5 px-4 text-slate-300">
    <div class="max-w-7xl mx-auto flex flex-wrap justify-between items-center gap-2">
        <div class="flex items-center gap-3">
            <span class="inline-flex items-center gap-1.5 font-bold text-sky-400">
                <i class="fa-solid fa-staff-snake text-emerald-400 text-sm"></i> JAY AMBE LIFE CARE
            </span>
            <span class="text-slate-700">|</span>
            <span class="inline-flex items-center gap-1.5 text-slate-300 font-medium">
                <i class="fa-solid fa-user-tie text-sky-400"></i>  <strong class="text-white">{{ $brand['managing_director'] ?? 'Mr. Dev Patel' }}</strong>
            </span>

        </div>
        
        <div class="flex items-center gap-5 text-slate-300 text-xs">
            @if(!empty($brand['phone']))
                <a href="tel:{{ $brand['phone_raw'] ?? preg_replace('/[^0-9+]/', '', $brand['phone']) }}" class="hover:text-white transition flex items-center gap-1.5 font-semibold text-sky-300">
                    <i class="fa-solid fa-phone text-sky-400 text-[11px]"></i> {{ $brand['phone'] }}
                </a>
            @endif

            @if(!empty($brand['email']))
                <a href="mailto:{{ $brand['email'] }}" class="hover:text-white transition hidden sm:flex items-center gap-1.5">
                    <i class="fa-solid fa-envelope text-sky-400 text-[11px]"></i> {{ $brand['email'] }}
                </a>
            @endif

            <span class="hidden md:flex items-center gap-1.5 text-slate-400 text-[11px]">
                <i class="fa-solid fa-location-dot text-emerald-400"></i> Karjan, Vadodara, Gujarat
            </span>
        </div>
    </div>
</div>
