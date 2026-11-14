<x-app-layout>

<x-slot name="header">Pengurusan Tender</x-slot>

<!-- Page Header -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-4">
    <div>
        <h1 class="text-2xl font-bold text-slate-800">Senarai Tender</h1>
        <p class="text-sm text-slate-500 mt-1">Pengurusan tender dan sebut harga organisasi</p>
    </div>
    <a href="#" class="inline-flex items-center gap-2 px-4 py-2.5 bg-primary-600 text-white text-sm font-medium rounded-lg hover:bg-primary-700 transition-colors">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        Tender Baru
    </a>
</div>

<!-- Stats Row -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
    <div class="bg-white rounded-xl border border-slate-200 p-4">
        <p class="text-sm text-slate-500">Jumlah Tender</p>
        <p class="text-2xl font-bold text-slate-800 mt-1">48</p>
    </div>
    <div class="bg-white rounded-xl border border-slate-200 p-4">
        <p class="text-sm text-slate-500">Aktif</p>
        <p class="text-2xl font-bold text-emerald-600 mt-1">12</p>
    </div>
    <div class="bg-white rounded-xl border border-slate-200 p-4">
        <p class="text-sm text-slate-500">Dalam Penilaian</p>
        <p class="text-2xl font-bold text-amber-600 mt-1">8</p>
    </div>
    <div class="bg-white rounded-xl border border-slate-200 p-4">
        <p class="text-sm text-slate-500">Selesai</p>
        <p class="text-2xl font-bold text-cyan-600 mt-1">28</p>
    </div>
</div>

<!-- Filter Bar -->
<div class="bg-white rounded-xl border border-slate-200 p-4 mb-6">
    <div class="flex flex-col sm:flex-row gap-3">
        <div class="flex-1">
            <div class="relative">
                <svg class="w-4 h-4 text-slate-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
                <input type="text" placeholder="Cari tender..." class="w-full pl-10 pr-4 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500" />
            </div>
        </div>
        <select class="px-3 py-2 border border-slate-200 rounded-lg text-sm text-slate-600 focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
            <option>Semua Status</option>
            <option>Draf</option>
            <option>Aktif</option>
            <option>Dalam Penilaian</option>
            <option>Selesai</option>
            <option>Dibatalkan</option>
        </select>
        <select class="px-3 py-2 border border-slate-200 rounded-lg text-sm text-slate-600 focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
            <option>Semua Tahun</option>
            <option>2026</option>
            <option>2025</option>
        </select>
    </div>
</div>

<!-- Table -->
<div class="bg-white rounded-xl border border-slate-200">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="bg-slate-50">
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">No.</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">No. Tender</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Tajuk</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Status</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Tarikh Mula</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Tarikh Tutup</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Anggaran (RM)</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Tindakan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-3.5 text-slate-600">1</td>
                    <td class="px-6 py-3.5 font-mono text-sm text-primary-600 font-medium">T/2026/001</td>
                    <td class="px-6 py-3.5 font-medium text-slate-800">Penyelenggaraan Bangunan Blok A & B</td>
                    <td class="px-6 py-3.5">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700">Aktif</span>
                    </td>
                    <td class="px-6 py-3.5 text-slate-500">01/03/2026</td>
                    <td class="px-6 py-3.5 text-slate-500">31/03/2026</td>
                    <td class="px-6 py-3.5 text-slate-700 font-medium">250,000.00</td>
                    <td class="px-6 py-3.5">
                        <div class="flex items-center gap-2">
                            <a href="{{ route('tenders.show', 1) }}" class="text-primary-600 hover:text-primary-800 font-medium text-xs">Lihat</a>
                            <span class="text-slate-300">|</span>
                            <a href="#" class="text-slate-500 hover:text-slate-700 text-xs">Edit</a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-3.5 text-slate-600">2</td>
                    <td class="px-6 py-3.5 font-mono text-sm text-primary-600 font-medium">T/2026/002</td>
                    <td class="px-6 py-3.5 font-medium text-slate-800">Bekalan Peralatan ICT Makmal Komputer</td>
                    <td class="px-6 py-3.5">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-700">Dalam Penilaian</span>
                    </td>
                    <td class="px-6 py-3.5 text-slate-500">15/02/2026</td>
                    <td class="px-6 py-3.5 text-slate-500">28/02/2026</td>
                    <td class="px-6 py-3.5 text-slate-700 font-medium">180,000.00</td>
                    <td class="px-6 py-3.5">
                        <div class="flex items-center gap-2">
                            <a href="{{ route('tenders.show', 2) }}" class="text-primary-600 hover:text-primary-800 font-medium text-xs">Lihat</a>
                            <span class="text-slate-300">|</span>
                            <a href="#" class="text-slate-500 hover:text-slate-700 text-xs">Edit</a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-3.5 text-slate-600">3</td>
                    <td class="px-6 py-3.5 font-mono text-sm text-primary-600 font-medium">T/2026/003</td>
                    <td class="px-6 py-3.5 font-medium text-slate-800">Perkhidmatan Kawalan Keselamatan 2026/2027</td>
                    <td class="px-6 py-3.5">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-cyan-100 text-cyan-700">Selesai</span>
                    </td>
                    <td class="px-6 py-3.5 text-slate-500">01/01/2026</td>
                    <td class="px-6 py-3.5 text-slate-500">31/01/2026</td>
                    <td class="px-6 py-3.5 text-slate-700 font-medium">320,000.00</td>
                    <td class="px-6 py-3.5">
                        <div class="flex items-center gap-2">
                            <a href="{{ route('tenders.show', 3) }}" class="text-primary-600 hover:text-primary-800 font-medium text-xs">Lihat</a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-3.5 text-slate-600">4</td>
                    <td class="px-6 py-3.5 font-mono text-sm text-primary-600 font-medium">T/2026/004</td>
                    <td class="px-6 py-3.5 font-medium text-slate-800">Pembersihan Kawasan & Penyelenggaraan Landskap</td>
                    <td class="px-6 py-3.5">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-600">Draf</span>
                    </td>
                    <td class="px-6 py-3.5 text-slate-500">—</td>
                    <td class="px-6 py-3.5 text-slate-500">—</td>
                    <td class="px-6 py-3.5 text-slate-700 font-medium">95,000.00</td>
                    <td class="px-6 py-3.5">
                        <div class="flex items-center gap-2">
                            <a href="{{ route('tenders.show', 4) }}" class="text-primary-600 hover:text-primary-800 font-medium text-xs">Lihat</a>
                            <span class="text-slate-300">|</span>
                            <a href="#" class="text-slate-500 hover:text-slate-700 text-xs">Edit</a>
                            <span class="text-slate-300">|</span>
                            <a href="#" class="text-red-500 hover:text-red-700 text-xs">Padam</a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-3.5 text-slate-600">5</td>
                    <td class="px-6 py-3.5 font-mono text-sm text-primary-600 font-medium">T/2025/048</td>
                    <td class="px-6 py-3.5 font-medium text-slate-800">Kerja-kerja Mekanikal & Elektrikal Fasa 2</td>
                    <td class="px-6 py-3.5">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700">Aktif</span>
                    </td>
                    <td class="px-6 py-3.5 text-slate-500">20/02/2026</td>
                    <td class="px-6 py-3.5 text-slate-500">20/03/2026</td>
                    <td class="px-6 py-3.5 text-slate-700 font-medium">450,000.00</td>
                    <td class="px-6 py-3.5">
                        <div class="flex items-center gap-2">
                            <a href="{{ route('tenders.show', 5) }}" class="text-primary-600 hover:text-primary-800 font-medium text-xs">Lihat</a>
                            <span class="text-slate-300">|</span>
                            <a href="#" class="text-slate-500 hover:text-slate-700 text-xs">Edit</a>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-3.5 text-slate-600">6</td>
                    <td class="px-6 py-3.5 font-mono text-sm text-primary-600 font-medium">T/2025/047</td>
                    <td class="px-6 py-3.5 font-medium text-slate-800">Bekalan Perabot Pejabat Tingkat 3</td>
                    <td class="px-6 py-3.5">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-700">Dibatalkan</span>
                    </td>
                    <td class="px-6 py-3.5 text-slate-500">10/01/2026</td>
                    <td class="px-6 py-3.5 text-slate-500">25/01/2026</td>
                    <td class="px-6 py-3.5 text-slate-700 font-medium">75,000.00</td>
                    <td class="px-6 py-3.5">
                        <div class="flex items-center gap-2">
                            <a href="{{ route('tenders.show', 6) }}" class="text-primary-600 hover:text-primary-800 font-medium text-xs">Lihat</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Pagination Mock -->
    <div class="px-6 py-4 border-t border-slate-200 flex items-center justify-between">
        <p class="text-sm text-slate-500">Menunjukkan 1-6 daripada 48 tender</p>
        <div class="flex items-center gap-1">
            <span class="px-3 py-1.5 text-sm font-medium text-white bg-primary-600 rounded-lg">1</span>
            <a href="#" class="px-3 py-1.5 text-sm text-slate-600 hover:bg-slate-100 rounded-lg">2</a>
            <a href="#" class="px-3 py-1.5 text-sm text-slate-600 hover:bg-slate-100 rounded-lg">3</a>
            <span class="px-2 text-slate-400">...</span>
            <a href="#" class="px-3 py-1.5 text-sm text-slate-600 hover:bg-slate-100 rounded-lg">8</a>
        </div>
    </div>
</div>

</x-app-layout>
