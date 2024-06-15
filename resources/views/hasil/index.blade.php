<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Surat Masuk Ter identifikasi SPAM') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="d-flex flex-wrap gap-2 justify-content-center p-6 bg-white border-b border-gray-200">
                    @foreach ($datas as $datas)
                        <div class="card" style="width: 20rem;">
                            <div class="card-body">
                            <p class="card-text text-center font-medium fs-5 mb-2">{{ $datas->nomor_surat }}. ({{ $datas->tanggal }})</p>
                            <p class="card-text">Tujuan : {{ $datas->tujuan }}</p>
                            <p class="card-text">Keterangan : {{ $datas->keterangan }}</p>
                            <p class="card-text">Jenis Surat : {{ $datas->jenis_surat }}</p>
                            @if ($datas->path)
                                <img style="width: 400px; height:200px; content-fit:cover;" src="{{ asset($datas->path) }}" alt="{{ $datas->nomor_surat }}">
                            @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
