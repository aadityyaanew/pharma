@extends('layouts.app')

@section('title', 'Pharma Journal & Healthcare Research | Jay Ambe Life Care')
@section('meta_description', 'Explore pharmaceutical research, formulation sciences, PCD franchise guides, and WHO-GMP insights from Jay Ambe Life Care experts.')

@section('content')
    <!-- Blog Header Banner -->
    <section class="relative bg-gradient-to-b from-slate-900 via-sky-950 to-slate-900 text-white pt-20 pb-16 overflow-hidden">
        <div class="absolute inset-0 opacity-15 pointer-events-none bg-[radial-gradient(#38bdf8_1px,transparent_1px)] [background-size:20px_20px]"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-teal-500/10 border border-teal-400/30 text-teal-300 text-xs font-semibold tracking-wider uppercase mb-5">
                <i class="fa-solid fa-book-medical"></i> JAY AMBE PHARMA JOURNAL & RESEARCH
            </div>
            <h1 class="font-serif text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-white mb-6">
                Pharmaceutical Science & Industry Insights
            </h1>
            <p class="max-w-2xl mx-auto text-slate-300 text-base sm:text-lg font-light leading-relaxed">
                Stay updated with formulation developments, WHO-GMP quality control methodologies, PCD pharma franchise opportunities, and clinical healthcare trends.
            </p>

            <!-- Category Pills Filter -->
            <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mt-10">
                <a href="{{ route('blog.index') }}" 
                   class="px-5 py-2 rounded-full text-xs sm:text-sm font-semibold transition {{ empty($category) ? 'bg-teal-600 text-white shadow-lg shadow-teal-500/25' : 'bg-slate-800/80 hover:bg-slate-700 text-slate-300 border border-slate-700' }}">
                    All Topics
                </a>
                @foreach ($categories as $cat)
                    <a href="{{ route('blog.index', ['category' => $cat]) }}" 
                       class="px-5 py-2 rounded-full text-xs sm:text-sm font-semibold transition {{ $category === $cat ? 'bg-teal-600 text-white shadow-lg shadow-teal-500/25' : 'bg-slate-800/80 hover:bg-slate-700 text-slate-300 border border-slate-700' }}">
                        {{ $cat }}
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-16 bg-slate-50 min-h-[600px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @if ($posts->isEmpty())
                <!-- Fallback Featured Cards if database is empty -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <article class="bg-white rounded-2xl p-7 border border-slate-200 shadow-sm hover:shadow-lg transition space-y-4">
                        <span class="text-xs font-bold uppercase tracking-wider text-teal-700 bg-teal-50 px-3 py-1 rounded-full">Quality Assurance</span>
                        <h3 class="font-serif text-xl font-bold text-slate-900">The Role of WHO-GMP Standards in High-Efficacy Pharmaceutical Formulations</h3>
                        <p class="text-xs text-slate-500 font-light leading-relaxed">
                            How positive-pressure cleanroom HVAC and HPLC assays safeguard active drug bioavailability.
                        </p>
                        <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                            <span>Author: Quality Wing</span>
                            <span class="font-bold text-teal-600">Jay Ambe Research</span>
                        </div>
                    </article>

                    <article class="bg-white rounded-2xl p-7 border border-slate-200 shadow-sm hover:shadow-lg transition space-y-4">
                        <span class="text-xs font-bold uppercase tracking-wider text-teal-700 bg-teal-50 px-3 py-1 rounded-full">PCD Franchise</span>
                        <h3 class="font-serif text-xl font-bold text-slate-900">How to Launch a High-Growth PCD Pharma Franchise in Gujarat</h3>
                        <p class="text-xs text-slate-500 font-light leading-relaxed">
                            Strategic insights from Managing Director Mr. Dev Patel on district monopolies and promotional aids.
                        </p>
                        <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                            <span>Author: Mr. Dev Patel</span>
                            <span class="font-bold text-teal-600">Leadership Desk</span>
                        </div>
                    </article>

                    <article class="bg-white rounded-2xl p-7 border border-slate-200 shadow-sm hover:shadow-lg transition space-y-4">
                        <span class="text-xs font-bold uppercase tracking-wider text-teal-700 bg-teal-50 px-3 py-1 rounded-full">Hospital Care</span>
                        <h3 class="font-serif text-xl font-bold text-slate-900">Critical Care Injectables: Engineering Sterile Parenterals for Emergency Units</h3>
                        <p class="text-xs text-slate-500 font-light leading-relaxed">
                            Aseptic lyophilization, SWFI integration, and zero-endotoxin verification in critical hospital care.
                        </p>
                        <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-400">
                            <span>Author: Clinical Team</span>
                            <span class="font-bold text-teal-600">Hospital Division</span>
                        </div>
                    </article>
                </div>
            @else
                <!-- Hero Featured Article -->
                @if ($featuredPost && $posts->currentPage() === 1 && empty($category))
                    <div class="mb-14">
                        <div class="bg-white rounded-3xl overflow-hidden border border-slate-200/90 shadow-sm hover:shadow-xl transition-all duration-300 group grid grid-cols-1 lg:grid-cols-12">
                            <div class="lg:col-span-7 relative h-72 sm:h-96 lg:h-full min-h-[320px] overflow-hidden bg-slate-900 flex items-center justify-center p-8">
                                <div class="text-center">
                                    <div class="w-32 h-32 mx-auto mb-3 flex items-center justify-center p-2 rounded-2xl bg-white/10 backdrop-blur-sm border border-white/10">
                                        <img src="{{ asset('images/3d/flask.png') }}" alt="Pharma Research" class="w-full h-full object-contain filter drop-shadow-lg">
                                    </div>
                                    <p class="text-xs uppercase tracking-widest font-bold text-teal-300">Jay Ambe Formulation Research & Clinical Insights</p>
                                </div>
                                <div class="absolute top-4 left-4">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-teal-600 text-white shadow-md">
                                        <i class="fa-solid fa-star text-[10px]"></i> Featured Publication
                                    </span>
                                </div>
                            </div>
                            <div class="lg:col-span-5 p-8 sm:p-10 flex flex-col justify-between bg-white">
                                <div>
                                    <div class="flex items-center gap-3 text-xs text-slate-500 mb-3 font-medium">
                                        <span class="text-teal-600 font-bold uppercase tracking-wider">{{ $featuredPost->category }}</span>
                                        <span>•</span>
                                        <span>{{ $featuredPost->published_at ? $featuredPost->published_at->format('M d, Y') : $featuredPost->created_at->format('M d, Y') }}</span>
                                    </div>
                                    <h2 class="font-serif text-2xl sm:text-3xl font-bold text-slate-900 group-hover:text-teal-600 transition duration-300 leading-snug mb-4">
                                        <a href="{{ route('blog.show', $featuredPost->slug) }}">
                                            {{ $featuredPost->title }}
                                        </a>
                                    </h2>
                                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed line-clamp-4 mb-6">
                                        {{ $featuredPost->excerpt ?: Str::limit(strip_tags($featuredPost->content), 180) }}
                                    </p>
                                </div>
                                <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-8 h-8 rounded-full bg-teal-100 text-teal-700 flex items-center justify-center font-bold text-xs">
                                            {{ substr($featuredPost->author_name, 0, 1) }}
                                        </div>
                                        <span class="text-xs font-semibold text-slate-700">{{ $featuredPost->author_name }}</span>
                                    </div>
                                    <a href="{{ route('blog.show', $featuredPost->slug) }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-teal-600 group-hover:translate-x-1 transition-transform">
                                        Read Article <i class="fa-solid fa-arrow-right text-[11px]"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Article Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($posts as $post)
                        @if ($featuredPost && $posts->currentPage() === 1 && empty($category) && $post->id === $featuredPost->id)
                            @continue
                        @endif
                        <article class="bg-white rounded-2xl overflow-hidden border border-slate-200/80 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex flex-col group">
                            <div class="p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center gap-2 text-[11px] text-slate-400 font-medium mb-2.5">
                                        <i class="fa-regular fa-calendar"></i>
                                        <span>{{ $post->published_at ? $post->published_at->format('M d, Y') : $post->created_at->format('M d, Y') }}</span>
                                    </div>
                                    <h3 class="font-serif text-xl font-bold text-slate-900 group-hover:text-teal-600 transition duration-200 leading-snug mb-3">
                                        <a href="{{ route('blog.show', $post->slug) }}">
                                            {{ $post->title }}
                                        </a>
                                    </h3>
                                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed line-clamp-3 mb-4">
                                        {{ $post->excerpt ?: Str::limit(strip_tags($post->content), 120) }}
                                    </p>
                                </div>

                                <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                                    <span class="text-slate-500 font-medium flex items-center gap-1.5">
                                        <i class="fa-regular fa-user text-slate-400"></i> {{ $post->author_name }}
                                    </span>
                                    <a href="{{ route('blog.show', $post->slug) }}" class="font-bold text-teal-600 group-hover:translate-x-1 transition-transform inline-flex items-center gap-1">
                                        Read <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                @if($posts->hasPages())
                    <div class="mt-12">
                        {{ $posts->links() }}
                    </div>
                @endif
            @endif

        </div>
    </section>
@endsection
