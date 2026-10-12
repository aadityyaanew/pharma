@php
    $brand = config('velora.brand');
@endphp

@if(!empty($brand['whatsapp_number']))
<aside aria-label="Quick contact links" class="fixed bottom-4 right-4 sm:bottom-6 sm:right-6 z-50">
    <a href="https://wa.me/{{ $brand['whatsapp_number'] }}?text={{ urlencode('Hi Mr. Dev Patel / Jay Ambe Life Care, I would like to make an enquiry regarding pharmaceutical formulations / PCD franchise.') }}" 
       target="_blank"
       rel="noopener noreferrer"
       id="floating-whatsapp-btn"
       class="group flex items-center bg-emerald-600 hover:bg-emerald-700 text-white p-3 sm:p-4 rounded-full shadow-2xl hover:shadow-emerald-600/50 hover:scale-105 transition-all duration-300 border border-emerald-400/30"
       aria-label="Chat with Jay Ambe Life Care on WhatsApp">
        <i class="fa-brands fa-whatsapp text-xl sm:text-2xl"></i>
        <span class="max-w-0 overflow-hidden whitespace-nowrap group-hover:max-w-xs group-hover:ml-2.5 transition-all duration-300 ease-in-out font-bold text-xs">
            Chat with Us
        </span>
    </a>
</aside>
@endif
