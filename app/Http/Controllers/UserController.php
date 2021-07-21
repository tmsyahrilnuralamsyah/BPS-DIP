<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Book;

class UserController extends Controller
{
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

        if (Book::where('noTm', $request->noTm)->where('kode', $request->kode)->first()) {
            return redirect(route("userlembar", Crypt::encryptString($request->noTm)));
        } else {
            return redirect()->back()->with('message', 'nomor surat atau kode admin salah.')->withInput();
        }
    }

    public function userLembar($noTm)
    {
        $noTm = Crypt::decryptString($noTm);
        $book = Book::where('noTm', $noTm)->first();
        return view('user.lembar', ['books' => $book]);
    }

    public function userLembar2($id, Request $request)
    {
        $this->validate($request,[
            'disposisi' => 'required',
            'ketDisposisi' => 'required',
            'noteDisposisi' => 'required',
            'catDisposisi' => 'required',
            'catDisposisi2' => 'required'
        ]);

        $book = Book::find($id);
        $book->disposisi = $request->disposisi;
        $book->ketDisposisi = $request->ketDisposisi;
        $book->noteDisposisi = $request->noteDisposisi;
        $book->catDisposisi = $request->catDisposisi;
        $book->catDisposisi2 = $request->catDisposisi2;
        $book->save();
        return redirect()->back()->with('alert', 'Data telah tersimpan')->withInput();
    }
}
