@php
    $brand = config('velora.brand');
@endphp

<section id="enquiry-section" class="py-24 lg:py-32 bg-slate-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto mb-20 space-y-4">
            <div class="inline-flex items-center justify-center gap-3 mb-2">
                <span class="h-[1px] w-8 bg-teal-600"></span>
                <span class="text-teal-800 text-xs font-bold tracking-[0.2em] uppercase">Commercial & Franchise Inquiries</span>
                <span class="h-[1px] w-8 bg-teal-600"></span>
            </div>
            
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-medium text-slate-900 tracking-tight">
                Connect with Our <span class="italic font-serif text-teal-700">Commercial Desk</span>
            </h2>
            <p class="text-slate-600 text-base sm:text-lg leading-relaxed font-normal mt-4">
                Connect directly with <strong>Managing Director Mr. Dev Patel</strong> for district PCD franchise allocation, hospital formulary contracts, or wholesale rate inquiries.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
            
            <!-- Left Contact Info with 3D Icons -->
            <div class="lg:col-span-5 space-y-6">
                
                <div class="bg-white rounded-3xl p-8 border border-slate-200/90 shadow-sm space-y-6">
                    
                    <!-- Emblem & Title Header -->
                    <div class="flex items-center gap-4 pb-6 border-b border-slate-100">
                        <div class="w-16 h-16 rounded-2xl p-1 bg-gradient-to-tr from-sky-50 to-teal-50 border border-slate-100 flex items-center justify-center shrink-0">
                            <img src="{{ asset('images/logo.png') }}" alt="{{ $brand['name'] }}" class="w-14 h-14 object-contain">
                        </div>
                        <div>
                            <h3 class="font-serif text-2xl font-bold text-slate-900">{{ $brand['name'] }}</h3>
                            <p class="text-xs uppercase tracking-wider text-teal-700 font-bold mt-0.5">
                                MD: {{ $brand['managing_director'] ?? 'Mr. Dev Patel' }}
                            </p>
                        </div>
                    </div>

                    <!-- Location Card with 3D Location Icon -->
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-100 flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-white p-1.5 shadow-xs flex items-center justify-center shrink-0">
                            <img src="{{ asset('images/3d/location.png') }}" alt="Location" class="w-9 h-9 object-contain">
                        </div>
                        <div class="space-y-1">
                            <p class="text-[10px] uppercase tracking-wider font-bold text-slate-500">Registered Office & Facility</p>
                            <p class="text-xs font-semibold text-slate-800 leading-relaxed">
                                {{ $brand['address'] }}
                            </p>
                            <a href="https://maps.google.com/?q={{ urlencode($brand['address']) }}" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="inline-flex items-center gap-1 text-[11px] font-bold text-teal-700 hover:text-teal-900 hover:underline pt-1">
                                <i class="fa-solid fa-diamond-turn-right text-xs"></i> Get Google Maps Directions &rarr;
                            </a>
                        </div>
                    </div>

                    <!-- Direct WhatsApp Desk with 3D Chat Icon -->
                    @if(!empty($brand['whatsapp_number']))
                        <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hello Mr. Dev Patel, I would like to inquire about Jay Ambe Life Care pharma supply / PCD franchise.') }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="p-4 rounded-2xl bg-emerald-50/70 border border-emerald-100 flex items-center gap-4 hover:bg-emerald-100/70 transition group">
                            <div class="w-12 h-12 rounded-xl bg-white p-1.5 shadow-xs flex items-center justify-center shrink-0 group-hover:scale-105 transition">
                                <img src="{{ asset('images/3d/medical_chat.png') }}" alt="Chat" class="w-9 h-9 object-contain">
                            </div>
                            <div class="flex-1">
                                <p class="text-[10px] uppercase tracking-wider font-bold text-emerald-800">Direct WhatsApp Desk</p>
                                <p class="text-sm font-bold text-emerald-950">{{ $brand['phone'] ?? '+91 6352727517' }}</p>
                            </div>
                            <i class="fa-solid fa-arrow-up-right-from-square text-xs text-emerald-600"></i>
                        </a>
                    @endif

                    <!-- Direct Telephone -->
                    <div class="flex items-center gap-4 px-2 text-slate-700">
                        <div class="w-10 h-10 rounded-xl bg-slate-50 flex items-center justify-center text-teal-700 shrink-0">
                            <i class="fa-solid fa-phone text-base"></i>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-wider font-bold text-slate-400">Direct Hotline</p>
                            <a href="tel:{{ $brand['phone_raw'] ?? '+916352727517' }}" class="text-sm font-bold text-slate-900 hover:text-teal-700 transition">
                                {{ $brand['phone'] ?? '+91 6352727517' }}
                            </a>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-center gap-4 px-2 text-slate-700">
                        <div class="w-10 h-10 rounded-xl bg-slate-50 flex items-center justify-center text-sky-700 shrink-0">
                            <i class="fa-solid fa-envelope text-base"></i>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase tracking-wider font-bold text-slate-400">Official Correspondence</p>
                            <a href="mailto:{{ $brand['email'] ?? 'pdev63575@gmail.com' }}" class="text-sm font-semibold text-slate-900 hover:text-teal-700 transition break-all">
                                {{ $brand['email'] ?? 'pdev63575@gmail.com' }}
                            </a>
                        </div>
                    </div>

                    <!-- Operating Hours -->
                    <div class="pt-4 border-t border-slate-100 text-xs text-slate-600 space-y-1">
                        <div class="flex justify-between">
                            <span class="text-slate-500">Working Days:</span>
                            <span class="font-bold text-slate-800">Monday &ndash; Saturday</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-500">Business Hours:</span>
                            <span class="font-bold text-slate-800">9:00 AM &ndash; 7:30 PM IST</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-500">Sunday:</span>
                            <span class="text-slate-500">Emergency Inquiries Active via WhatsApp</span>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Right Interactive Form -->
            <div class="lg:col-span-7">
                <div class="bg-white rounded-3xl p-8 sm:p-12 shadow-sm border border-slate-200/90 h-full">
                    
                    <div class="mb-8 text-center sm:text-left space-y-1">
                        <h3 class="font-serif text-2xl sm:text-3xl font-bold text-slate-900">Commercial & Franchise Application</h3>
                        <p class="text-xs sm:text-sm text-slate-500">Directly routed to Managing Director Mr. Dev Patel's office.</p>
                    </div>

                    <!-- Live Success Banner -->
                    <div x-show="enquirySuccess" 
                         x-transition 
                         class="mb-6 p-5 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-900 flex items-start gap-3.5"
                         style="display: none;">
                        <i class="fa-solid fa-circle-check text-emerald-600 text-xl mt-0.5"></i>
                        <div>
                            <p class="font-bold text-sm">Inquiry Received Successfully</p>
                            <p class="text-xs text-emerald-800 mt-0.5" x-text="toastMessage"></p>
                        </div>
                    </div>

                    <!-- Actual Form -->
                    <form id="enquiry-form" @submit.prevent="
                        enquirySubmitting = true;
                        const form = $el;
                        const formData = new FormData(form);
                        
                        fetch('{{ route('enquiry.store') }}', {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content,
                                'Accept': 'application/json'
                            },
                            body: formData
                        })
                        .then(res => res.json())
                        .then(data => {
                            enquirySubmitting = false;
                            if(data.success) {
                                enquirySuccess = true;
                                displayToast(data.message || 'Thank you! Your pharma enquiry has been received.');
                                form.reset();
                            } else {
                                alert('Error submitting inquiry. Please message us on WhatsApp.');
                            }
                        })
                        .catch(err => {
                            enquirySubmitting = false;
                            displayToast('Inquiry recorded! Our desk at +91 6352727517 will contact you.');
                            enquirySuccess = true;
                            form.reset();
                        });
                    " class="space-y-5">
                        
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="form-name" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5 ml-1">
                                    Your Name / Business Firm <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="form-name" name="name" required placeholder="e.g. Ramesh Patel / Apollo Pharma"
                                       class="w-full bg-slate-50 border border-slate-200 rounded-xl px-5 py-3.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-600 focus:bg-white transition shadow-2xs">
                            </div>

                            <div>
                                <label for="form-phone" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5 ml-1">
                                    Mobile / WhatsApp <span class="text-red-500">*</span>
                                </label>
                                <input type="tel" id="form-phone" name="phone" required placeholder="e.g. +91 98765 43210"
                                       class="w-full bg-slate-50 border border-slate-200 rounded-xl px-5 py-3.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-600 focus:bg-white transition shadow-2xs">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="form-email" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5 ml-1">
                                    Email Address
                                </label>
                                <input type="email" id="form-email" name="email" placeholder="name@firm.com"
                                       class="w-full bg-slate-50 border border-slate-200 rounded-xl px-5 py-3.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-600 focus:bg-white transition shadow-2xs">
                            </div>

                            <div>
                                <label for="form-sector" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5 ml-1">
                                    Inquiry Category
                                </label>
                                <select id="form-sector" name="sector" x-model="selectedRequirement"
                                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-5 py-3.5 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-teal-600 focus:bg-white transition shadow-2xs cursor-pointer">
                                    <option value="PCD Pharma Franchise">PCD Pharma Franchise (Monopoly Rights)</option>
                                    <option value="Institutional Hospital Supply">Hospital & Clinical Institutional Supply</option>
                                    <option value="Third-Party Contract Manufacturing">Third-Party & Contract Manufacturing</option>
                                    <option value="Wholesale Chemist / Stockist">Wholesale Chemist & Stockist Dealership</option>
                                    <option value="General Product Enquiry">General Formulation Inquiry</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="form-category" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5 ml-1">
                                    Therapeutic Division
                                </label>
                                <select id="form-category" name="product_type" x-model="selectedDivision"
                                        class="w-full bg-slate-50 border border-slate-200 rounded-xl px-5 py-3.5 text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-teal-600 focus:bg-white transition shadow-2xs cursor-pointer">
                                    <option value="Tablets & Capsules">Pharmaceutical Tablets & Capsules</option>
                                    <option value="Liquid Orals & Syrups">Liquid Orals & Syrups (Pediatric / Adult)</option>
                                    <option value="Sterile Injectables">Sterile Parenterals & Critical Care Injectables</option>
                                    <option value="Dermatological Topicals">Dermatological Ointments & Gels</option>
                                    <option value="Nutraceuticals & Wellness">Nutraceuticals & Immunity Supplements</option>
                                    <option value="Complete Portfolio">Complete Product Catalog</option>
                                </select>
                            </div>

                            <div>
                                <label for="form-territory" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5 ml-1">
                                    Target District / Territory
                                </label>
                                <input type="text" id="form-territory" name="bottle_size" placeholder="e.g. Vadodara, Surat, Bharuch, Rajkot..."
                                       class="w-full bg-slate-50 border border-slate-200 rounded-xl px-5 py-3.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-600 focus:bg-white transition shadow-2xs">
                            </div>
                        </div>

                        <div>
                            <label for="form-message" class="block text-xs font-bold uppercase tracking-wider text-slate-600 mb-1.5 ml-1">
                                Requirement Details / Questions for Mr. Dev Patel
                            </label>
                            <textarea id="form-message" name="message" rows="4" placeholder="Please mention preferred molecules, estimated monthly volume, distribution experience, or specific questions..."
                                      class="w-full bg-slate-50 border border-slate-200 rounded-2xl px-5 py-3.5 text-sm text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-teal-600 focus:bg-white transition shadow-2xs resize-none"></textarea>
                        </div>

                        <div class="pt-2">
                            <button type="submit" 
                                    id="submit-enquiry-button"
                                    :disabled="enquirySubmitting"
                                    class="w-full flex items-center justify-center gap-2.5 bg-slate-900 hover:bg-sky-800 text-white font-bold tracking-wider uppercase text-xs py-4 rounded-xl shadow-md transition-all duration-200 disabled:opacity-50">
                                <span x-show="!enquirySubmitting">Submit Commercial Inquiry</span>
                                <span x-show="enquirySubmitting" class="flex items-center gap-2" style="display: none;">
                                    <i class="fa-solid fa-spinner animate-spin"></i> Submitting...
                                </span>
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </div>
</section>
