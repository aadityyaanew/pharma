@extends('layouts.app')

@section('title', 'Our Medicines | Jay Ambe Life Care')
@section('meta_description', 'Explore medicines by Jay Ambe Life Care: Tablets, Capsules, Liquid Orals, Sterile Injectables, Ointments, and PCD Franchise opportunities from Karjan, Vadodara.')

@php
    $brand = config('velora.brand');
    $configProducts = config('velora.products', []);
@endphp

@section('content')
    <!-- Products Hero Banner -->
    <section class="relative bg-gradient-to-b from-slate-900 via-sky-950 to-slate-900 text-white pt-24 pb-20 overflow-hidden">
        <div class="absolute inset-0 opacity-15 pointer-events-none bg-[radial-gradient(#38bdf8_1px,transparent_1px)] [background-size:24px_24px]"></div>
        
        <!-- Ambient Glow -->
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-96 h-96 bg-teal-500/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-teal-500/10 border border-teal-400/30 text-teal-300 text-xs font-bold tracking-wider uppercase mb-6 shadow-sm">
                <i class="fa-solid fa-pills"></i> JAY AMBE LIFE CARE MEDICINES
            </div>
            
            <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-white mb-6">
                Our Medicines & Pharmaceutical Range
            </h1>
            
            <p class="max-w-3xl mx-auto text-slate-300 text-base sm:text-lg font-light leading-relaxed">
                Manufactured under WHO-GMP cleanroom standards with authenticated lot assay documentation. Available for institutional hospital procurement, wholesale distribution, and monopoly PCD franchise allocation.
            </p>

            <!-- Quick Specs Ribbon -->
            <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-8 mt-10 text-xs text-teal-200/90 font-medium">
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-award text-teal-400"></i>
                    <span>WHO-GMP Compliant Standards</span>
                </div>
                <div class="hidden sm:block h-3 w-px bg-slate-700"></div>
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-box-tissue text-teal-400"></i>
                    <span>Hermetic Alu-Alu & Blistering</span>
                </div>
                <div class="hidden sm:block h-3 w-px bg-slate-700"></div>
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-certificate text-teal-400"></i>
                    <span>DCGI Approved Molecules</span>
                </div>
                <div class="hidden sm:block h-3 w-px bg-slate-700"></div>
                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-map-location-dot text-teal-400"></i>
                    <span>Vadodara, Gujarat Supply Hub</span>
                </div>
            </div>

            <!-- Search Bar -->
            <div class="mt-12 max-w-2xl mx-auto">
                <form action="{{ route('products.index') }}" method="GET" class="relative flex items-center">
                    @if($category)
                        <input type="hidden" name="category" value="{{ $category }}">
                    @endif
                    <input type="text" 
                           name="search" 
                           value="{{ $search ?? '' }}" 
                           placeholder="Search medicines, tablets, syrups, or molecules (e.g. tablet, syrup, injectable)..." 
                           class="w-full bg-slate-800/90 border border-slate-700 rounded-full pl-5 pr-32 py-3.5 text-sm text-white placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition shadow-inner">
                    <button type="submit" 
                            class="absolute right-1.5 px-5 py-2.5 rounded-full bg-teal-600 hover:bg-teal-500 text-white font-semibold text-xs transition duration-200 shadow-md">
                        <i class="fa-solid fa-magnifying-glass mr-1"></i> Search
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Main Products Listing -->
    <section class="py-16 sm:py-24 bg-slate-50 min-h-[600px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @if ($search)
                <div class="mb-8 flex items-center justify-between bg-white p-4 rounded-2xl border border-slate-200">
                    <p class="text-sm text-slate-600">
                        Showing results for <span class="font-bold text-slate-900">"{{ $search }}"</span>
                    </p>
                    <a href="{{ route('products.index') }}" class="text-xs text-teal-600 hover:underline font-semibold">
                        Clear Search &times;
                    </a>
                </div>
            @endif

            <!-- Products Grid: Displays DB products or fallback to config products -->
            @php
                $displayItems = $products->isNotEmpty() ? $products : collect($configProducts)->map(fn($item) => (object) [
                    'name' => $item['name'],
                    'slug' => $item['id'],
                    'size' => $item['size'],
                    'badge' => $item['badge'] ?? null,
                    'category' => $item['size'],
                    'tagline' => $item['tagline'] ?? null,
                    'description' => $item['description'] ?? null,
                    'price' => null,
                    'specs' => $item['specs'] ?? [],
                    'is_featured' => !empty($item['popular']),
                    'whatsapp_text' => $item['whatsapp_text'] ?? null,
                    'featured_image' => null,
                ]);
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                @foreach($displayItems as $product)
                    @php
                        $specs = is_array($product->specs) ? $product->specs : (json_decode($product->specs ?? '[]', true) ?? []);
                        $waMsg = $product->whatsapp_text ?: ("Hi Jay Ambe Life Care, I would like to enquire about {$product->name}.");
                    @endphp
                    <div class="bg-white rounded-[2rem] p-7 sm:p-9 flex flex-col justify-between relative group transition-all duration-300 hover:-translate-y-2 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] border border-slate-200/80 {{ $product->is_featured ? 'ring-2 ring-teal-300' : '' }}">
                        
                        <!-- Badges -->
                        <div class="flex items-center justify-between gap-2 mb-6">
                            <span class="text-[11px] font-bold tracking-widest uppercase px-3 py-1 rounded-full bg-teal-50 text-teal-700 border border-teal-100">
                                {{ $product->size ?? 'Pharmaceutical Division' }}
                            </span>

                            @if($product->badge)
                                <span class="text-[10px] font-bold tracking-wider uppercase px-3 py-1 rounded-full bg-slate-900 text-white shadow-sm">
                                    {{ $product->badge }}
                                </span>
                            @elseif($product->is_featured)
                                <span class="text-[10px] font-bold tracking-wider uppercase px-3 py-1 rounded-full bg-teal-600 text-white shadow-sm">
                                    Flagship Molecule
                                </span>
                            @endif
                        </div>

                        <div>
                            <!-- Visual Graphic Showcase with 3D Medicons -->
                            <div class="relative w-full h-52 sm:h-56 rounded-2xl bg-gradient-to-br from-slate-50 to-teal-50/50 border border-slate-100 flex items-center justify-center overflow-hidden mb-6 group-hover:bg-teal-50/70 transition">
                                <div class="text-center p-6">
                                    <div class="w-24 h-24 rounded-2xl bg-white/90 shadow-sm mx-auto flex items-center justify-center p-3 group-hover:scale-110 transition duration-300 mb-3 border border-slate-100">
                                        @if(str_contains(strtolower($product->name), 'tablet') || str_contains(strtolower($product->name), 'capsule'))
                                            <img src="{{ asset('images/3d/tablet_pack.png') }}" alt="{{ $product->name }}" class="w-full h-full object-contain filter drop-shadow">
                                        @elseif(str_contains(strtolower($product->name), 'liquid') || str_contains(strtolower($product->name), 'syrup'))
                                            <img src="{{ asset('images/3d/medicine_bottle.png') }}" alt="{{ $product->name }}" class="w-full h-full object-contain filter drop-shadow">
                                        @elseif(str_contains(strtolower($product->name), 'injectable') || str_contains(strtolower($product->name), 'infusion'))
                                            <img src="{{ asset('images/3d/transfusion.png') }}" alt="{{ $product->name }}" class="w-full h-full object-contain filter drop-shadow">
                                        @elseif(str_contains(strtolower($product->name), 'ointment') || str_contains(strtolower($product->name), 'derma'))
                                            <img src="{{ asset('images/3d/first_aid.png') }}" alt="{{ $product->name }}" class="w-full h-full object-contain filter drop-shadow">
                                        @elseif(str_contains(strtolower($product->name), 'nutra') || str_contains(strtolower($product->name), 'immunity'))
                                            <img src="{{ asset('images/3d/dna.png') }}" alt="{{ $product->name }}" class="w-full h-full object-contain filter drop-shadow">
                                        @elseif(str_contains(strtolower($product->name), 'cardio') || str_contains(strtolower($product->name), 'heart'))
                                            <img src="{{ asset('images/3d/heart.png') }}" alt="{{ $product->name }}" class="w-full h-full object-contain filter drop-shadow">
                                        @else
                                            <img src="{{ asset('images/3d/prescription_pills.png') }}" alt="{{ $product->name }}" class="w-full h-full object-contain filter drop-shadow">
                                        @endif
                                    </div>
                                    <span class="font-serif text-xl font-bold text-slate-800 tracking-tight block">
                                        {{ $product->name }}
                                    </span>
                                    <span class="text-[10px] tracking-widest uppercase text-teal-700 font-bold mt-1 block">
                                        WHO-GMP Tested Quality
                                    </span>
                                </div>

                                <div class="absolute bottom-3 right-3 bg-white/95 backdrop-blur-sm px-3 py-1 rounded-lg border border-slate-200 text-slate-900 font-bold text-xs shadow-2xs">
                                    {{ $product->size }}
                                </div>
                            </div>

                            <!-- Tagline -->
                            @if($product->tagline)
                                <p class="text-xs text-teal-700 font-bold tracking-wide uppercase mb-2">
                                    {{ $product->tagline }}
                                </p>
                            @endif

                            @if($product->description)
                                <p class="text-sm text-slate-500 leading-relaxed font-light mb-6 line-clamp-3">
                                    {{ $product->description }}
                                </p>
                            @endif

                            <!-- Specs List -->
                            @if(!empty($specs) && count($specs) > 0)
                                <div class="space-y-2.5 mb-8 bg-slate-50/80 p-4 rounded-xl border border-slate-100">
                                    @foreach(array_slice($specs, 0, 4) as $specKey => $specValue)
                                        <div class="flex justify-between items-center text-xs">
                                            <span class="text-slate-500 font-medium">{{ $specKey }}</span>
                                            <span class="font-semibold text-slate-800 text-right">{{ $specValue }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col gap-2.5 pt-4 border-t border-slate-100">
                            @if(!empty($brand['whatsapp_number']))
                                <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode($waMsg) }}"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="w-full flex items-center justify-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-medium text-xs sm:text-sm py-3 px-4 rounded-xl shadow-xs transition duration-200">
                                    <i class="fa-brands fa-whatsapp text-lg"></i> Enquire via WhatsApp
                                </a>
                            @endif

                            <div class="grid grid-cols-2 gap-2">
                                <a href="{{ route('contact') }}"
                                   class="flex items-center justify-center gap-1.5 bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold text-xs py-2.5 px-3 rounded-xl transition duration-200">
                                    <span>MD Office</span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>

                                <button @click="openEnquiryFor('{{ $product->name }}', '{{ $product->size }}')"
                                        class="flex items-center justify-center gap-1 bg-slate-900 hover:bg-sky-800 text-white font-semibold text-xs py-2.5 px-3 rounded-xl transition duration-200">
                                    <span>Get Quote</span>
                                </button>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

            @if($products->hasPages())
                <div class="mt-14">
                    {{ $products->links() }}
                </div>
            @endif

        </div>
    </section>

    <!-- PCD Monopoly & Hospital Supply Banner -->
    <section class="py-20 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#38bdf8_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="bg-gradient-to-r from-teal-950/80 to-slate-900/90 rounded-3xl p-8 sm:p-14 border border-teal-500/25 shadow-2xl flex flex-col lg:flex-row items-center justify-between gap-10">
                <div class="max-w-2xl space-y-4">
                    <span class="inline-flex items-center gap-2 text-xs font-bold tracking-widest uppercase text-teal-400 bg-teal-500/10 px-3.5 py-1.5 rounded-full border border-teal-400/20">
                        <i class="fa-solid fa-handshake"></i> District Monopoly Rights & Contract Supply
                    </span>
                    <h3 class="font-serif text-3xl sm:text-4xl font-bold tracking-tight text-white">
                        Seeking Exclusive PCD Pharma Monopoly Rights in Your District?
                    </h3>
                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed font-light">
                        Collaborate directly with <strong>Managing Director Mr. Dev Patel</strong>. Benefit from monopoly territorial agreements, complete physician marketing collaterals, and timely consignments from Karjan, Vadodara.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 shrink-0 w-full sm:w-auto">
                    @if(!empty($brand['whatsapp_number']))
                        <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Mr. Dev Patel, I would like to discuss PCD Pharma Franchise monopoly rights for my district.') }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="inline-flex items-center justify-center gap-2 px-6 py-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-sm shadow-lg transition">
                            <i class="fa-brands fa-whatsapp text-lg"></i> WhatsApp Mr. Dev Patel
                        </a>
                    @endif
                    <a href="{{ route('home') }}#enquiry-section"
                       class="inline-flex items-center justify-center gap-2 px-6 py-4 rounded-xl bg-white hover:bg-slate-100 text-slate-900 font-semibold text-sm transition">
                        <span>Submit Franchise Application</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
