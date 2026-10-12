@extends('layouts.app')

@section('title', "{$product->name} ({$product->size}) | Jay Ambe Life Care")
@section('meta_description', $product->description ? Str::limit(strip_tags($product->description), 150) : "Discover {$product->name} by Jay Ambe Life Care in {$product->size} format. WHO-GMP tested pharmaceutical formulations.")

@php
    $brand = config('velora.brand');
    $waMsg = $product->whatsapp_text ?: "Hi Jay Ambe Life Care, I would like to enquire about bulk supply for {$product->name} ({$product->size}).";
@endphp

@section('content')
    <!-- Detail Header & Breadcrumb -->
    <section class="bg-slate-900 text-white pt-10 pb-8 border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-xs text-slate-400 mb-4">
                <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
                <a href="{{ route('products.index') }}" class="hover:text-white transition">Our Medicines</a>
                <i class="fa-solid fa-chevron-right text-[9px] text-slate-600"></i>
                <span class="text-teal-400 font-medium truncate">{{ $product->name }}</span>
            </nav>
            <div class="flex flex-wrap items-center justify-between gap-4">
                <h1 class="font-serif text-3xl sm:text-4xl font-bold tracking-tight text-white">
                    {{ $product->name }}
                </h1>
                <div class="flex items-center gap-2">
                    <span class="text-xs font-bold px-3 py-1 rounded-full bg-teal-500/10 border border-teal-400/30 text-teal-300">
                        {{ $product->size }}
                    </span>
                    <span class="text-xs font-bold px-3 py-1 rounded-full bg-slate-800 border border-slate-700 text-slate-300">
                        {{ $product->category }}
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Main Showcase -->
    <section class="py-8 sm:py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl sm:rounded-3xl p-5 sm:p-10 lg:p-12 border border-slate-200/90 shadow-sm grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14">
                
                <!-- Left Visual Showcase -->
                <div class="lg:col-span-5 flex flex-col justify-between">
                    <div class="relative w-full aspect-square rounded-2xl bg-gradient-to-br from-slate-100 to-teal-50 border border-slate-200/70 flex items-center justify-center p-6 sm:p-8 overflow-hidden group">
                        <div class="text-center">
                            <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-2xl sm:rounded-3xl bg-white shadow-xl mx-auto flex items-center justify-center p-4 mb-3 sm:mb-4 group-hover:scale-105 transition duration-300 border border-slate-100">
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
                            <span class="font-serif text-2xl sm:text-3xl font-bold text-slate-800 block">
                                {{ $product->size }}
                            </span>
                            <span class="text-[11px] sm:text-xs tracking-widest uppercase text-teal-600 font-bold mt-1 block">
                                WHO-GMP Tested Formulations
                            </span>
                        </div>

                        @if($product->badge)
                            <div class="absolute top-3 left-3 sm:top-4 sm:left-4 bg-slate-900 text-white font-bold text-[9px] sm:text-[10px] tracking-widest uppercase px-2.5 sm:px-3 py-1 sm:py-1.5 rounded-full shadow-md">
                                {{ $product->badge }}
                            </div>
                        @endif

                        <div class="absolute bottom-3 right-3 sm:bottom-4 sm:right-4 bg-white/95 backdrop-blur-md px-3 sm:px-3.5 py-1 sm:py-1.5 rounded-xl border border-slate-200 text-[11px] sm:text-xs font-bold text-slate-800 shadow-xs">
                            <i class="fa-solid fa-check-double text-teal-600 mr-1"></i> Certified Quality
                        </div>
                    </div>

                    <!-- Assurance Pills -->
                    <div class="grid grid-cols-2 gap-2.5 sm:gap-3 mt-4 sm:mt-6 text-xs text-slate-600">
                        <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-200/80 flex items-center gap-2 sm:gap-2.5">
                            <i class="fa-solid fa-atom text-teal-600 text-sm sm:text-base"></i>
                            <div>
                                <p class="font-bold text-slate-800 text-[11px] sm:text-xs">WHO-GMP Compliant</p>
                                <p class="text-[9px] sm:text-[10px] text-slate-400">Sterile Assayed</p>
                            </div>
                        </div>
                        <div class="p-2.5 sm:p-3 rounded-xl bg-slate-50 border border-slate-200/80 flex items-center gap-2 sm:gap-2.5">
                            <i class="fa-solid fa-certificate text-emerald-600 text-sm sm:text-base"></i>
                            <div>
                                <p class="font-bold text-slate-800 text-[11px] sm:text-xs">Batch COA Assured</p>
                                <p class="text-[9px] sm:text-[10px] text-slate-400">Lot Traced</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Specs & Ordering -->
                <div class="lg:col-span-7 flex flex-col justify-between space-y-5 sm:space-y-6">
                    <div>
                        @if($product->tagline)
                            <p class="text-xs font-bold uppercase tracking-wider text-teal-700 mb-1.5 sm:mb-2">
                                {{ $product->tagline }}
                            </p>
                        @endif

                        <h2 class="font-serif text-2xl sm:text-4xl font-bold text-slate-900 tracking-tight mb-3 sm:mb-4">
                            {{ $product->name }} &bull; {{ $product->size }}
                        </h2>

                        <!-- Commercial Terms Banner -->
                        <div class="p-3.5 sm:p-4 rounded-2xl bg-teal-50/60 border border-teal-100 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2.5 mb-5 sm:mb-6">
                            <div>
                                <span class="text-[11px] sm:text-xs text-slate-500 font-medium block">Commercial & Franchise Terms</span>
                                <span class="text-xs sm:text-base font-bold text-teal-900">Hospital Supply & PCD Monopoly Franchise</span>
                            </div>
                            <span class="text-[11px] sm:text-xs font-semibold px-2.5 sm:px-3 py-1 sm:py-1.5 rounded-full bg-emerald-100 text-emerald-800 shrink-0">
                                In Stock &bull; Express Dispatch
                            </span>
                        </div>

                        <!-- Description -->
                        <div class="prose prose-slate text-sm sm:text-base text-slate-600 leading-relaxed font-light mb-8">
                            <p>{{ $product->description }}</p>
                        </div>

                        <!-- Technical Specs Grid -->
                        @if(!empty($product->specs) && is_array($product->specs))
                            <div class="mb-8">
                                <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-3">
                                    Formulation & Packaging Specifications
                                </h3>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    @foreach($product->specs as $specKey => $specValue)
                                        <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200/70 flex justify-between items-center text-xs">
                                            <span class="text-slate-500 font-medium">{{ $specKey }}</span>
                                            <span class="font-bold text-slate-900">{{ $specValue }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Call To Actions -->
                    <div class="pt-6 border-t border-slate-200 flex flex-col sm:flex-row gap-3">
                        @if(!empty($brand['whatsapp_number']))
                            <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode($waMsg) }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="flex-1 inline-flex items-center justify-center gap-2 py-4 px-6 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-sm shadow-md transition">
                                <i class="fa-brands fa-whatsapp text-lg"></i> Instant WhatsApp Enquiry
                            </a>
                        @endif
                        <a href="{{ route('home') }}#enquiry-section"
                           class="flex-1 inline-flex items-center justify-center gap-2 py-4 px-6 rounded-xl bg-slate-900 hover:bg-sky-800 text-white font-semibold text-sm transition">
                            <i class="fa-solid fa-file-signature text-xs"></i> Request Formal Rate List
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Related Formulations -->
    @if($relatedProducts->isNotEmpty())
        <section class="py-16 bg-white border-t border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between mb-10">
                    <div>
                        <span class="text-xs font-bold text-teal-600 uppercase tracking-widest">Explore Portfolio</span>
                        <h3 class="font-serif text-2xl sm:text-3xl font-bold text-slate-900 mt-1">
                            Complementary Formulations
                        </h3>
                    </div>
                    <a href="{{ route('products.index') }}" class="text-xs font-semibold text-teal-600 hover:underline">
                        View Full Catalog &rarr;
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                    @foreach($relatedProducts as $related)
                        <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200 flex flex-col justify-between hover:shadow-md transition">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full bg-white border border-slate-200 text-slate-700">
                                        {{ $related->size }}
                                    </span>
                                    <span class="text-xs text-teal-700 font-medium">
                                        {{ $related->category }}
                                    </span>
                                </div>
                                <h4 class="font-serif text-lg font-bold text-slate-900 mb-1">
                                    {{ $related->name }}
                                </h4>
                                <p class="text-xs text-slate-500 line-clamp-2 font-light mb-4">
                                    {{ $related->description }}
                                </p>
                            </div>
                            <a href="{{ route('products.show', $related->slug) }}" 
                               class="text-xs font-semibold text-teal-600 hover:text-teal-800 flex items-center gap-1 pt-3 border-t border-slate-200/60">
                                <span>Inspect Formulation Specs</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
