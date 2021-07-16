@extends('layout.admin')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Surat Masuk (Harian) -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Surat Masuk (Harian)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($book1) }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Surat Masuk (Bulanan) -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Surat Masuk (Bulanan)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($book2) }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Surat Keluar (Harian) -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Surat Keluar (Harian)</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ count($book3) }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Surat Keluar (Bulanan) -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Surat Keluar (Bulanan)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($book4) }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12">
        <div class="card shadow mb-4">
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-bar" style="position: relative; height:70vh; width:80vw">
                    <canvas id="myBarChart" width="1" height="1"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
