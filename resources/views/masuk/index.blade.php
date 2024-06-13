<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Surat Masuk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex align-middle text-center">
                        <Link href="{{ route('masuk.create') }}" class="px-4 py-2 bg-green-500 rounded text-white hover:bg-green-300 hover:text-black font-semibold">Tambah</Link>
                        <div style="width: 100%">
                            <x-splade-form blob class="flex justify-end" action="{{ route('masuk.export') }}" method="GET">
                                <x-splade-input class="w-64 me-3" name="date_start" date placeholder="Date Start"/>
                                <x-splade-input class="w-64 me-3" name="date_end" date placeholder="Date End"/>
                                <x-splade-submit label="Export" />
                            </x-splade-form>
                        </div>
                    </div>
                    <x-splade-table class="mt-4" :for="$masuks"  pagination-scroll="preserve">
                        <x-splade-cell image as="$masuks">
                            @if ($masuks->path)
                                <img src="{{ asset($masuks->path) }}" alt="{{ $masuks->nomor_surat }}">
                            @endif
                        </x-splade-cell>
                        <x-splade-cell actions as="$masuks">
                            <Link href="{{ route('masuk.edit', $masuks) }}" class="me-2 px-3 py-2 bg-yellow-500 rounded text-white hover:bg-yellow-300 hover:text-black font-semibold"> Ubah </Link>
                            <x-splade-form 
                                action="{{ route('masuk.destroy', $masuks) }}"
                                method="delete"
                                confirm="Hapus Data"
                                confirm-text="Apa Kamu Yakin Untuk Menghapus Data?"
                                confirm-button="Ya"
                                cancel-button="Tidak">
                                    <x-splade-button class="bg-red-500 rounded text-white hover:bg-red-300 hover:text-black"> Hapus </x-splade-button>
                            </x-splade-form>
                        </x-splade-cell>
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
