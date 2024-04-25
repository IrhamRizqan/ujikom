@include('layouts.header')
<title>Tambah Data Produk</title>
<div class="wrapper">
    @include('layouts.sidebar')
    <div class="main">
        @include('layouts.navbar')
        <main class="content">
            <div class="container-fluid p-0">
                <h1 class="h3 mb-3"><strong>Tambah Produk</strong></h1>
                <div class="row">
                    <div class="col-12">
                        <form action="" method="post">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Nama Produk</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="namaProduk" class="form-control" placeholder="Nama Produk">
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Harga</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="harga" class="form-control" placeholder="Harga">
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Stok</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="stok" class="form-control" placeholder="Stok">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Tambah Produk">
                        </form>
                    </div>
                </div>
            </div>
        </main>
        @include('layouts.footer')
    </div>
</div>
