@include('layouts.header')
<title>Tambah Data Pesanan</title>
<div class="wrapper">
    @include('layouts.sidebar')
    <div class="main">
        @include('layouts.navbar')
        <main class="content">
            <div class="container-fluid p-0">
                <h1 class="h3 mb-3"><strong>Tambah Pesanan</strong></h1>
                <div class="row">
                    <div class="col-8">
                        <div class="row">
                            @foreach ($produk as $data)
                                <div class="col-4">
                                    <div class="card">
                                        <div class="card-header">

                                        </div>
                                        <div class="card-body">
                                            <form action="/pesanan/proses/{{ $data->id }}/{{ $id }}">
                                                <p class="text-center">{{$data->namaProduk}}</p>
                                                <input class="form-control" type="number" name="jumlahProduk">
                                                <input class="form-control btn btn-primary my-3" type="submit" value="Pesan">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-4">
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
