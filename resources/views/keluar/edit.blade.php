<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Surat Keluar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-form action="{{ route('keluar.update', $keluar) }}" :default="$keluar" method="put">
                        <x-splade-input class="mb-3" id="nomor_surat" name="nomor_surat" label="nomor_surat" required />
                        <x-splade-input class="mb-3" id="tanggal" type="date" name="tanggal" label="tanggal" required />
                        <x-splade-input class="mb-3" id="tujuan" name="tujuan" label="tujuan" required />
                        <x-splade-input class="mb-3" id="keterangan" name="keterangan" label="keterangan" required />
                        <x-splade-input class="mb-3" id="jenis_surat" name="jenis_surat" label="jenis_surat" required />
                        <x-splade-file class="mb-3" id="path" name="path" label="path" required />
                        <x-splade-submit label="Tambahkan" />
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
