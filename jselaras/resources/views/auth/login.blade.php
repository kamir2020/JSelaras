<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Log Masuk — JSelaras</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>[x-cloak] { display: none !important; }</style>
</head>
<body class="font-sans antialiased" x-data="{ showPassword: false }">
    <div class="min-h-screen flex flex-col lg:flex-row">

        {{-- ============================================ --}}
        {{-- LEFT PANEL: Branding --}}
        {{-- ============================================ --}}
        <div class="relative lg:w-[55%] bg-primary-950 px-8 py-12 lg:px-16 lg:py-0 flex flex-col justify-center overflow-hidden">
            {{-- Background patterns --}}
            <div class="absolute inset-0 dot-grid"></div>
            <div class="absolute top-1/4 -left-20 w-72 h-72 bg-primary-600/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-1/4 right-0 w-60 h-60 bg-accent-500/10 rounded-full blur-3xl"></div>

            <div class="relative z-10 max-w-md mx-auto lg:mx-0">
                {{-- Logo --}}
                <a href="/" class="flex items-center gap-2 mb-10">
                    <div class="w-10 h-10 bg-primary-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15a2.25 2.25 0 012.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                        </svg>
                    </div>
                    <span class="text-2xl font-bold text-white">JSelaras</span>
                    <span class="text-[10px] font-semibold tracking-wider uppercase bg-white/10 text-accent-400 px-2 py-0.5 rounded border border-white/10">Tender</span>
                </a>

                {{-- Tagline --}}
                <h2 class="text-2xl lg:text-3xl font-extrabold text-white leading-tight mb-4">
                    Pengurusan Tender
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent-400 to-primary-300">Digital</span>
                    Yang Dipercayai
                </h2>
                <p class="text-slate-300 leading-relaxed mb-10">
                    Platform bersepadu untuk menguruskan keseluruhan proses tender — dari pendaftaran, penilaian, sehingga keputusan akhir.
                </p>

                {{-- Abstract dashboard mockup --}}
                <div class="hidden lg:block">
                    <div class="bg-white/10 backdrop-blur-md border border-white/10 rounded-xl p-5 shadow-2xl">
                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-2.5 h-2.5 rounded-full bg-red-400/60"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-yellow-400/60"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-green-400/60"></div>
                            <div class="ml-3 h-2.5 w-32 bg-white/10 rounded-full"></div>
                        </div>
                        <div class="grid grid-cols-3 gap-2 mb-4">
                            <div class="bg-white/5 rounded-lg p-2.5 border border-white/5">
                                <div class="h-1.5 w-8 bg-accent-500/40 rounded-full mb-1.5"></div>
                                <div class="h-4 w-12 bg-white/20 rounded"></div>
                            </div>
                            <div class="bg-white/5 rounded-lg p-2.5 border border-white/5">
                                <div class="h-1.5 w-6 bg-primary-400/40 rounded-full mb-1.5"></div>
                                <div class="h-4 w-10 bg-white/20 rounded"></div>
                            </div>
                            <div class="bg-white/5 rounded-lg p-2.5 border border-white/5">
                                <div class="h-1.5 w-10 bg-green-400/40 rounded-full mb-1.5"></div>
                                <div class="h-4 w-8 bg-white/20 rounded"></div>
                            </div>
                        </div>
                        <div class="bg-white/5 rounded-lg p-3 border border-white/5">
                            <div class="flex items-end gap-1.5 h-20">
                                <div class="flex-1 bg-primary-500/30 rounded-t" style="height: 40%"></div>
                                <div class="flex-1 bg-primary-500/40 rounded-t" style="height: 60%"></div>
                                <div class="flex-1 bg-accent-500/50 rounded-t" style="height: 80%"></div>
                                <div class="flex-1 bg-primary-500/40 rounded-t" style="height: 55%"></div>
                                <div class="flex-1 bg-primary-500/30 rounded-t" style="height: 45%"></div>
                                <div class="flex-1 bg-accent-500/40 rounded-t" style="height: 90%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ============================================ --}}
        {{-- RIGHT PANEL: Login Form --}}
        {{-- ============================================ --}}
        <div class="lg:w-[45%] flex items-center justify-center px-6 py-12 lg:px-16 bg-white">
            <div class="w-full max-w-sm">

                {{-- Session Status --}}
                @if (session('status'))
                    <div class="mb-6 p-3 bg-green-50 border border-green-200 rounded-lg text-sm text-green-700">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- Heading --}}
                <h1 class="text-2xl font-extrabold text-primary-950 mb-1">Log Masuk</h1>
                <p class="text-sm text-slate-500 mb-8">Selamat kembali! Sila masukkan maklumat anda.</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    {{-- Email --}}
                    <div class="mb-5">
                        <label for="email" class="block text-sm font-medium text-slate-700 mb-1.5">Emel</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </div>
                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="username"
                                class="block w-full pl-10 pr-4 py-2.5 text-sm text-slate-900 bg-slate-50 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 placeholder-slate-400 transition-colors"
                                placeholder="nama@syarikat.com"
                            >
                        </div>
                        @error('email')
                            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Password --}}
                    <div class="mb-5">
                        <label for="password" class="block text-sm font-medium text-slate-700 mb-1.5">Kata Laluan</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>
                            <input
                                id="password"
                                :type="showPassword ? 'text' : 'password'"
                                name="password"
                                required
                                autocomplete="current-password"
                                class="block w-full pl-10 pr-10 py-2.5 text-sm text-slate-900 bg-slate-50 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 placeholder-slate-400 transition-colors"
                                placeholder="Masukkan kata laluan"
                            >
                            <button type="button" @click="showPassword = !showPassword" class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600">
                                <svg x-show="!showPassword" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <svg x-show="showPassword" x-cloak class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Remember me + Forgot password --}}
                    <div class="flex items-center justify-between mb-6">
                        <label for="remember_me" class="inline-flex items-center">
                            <input
                                id="remember_me"
                                type="checkbox"
                                name="remember"
                                class="w-4 h-4 text-primary-600 bg-slate-50 border-slate-300 rounded focus:ring-primary-500 focus:ring-2"
                            >
                            <span class="ml-2 text-sm text-slate-600">Ingat saya</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm font-medium text-primary-600 hover:text-primary-700 transition-colors">
                                Lupa kata laluan?
                            </a>
                        @endif
                    </div>

                    {{-- Submit --}}
                    <button type="submit" class="w-full flex items-center justify-center px-4 py-2.5 text-sm font-semibold text-white bg-primary-600 rounded-lg hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 transition-all">
                        Log Masuk
                        <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                </form>

                {{-- Footer note --}}
                <p class="mt-8 text-center text-sm text-slate-500">
                    Belum ada akaun? <span class="text-primary-600 font-medium">Hubungi admin</span>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
