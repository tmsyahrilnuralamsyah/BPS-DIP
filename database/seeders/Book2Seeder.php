<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Book2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books2')->insert([
            'noTk' => 'B-012/bps/11512/01/2021',
            'ringkasK' => 'Surat Pengantar Survei',
            'alamatK' => 'BPS Kab/Kota',
            'tanggalK' => '2021-07-13',
            'ketKeluar' => 'Semua Kab/Kota di Aceh'
        ]);
    }
}
