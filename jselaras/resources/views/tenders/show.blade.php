<x-app-layout>

<x-slot name="header">Detail Tender</x-slot>

@php
    $tender = (object)[
        'no' => 'T/2026/001',
        'tajuk' => 'Penyelenggaraan Bangunan Blok A & B',
        'status' => 'Dalam Penilaian',
        'tarikhMula' => '01/03/2026',
        'tarikhTutup' => '31/03/2026',
        'anggaran' => '250,000.00',
        'keterangan' => 'Tender bagi kerja-kerja penyelenggaraan bangunan Blok A dan Blok B termasuk kerja-kerja mekanikal, elektrikal, dan sivil.',
    ];

    $steps = [
        ['label' => 'Draf', 'status' => 'done', 'date' => '25/02/2026'],
        ['label' => 'Dihantar', 'status' => 'done', 'date' => '01/03/2026'],
        ['label' => 'Penilaian', 'status' => 'current', 'date' => '—'],
        ['label' => 'Dianugerahkan', 'status' => 'pending', 'date' => '—'],
    ];

    $vendors = [
        (object)['nama' => 'Syarikat ABC Sdn Bhd', 'no_ssm' => '201901012345', 'harga' => '235,000.00', 'skor' => 82, 'dokumen' => 4],
        (object)['nama' => 'XYZ Construction', 'no_ssm' => '201801054321', 'harga' => '248,500.00', 'skor' => 76, 'dokumen' => 3],
        (object)['nama' => 'MNO Services Sdn Bhd', 'no_ssm' => '202001098765', 'harga' => '220,000.00', 'skor' => 88, 'dokumen' => 5],
    ];

    $documents = [
        (object)['nama' => 'Dokumen Tender T-2026-001.pdf', 'saiz' => '2.4 MB', 'tarikh' => '01/03/2026', 'jenis' => 'Dokumen Tender'],
        (object)['nama' => 'Spesifikasi Teknikal.pdf', 'saiz' => '1.8 MB', 'tarikh' => '01/03/2026', 'jenis' => 'Spesifikasi'],
        (object)['nama' => 'Surat Tawaran.pdf', 'saiz' => '450 KB', 'tarikh' => '25/02/2026', 'jenis' => 'Surat Rasmi'],
        (object)['nama' => 'Pelan Lantai Blok A.dwg', 'saiz' => '5.1 MB', 'tarikh' => '25/02/2026', 'jenis' => 'Lampiran'],
    ];

    $activities = [
        (object)['aksi' => 'Borang penilaian telah dihantar kepada panel', 'oleh' => 'Johari Ismail', 'tarikh' => '03/03/2026 09:15'],
        (object)['aksi' => 'Vendor MNO Services hantar sebut harga', 'oleh' => 'System', 'tarikh' => '02/03/2026 16:30'],
        (object)['aksi' => 'Vendor XYZ Construction hantar sebut harga', 'oleh' => 'System', 'tarikh' => '02/03/2026 11:00'],
        (object)['aksi' => 'Vendor ABC Sdn Bhd hantar sebut harga', 'oleh' => 'System', 'tarikh' => '01/03/2026 14:20'],
        (object)['aksi' => 'Tender diterbitkan dan dibuka', 'oleh' => 'Johari Ismail', 'tarikh' => '01/03/2026 08:00'],
    ];
@endphp

<!-- Back + Title -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-4">
    <div>
        <a href="{{ route('tenders.index') }}" class="inline-flex items-center gap-1 text-sm text-slate-500 hover:text-primary-600 mb-2">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" /></svg>
            Kembali ke Senarai
        </a>
        <h1 class="text-2xl font-bold text-slate-800">{{ $tender->tajuk }}</h1>
        <div class="flex items-center gap-3 mt-1">
            <span class="font-mono text-sm text-primary-600 font-medium">{{ $tender->no }}</span>
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-700">{{ $tender->status }}</span>
        </div>
    </div>
    <div class="flex items-center gap-2">
        <button class="px-4 py-2 border border-slate-200 text-sm font-medium text-slate-600 rounded-lg hover:bg-slate-50 transition-colors">Edit</button>
        <button class="px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-lg hover:bg-primary-700 transition-colors">Cetak</button>
    </div>
</div>

<!-- Status Workflow -->
<div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
    <h3 class="text-base font-semibold text-slate-800 mb-5">Status Workflow</h3>
    <div class="flex items-center justify-between relative">
        <!-- Progress line -->
        <div class="absolute top-5 left-0 right-0 h-0.5 bg-slate-200"></div>
        <div class="absolute top-5 left-0 h-0.5 bg-primary-500" style="width: 58%"></div>

        @foreach($steps as $i => $step)
        <div class="relative flex flex-col items-center z-10" style="width: 25%">
            @if($step['status'] === 'done')
                <div class="w-10 h-10 rounded-full bg-primary-600 flex items-center justify-center mb-2">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                </div>
            @elseif($step['status'] === 'current')
                <div class="w-10 h-10 rounded-full bg-amber-500 flex items-center justify-center mb-2 ring-4 ring-amber-100">
                    <div class="w-3 h-3 rounded-full bg-white"></div>
                </div>
            @else
                <div class="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center mb-2">
                    <div class="w-3 h-3 rounded-full bg-slate-400"></div>
                </div>
            @endif
            <span class="text-sm font-medium {{ $step['status'] === 'current' ? 'text-amber-700' : ($step['status'] === 'done' ? 'text-primary-700' : 'text-slate-400') }}">{{ $step['label'] }}</span>
            <span class="text-xs text-slate-400 mt-0.5">{{ $step['date'] }}</span>
        </div>
        @endforeach
    </div>
</div>

<!-- Info + Documents Grid -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">

    <!-- Maklumat Tender -->
    <div class="lg:col-span-1 bg-white rounded-xl border border-slate-200 p-6">
        <h3 class="text-base font-semibold text-slate-800 mb-4">Maklumat Tender</h3>
        <div class="space-y-3 text-sm">
            <div class="flex justify-between"><span class="text-slate-500">No. Tender</span><span class="font-medium text-slate-800">{{ $tender->no }}</span></div>
            <div class="flex justify-between"><span class="text-slate-500">Tarikh Mula</span><span class="font-medium text-slate-800">{{ $tender->tarikhMula }}</span></div>
            <div class="flex justify-between"><span class="text-slate-500">Tarikh Tutup</span><span class="font-medium text-slate-800">{{ $tender->tarikhTutup }}</span></div>
            <div class="flex justify-between"><span class="text-slate-500">Anggaran</span><span class="font-bold text-slate-800">RM {{ $tender->anggaran }}</span></div>
            <hr class="border-slate-100">
            <div>
                <span class="text-slate-500 block mb-1">Keterangan</span>
                <p class="text-slate-700">{{ $tender->keterangan }}</p>
            </div>
        </div>
    </div>

    <!-- Dokumen -->
    <div class="lg:col-span-2 bg-white rounded-xl border border-slate-200 p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-base font-semibold text-slate-800">Dokumen</h3>
            <button class="inline-flex items-center gap-1.5 px-3 py-1.5 border border-slate-200 text-xs font-medium text-slate-600 rounded-lg hover:bg-slate-50">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" /></svg>
                Muat Naik
            </button>
        </div>
        <div class="space-y-2">
            @foreach($documents as $doc)
            <div class="flex items-center gap-3 p-3 rounded-lg border border-slate-100 hover:border-slate-200 hover:bg-slate-50 transition-colors">
                <div class="w-10 h-10 rounded-lg bg-red-50 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" /></svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-slate-700 truncate">{{ $doc->nama }}</p>
                    <p class="text-xs text-slate-400">{{ $doc->jenis }} &middot; {{ $doc->saiz }} &middot; {{ $doc->tarikh }}</p>
                </div>
                <a href="#" class="text-primary-600 hover:text-primary-800 text-xs font-medium shrink-0">Muat Turun</a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Evaluation / Scoring -->
<div class="bg-white rounded-xl border border-slate-200 mb-6">
    <div class="px-6 py-4 border-b border-slate-200 flex items-center justify-between">
        <h3 class="text-base font-semibold text-slate-800">Penilaian Vendor</h3>
        <span class="text-xs text-slate-400">3 vendor</span>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead>
                <tr class="bg-slate-50">
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">No.</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Vendor</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">No. SSM</th>
                    <th class="text-right px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Harga Tawaran (RM)</th>
                    <th class="text-center px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Skor</th>
                    <th class="text-center px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Dokumen</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Tindakan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @foreach($vendors as $i => $v)
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-3.5 text-slate-600">{{ $i + 1 }}</td>
                    <td class="px-6 py-3.5 font-medium text-slate-800">{{ $v->nama }}</td>
                    <td class="px-6 py-3.5 text-slate-500 font-mono text-xs">{{ $v->no_ssm }}</td>
                    <td class="px-6 py-3.5 text-right font-medium text-slate-700">{{ $v->harga }}</td>
                    <td class="px-6 py-3.5 text-center">
                        <div class="inline-flex items-center gap-2">
                            <div class="w-16 bg-slate-100 rounded-full h-2">
                                <div class="h-2 rounded-full {{ $v->skor >= 80 ? 'bg-emerald-500' : ($v->skor >= 60 ? 'bg-amber-500' : 'bg-red-500') }}" style="width: {{ $v->skor }}%"></div>
                            </div>
                            <span class="text-sm font-semibold {{ $v->skor >= 80 ? 'text-emerald-600' : ($v->skor >= 60 ? 'text-amber-600' : 'text-red-600') }}">{{ $v->skor }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-3.5 text-center">
                        <span class="inline-flex items-center gap-1 text-xs text-slate-500">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" /></svg>
                            {{ $v->dokumen }} fail
                        </span>
                    </td>
                    <td class="px-6 py-3.5">
                        <div class="flex items-center gap-2">
                            <a href="#" class="text-primary-600 hover:text-primary-800 font-medium text-xs">Nilai</a>
                            <span class="text-slate-300">|</span>
                            <a href="#" class="text-slate-500 hover:text-slate-700 text-xs">Lihat</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Activity Log -->
<div class="bg-white rounded-xl border border-slate-200">
    <div class="px-6 py-4 border-b border-slate-200">
        <h3 class="text-base font-semibold text-slate-800">Log Aktiviti</h3>
    </div>
    <div class="p-6">
        <div class="space-y-4">
            @foreach($activities as $act)
            <div class="flex gap-3">
                <div class="w-2 h-2 rounded-full bg-primary-400 mt-2 shrink-0"></div>
                <div>
                    <p class="text-sm text-slate-700">{{ $act->aksi }}</p>
                    <p class="text-xs text-slate-400 mt-0.5">{{ $act->oleh }} &middot; {{ $act->tarikh }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

</x-app-layout>
