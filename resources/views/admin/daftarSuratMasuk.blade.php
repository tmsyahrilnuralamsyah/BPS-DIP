@extends('layout.admin')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar Surat Masuk</h1>
</div>

<!-- DataTales -->
<div class="card shadow mb-4">
    <div class="card-header py-2">
        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{ route("carisuratmasuk") }}" method="get">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" name="cari" class="form-control bg-white border-0 small" placeholder="Search..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="card-body">
        <div class="table-responsive" style="overflow-x: scroll;">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th class="px-5">Ubah/Hapus</th>
                        <th class="px-5">Nomor Terturut</th>
                        <th class="px-5">Pengirim</th>
                        <th class="px-5">
                            <div class="px-5">
                                Nomor
                            </div>
                        </th>
                        <th class="px-5">Tanggal Surat</th>
                        <th class="px-5">Isi Ringkas</th>
                        <th class="px-5">Tanggal Diterima</th>
                        <th class="px-5">Disposisi</th>
                        <th class="px-5">Keterangan Disposisi</th>
                        <th class="px-5">Catatan Disposisi</th>
                        <th class="px-5">Disposisi KABAG/KOOR</th>
                        <th class="px-5">Disposisi KASUBAG/KOOR</th>
                        <th class="px-4">Kode Admin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $b)
                        <tr>
                            <td class="text-center">
                                <a href="{{ route("editsuratmasuk", $b->id) }}" class="btn btn-warning my-1">Ubah</a>
                                <a href="{{ route("hapussuratmasuk", $b->id) }}" class="btn btn-danger my-1">Hapus</a>
                            </td>
                            <td><a href="/admin/cetak/{{ $b->id }}" target="_blank" style="color: blue">{{ $b->noTm }}</a></td>
                            <td>{{ $b->pengirim }}</td>
                            <td>{{ $b->noSm }}</td>
                            <td>{{ $b->tanggalSm }}</td>
                            <td>{{ $b->ringkasM }}</td>
                            <td>{{ $b->tanggalDiterima }}</td>
                            <td>
                                @if (strpos($b->disposisi, "KABAG UMUM"))
                                    <li>KABAG UMUM</li>
                                @endif
                                @if (strpos($b->disposisi, "Koordinator Fungsi STAT. SOSIAL"))
                                    <li>Koordinator Fungsi STAT. SOSIAL</li>
                                @endif
                                @if (strpos($b->disposisi, "Koordinator Fungsi STAT. PRODUKSI"))
                                    <li>Koordinator Fungsi STAT. PRODUKSI</li>
                                @endif
                                @if (strpos($b->disposisi, "Koordinator Fungsi DTAT. DISTRIBUSI"))
                                    <li>Koordinator Fungsi DTAT. DISTRIBUSI</li>
                                @endif
                                @if (strpos($b->disposisi, "Koordinator Fungsi CAWILIS"))
                                    <li>Koordinator Fungsi CAWILIS</li>
                                @endif
                                @if (strpos($b->disposisi, "Koordinator Fungsi IPDS"))
                                    <li>Koordinator Fungsi IPDS</li>
                                @endif
                                @if (strpos($b->disposisi, "KORPRI"))
                                    <li>KORPRI</li>
                                @endif
                            </td>
                            <td>
                                @if (strpos($b->ketDisposisi, "hp"))
                                    <li>Harap diproses</li>
                                @endif
                                @if (strpos($b->ketDisposisi, "pms"))
                                    <li>Penuhi maksud surat</li>
                                @endif
                                @if (strpos($b->ketDisposisi, "hj"))
                                    <li>Harap dijawab</li>
                                @endif
                                @if (strpos($b->ketDisposisi, "pk"))
                                    <li>Periksa kebenarannya</li>
                                @endif
                                @if (strpos($b->ketDisposisi, "tpy"))
                                    <li>Teruskan pada ybs.</li>
                                @endif
                                @if (strpos($b->ketDisposisi, "um"))
                                    <li>Untuk dimaklumi</li>
                                @endif
                            </td>
                            <td>{{ $b->noteDisposisi }}</td>
                            <td>{{ $b->catDisposisi }}</td>
                            <td>{{ $b->catDisposisi2 }}</td>
                            <td>{{ $b->kode }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <p class="d-flex ml-2">Jumlah Data : {{ $books->total() }}</p>
            </div>
            <div class="col">
                <div class="d-flex flex-row-reverse">
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
