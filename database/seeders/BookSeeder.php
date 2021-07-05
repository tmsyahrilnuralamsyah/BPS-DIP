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
        	'noTm' => 'Joni',
        	'pengirim' => 'Web Designer',
        	'noSm' => 25,
        	'tanggalSm' => '25-01-2021',
        	'ringkasM' => 'kadaldala',
        	'tanggalDiterima' => '21-01-2021',
        	'disposisi' => 'kdahdkahda',
        	'KetDisposisi' => 'kfahfkafaka',
        	'catDisposisi' => 'jajajajaja',
        	'catDisposisi2' => 'ahahahahaha',
        	'kode' => 'da21a3',
        ]);
    }
}
