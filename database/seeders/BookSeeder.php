<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke table books
        DB::table('books')->insert([
        	'noTm' => '115120797',
        	'pengirim' => 'BPS Banda Aceh',
        	'noSm' => 'B-030/bps/11723/05/2019',
        	'tanggalSm' => '2021-01-02',
        	'ringkasM' => 'Dokumen Survei',
        	'tanggalDiterima' => '2021-01-04',
        	'disposisi' => 'KABAG UMUM',
        	'KetDisposisi' => 'kfahfkafaka',
        	'catDisposisi' => 'jajajajaja',
        	'catDisposisi2' => 'ahahahahaha',
        	'kode' => 'da21a3'
        ]);
    }
}
