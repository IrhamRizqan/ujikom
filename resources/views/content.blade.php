@include('layouts.header')
<title>Dashboard</title>
<div class="wrapper">
    @include('layouts.sidebar')
    <div class="main">
        @include('layouts.navbar')
        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3"><strong>Dashboard</strong></h1>

                <div class="row">
                    <div class="d-flex">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="{{route('pesanan.index')}}">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Total Pesanan</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="truck"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">{{$penjualan->count()}}</h1>
                                                <div class="mb-0">
                                                    {{-- <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                                                    <span class="text-muted">Since last week</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{route('produk.index')}}">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Total Produk</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="users"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">{{$produk->count()}}</h1>
                                                <div class="mb-0">
                                                    {{-- <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
                                                    <span class="text-muted">Since last week</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{route('pelanggan.index')}}">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Total Pelanggan</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="dollar-sign"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">{{$pelanggan->count()}}</h1>
                                                <div class="mb-0">
                                                    {{-- <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
                                                    <span class="text-muted">Since last week</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{route('pesanan.index')}}">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Total Pendapatan</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="shopping-cart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3"> {{$totalPendapatan}}   </h1>
                                                <div class="mb-0">
                                                    {{-- <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
                                                    <span class="text-muted">Since last week</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- HISTORY ORDERAN --}}
                {{-- <div class="row">
                    <div class="col-12 col-lg-8 col-xxl-9 d-flex mx-auto">
                        <div class="card flex-fill">
                            <div class="card-header mx-auto">

                                <h5 class="card-title">History Orderan</h5>
                            </div>
                            <table class="table table-hover my-0">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th class="d-none d-xl-table-cell">Nama Pelanggan</th>
                                        <th class="d-none d-xl-table-cell">Tanggal Penjualan</th>
                                        <th class="d-none d-xl-table-cell">Jumlah Produk</th>
                                        <th class="d-none d-md-table-cell">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detailPenjualan as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td class="d-none d-xl-table-cell"></td>
                                        <td class="d-none d-xl-table-cell">31/06/2023</td>
                                        <td><span class="badge bg-success">Done</span></td>
                                        <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> --}}
                {{-- HISTORY ORDERAN --}}
            </div>
        </main>
        @include('layouts.footer')
    </div>
</div>
