@include('layouts.header')
<title>Transaksi</title>
<div class="wrapper">
    @include('layouts.sidebar')
    <div class="main">
        @include('layouts.navbar')
        <main class="content">
            <div class="container-fluid p-0">
                <h1 class="h3 mb-3"><strong>Transaksi</strong></h1>
                <div class="row">
                    <div class="col-10">
                        <div class="card">
                            <div class="card-body">
                                @foreach ($detailPenjualan as $data)
                                    <div class="row">
                                        <div class="col-4">
                                            <p>{{ $data->namaProduk }}</p>
                                        </div>
                                        <div class="col-4">
                                            <p>{{$data->jumlahProduk}}</p>
                                        </div>
                                        <div class="col-4">
                                            <p>{{$data->subtotal}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
        </main>
        @include('layouts.footer')
    </div>
</div>
