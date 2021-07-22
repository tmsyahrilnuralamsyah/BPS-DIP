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
                <div id="chart-bar"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('bar')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('chart-bar', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Surat Masuk dan Keluar'
        },
        xAxis: {
            categories: {!! json_encode($categories) !!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px"><b>{point.key}</b></span><table>',
            pointFormat: '<tr><td style="padding:0">{series.name}</td>' +
                '<td style="padding:0">: {point.y}</td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Surat Masuk',
            data: {!! json_encode($dataMasuk) !!}

        }, {
            name: 'Surat Keluar',
            data: [1, 3, 5, 4, 2, 8, 1]
        }]
    });
</script>
@endsection
