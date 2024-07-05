<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hasil Naive Bayes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-20 py-6 bg-white border-b border-gray-200">
                    <div class="flex justify-center">
                        <p class="fs-4 font-bold">
                            All Data Surat Masuk
                        </p>
                    </div>
                    <x-splade-table class="mb-4" :for="$masuks"  pagination-scroll="preserve"></x-splade-table>
                    <div class="d-flex justify-between flex-wrap gap-5 mb-4">
                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Kategori Tujuan</th>
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Yes</th>
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">No</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Gereja A</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_tat }}/{{ $count_true }} ({{ $p_tat }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_taf }}/{{ $count_false }} ({{ $p_taf }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Gereja B</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_tbt }}/{{ $count_true }} ({{ $p_tbt }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_tbf }}/{{ $count_false }} ({{ $p_tbf }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Gereja C</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_tct }}/{{ $count_true }} ({{ $p_tct }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_tcf }}/{{ $count_false }} ({{ $p_tcf }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Gereja D</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_tdt }}/{{ $count_true }} ({{ $p_tdt }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_tdf }}/{{ $count_false }} ({{ $p_tdf }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Gereja E</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_tet }}/{{ $count_true }} ({{ $p_tet }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_tef }}/{{ $count_false }} ({{ $p_tef }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Gereja F</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_tft }}/{{ $count_true }} ({{ $p_tft }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_tff }}/{{ $count_false }} ({{ $p_tff }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Total</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $total_tt }}/{{ $count_true }} ({{ $p_total_tt }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $total_tf }}/{{ $count_false }} ({{ $p_total_tf }})</td>
                                </tr>
                            </tbody>
                        </table>
    
                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Kategori Keterangan</th>
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Yes</th>
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">No</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Regular</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_krt }}/{{ $count_true }} ({{ $p_krt }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_krf }}/{{ $count_false }} ({{ $p_krf }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Urgent</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_kut }}/{{ $count_true }} ({{ $p_kut }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_kuf }}/{{ $count_false }} ({{ $p_kuf }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Total</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $total_kt }}/{{ $count_true }} ({{ $p_total_kt }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $total_kf }}/{{ $count_false }} ({{ $p_total_kf }})</td>
                                </tr>
                            </tbody>
                        </table>

                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Kategori Jenis Surat</th>
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Yes</th>
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">No</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Balasan Surat</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_jbt }}/{{ $count_true }} ({{ $p_jbt }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_jbf }}/{{ $count_false }} ({{ $p_jbf }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Proposal Pengajuan</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_jpt }}/{{ $count_true }} ({{ $p_jpt }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_jpf }}/{{ $count_false }} ({{ $p_jpf }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Data Rekapan</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_jdt }}/{{ $count_true }} ({{ $p_jdt }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_jdf }}/{{ $count_false }} ({{ $p_jdf }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Total</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $total_jt }}/{{ $count_true }} ({{ $p_total_jt }})</td>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $total_jf }}/{{ $count_false }} ({{ $p_total_jf }})</td>
                                </tr>
                            </tbody>
                        </table>

                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">Is Spam</th>
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">P</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">True</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_true }}/{{ $count }} ({{ $p_true }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: left; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">False</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $count_false }}/{{ $count }} ({{ $p_false }})</td>
                                </tr>
                                <tr class="header-column">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; left: 0; z-index: 1;">Total</th>
                                    <td style="border: 1px solid black; padding: 8px; text-align: left;">{{ $total }}/{{ $count }} ({{ $p_total }})</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex justify-center mb-4">
                        <p class="text-center">
                            Berdasarkan data tersebut, apabila diketahui suatu data dengan 
                            tujuan ke <span class="font-bold">{{ $choice->tujuan }}</span>
                            dan keterangan yaitu <span class="font-bold">{{ $choice->keterangan }}</span>
                            lalu dengan jenis surat <span class="font-bold">{{ $choice->jenis_surat }}</span>,
                            maka dapat dihitung :
                        </p>
                    </div>
                    <div class="mb-4">
                        <table style="border-collapse: collapse; width: 100%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">
                                        Likelihood Spam is True =
                                        (P|Tujuan={{ $choice->tujuan }}&Yes) x 
                                        (P|Keterangan={{ $choice->keterangan }}&Yes) x
                                        (P|Jenis_Surat={{ $choice->jenis_surat }}&Yes) x
                                        (P|True)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">

                                    @if ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tat }} x 
                                            {{ $p_krt }} x 
                                            {{ $p_jbt }} x 
                                            {{ $p_true }} =
                                            {{ $arbt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tat }} x 
                                            {{ $p_krt }} x 
                                            {{ $p_jpt }} x 
                                            {{ $p_true }} =
                                            {{ $arpt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tat }} x 
                                            {{ $p_krt }} x 
                                            {{ $p_jdt }} x 
                                            {{ $p_true }} =
                                            {{ $ardt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tat }} x 
                                            {{ $p_kut }} x 
                                            {{ $p_jbt }} x 
                                            {{ $p_true }} =
                                            {{ $aubt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tat }} x 
                                            {{ $p_kut }} x 
                                            {{ $p_jpt }} x 
                                            {{ $p_true }} =
                                            {{ $aupt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tat }} x 
                                            {{ $p_kut }} x 
                                            {{ $p_jdt }} x 
                                            {{ $p_true }} =
                                            {{ $audt }}
                                        </td>

                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tbt }} x 
                                            {{ $p_krt }} x 
                                            {{ $p_jbt }} x 
                                            {{ $p_true }} =
                                            {{ $brbt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tbt }} x 
                                            {{ $p_krt }} x 
                                            {{ $p_jpt }} x 
                                            {{ $p_true }} =
                                            {{ $brpt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tbt }} x 
                                            {{ $p_krt }} x 
                                            {{ $p_jdt }} x 
                                            {{ $p_true }} =
                                            {{ $brdt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tbt }} x 
                                            {{ $p_kut }} x 
                                            {{ $p_jbt }} x 
                                            {{ $p_true }} =
                                            {{ $bubt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tbt }} x 
                                            {{ $p_kut }} x 
                                            {{ $p_jpt }} x 
                                            {{ $p_true }} =
                                            {{ $bupt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tbt }} x 
                                            {{ $p_kut }} x 
                                            {{ $p_jdt }} x 
                                            {{ $p_true }} =
                                            {{ $budt }}
                                        </td>

                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tct }} x 
                                            {{ $p_krt }} x 
                                            {{ $p_jbt }} x 
                                            {{ $p_true }} =
                                            {{ $crbt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tct }} x 
                                            {{ $p_krt }} x 
                                            {{ $p_jpt }} x 
                                            {{ $p_true }} =
                                            {{ $crpt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tct }} x 
                                            {{ $p_krt }} x 
                                            {{ $p_jdt }} x 
                                            {{ $p_true }} =
                                            {{ $crdt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tct }} x 
                                            {{ $p_kut }} x 
                                            {{ $p_jbt }} x 
                                            {{ $p_true }} =
                                            {{ $cubt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tct }} x 
                                            {{ $p_kut }} x 
                                            {{ $p_jpt }} x 
                                            {{ $p_true }} =
                                            {{ $cupt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tct }} x 
                                            {{ $p_kut }} x 
                                            {{ $p_jdt }} x 
                                            {{ $p_true }} =
                                            {{ $cudt }}
                                        </td>

                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tdt }} x 
                                            {{ $p_krt }} x 
                                            {{ $p_jbt }} x 
                                            {{ $p_true }} =
                                            {{ $drbt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tdt }} x 
                                            {{ $p_krt }} x 
                                            {{ $p_jpt }} x 
                                            {{ $p_true }} =
                                            {{ $drpt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tdt }} x 
                                            {{ $p_krt }} x 
                                            {{ $p_jdt }} x 
                                            {{ $p_true }} =
                                            {{ $drdt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tdt }} x 
                                            {{ $p_kut }} x 
                                            {{ $p_jbt }} x 
                                            {{ $p_true }} =
                                            {{ $dubt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tdt }} x 
                                            {{ $p_kut }} x 
                                            {{ $p_jpt }} x 
                                            {{ $p_true }} =
                                            {{ $dupt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tdt }} x 
                                            {{ $p_kut }} x 
                                            {{ $p_jdt }} x 
                                            {{ $p_true }} =
                                            {{ $dudt }}
                                        </td>

                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tet }} x 
                                            {{ $p_krt }} x 
                                            {{ $p_jbt }} x 
                                            {{ $p_true }} =
                                            {{ $erbt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tet }} x 
                                            {{ $p_krt }} x 
                                            {{ $p_jpt }} x 
                                            {{ $p_true }} =
                                            {{ $erpt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tet }} x 
                                            {{ $p_krt }} x 
                                            {{ $p_jdt }} x 
                                            {{ $p_true }} =
                                            {{ $erdt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tet }} x 
                                            {{ $p_kut }} x 
                                            {{ $p_jbt }} x 
                                            {{ $p_true }} =
                                            {{ $eubt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tet }} x 
                                            {{ $p_kut }} x 
                                            {{ $p_jpt }} x 
                                            {{ $p_true }} =
                                            {{ $eupt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tet }} x 
                                            {{ $p_kut }} x 
                                            {{ $p_jdt }} x 
                                            {{ $p_true }} =
                                            {{ $eudt }}
                                        </td>

                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tft }} x 
                                            {{ $p_krt }} x 
                                            {{ $p_jbt }} x 
                                            {{ $p_true }} =
                                            {{ $frbt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tft }} x 
                                            {{ $p_krt }} x 
                                            {{ $p_jpt }} x 
                                            {{ $p_true }} =
                                            {{ $frpt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tft }} x 
                                            {{ $p_krt }} x 
                                            {{ $p_jdt }} x 
                                            {{ $p_true }} =
                                            {{ $frdt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tft }} x 
                                            {{ $p_kut }} x 
                                            {{ $p_jbt }} x 
                                            {{ $p_true }} =
                                            {{ $fubt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tft }} x 
                                            {{ $p_kut }} x 
                                            {{ $p_jpt }} x 
                                            {{ $p_true }} =
                                            {{ $fupt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tft }} x 
                                            {{ $p_kut }} x 
                                            {{ $p_jdt }} x 
                                            {{ $p_true }} =
                                            {{ $fudt }}
                                        </td>

                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mb-4">
                        <table style="border-collapse: collapse; width: 100%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">
                                        Likelihood Spam is False =
                                        (P|Tujuan={{ $choice->tujuan }}&No) x 
                                        (P|Keterangan={{ $choice->keterangan }}&No) x
                                        (P|Jenis_Surat={{ $choice->jenis_surat }}&No) x
                                        (P|False)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">

                                    @if ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_taf }} x 
                                            {{ $p_krf }} x 
                                            {{ $p_jbf }} x 
                                            {{ $p_false }} =
                                            {{ $arbf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_taf }} x 
                                            {{ $p_krf }} x 
                                            {{ $p_jpf }} x 
                                            {{ $p_false }} =
                                            {{ $arpf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_taf }} x 
                                            {{ $p_krf }} x 
                                            {{ $p_jdf }} x 
                                            {{ $p_false }} =
                                            {{ $ardf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_taf }} x 
                                            {{ $p_kuf }} x 
                                            {{ $p_jbf }} x 
                                            {{ $p_false }} =
                                            {{ $aubf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_taf }} x 
                                            {{ $p_kuf }} x 
                                            {{ $p_jpf }} x 
                                            {{ $p_false }} =
                                            {{ $aupf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_taf }} x 
                                            {{ $p_kuf }} x 
                                            {{ $p_jdf }} x 
                                            {{ $p_false }} =
                                            {{ $audf }}
                                        </td>

                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tbf }} x 
                                            {{ $p_krf }} x 
                                            {{ $p_jbf }} x 
                                            {{ $p_false }} =
                                            {{ $brbf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tbf }} x 
                                            {{ $p_krf }} x 
                                            {{ $p_jpf }} x 
                                            {{ $p_false }} =
                                            {{ $brpf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tbf }} x 
                                            {{ $p_krf }} x 
                                            {{ $p_jdf }} x 
                                            {{ $p_false }} =
                                            {{ $brdf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tbf }} x 
                                            {{ $p_kuf }} x 
                                            {{ $p_jbf }} x 
                                            {{ $p_false }} =
                                            {{ $bubf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tbf }} x 
                                            {{ $p_kuf }} x 
                                            {{ $p_jpf }} x 
                                            {{ $p_false }} =
                                            {{ $bupf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tbf }} x 
                                            {{ $p_kuf }} x 
                                            {{ $p_jdf }} x 
                                            {{ $p_false }} =
                                            {{ $budf }}
                                        </td>

                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tcf }} x 
                                            {{ $p_krf }} x 
                                            {{ $p_jbf }} x 
                                            {{ $p_false }} =
                                            {{ $crbf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tcf }} x 
                                            {{ $p_krf }} x 
                                            {{ $p_jpf }} x 
                                            {{ $p_false }} =
                                            {{ $crpf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tcf }} x 
                                            {{ $p_krf }} x 
                                            {{ $p_jdf }} x 
                                            {{ $p_false }} =
                                            {{ $crdf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tcf }} x 
                                            {{ $p_kuf }} x 
                                            {{ $p_jbf }} x 
                                            {{ $p_false }} =
                                            {{ $cubf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tcf }} x 
                                            {{ $p_kuf }} x 
                                            {{ $p_jpf }} x 
                                            {{ $p_false }} =
                                            {{ $cupf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tcf }} x 
                                            {{ $p_kuf }} x 
                                            {{ $p_jdf }} x 
                                            {{ $p_false }} =
                                            {{ $cudf }}
                                        </td>

                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tdf }} x 
                                            {{ $p_krf }} x 
                                            {{ $p_jbf }} x 
                                            {{ $p_false }} =
                                            {{ $drbf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tdf }} x 
                                            {{ $p_krf }} x 
                                            {{ $p_jpf }} x 
                                            {{ $p_false }} =
                                            {{ $drpf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tdf }} x 
                                            {{ $p_krf }} x 
                                            {{ $p_jdf }} x 
                                            {{ $p_false }} =
                                            {{ $drdf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tdf }} x 
                                            {{ $p_kuf }} x 
                                            {{ $p_jbf }} x 
                                            {{ $p_false }} =
                                            {{ $dubf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tdf }} x 
                                            {{ $p_kuf }} x 
                                            {{ $p_jpf }} x 
                                            {{ $p_false }} =
                                            {{ $dupf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tdf }} x 
                                            {{ $p_kuf }} x 
                                            {{ $p_jdf }} x 
                                            {{ $p_false }} =
                                            {{ $dudf }}
                                        </td>

                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tef }} x 
                                            {{ $p_krf }} x 
                                            {{ $p_jbf }} x 
                                            {{ $p_false }} =
                                            {{ $erbf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tef }} x 
                                            {{ $p_krf }} x 
                                            {{ $p_jpf }} x 
                                            {{ $p_false }} =
                                            {{ $erpf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tef }} x 
                                            {{ $p_krf }} x 
                                            {{ $p_jdf }} x 
                                            {{ $p_false }} =
                                            {{ $erdf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tef }} x 
                                            {{ $p_kuf }} x 
                                            {{ $p_jbf }} x 
                                            {{ $p_false }} =
                                            {{ $eubf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tef }} x 
                                            {{ $p_kuf }} x 
                                            {{ $p_jpf }} x 
                                            {{ $p_false }} =
                                            {{ $eupf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tef }} x 
                                            {{ $p_kuf }} x 
                                            {{ $p_jdf }} x 
                                            {{ $p_false }} =
                                            {{ $eudf }}
                                        </td>

                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tff }} x 
                                            {{ $p_krf }} x 
                                            {{ $p_jbf }} x 
                                            {{ $p_false }} =
                                            {{ $frbf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tff }} x 
                                            {{ $p_krf }} x 
                                            {{ $p_jpf }} x 
                                            {{ $p_false }} =
                                            {{ $frpf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tff }} x 
                                            {{ $p_krf }} x 
                                            {{ $p_jdf }} x 
                                            {{ $p_false }} =
                                            {{ $frdf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tff }} x 
                                            {{ $p_kuf }} x 
                                            {{ $p_jbf }} x 
                                            {{ $p_false }} =
                                            {{ $fubf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tff }} x 
                                            {{ $p_kuf }} x 
                                            {{ $p_jpf }} x 
                                            {{ $p_false }} =
                                            {{ $fupf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_tff }} x 
                                            {{ $p_kuf }} x 
                                            {{ $p_jdf }} x 
                                            {{ $p_false }} =
                                            {{ $fudf }}
                                        </td>

                                    @endif
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
                                        Probabilitas Yes =
                                        Likelihood Yes / 
                                        (Likelihood Yes + Likelihood No)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">

                                    @if ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_arbt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_arpt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_ardt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_aubt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_aupt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_audt }}
                                        </td>

                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_brbt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_brpt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_brdt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_bubt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_bupt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_budt }}
                                        </td>

                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_crbt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_crpt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_crdt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_cubt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_cupt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_cudt }}
                                        </td>

                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_drbt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_drpt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_drdt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_dubt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_dupt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_dudt }}
                                        </td>

                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_erbt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_erpt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_erdt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_eubt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_eupt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_eudt }}
                                        </td>

                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_frbt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_frpt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_frdt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_fubt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_fupt }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_fudt }}
                                        </td>

                                    @endif
                                </tr>
                            </tbody>
                        </table>
                        <table style="border-collapse: collapse; width: 45%;">
                            <thead>
                                <tr class="header-row">
                                    <th style="border: 1px solid black; padding: 8px; text-align: center; background-color: #f2f2f2; position: sticky; right: 0; z-index: 2;">
                                        Probabilitas No =
                                        Likelihood No / 
                                        (Likelihood Yes + Likelihood No)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="header-column">
                                    
                                    @if ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_arbf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_arpf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_ardf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_aubf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_aupf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja A' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_audf }}
                                        </td>

                                    @elseif ($choice->kafegori_m == 'netral' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="bordef: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_brbf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_brpf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_brdf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_bubf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_bupf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja B' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_budf }}
                                        </td>

                                    @elseif ($choice->kafegori_m == 'negatif' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="bordef: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_crbf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_crpf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_crdf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_cubf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_cupf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja C' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_cudf }}
                                        </td>

                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_drbf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_drpf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_drdf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_dubf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_dupf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja D' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_dudf }}
                                        </td>

                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_erbf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_erpf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_erdf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_eubf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_eupf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja E' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_eudf }}
                                        </td>

                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_frbf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_frpf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Regular' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_frdf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Balasan Surat')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_fubf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Proposal Pengajuan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_fupf }}
                                        </td>
                                    @elseif ($choice->tujuan == 'Gereja F' && $choice->keterangan == 'Urgent' && $choice->jenis_surat == 'Data Rekapan')
                                        <td style="border: 1px solid black; padding: 8px; text-align: center;">
                                            {{ $p_fudf }}
                                        </td>

                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-20 py-6 bg-white border-b border-gray-200">
                    <div class="flex justify-center">
                        <p class="fs-4 font-bold">
                            Match With ID
                        </p>
                    </div>
                    <x-splade-table class="mb-4" :for="$matchs"  pagination-scroll="preserve"></x-splade-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
