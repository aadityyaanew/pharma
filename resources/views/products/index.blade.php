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

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                @foreach($displayItems as $product)
                    @php
                        if (!empty($product->featured_image)) {
                            $imageSrc = asset('storage/' . $product->featured_image);
                        } elseif (str_contains(strtolower($product->name), 'tablet') || str_contains(strtolower($product->name), 'capsule')) {
                            $imageSrc = asset('images/3d/tablet_pack.png');
                        } elseif (str_contains(strtolower($product->name), 'liquid') || str_contains(strtolower($product->name), 'syrup')) {
                            $imageSrc = asset('images/3d/medicine_bottle.png');
                        } elseif (str_contains(strtolower($product->name), 'injectable') || str_contains(strtolower($product->name), 'infusion')) {
                            $imageSrc = asset('images/3d/transfusion.png');
                        } elseif (str_contains(strtolower($product->name), 'ointment') || str_contains(strtolower($product->name), 'derma')) {
                            $imageSrc = asset('images/3d/first_aid.png');
                        } elseif (str_contains(strtolower($product->name), 'nutra') || str_contains(strtolower($product->name), 'immunity')) {
                            $imageSrc = asset('images/3d/dna.png');
                        } elseif (str_contains(strtolower($product->name), 'cardio') || str_contains(strtolower($product->name), 'heart')) {
                            $imageSrc = asset('images/3d/heart.png');
                        } else {
                            $imageSrc = asset('images/3d/prescription_pills.png');
                        }
                    @endphp

                    <!-- Entire Card Clickable Linking Directly to Product Details -->
                    <a href="{{ route('products.show', $product->slug) }}" 
                       class="group bg-white rounded-3xl p-6 sm:p-7 border border-slate-200/90 shadow-sm hover:shadow-xl hover:border-teal-300 hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between text-center">
                        
                        <!-- Product Image Container -->
                        <div class="w-full aspect-square rounded-2xl bg-gradient-to-br from-slate-50 to-teal-50/50 p-6 flex items-center justify-center border border-slate-100 group-hover:bg-teal-50/80 transition-colors duration-300 overflow-hidden mb-5">
                            <img src="{{ $imageSrc }}" 
                                 alt="{{ $product->name }}" 
                                 class="max-w-[75%] max-h-[75%] object-contain drop-shadow-md group-hover:scale-110 transition-transform duration-300">
                        </div>

                        <!-- Product Title -->
                        <div class="space-y-2">
                            <h3 class="font-serif text-xl sm:text-2xl font-bold text-slate-900 group-hover:text-teal-700 transition-colors line-clamp-2">
                                {{ $product->name }}
                            </h3>
                            <span class="inline-flex items-center gap-1.5 text-xs font-semibold text-teal-600 group-hover:text-teal-800 transition">
                                <span>View Details</span>
                                <i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition-transform"></i>
                            </span>
                        </div>

                    </a>
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
