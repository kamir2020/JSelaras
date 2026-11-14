<x-app-layout>

<x-slot name="header">Laporan</x-slot>

<!-- Page Header -->
<div class="mb-6">
    <h1 class="text-2xl font-bold text-slate-800">Laporan & Analitik</h1>
    <p class="text-sm text-slate-500 mt-1">Ringkasan prestasi dan statistik tender organisasi</p>
</div>

<!-- Overview Cards -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
    <div class="bg-white rounded-xl border border-slate-200 p-5">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 rounded-lg bg-primary-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </div>
            <span class="text-xs font-medium text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">+12%</span>
        </div>
        <p class="text-2xl font-bold text-slate-800">RM 4.2J</p>
        <p class="text-sm text-slate-500 mt-0.5">Nilai Keseluruhan Tender</p>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 p-5">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </div>
            <span class="text-xs font-medium text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">+5%</span>
        </div>
        <p class="text-2xl font-bold text-slate-800">36</p>
        <p class="text-sm text-slate-500 mt-0.5">Tender Berjaya Selesai</p>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 p-5">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </div>
            <span class="text-xs font-medium text-amber-600 bg-amber-50 px-2 py-0.5 rounded-full">Purata</span>
        </div>
        <p class="text-2xl font-bold text-slate-800">18 hari</p>
        <p class="text-sm text-slate-500 mt-0.5">Purata Tempoh Penilaian</p>
    </div>

    <div class="bg-white rounded-xl border border-slate-200 p-5">
        <div class="flex items-center justify-between mb-3">
            <div class="w-10 h-10 rounded-lg bg-cyan-100 flex items-center justify-center">
                <svg class="w-5 h-5 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                </svg>
            </div>
            <span class="text-xs font-medium text-cyan-600 bg-cyan-50 px-2 py-0.5 rounded-full">+3</span>
        </div>
        <p class="text-2xl font-bold text-slate-800">24</p>
        <p class="text-sm text-slate-500 mt-0.5">Vendor Berdaftar</p>
    </div>
</div>

<!-- Charts Row -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">

    <!-- Tender By Status -->
    <div class="bg-white rounded-xl border border-slate-200 p-6">
        <h3 class="text-base font-semibold text-slate-800 mb-5">Tender Mengikut Status</h3>
        <div class="space-y-4">
            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                        <span class="text-sm text-slate-600">Aktif</span>
                    </div>
                    <span class="text-sm font-semibold text-slate-700">12</span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2.5">
                    <div class="bg-emerald-500 h-2.5 rounded-full" style="width: 25%"></div>
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-amber-500"></span>
                        <span class="text-sm text-slate-600">Dalam Penilaian</span>
                    </div>
                    <span class="text-sm font-semibold text-slate-700">8</span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2.5">
                    <div class="bg-amber-500 h-2.5 rounded-full" style="width: 17%"></div>
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-cyan-500"></span>
                        <span class="text-sm text-slate-600">Selesai</span>
                    </div>
                    <span class="text-sm font-semibold text-slate-700">24</span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2.5">
                    <div class="bg-cyan-500 h-2.5 rounded-full" style="width: 50%"></div>
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-slate-400"></span>
                        <span class="text-sm text-slate-600">Draf</span>
                    </div>
                    <span class="text-sm font-semibold text-slate-700">2</span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2.5">
                    <div class="bg-slate-400 h-2.5 rounded-full" style="width: 4%"></div>
                </div>
            </div>
            <div>
                <div class="flex items-center justify-between mb-1.5">
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-red-500"></span>
                        <span class="text-sm text-slate-600">Dibatalkan</span>
                    </div>
                    <span class="text-sm font-semibold text-slate-700">2</span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2.5">
                    <div class="bg-red-500 h-2.5 rounded-full" style="width: 4%"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Monthly Trend -->
    <div class="bg-white rounded-xl border border-slate-200 p-6">
        <h3 class="text-base font-semibold text-slate-800 mb-5">Trend Tender Bulanan (2026)</h3>
        <div class="space-y-3">
            @php
                $months = [
                    ['bulan' => 'Januari', 'count' => 8, 'pct' => 67],
                    ['bulan' => 'Februari', 'count' => 6, 'pct' => 50],
                    ['bulan' => 'Mac', 'count' => 4, 'pct' => 33],
                ];
            @endphp
            @foreach($months as $m)
            <div class="flex items-center gap-4">
                <span class="text-sm text-slate-500 w-20 shrink-0">{{ $m['bulan'] }}</span>
                <div class="flex-1 bg-slate-100 rounded-full h-6 relative">
                    <div class="bg-gradient-to-r from-primary-500 to-primary-400 h-6 rounded-full flex items-center justify-end pr-3" style="width: {{ $m['pct'] }}%">
                        <span class="text-xs font-semibold text-white">{{ $m['count'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-6 pt-4 border-t border-slate-100">
            <div class="grid grid-cols-3 gap-4 text-center">
                <div>
                    <p class="text-lg font-bold text-slate-800">RM 1.8J</p>
                    <p class="text-xs text-slate-500">Nilai Q1</p>
                </div>
                <div>
                    <p class="text-lg font-bold text-emerald-600">75%</p>
                    <p class="text-xs text-slate-500">Kadar Selesai</p>
                </div>
                <div>
                    <p class="text-lg font-bold text-amber-600">15 hari</p>
                    <p class="text-xs text-slate-500">Purata Tempoh</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Reports -->
<div class="bg-white rounded-xl border border-slate-200 p-6">
    <h3 class="text-base font-semibold text-slate-800 mb-4">Jana Laporan</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
        <a href="#" class="flex items-center gap-3 p-4 rounded-lg border border-slate-200 hover:border-primary-300 hover:bg-primary-50 transition-colors group">
            <div class="w-10 h-10 rounded-lg bg-primary-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                </svg>
            </div>
            <div>
                <p class="text-sm font-medium text-slate-700 group-hover:text-primary-700">Laporan Senarai Tender</p>
                <p class="text-xs text-slate-400">Eksport PDF / Excel</p>
            </div>
        </a>
        <a href="#" class="flex items-center gap-3 p-4 rounded-lg border border-slate-200 hover:border-primary-300 hover:bg-primary-50 transition-colors group">
            <div class="w-10 h-10 rounded-lg bg-emerald-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                </svg>
            </div>
            <div>
                <p class="text-sm font-medium text-slate-700 group-hover:text-primary-700">Laporan Prestasi Bulanan</p>
                <p class="text-xs text-slate-400">Trend & analitik</p>
            </div>
        </a>
        <a href="#" class="flex items-center gap-3 p-4 rounded-lg border border-slate-200 hover:border-primary-300 hover:bg-primary-50 transition-colors group">
            <div class="w-10 h-10 rounded-lg bg-amber-100 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
            </div>
            <div>
                <p class="text-sm font-medium text-slate-700 group-hover:text-primary-700">Laporan Penilaian Vendor</p>
                <p class="text-xs text-slate-400">Skor & ranking</p>
            </div>
        </a>
    </div>
</div>

</x-app-layout>
