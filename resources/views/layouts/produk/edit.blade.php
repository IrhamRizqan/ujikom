@include('layouts.header')
<title>Edit Produk</title>
<div class="wrapper">
    @include('layouts.sidebar')
    <div class="main">
        @include('layouts.navbar')
        <main class="content">
            <div class="container-fluid p-0">
                <h1 class="h3 mb-3"><strong>Edit Data Produk</strong></h1>
                <div class="row">
                    <div class="col-12">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$produk->id}}">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Nama Produk</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="namaProduk" class="form-control" value="{{$produk->namaProduk}}">
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Harga</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="harga" class="form-control" value="{{$produk->harga}}">
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Stok</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="stok" class="form-control" value="{{$produk->stok}}">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Edit Data Produk">
                        </form>
                    </div>
                </div>
            </div>
        </main>
        @include('layouts.footer')
    </div>
</div>
