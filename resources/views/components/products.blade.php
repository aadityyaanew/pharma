@php
    $brand = config('velora.brand');
    $configProducts = config('velora.products', []);

    // Use passed $products (top 6 from DB) or fallback to config, limited to 6
    if (isset($products) && $products->isNotEmpty()) {
        $displayProducts = $products->take(6);
    } else {
        $displayProducts = collect($configProducts)->take(6)->map(fn($item) => (object) [
            'name' => $item['name'],
            'slug' => $item['id'],
            'size' => $item['size'],
            'featured_image' => null,
        ]);
    }
@endphp

<section id="products" class="py-20 lg:py-28 bg-slate-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
            <div class="inline-flex items-center justify-center gap-2 mb-1">
                <span class="h-[1px] w-6 bg-teal-600"></span>
                <span class="text-teal-800 text-xs font-bold tracking-wider uppercase">Our Products</span>
                <span class="h-[1px] w-6 bg-teal-600"></span>
            </div>
            
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-slate-900 tracking-tight">
                Our Range of <span class="italic font-serif text-teal-700">Medicines</span>
            </h2>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed font-normal mt-2">
                Explore our primary medicine categories available for wholesale supply, hospitals, and monopoly PCD franchise.
            </p>
        </div>

        <!-- Top 6 Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            @foreach($displayProducts as $product)
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

                <!-- Clickable Card Linking Directly to Details -->
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

        <!-- Full Catalog Navigation Link to /products -->
        <div class="mt-14 text-center">
            <a href="{{ route('products.index') }}" 
               class="inline-flex items-center gap-2.5 px-8 py-4 rounded-full bg-slate-900 hover:bg-teal-800 text-white font-semibold text-sm shadow-md hover:shadow-lg transition duration-200">
                <span>View All Medicines</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>

    </div>
</section>
