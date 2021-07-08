<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Book;

class BookController extends Controller
{
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
            'kode' => 'required|max:8'
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
            'noteDisposisi' => '',
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
            'noteDisposisi' => 'required',
            'catDisposisi' => 'required',
            'catDisposisi2' => 'required',
            'kode' => 'required|max:8'
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
        $book->noteDisposisi = $request->noteDisposisi;
        $book->catDisposisi = $request->catDisposisi;
        $book->catDisposisi2 = $request->catDisposisi2;
        $book->kode = $request->kode;
        $book->save();
        return redirect(route('daftarsuratmasuk'));
    }

    public function hapusSuratMasuk($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect(route('daftarsuratmasuk'));
    }

    public function cariSuratMasuk(Request $request)
    {
        $cari = $request->cari;
		$book = DB::table('books')->where('noTm','like',"%".$cari."%")->paginate();
		return view('admin.daftarSuratMasuk',['books' => $book]);
    }

    public function cetakSuratMasuk($id)
    {
        $book = Book::find($id);
        return view('admin.cetak', ['books' => $book]);
    }

    public function downSuratMasuk()
    {
        $pdf = PDF::loadView('admin.cetak');
        return $pdf->stream();
    }

    public function showUserLogin()
    {
        return view('user.login');
    }

    public function doUserLogin(Request $request)
    {
        $request->validate([
            'noTm' => 'required',
            'kode' => 'required'
        ]);

        if (Auth::attempt(['noTm' => $request->noTm, 'kode' => $request->kode])) {
            return redirect(route('userlembar'));
        } else {
            return redirect(route('userlogin'))->with('message', 'nomor surat atau kode admin salah.')->withInput();
        }
    }

    public function userLembar($id, Request $request)
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
            'noteDisposisi' => 'required',
            'catDisposisi' => 'required',
            'catDisposisi2' => 'required',
            'kode' => 'required|max:8'
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
        $book->noteDisposisi = $request->noteDisposisi;
        $book->catDisposisi = $request->catDisposisi;
        $book->catDisposisi2 = $request->catDisposisi2;
        $book->kode = $request->kode;
        $book->save();
        return redirect(route('userlembar'));
    }
}
