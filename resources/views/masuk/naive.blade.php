<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hasil Naive Bayes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="d-flex justify-between flex-wrap gap-5 mb-4">
                        <table style="border-collapse: collapse; width: 100%;">
                            <tbody>
                                <tr class="header-column">
                                    <th
                                        style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">
                                        Plain Description</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                        {{ $newInput }}</td>
                                </tr>
                                <tr class="header-column">
                                    <th
                                        style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">
                                        Stemmed Description</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                        @foreach ($stemmedTokens as $stemmedTokens)
                                            {{ $stemmedTokens }}
                                        @endforeach
                                    </td>
                                </tr>
                                <tr class="header-column">
                                    <th
                                        style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">
                                        Tokenizer Stemmed</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                        <table style="border-collapse: collapse; width: 100%;">
                                            @foreach ($wordCounts as $index => $item)
                                                <tr>
                                                    <td>{{ $index }}</td>
                                                    <td>:</td>
                                                    <td>Berulang sebanyak {{ $item }}x</td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </td>
                                </tr>
                                <tr class="header-column">
                                    <th
                                        style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">
                                        Stemmed Description in vector</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                        @foreach ($stemmedInput as $stemmedInp)
                                            @foreach ($stemmedInp as $key => $item)
                                                {{ $item }}
                                            @endforeach
                                        @endforeach
                                    </td>
                                </tr>
                                <tr class="header-column">
                                    <th
                                        style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">
                                        Is Spam</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                        @if ($normalisasiTrue > $normalisasiFalse)
                                            true (<span class="font-bold" style="color: red">SPAM</span>)
                                        @else
                                            false (<span class="font-bold" style="color: green">Not SPAM</span>)
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-between flex-wrap gap-5 mb-4">
                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">
                                        Probabilitas SPAM is True
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                        {{$probTrue}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">
                                        Probabilitas SPAM is False
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                        {{$probFalse}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-between flex-wrap gap-5 mb-4">
                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">
                                        Data yang mengandung kata Tokenizer Stemmed is True ({{$jumlah_ditemukan_true}})
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">
                                        @foreach ($kalimat_yang_mengandung_true as $key => $desktrue)
                                            {{$key +1}}.{{$desktrue}}<br>
                                            @if ($loop->iteration > 4)
                                                6. DLL
                                                @break
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">
                                        Data yang mengandung kata Tokenizer Stemmed is False ({{$jumlah_ditemukan_false}})
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                        @foreach ($kalimat_yang_mengandung_false as $key => $deskfalse)
                                            {{$key +1}}.{{$deskfalse}}<br>
                                            @if ($loop->iteration > 4)
                                                6. DLL
                                                @break
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex justify-center mb-4">
                        <p class="text-center">
                            Berdasarkan data tersebut, apabila diketahui suatu data dengan 
                            deskripsi berisi <span class="font-bold">{{ $newInput }}</span>
                            maka dapat dihitung :
                        </p>
                    </div>
                    <div class="d-flex justify-between flex-wrap gap-5 mb-4">
                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">
                                        Likelihood True =
                                        (P|Deskripsi & True) x 
                                        (P|True)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                        {{$likeLiHoodTrue}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">
                                        Likelihood False =
                                        (P|Deskripsi & False) x 
                                        (P|False)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                        {{$likeLiHoodFalse}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex justify-center mb-4">
                        <p class="text-center">
                            Nilai probabilitas dapat dihitung dengan melakukan normalisasi terhadap 
                            <span class="font-bold">Likelihood</span>
                            tersebut sehingga jumlah nilai yang di peroleh 1, maka:
                        </p>
                    </div>
                    <div class="d-flex justify-between flex-wrap gap-5 mb-4">
                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">
                                        Probabilitas Normalisasi True =
                                        Likelihood True / 
                                        (Likelihood True + Likelihood False)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                        {{$normalisasiTrue}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">
                                        Probabilitas Normasilasi False =
                                        Likelihood False / 
                                        (Likelihood True + Likelihood False)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                        {{$normalisasiFalse}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex justify-center mb-4">
                        <p class="text-center">
                            dengan perhitungan tersebut, maka data ini adalah:<br>
                            @if ($normalisasiTrue > $normalisasiFalse)
                                (<span class="font-bold" style="color: red">SPAM</span>)
                            @else
                                (<span class="font-bold" style="color: green">Not SPAM</span>)
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
