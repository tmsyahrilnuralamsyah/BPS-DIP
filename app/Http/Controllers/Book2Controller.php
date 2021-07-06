<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book2;

class Book2Controller extends Controller
{
    public function daftarSuratKeluar()
    {
    	$book = Book2::all();
    	return view('admin.daftarSuratKeluar', ['books' => $book]);
    }

    public function suratKeluar()
    {
        return view('admin.suratKeluar');
    }

    public function tambahSuratKeluar(Request $request)
    {
        $this->validate($request,[
            'noTk' => 'required',
            'ringkasK' => 'required',
            'alamatK' => 'required',
            'tanggalK' => 'required',
            'ketKeluar' => 'required'
    	]);

        Book2::create([
            'noTk' => $request->noTk,
            'ringkasK' => $request->ringkasK,
            'alamatK' => $request->alamatK,
            'tanggalK' => $request->tanggalK,
            'ketKeluar' => $request->ketKeluar
    	]);

    	return redirect()->back();
    }

    public function editSuratKeluar($id)
    {
        $book = Book2::find($id);
        return view('admin.editSuratKeluar', ['books' => $book]);
    }

    public function editSuratKeluar2($id, Request $request)
    {
        $this->validate($request,[
            'noTk' => 'required',
            'ringkasK' => 'required',
            'alamatK' => 'required',
            'tanggalK' => 'required',
            'ketKeluar' => 'required'
        ]);

        $book = Book2::find($id);
        $book->noTk = $request->noTk;
        $book->ringkasK = $request->ringkasK;
        $book->alamatK = $request->alamatK;
        $book->tanggalK = $request->tanggalK;
        $book->ketKeluar = $request->ketKeluar;
        $book->save();
        return redirect('/admin/daftarSuratKeluar');
    }

    public function hapusSuratKeluar($id)
    {
        $book = Book2::find($id);
        $book->delete();
        return redirect('/admin/daftarSuratKeluar');
    }

    public function cariSuratKeluar(Request $request)
    {
        $cari = $request->cari;
		$book = DB::table('books2')->where('noTk','like',"%".$cari."%")->paginate();
		return view('admin.daftarSuratKeluar',['books' => $book]);
    }
}
