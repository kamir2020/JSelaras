<x-app-layout>

<x-slot name="header">Pengurusan Vendor</x-slot>

@php
    $vendors = [
        (object)['nama' => 'Syarikat ABC Sdn Bhd', 'ssm' => '201901012345', 'telefon' => '03-1234 5678', 'email' => 'info@abc.com.my', 'bidang' => 'Pembinaan', 'status' => 'Aktif', 'tender' => 5, 'skor' => 82],
        (object)['nama' => 'XYZ Construction', 'ssm' => '201801054321', 'telefon' => '03-8765 4321', 'email' => 'tender@xyz.my', 'bidang' => 'Mekanikal & Elektrikal', 'status' => 'Aktif', 'tender' => 3, 'skor' => 76],
        (object)['nama' => 'MNO Services Sdn Bhd', 'ssm' => '202001098765', 'telefon' => '03-5555 6666', 'email' => 'admin@mno.my', 'bidang' => 'Perkhidmatan', 'status' => 'Aktif', 'tender' => 7, 'skor' => 88],
        (object)['nama' => 'PQR Tech Solutions', 'ssm' => '201701033333', 'telefon' => '03-9999 0000', 'email' => 'sales@pqr.com.my', 'bidang' => 'ICT', 'status' => 'Aktif', 'tender' => 2, 'skor' => 71],
        (object)['nama' => 'Delta Facilities Sdn Bhd', 'ssm' => '201501044444', 'telefon' => '03-7777 8888', 'email' => 'ops@delta.my', 'bidang' => 'Penyelenggaraan', 'status' => 'Tidak Aktif', 'tender' => 1, 'skor' => 55],
    ];
@endphp

<!-- Page Header -->
<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-4">
    <div>
        <h1 class="text-2xl font-bold text-slate-800">Senarai Vendor</h1>
        <p class="text-sm text-slate-500 mt-1">Pengurusan vendor dan pembekal berdaftar</p>
    </div>
    <a href="#" class="inline-flex items-center gap-2 px-4 py-2.5 bg-primary-600 text-white text-sm font-medium rounded-lg hover:bg-primary-700 transition-colors">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>
        Daftar Vendor
    </a>
</div>

<!-- Stats Row -->
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
    <div class="bg-white rounded-xl border border-slate-200 p-4">
        <p class="text-sm text-slate-500">Jumlah Vendor</p>
        <p class="text-2xl font-bold text-slate-800 mt-1">24</p>
    </div>
    <div class="bg-white rounded-xl border border-slate-200 p-4">
        <p class="text-sm text-slate-500">Aktif</p>
        <p class="text-2xl font-bold text-emerald-600 mt-1">20</p>
    </div>
    <div class="bg-white rounded-xl border border-slate-200 p-4">
        <p class="text-sm text-slate-500">Purata Skor</p>
        <p class="text-2xl font-bold text-primary-600 mt-1">74.4</p>
    </div>
    <div class="bg-white rounded-xl border border-slate-200 p-4">
        <p class="text-sm text-slate-500">Bidang</p>
        <p class="text-2xl font-bold text-amber-600 mt-1">6</p>
    </div>
</div>

<!-- Filter Bar -->
<div class="bg-white rounded-xl border border-slate-200 p-4 mb-6">
    <div class="flex flex-col sm:flex-row gap-3">
        <div class="flex-1">
            <div class="relative">
                <svg class="w-4 h-4 text-slate-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" /></svg>
                <input type="text" placeholder="Cari vendor..." class="w-full pl-10 pr-4 py-2 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-primary-500 focus:border-primary-500" />
            </div>
        </div>
        <select class="px-3 py-2 border border-slate-200 rounded-lg text-sm text-slate-600 focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
            <option>Semua Bidang</option>
            <option>Pembinaan</option>
            <option>ICT</option>
            <option>Perkhidmatan</option>
            <option>Mekanikal & Elektrikal</option>
            <option>Penyelenggaraan</option>
        </select>
        <select class="px-3 py-2 border border-slate-200 rounded-lg text-sm text-slate-600 focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
            <option>Semua Status</option>
            <option>Aktif</option>
            <option>Tidak Aktif</option>
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
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Nama Syarikat</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">No. SSM</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Bidang</th>
                    <th class="text-center px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Tender</th>
                    <th class="text-center px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Skor</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Status</th>
                    <th class="text-left px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">Tindakan</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @foreach($vendors as $i => $v)
                <tr class="hover:bg-slate-50 transition-colors">
                    <td class="px-6 py-3.5 text-slate-600">{{ $i + 1 }}</td>
                    <td class="px-6 py-3.5">
                        <div>
                            <p class="font-medium text-slate-800">{{ $v->nama }}</p>
                            <p class="text-xs text-slate-400">{{ $v->email }}</p>
                        </div>
                    </td>
                    <td class="px-6 py-3.5 font-mono text-xs text-slate-500">{{ $v->ssm }}</td>
                    <td class="px-6 py-3.5">
                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-slate-100 text-slate-600">{{ $v->bidang }}</span>
                    </td>
                    <td class="px-6 py-3.5 text-center font-medium text-slate-700">{{ $v->tender }}</td>
                    <td class="px-6 py-3.5 text-center">
                        <span class="text-sm font-semibold {{ $v->skor >= 80 ? 'text-emerald-600' : ($v->skor >= 60 ? 'text-amber-600' : 'text-red-600') }}">{{ $v->skor }}</span>
                    </td>
                    <td class="px-6 py-3.5">
                        @if($v->status === 'Aktif')
                            <span class="inline-flex items-center gap-1 text-xs font-medium text-emerald-600">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Aktif
                            </span>
                        @else
                            <span class="inline-flex items-center gap-1 text-xs font-medium text-slate-400">
                                <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span> Tidak Aktif
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-3.5">
                        <div class="flex items-center gap-2">
                            <a href="#" class="text-primary-600 hover:text-primary-800 font-medium text-xs">Lihat</a>
                            <span class="text-slate-300">|</span>
                            <a href="#" class="text-slate-500 hover:text-slate-700 text-xs">Edit</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</x-app-layout>
