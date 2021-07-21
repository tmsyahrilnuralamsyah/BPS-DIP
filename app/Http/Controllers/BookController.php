<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Book2;
use Carbon\Carbon;

class BookController extends Controller
{
    public function dashboard()
    {
        $book1 = Book::whereDate('created_at', Carbon::today())->get();
        $book2 = Book::whereMonth('created_at', date('m'))->get();
        $book3 = Book2::whereDate('created_at', Carbon::today())->get();
        $book4 = Book2::whereMonth('created_at', date('m'))->get();
        return view('admin.dashboard', ['book1' => $book1, 'book2' => $book2, 'book3' => $book3, 'book4' => $book4]);
    }

    public function daftarSuratMasuk()
    {
    	$book = Book::orderBy('id', 'desc')->paginate(10);
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

    	return redirect()->back()->with('alert', 'Data telah tersimpan')->withInput();
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

    public function daftarSuratKeluar()
    {
    	$book = Book2::orderBy('id', 'desc')->paginate(10);
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

    	return redirect()->back()->with('alert', 'Data telah tersimpan')->withInput();
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
        return redirect(route('daftarsuratkeluar'));
    }

    public function hapusSuratKeluar($id)
    {
        $book = Book2::find($id);
        $book->delete();
        return redirect(route('daftarsuratkeluar'));
    }

    public function cariSuratKeluar(Request $request)
    {
        $cari = $request->cari;
		$book = DB::table('books2')->where('noTk','like',"%".$cari."%")->paginate();
		return view('admin.daftarSuratKeluar',['books' => $book]);
    }
}
