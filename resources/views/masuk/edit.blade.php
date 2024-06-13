<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Surat Masuk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-form action="{{ route('masuk.update', $masuk) }}" :default="$masuk" method="put">
                        <x-splade-input class="mb-3" id="nomor_surat" name="nomor_surat" label="nomor_surat" required />
                        <x-splade-input class="mb-3" id="tanggal" type="date" name="tanggal" label="tanggal" required />
                        <x-splade-select class="mb-3" name="tujuan" label="tujuan" required>
                            <option value="Gereja A">Gereja A</option>
                            <option value="Gereja B">Gereja B</option>
                            <option value="Gereja C">Gereja C</option>
                            <option value="Gereja D">Gereja D</option>
                            <option value="Gereja E">Gereja E</option>
                            <option value="Gereja F">Gereja F</option>
                        </x-splade-select>
                        <x-splade-select class="mb-3" name="keterangan" label="keterangan" required>
                            <option value="Regular">Regular</option>
                            <option value="Urgent">Urgent</option>
                        </x-splade-select>
                        <x-splade-select class="mb-3" name="jenis_surat" label="jenis surat" required>
                            <option value="Balasan Surat">Balasan Surat</option>
                            <option value="Proposal Pengajuan">Proposal Pengajuan</option>
                            <option value="Data Rekapan">Data Rekapan</option>
                        </x-splade-select>
                        <x-splade-file class="mb-3" id="path" name="path" label="Image" min-size="100KB" max-size="5MB" filepond preview required />
                        <x-splade-submit label="Tambahkan" />
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
