<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div id="carouselExampleAutoplaying" class="carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($masuk as $datas)
                                <div class="carousel-item active">
                                    <img src="{{ asset($datas->path) }}" class="d-block min-h-[350px] h-[350px] max-h-[350px] w-[1200px]" alt="...">
                                </div>
                                @if ($loop->iteration >= 1)
                                    @break
                                @endif
                            @endforeach
                            @foreach ($masuk as $datas)
                                @if ($loop->iteration > 1)
                                    <div class="carousel-item">
                                        <img src="{{ asset($datas->path) }}" class="d-block min-h-[350px] h-[350px] max-h-[350px] w-[1200px]" alt="...">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
