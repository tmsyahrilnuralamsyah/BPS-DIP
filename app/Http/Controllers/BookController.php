<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function daftarSuratMasuk()
    {
    	$book = Book::all();
    	return view('admin.daftarSuratMasuk', ['books' => $book]);
    }

    public function suratMasuk()
    {
        return view('admin.suratMasuk');
    }

    public function tambahSuratMasuk(Request $request)
    {
        $this->validate($request,[
            'noTm' => 'required',
            'pengirim' => 'required',
            'noSm' => 'required',
            'tanggalSm' => 'required',
            'ringkasM' => 'required',
            'tanggalDiterima' => 'required',
            'kode' => 'required'
    	]);

        Book::create([
            'noTm' => $request->noTm,
            'pengirim' => $request->pengirim,
            'noSm' => $request->noSm,
            'tanggalSm' => $request->tanggalSm,
            'ringkasM' => $request->ringkasM,
            'tanggalDiterima' => $request->tanggalDiterima,
            'disposisi' => '',
            'ketDisposisi' => '',
            'catDisposisi' => '',
            'catDisposisi2' => '',
            'kode' => $request->kode
    	]);

    	return redirect()->back();
    }

    public function editSuratMasuk($id)
    {
        $book = Book::find($id);
        return view('admin.editSuratMasuk', ['books' => $book]);
    }

    public function editSuratMasuk2($id, Request $request)
    {
        $this->validate($request,[
            'noTm' => 'required',
            'pengirim' => 'required',
            'noSm' => 'required',
            'tanggalSm' => 'required',
            'ringkasM' => 'required',
            'tanggalDiterima' => 'required',
            'disposisi' => 'required',
            'ketDisposisi' => 'required',
            'catDisposisi' => 'required',
            'kode' => 'required'
        ]);

        $book = Book::find($id);
        $book->noTm = $request->noTm;
        $book->pengirim = $request->pengirim;
        $book->noSm = $request->noSm;
        $book->tanggalSm = $request->tanggalSm;
        $book->ringkasM = $request->ringkasM;
        $book->tanggalDiterima = $request->tanggalDiterima;
        $book->disposisi = $request->disposisi;
        $book->ketDisposisi = $request->ketDisposisi;
        $book->catDisposisi = $request->catDisposisi;
        $book->catDisposisi2 = '';
        $book->kode = $request->kode;
        $book->save();
        return redirect('/admin/daftarSuratMasuk');
    }

    public function hapusSuratMasuk($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('/admin/daftarSuratMasuk');
    }

    public function cariSuratMasuk(Request $request)
    {
        $cari = $request->cari;
		$book = DB::table('books')->where('noTm','like',"%".$cari."%")->paginate();
		return view('admin.daftarSuratMasuk',['books' => $book]);
    }
}
