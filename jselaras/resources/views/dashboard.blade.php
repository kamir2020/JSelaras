<x-app-layout>

<x-slot name="header">Dashboard</x-slot>

<!-- Section A: Welcome Bar -->
<div class="mb-6">
    <h1 class="text-2xl font-bold text-slate-800">Selamat Datang, {{ Auth::user()->name }}!</h1>
    <div class="flex items-center gap-3 mt-1">
        <span class="text-sm text-slate-500">{{ now()->translatedFormat('l, d F Y') }}</span>
        <span class="inline-block text-xs font-medium px-2 py-0.5 rounded-full bg-primary-100 text-primary-700">
            {{ ucfirst(Auth::user()->role ?? 'Admin') }}
        </span>
    </div>
</div>

<!-- Section B: Stat Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
    <!-- Jumlah Tender -->
    <div class="bg-white rounded-xl border border-slate-200 p-5 hover:shadow-md transition-shadow">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15a2.25 2.25 0 0 1 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                </svg>
            </div>
            <div>
                <p class="text-2xl font-bold text-slate-800">48</p>
                <p class="text-sm text-slate-500">Jumlah Tender</p>
            </div>
        </div>
    </div>

    <!-- Tender Aktif -->
    <div class="bg-white rounded-xl border border-slate-200 p-5 hover:shadow-md transition-shadow">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-lg bg-amber-100 flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-amber-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </div>
            <div>
                <p class="text-2xl font-bold text-slate-800">12</p>
                <p class="text-sm text-slate-500">Tender Aktif</p>
            </div>
        </div>
    </div>

    <!-- Jumlah Pengguna -->
    <div class="bg-white rounded-xl border border-slate-200 p-5 hover:shadow-md transition-shadow">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
            </div>
            <div>
                <p class="text-2xl font-bold text-slate-800">156</p>
                <p class="text-sm text-slate-500">Jumlah Pengguna</p>
            </div>
        </div>
    </div>

    <!-- Tender Selesai -->
    <div class="bg-white rounded-xl border border-slate-200 p-5 hover:shadow-md transition-shadow">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-lg bg-cyan-100 flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </div>
            <div>
                <p class="text-2xl font-bold text-slate-800">36</p>
                <p class="text-sm text-slate-500">Tender Selesai</p>
            </div>
        </div>
    </div>
</div>

<!-- Section C: Quick Actions + Tender Summary -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">

    <!-- Tindakan Pantas -->
    <div class="bg-white rounded-xl border border-slate-200 p-6">
        <h3 class="text-base font-semibold text-slate-800 mb-4">Tindakan Pantas</h3>
        <div class="space-y-3">
            <a href="/users/create"
               class="flex items-center gap-3 px-4 py-3 rounded-lg border border-slate-200 hover:border-primary-300 hover:bg-primary-50 transition-colors group">
                <div class="w-9 h-9 rounded-lg bg-primary-100 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-slate-700 group-hover:text-primary-700">Tender Baru</p>
                    <p class="text-xs text-slate-400">Cipta tender baharu</p>
                </div>
                <svg class="w-4 h-4 text-slate-300 ml-auto" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </a>

            <a href="/users"
               class="flex items-center gap-3 px-4 py-3 rounded-lg border border-slate-200 hover:border-primary-300 hover:bg-primary-50 transition-colors group">
                <div class="w-9 h-9 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-slate-700 group-hover:text-primary-700">Senarai Pengguna</p>
                    <p class="text-xs text-slate-400">Lihat & urus pengguna</p>
                </div>
                <svg class="w-4 h-4 text-slate-300 ml-auto" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </a>

            <a href="#"
               class="flex items-center gap-3 px-4 py-3 rounded-lg border border-slate-200 hover:border-primary-300 hover:bg-primary-50 transition-colors group">
                <div class="w-9 h-9 rounded-lg bg-amber-100 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-medium text-slate-700 group-hover:text-primary-700">Lihat Laporan</p>
                    <p class="text-xs text-slate-400">Laporan & statistik</p>
                </div>
                <svg class="w-4 h-4 text-slate-300 ml-auto" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>
    </div>

    <!-- Ringkasan Tender -->
    <div class="bg-white rounded-xl border border-slate-200 p-6">
        <h3 class="text-base font-semibold text-slate-800 mb-4">Ringkasan Tender</h3>
        <div class="space-y-4">
            <!-- Aktif -->
            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <span class="text-sm text-slate-600">Aktif</span>
                    <span class="text-sm font-semibold text-slate-700">12 <span class="font-normal text-slate-400">(25%)</span></span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2.5">
                    <div class="bg-emerald-500 h-2.5 rounded-full" style="width: 25%"></div>
                </div>
            </div>

            <!-- Dalam Penilaian -->
            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <span class="text-sm text-slate-600">Dalam Penilaian</span>
                    <span class="text-sm font-semibold text-slate-700">16 <span class="font-normal text-slate-400">(33%)</span></span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2.5">
                    <div class="bg-amber-500 h-2.5 rounded-full" style="width: 33%"></div>
                </div>
            </div>

            <!-- Selesai -->
            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <span class="text-sm text-slate-600">Selesai</span>
                    <span class="text-sm font-semibold text-slate-700">20 <span class="font-normal text-slate-400">(42%)</span></span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2.5">
                    <div class="bg-cyan-500 h-2.5 rounded-full" style="width: 42%"></div>
                </div>
            </div>

            <!-- Summary footer -->
            <div class="pt-3 border-t border-slate-100">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-slate-500">Jumlah Keseluruhan</span>
                    <span class="font-bold text-slate-800">48 Tender</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section D: Recent Activity Table -->
<div class="bg-white rounded-xl border border-slate-200">
    <div class="px-6 py-4 border-b border-slate-200">
        <h3 class="text-base font-semibold text-slate-800">Aktiviti Terkini</h3>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="bg-slate-50">
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">No.</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Tender</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Status</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Tarikh</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Tindakan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-3.5 text-slate-600">1</td>
                    <td class="px-6 py-3.5 font-medium text-slate-800">Penyelenggaraan Bangunan Blok A</td>
                    <td class="px-6 py-3.5">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700">Aktif</span>
                    </td>
                    <td class="px-6 py-3.5 text-slate-500">28 Feb 2026</td>
                    <td class="px-6 py-3.5">
                        <a href="#" class="text-primary-600 hover:text-primary-800 font-medium">Lihat</a>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-3.5 text-slate-600">2</td>
                    <td class="px-6 py-3.5 font-medium text-slate-800">Bekalan Peralatan ICT Makmal</td>
                    <td class="px-6 py-3.5">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-700">Dalam Penilaian</span>
                    </td>
                    <td class="px-6 py-3.5 text-slate-500">25 Feb 2026</td>
                    <td class="px-6 py-3.5">
                        <a href="#" class="text-primary-600 hover:text-primary-800 font-medium">Lihat</a>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-3.5 text-slate-600">3</td>
                    <td class="px-6 py-3.5 font-medium text-slate-800">Perkhidmatan Kawalan Keselamatan</td>
                    <td class="px-6 py-3.5">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-cyan-100 text-cyan-700">Selesai</span>
                    </td>
                    <td class="px-6 py-3.5 text-slate-500">20 Feb 2026</td>
                    <td class="px-6 py-3.5">
                        <a href="#" class="text-primary-600 hover:text-primary-800 font-medium">Lihat</a>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-3.5 text-slate-600">4</td>
                    <td class="px-6 py-3.5 font-medium text-slate-800">Pembersihan Kawasan & Landskap</td>
                    <td class="px-6 py-3.5">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-700">Ditolak</span>
                    </td>
                    <td class="px-6 py-3.5 text-slate-500">15 Feb 2026</td>
                    <td class="px-6 py-3.5">
                        <a href="#" class="text-primary-600 hover:text-primary-800 font-medium">Lihat</a>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-3.5 text-slate-600">5</td>
                    <td class="px-6 py-3.5 font-medium text-slate-800">Kerja-kerja Mekanikal & Elektrikal</td>
                    <td class="px-6 py-3.5">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700">Aktif</span>
                    </td>
                    <td class="px-6 py-3.5 text-slate-500">10 Feb 2026</td>
                    <td class="px-6 py-3.5">
                        <a href="#" class="text-primary-600 hover:text-primary-800 font-medium">Lihat</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</x-app-layout>
