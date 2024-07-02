<?php

namespace App\Tables;

use App\Models\Masuk;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;
use ProtoneMedia\Splade\AbstractTable;

class masukTable extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return Masuk::query()->where('is_dataset', false);
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->column('nomor_surat')
            ->column('tanggal')
            ->column('tujuan')
            ->column('keterangan')
            ->column('jenis_surat')
            ->column('deskripsi')
            ->column('image', exportAs:false)
            ->column('actions', exportAs:false)
            ->defaultSort('tanggal', 'desc')
            ->paginate(15);
    }
}
