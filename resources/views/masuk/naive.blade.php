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
                                                    <td>{{ $item }}</td>
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
                                        @foreach ($predictedLabel as $item)
                                            @if ($item == 1)
                                                true (<span class="font-bold" style="color: red">SPAM</span>)
                                            @else
                                                false (<span class="font-bold" style="color: green">Not SPAM</span>)
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
