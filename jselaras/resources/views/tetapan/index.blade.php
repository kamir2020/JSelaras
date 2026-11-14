<x-app-layout>

<x-slot name="header">Tetapan</x-slot>

<!-- Page Header -->
<div class="mb-6">
    <h1 class="text-2xl font-bold text-slate-800">Tetapan Sistem</h1>
    <p class="text-sm text-slate-500 mt-1">Konfigurasi dan pengurusan tetapan aplikasi</p>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    <!-- Left: Settings Navigation -->
    <div class="lg:col-span-1">
        <div class="bg-white rounded-xl border border-slate-200 overflow-hidden">
            <nav class="divide-y divide-slate-100" x-data="{ active: 'umum' }">
                <button @click="active = 'umum'" :class="active === 'umum' ? 'bg-primary-50 border-l-2 border-primary-600 text-primary-700' : 'text-slate-600 hover:bg-slate-50'"
                        class="w-full flex items-center gap-3 px-4 py-3.5 text-sm font-medium transition-colors text-left">
                    <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    Tetapan Umum
                </button>
                <button @click="active = 'organisasi'" :class="active === 'organisasi' ? 'bg-primary-50 border-l-2 border-primary-600 text-primary-700' : 'text-slate-600 hover:bg-slate-50'"
                        class="w-full flex items-center gap-3 px-4 py-3.5 text-sm font-medium transition-colors text-left">
                    <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 0H21" />
                    </svg>
                    Maklumat Organisasi
                </button>
                <button @click="active = 'notifikasi'" :class="active === 'notifikasi' ? 'bg-primary-50 border-l-2 border-primary-600 text-primary-700' : 'text-slate-600 hover:bg-slate-50'"
                        class="w-full flex items-center gap-3 px-4 py-3.5 text-sm font-medium transition-colors text-left">
                    <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                    Notifikasi
                </button>
                <button @click="active = 'peranan'" :class="active === 'peranan' ? 'bg-primary-50 border-l-2 border-primary-600 text-primary-700' : 'text-slate-600 hover:bg-slate-50'"
                        class="w-full flex items-center gap-3 px-4 py-3.5 text-sm font-medium transition-colors text-left">
                    <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                    </svg>
                    Peranan & Kebenaran
                </button>
            </nav>
        </div>
    </div>

    <!-- Right: Settings Content -->
    <div class="lg:col-span-2 space-y-6">

        <!-- Tetapan Umum -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
            <h3 class="text-base font-semibold text-slate-800 mb-1">Tetapan Umum</h3>
            <p class="text-sm text-slate-500 mb-5">Konfigurasi asas sistem pengurusan tender</p>

            <div class="space-y-5">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1.5">Nama Sistem</label>
                    <input type="text" value="JSelaras — Sistem Pengurusan Tender" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1.5">Format No. Tender</label>
                    <input type="text" value="T/{TAHUN}/{NO}" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500" />
                    <p class="text-xs text-slate-400 mt-1">Contoh: T/2026/001</p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1.5">Tempoh Tender Default (hari)</label>
                        <input type="number" value="30" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1.5">Tempoh Penilaian Default (hari)</label>
                        <input type="number" value="14" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500" />
                    </div>
                </div>
            </div>

            <div class="mt-6 pt-4 border-t border-slate-100 flex justify-end">
                <button class="px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-lg hover:bg-primary-700 transition-colors">
                    Simpan Tetapan
                </button>
            </div>
        </div>

        <!-- Maklumat Organisasi -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
            <h3 class="text-base font-semibold text-slate-800 mb-1">Maklumat Organisasi</h3>
            <p class="text-sm text-slate-500 mb-5">Maklumat organisasi untuk dokumen rasmi</p>

            <div class="space-y-5">
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1.5">Nama Organisasi</label>
                    <input type="text" value="Jabatan Contoh Malaysia" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1.5">Alamat</label>
                    <textarea rows="2" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500">Aras 5, Blok A, Kompleks Kerajaan, 62000 Putrajaya</textarea>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1.5">No. Telefon</label>
                        <input type="text" value="03-8888 8888" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1.5">Emel</label>
                        <input type="email" value="tender@contoh.gov.my" class="w-full px-3 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500" />
                    </div>
                </div>
            </div>

            <div class="mt-6 pt-4 border-t border-slate-100 flex justify-end">
                <button class="px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-lg hover:bg-primary-700 transition-colors">
                    Simpan Maklumat
                </button>
            </div>
        </div>

        <!-- Peranan & Kebenaran -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
            <h3 class="text-base font-semibold text-slate-800 mb-1">Peranan & Kebenaran</h3>
            <p class="text-sm text-slate-500 mb-5">Senarai peranan pengguna dalam sistem</p>

            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="bg-slate-50">
                            <th class="text-left px-4 py-2.5 text-xs font-semibold text-slate-500 uppercase">Peranan</th>
                            <th class="text-left px-4 py-2.5 text-xs font-semibold text-slate-500 uppercase">Penerangan</th>
                            <th class="text-center px-4 py-2.5 text-xs font-semibold text-slate-500 uppercase">Pengguna</th>
                            <th class="text-left px-4 py-2.5 text-xs font-semibold text-slate-500 uppercase">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr>
                            <td class="px-4 py-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary-100 text-primary-700">Admin</span>
                            </td>
                            <td class="px-4 py-3 text-slate-600">Akses penuh ke semua modul dan tetapan</td>
                            <td class="px-4 py-3 text-center font-medium text-slate-800">1</td>
                            <td class="px-4 py-3">
                                <span class="inline-flex items-center gap-1 text-xs font-medium text-emerald-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Aktif
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700">Pegawai Tender</span>
                            </td>
                            <td class="px-4 py-3 text-slate-600">Urus tender, penilaian, dan dokumen</td>
                            <td class="px-4 py-3 text-center font-medium text-slate-800">3</td>
                            <td class="px-4 py-3">
                                <span class="inline-flex items-center gap-1 text-xs font-medium text-emerald-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Aktif
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-700">Top Management</span>
                            </td>
                            <td class="px-4 py-3 text-slate-600">Lihat laporan dan kelulusan tender</td>
                            <td class="px-4 py-3 text-center font-medium text-slate-800">2</td>
                            <td class="px-4 py-3">
                                <span class="inline-flex items-center gap-1 text-xs font-medium text-emerald-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Aktif
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

</x-app-layout>
