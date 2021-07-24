@extends('layout.admin')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar Surat Keluar</h1>
</div>

<!-- DataTales -->
<div class="card shadow mb-4">
    <div class="card-header py-2">
        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{ route("carisuratkeluar") }}" method="get">
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
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>Nomor Terturut</th>
                        <th>Isi Ringkas</th>
                        <th>Alamat</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Ubah/Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $b)
                        <tr>
                            <td>{{ $b->noTk }}</td>
                            <td>{{ $b->ringkasK }}</td>
                            <td>{{ $b->alamatK }}</td>
                            <td>{{ $b->tanggalK }}</td>
                            <td>{{ $b->ketKeluar }}</td>
                            <td class="text-center">
                                <a href="{{ route("editsuratkeluar", $b->id) }}" class="btn btn-warning my-1">Ubah</a>
                                <a href="{{ route("hapussuratkeluar", $b->id) }}" class="btn btn-danger my-1">Hapus</a>
                            </td>
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
