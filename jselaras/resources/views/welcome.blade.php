<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JSelaras — Sistem Pengurusan Tender</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-slate-700 antialiased bg-white" x-data="{ mobileMenu: false }">

    {{-- ============================================ --}}
    {{-- 1. NAVBAR --}}
    {{-- ============================================ --}}
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-lg border-b border-slate-200/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                {{-- Logo --}}
                <div class="flex items-center gap-2">
                    <a href="/" class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-primary-600 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15a2.25 2.25 0 012.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                            </svg>
                        </div>
                        <span class="text-xl font-bold text-primary-950">JSelaras</span>
                        <span class="hidden sm:inline-block text-[10px] font-semibold tracking-wider uppercase bg-primary-100 text-primary-700 px-2 py-0.5 rounded">Tender</span>
                    </a>
                </div>

                {{-- Desktop Nav --}}
                <div class="hidden md:flex items-center gap-8">
                    <a href="#ciri" class="text-sm font-medium text-slate-600 hover:text-primary-600 transition-colors">Ciri-Ciri</a>
                    <a href="#proses" class="text-sm font-medium text-slate-600 hover:text-primary-600 transition-colors">Proses</a>
                    <a href="#statistik" class="text-sm font-medium text-slate-600 hover:text-primary-600 transition-colors">Statistik</a>
                    <a href="#hubungi" class="text-sm font-medium text-slate-600 hover:text-primary-600 transition-colors">Hubungi</a>
                </div>

                {{-- CTA + Mobile toggle --}}
                <div class="flex items-center gap-3">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="hidden md:inline-flex items-center px-4 py-2 text-sm font-semibold text-white bg-primary-600 rounded-lg hover:bg-primary-700 transition-colors">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="hidden md:inline-flex items-center px-4 py-2 text-sm font-semibold text-white bg-primary-600 rounded-lg hover:bg-primary-700 transition-colors">
                                Log Masuk
                            </a>
                        @endauth
                    @endif

                    {{-- Mobile hamburger --}}
                    <button @click="mobileMenu = !mobileMenu" class="md:hidden p-2 text-slate-600 hover:text-primary-600">
                        <svg x-show="!mobileMenu" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg x-show="mobileMenu" x-cloak class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Mobile Menu --}}
            <div x-show="mobileMenu" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="md:hidden pb-4 border-t border-slate-100">
                <div class="flex flex-col gap-2 pt-3">
                    <a href="#ciri" @click="mobileMenu = false" class="px-3 py-2 text-sm font-medium text-slate-600 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">Ciri-Ciri</a>
                    <a href="#proses" @click="mobileMenu = false" class="px-3 py-2 text-sm font-medium text-slate-600 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">Proses</a>
                    <a href="#statistik" @click="mobileMenu = false" class="px-3 py-2 text-sm font-medium text-slate-600 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">Statistik</a>
                    <a href="#hubungi" @click="mobileMenu = false" class="px-3 py-2 text-sm font-medium text-slate-600 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">Hubungi</a>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="mt-2 text-center px-4 py-2 text-sm font-semibold text-white bg-primary-600 rounded-lg hover:bg-primary-700 transition-colors">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="mt-2 text-center px-4 py-2 text-sm font-semibold text-white bg-primary-600 rounded-lg hover:bg-primary-700 transition-colors">Log Masuk</a>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    {{-- ============================================ --}}
    {{-- 2. HERO SECTION --}}
    {{-- ============================================ --}}
    <section class="relative min-h-screen flex items-center bg-primary-950 overflow-hidden pt-16">
        {{-- Dot grid pattern overlay --}}
        <div class="absolute inset-0 dot-grid"></div>

        {{-- Gradient orb decoration --}}
        <div class="absolute top-1/4 -left-32 w-96 h-96 bg-primary-600/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-0 w-80 h-80 bg-accent-500/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-0">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                {{-- Left: Text content --}}
                <div class="text-center lg:text-left">
                    <div class="animate-fade-in-up-init animate-fade-in-up">
                        <span class="inline-flex items-center gap-2 px-3 py-1 text-xs font-semibold tracking-wider uppercase bg-white/10 text-accent-400 rounded-full border border-white/10 mb-6">
                            <span class="w-1.5 h-1.5 bg-accent-400 rounded-full"></span>
                            Sistem Pengurusan Tender
                        </span>
                    </div>

                    <h1 class="animate-fade-in-up-init animate-fade-in-up-delay text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-6">
                        Pengurusan Tender
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent-400 to-primary-300">Digital</span>
                        Yang Efisien
                    </h1>

                    <p class="animate-fade-in-up-init animate-fade-in-up-delay-2 text-lg text-slate-300 mb-8 max-w-lg mx-auto lg:mx-0">
                        Platform pengurusan tender bersepadu untuk organisasi anda — dari pendaftaran hingga penilaian.
                    </p>

                    <div class="animate-fade-in-up-init animate-fade-in-up-delay-2 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-primary-950 bg-accent-500 rounded-lg hover:bg-accent-400 transition-colors shadow-lg shadow-accent-500/25">
                                Mula Sekarang
                                <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        @endif
                        <a href="#ciri" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white border border-white/20 rounded-lg hover:bg-white/10 transition-colors">
                            Ketahui Lebih Lanjut
                        </a>
                    </div>
                </div>

                {{-- Right: Abstract dashboard mockup (CSS-only) --}}
                <div class="hidden lg:block">
                    <div class="relative">
                        {{-- Main card --}}
                        <div class="bg-white/10 backdrop-blur-md border border-white/10 rounded-xl p-6 shadow-2xl">
                            {{-- Top bar --}}
                            <div class="flex items-center gap-2 mb-6">
                                <div class="w-3 h-3 rounded-full bg-red-400/60"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-400/60"></div>
                                <div class="w-3 h-3 rounded-full bg-green-400/60"></div>
                                <div class="ml-4 h-3 w-48 bg-white/10 rounded-full"></div>
                            </div>

                            {{-- Stats row --}}
                            <div class="grid grid-cols-3 gap-3 mb-6">
                                <div class="bg-white/5 rounded-lg p-3 border border-white/5">
                                    <div class="h-2 w-12 bg-accent-500/40 rounded-full mb-2"></div>
                                    <div class="h-5 w-16 bg-white/20 rounded"></div>
                                </div>
                                <div class="bg-white/5 rounded-lg p-3 border border-white/5">
                                    <div class="h-2 w-10 bg-primary-400/40 rounded-full mb-2"></div>
                                    <div class="h-5 w-14 bg-white/20 rounded"></div>
                                </div>
                                <div class="bg-white/5 rounded-lg p-3 border border-white/5">
                                    <div class="h-2 w-14 bg-green-400/40 rounded-full mb-2"></div>
                                    <div class="h-5 w-12 bg-white/20 rounded"></div>
                                </div>
                            </div>

                            {{-- Chart area --}}
                            <div class="bg-white/5 rounded-lg p-4 border border-white/5 mb-4">
                                <div class="flex items-end gap-2 h-32">
                                    <div class="flex-1 bg-primary-500/30 rounded-t" style="height: 45%"></div>
                                    <div class="flex-1 bg-primary-500/40 rounded-t" style="height: 65%"></div>
                                    <div class="flex-1 bg-primary-500/50 rounded-t" style="height: 50%"></div>
                                    <div class="flex-1 bg-accent-500/50 rounded-t" style="height: 85%"></div>
                                    <div class="flex-1 bg-primary-500/40 rounded-t" style="height: 70%"></div>
                                    <div class="flex-1 bg-primary-500/30 rounded-t" style="height: 55%"></div>
                                    <div class="flex-1 bg-accent-500/40 rounded-t" style="height: 90%"></div>
                                    <div class="flex-1 bg-primary-500/50 rounded-t" style="height: 60%"></div>
                                </div>
                            </div>

                            {{-- Table rows --}}
                            <div class="space-y-2">
                                <div class="flex items-center gap-3 bg-white/5 rounded-lg p-3 border border-white/5">
                                    <div class="w-8 h-8 bg-accent-500/20 rounded-lg"></div>
                                    <div class="flex-1">
                                        <div class="h-2.5 w-32 bg-white/15 rounded-full mb-1.5"></div>
                                        <div class="h-2 w-20 bg-white/10 rounded-full"></div>
                                    </div>
                                    <div class="h-5 w-16 bg-green-500/20 rounded-full"></div>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 rounded-lg p-3 border border-white/5">
                                    <div class="w-8 h-8 bg-primary-400/20 rounded-lg"></div>
                                    <div class="flex-1">
                                        <div class="h-2.5 w-28 bg-white/15 rounded-full mb-1.5"></div>
                                        <div class="h-2 w-24 bg-white/10 rounded-full"></div>
                                    </div>
                                    <div class="h-5 w-16 bg-yellow-500/20 rounded-full"></div>
                                </div>
                            </div>
                        </div>

                        {{-- Floating card --}}
                        <div class="absolute -bottom-4 -left-4 bg-white/10 backdrop-blur-md border border-white/10 rounded-xl p-4 shadow-xl">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-green-500/20 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-green-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-xs text-slate-400">Status</div>
                                    <div class="text-sm font-semibold text-white">12 Tender Aktif</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- 3. TRUST BAR --}}
    {{-- ============================================ --}}
    <section id="statistik" class="bg-primary-50 border-y border-primary-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-primary-800">500+</div>
                    <div class="mt-1 text-sm font-medium text-primary-600/80">Tender Diuruskan</div>
                </div>
                <div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-primary-800">120+</div>
                    <div class="mt-1 text-sm font-medium text-primary-600/80">Organisasi</div>
                </div>
                <div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-primary-800">RM2.5B</div>
                    <div class="mt-1 text-sm font-medium text-primary-600/80">Nilai Tender</div>
                </div>
                <div>
                    <div class="text-3xl sm:text-4xl font-extrabold text-primary-800">99.9%</div>
                    <div class="mt-1 text-sm font-medium text-primary-600/80">Uptime</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- 4. FEATURES SECTION --}}
    {{-- ============================================ --}}
    <section id="ciri" class="py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Section heading --}}
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-primary-950 mb-4">Ciri-Ciri Utama</h2>
                <div class="w-12 h-1 bg-accent-500 mx-auto rounded-full mb-4"></div>
                <p class="text-slate-500 max-w-2xl mx-auto">Semua yang anda perlukan untuk menguruskan proses tender secara digital dengan cekap dan telus.</p>
            </div>

            {{-- 3x2 Feature grid --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                {{-- Feature 1 --}}
                <div class="group bg-white border border-slate-200 rounded-xl p-6 hover:-translate-y-1 hover:shadow-lg hover:border-primary-200 transition-all duration-300">
                    <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary-600 transition-colors">
                        <svg class="w-6 h-6 text-primary-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-primary-950 mb-2">Pendaftaran Tender</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Daftar dan urus tender secara digital dengan borang yang mudah dan teratur.</p>
                </div>

                {{-- Feature 2 --}}
                <div class="group bg-white border border-slate-200 rounded-xl p-6 hover:-translate-y-1 hover:shadow-lg hover:border-primary-200 transition-all duration-300">
                    <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary-600 transition-colors">
                        <svg class="w-6 h-6 text-primary-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.746 3.746 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-primary-950 mb-2">Penilaian Automatik</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Sistem pemarkahan automatik dan telus untuk proses penilaian yang adil.</p>
                </div>

                {{-- Feature 3 --}}
                <div class="group bg-white border border-slate-200 rounded-xl p-6 hover:-translate-y-1 hover:shadow-lg hover:border-primary-200 transition-all duration-300">
                    <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary-600 transition-colors">
                        <svg class="w-6 h-6 text-primary-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-primary-950 mb-2">Pengurusan Dokumen</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Muat naik dan simpan dokumen dengan selamat dalam sistem berpusat.</p>
                </div>

                {{-- Feature 4 --}}
                <div class="group bg-white border border-slate-200 rounded-xl p-6 hover:-translate-y-1 hover:shadow-lg hover:border-primary-200 transition-all duration-300">
                    <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary-600 transition-colors">
                        <svg class="w-6 h-6 text-primary-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-primary-950 mb-2">Laporan & Analitik</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Dashboard masa nyata dengan carta interaktif untuk keputusan yang tepat.</p>
                </div>

                {{-- Feature 5 --}}
                <div class="group bg-white border border-slate-200 rounded-xl p-6 hover:-translate-y-1 hover:shadow-lg hover:border-primary-200 transition-all duration-300">
                    <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary-600 transition-colors">
                        <svg class="w-6 h-6 text-primary-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-primary-950 mb-2">Notifikasi Pintar</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Peringatan automatik untuk tarikh akhir tender dan kemas kini penting.</p>
                </div>

                {{-- Feature 6 --}}
                <div class="group bg-white border border-slate-200 rounded-xl p-6 hover:-translate-y-1 hover:shadow-lg hover:border-primary-200 transition-all duration-300">
                    <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mb-4 group-hover:bg-primary-600 transition-colors">
                        <svg class="w-6 h-6 text-primary-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-primary-950 mb-2">Kawalan Akses</h3>
                    <p class="text-sm text-slate-500 leading-relaxed">Peranan pengguna yang fleksibel dan selamat untuk setiap peringkat organisasi.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- 5. PROCESS SECTION --}}
    {{-- ============================================ --}}
    <section id="proses" class="py-20 lg:py-28 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Section heading --}}
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-primary-950 mb-4">Bagaimana Ia Berfungsi</h2>
                <div class="w-12 h-1 bg-accent-500 mx-auto rounded-full mb-4"></div>
                <p class="text-slate-500 max-w-2xl mx-auto">Empat langkah mudah untuk proses tender yang lancar dan teratur.</p>
            </div>

            {{-- 4-step timeline --}}
            <div class="relative">
                {{-- Connecting line (desktop) --}}
                <div class="hidden lg:block absolute top-12 left-[calc(12.5%+24px)] right-[calc(12.5%+24px)] h-0.5 bg-primary-200"></div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    {{-- Step 1 --}}
                    <div class="text-center relative">
                        <div class="relative z-10 w-12 h-12 bg-primary-600 text-white rounded-xl flex items-center justify-center mx-auto mb-5 text-lg font-bold shadow-lg shadow-primary-600/25">1</div>
                        <h3 class="text-lg font-bold text-primary-950 mb-2">Daftar Tender</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Admin mendaftarkan tender baru dalam sistem dengan maklumat lengkap.</p>
                    </div>

                    {{-- Step 2 --}}
                    <div class="text-center relative">
                        <div class="relative z-10 w-12 h-12 bg-primary-600 text-white rounded-xl flex items-center justify-center mx-auto mb-5 text-lg font-bold shadow-lg shadow-primary-600/25">2</div>
                        <h3 class="text-lg font-bold text-primary-950 mb-2">Terima Tawaran</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Vendor mengemukakan tawaran mereka melalui platform secara digital.</p>
                    </div>

                    {{-- Step 3 --}}
                    <div class="text-center relative">
                        <div class="relative z-10 w-12 h-12 bg-primary-600 text-white rounded-xl flex items-center justify-center mx-auto mb-5 text-lg font-bold shadow-lg shadow-primary-600/25">3</div>
                        <h3 class="text-lg font-bold text-primary-950 mb-2">Penilaian</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Jawatankuasa menilai dan menanda markah secara telus dan adil.</p>
                    </div>

                    {{-- Step 4 --}}
                    <div class="text-center relative">
                        <div class="relative z-10 w-12 h-12 bg-accent-500 text-white rounded-xl flex items-center justify-center mx-auto mb-5 text-lg font-bold shadow-lg shadow-accent-500/25">4</div>
                        <h3 class="text-lg font-bold text-primary-950 mb-2">Keputusan</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Keputusan dimuktamadkan dan direkodkan untuk rujukan masa hadapan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- 6. CTA SECTION --}}
    {{-- ============================================ --}}
    <section class="relative bg-primary-950 py-20 lg:py-28">
        <div class="absolute inset-0 dot-grid-dark"></div>
        <div class="clip-diagonal-sm absolute inset-0 bg-primary-900/50"></div>

        <div class="relative max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white mb-4">Sedia Untuk Memulakan?</h2>
            <p class="text-lg text-slate-300 mb-8 max-w-xl mx-auto">
                Sertai ratusan organisasi yang telah mempercayai JSelaras untuk menguruskan tender mereka dengan cekap.
            </p>
            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-primary-950 bg-accent-500 rounded-lg hover:bg-accent-400 transition-colors shadow-lg shadow-accent-500/25">
                    Daftar Sekarang
                    <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            @endif
        </div>
    </section>

    {{-- ============================================ --}}
    {{-- 7. FOOTER --}}
    {{-- ============================================ --}}
    <footer id="hubungi" class="bg-slate-900 text-slate-400">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-12">
                {{-- Brand --}}
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-8 h-8 bg-primary-600 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15a2.25 2.25 0 012.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                            </svg>
                        </div>
                        <span class="text-lg font-bold text-white">JSelaras</span>
                    </div>
                    <p class="text-sm leading-relaxed">
                        Sistem Pengurusan Tender digital yang menyeluruh untuk organisasi moden. Cekap, telus, dan selamat.
                    </p>
                </div>

                {{-- Quick Links --}}
                <div>
                    <h4 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Pautan Pantas</h4>
                    <ul class="space-y-2">
                        <li><a href="#ciri" class="text-sm hover:text-white transition-colors">Ciri-Ciri</a></li>
                        <li><a href="#proses" class="text-sm hover:text-white transition-colors">Proses</a></li>
                        <li><a href="#statistik" class="text-sm hover:text-white transition-colors">Statistik</a></li>
                        @if (Route::has('login'))
                            <li><a href="{{ route('login') }}" class="text-sm hover:text-white transition-colors">Log Masuk</a></li>
                        @endif
                    </ul>
                </div>

                {{-- Contact --}}
                <div>
                    <h4 class="text-sm font-semibold text-white uppercase tracking-wider mb-4">Hubungi Kami</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-primary-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                            sokongan@jselaras.my
                        </li>
                        <li class="flex items-center gap-2 text-sm">
                            <svg class="w-4 h-4 text-primary-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                            +60 3-1234 5678
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="border-t border-slate-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex flex-col sm:flex-row justify-between items-center gap-2 text-xs text-slate-500">
                <span>&copy; {{ date('Y') }} JSelaras. Hak cipta terpelihara.</span>
                <span>Dibangunkan oleh JSelaras Technologies</span>
            </div>
        </div>
    </footer>

    {{-- Alpine.js x-cloak support --}}
    <style>[x-cloak] { display: none !important; }</style>
</body>
</html>
