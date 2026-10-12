@php
    $brand = config('velora.brand');
    $catalogProducts = config('velora.products', []);

    $divisionIconMap = [
        'tablets-capsules' => 'tablet_pack.png',
        'liquid-orals' => 'medicine_bottle.png',
        'injectables' => 'transfusion.png',
        'derma-topical' => 'first_aid.png',
        'nutraceuticals' => 'heart.png',
        'pcd-franchise' => 'doctor.png',
    ];
@endphp

<section id="products" class="py-24 lg:py-32 bg-slate-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
            <div class="inline-flex items-center justify-center gap-3 mb-2">
                <span class="h-[1px] w-8 bg-teal-600"></span>
                <span class="text-teal-800 text-xs font-bold tracking-[0.2em] uppercase">Therapeutic Product Divisions</span>
                <span class="h-[1px] w-8 bg-teal-600"></span>
            </div>
            
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-medium text-slate-900 tracking-tight">
                Our Range of <span class="italic font-serif text-teal-700">Medicines & Healthcare Products</span>
            </h2>
            <p class="text-slate-600 text-base sm:text-lg leading-relaxed font-normal mt-4">
                Manufactured under WHO-GMP compliance with verified HPLC potency tests. Supplied in tamper-evident Alu-Alu, Blister, and Amber glass/PET packaging.
            </p>
        </div>

        <!-- 3D Divisions Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
            @foreach($catalogProducts as $product)
                @php
                    $isFeatured = !empty($product['popular']) || !empty($product['badge']);
                    $specs = $product['specs'] ?? [];
                    $waMsg = $product['whatsapp_text'] ?? ("Hi Jay Ambe Life Care, I would like to enquire about {$product['name']}.");
                    $iconFile = $divisionIconMap[$product['id'] ?? ''] ?? 'tablet_pack.png';
                @endphp
                <div class="bg-white rounded-3xl p-8 lg:p-9 flex flex-col justify-between relative group transition-all duration-300 hover:-translate-y-2 shadow-sm hover:shadow-xl border border-slate-200/90 {{ $isFeatured ? 'ring-1 ring-teal-300' : '' }}">
                    
                    @if($isFeatured)
                        <div class="absolute -top-3.5 right-8 bg-slate-900 text-white font-bold text-[10px] tracking-widest uppercase px-4 py-1.5 rounded-full shadow-md">
                            {{ $product['badge'] ?? 'Featured Division' }}
                        </div>
                    @endif

                    <div>
                        <!-- 3D Medicon Header -->
                        <div class="flex items-start justify-between mb-6">
                            <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-teal-50/80 to-sky-50/50 p-2 flex items-center justify-center border border-slate-100 shadow-inner group-hover:scale-105 transition duration-300">
                                <img src="{{ asset('images/3d/' . $iconFile) }}" alt="{{ $product['name'] }}" class="w-16 h-16 object-contain drop-shadow-sm">
                            </div>
                            <div class="text-right">
                                <span class="font-serif text-xl sm:text-2xl text-slate-900 font-bold block mb-1">
                                    {{ $product['size'] }}
                                </span>
                                <span class="text-[10px] font-bold tracking-wider uppercase text-teal-700 bg-teal-50 px-2.5 py-0.5 rounded-full border border-teal-100">
                                    WHO-GMP Assayed
                                </span>
                            </div>
                        </div>

                        <!-- Content -->
                        <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-teal-700 transition">
                            {{ $product['name'] }}
                        </h3>

                        @if(!empty($product['tagline']))
                            <p class="text-xs text-teal-800 font-bold tracking-wide uppercase mb-3">{{ $product['tagline'] }}</p>
                        @endif

                        @if(!empty($product['description']))
                            <p class="text-sm text-slate-600 leading-relaxed font-normal mb-6">
                                {{ $product['description'] }}
                            </p>
                        @endif

                        <!-- Specifications List -->
                        @if(!empty($specs) && count($specs) > 0)
                            <div class="space-y-2.5 mb-8 bg-slate-50 p-4 rounded-2xl border border-slate-100 text-xs">
                                @foreach($specs as $specKey => $specValue)
                                    <div class="flex justify-between items-center pb-2 border-b border-slate-200/60 last:border-0 last:pb-0">
                                        <span class="text-slate-500 font-medium">{{ $specKey }}</span>
                                        <span class="font-bold text-slate-800 text-right">{{ $specValue }}</span>
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
                               class="w-full flex items-center justify-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-xs py-3.5 px-4 rounded-xl shadow-xs transition duration-200">
                                <i class="fa-brands fa-whatsapp text-lg"></i> Inquire via WhatsApp
                            </a>
                        @endif

                        <div class="grid grid-cols-2 gap-2">
                            <a href="{{ route('products.index') }}"
                               class="flex items-center justify-center gap-1.5 bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold text-xs py-2.5 px-3 rounded-xl transition duration-200">
                                <span>Details</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>

                            <button @click="openEnquiryFor('{{ $product['name'] }}', '{{ $product['size'] }}')"
                                    class="flex items-center justify-center gap-1 bg-slate-900 hover:bg-sky-800 text-white font-semibold text-xs py-2.5 px-3 rounded-xl transition duration-200">
                                <span>Get Rate List</span>
                            </button>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

        <!-- Full Catalog Navigation Link -->
        <div class="mt-14 text-center">
            <a href="{{ route('products.index') }}" 
               class="inline-flex items-center gap-2.5 px-8 py-4 rounded-full bg-slate-900 hover:bg-sky-800 text-white font-semibold text-sm shadow-md hover:shadow-lg transition duration-200">
                <span>View All Medicines & Price List</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>

    </div>
</section>
