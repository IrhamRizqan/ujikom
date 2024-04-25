@include('layouts.header')
<title>Tambah Pelanggan</title>
<div class="wrapper">
    @include('layouts.sidebar')
    <div class="main">
        @include('layouts.navbar')
        <main class="content">
            <div class="container-fluid p-0">
                <h1 class="h3 mb-3"><strong>Tambah Pelanggan</strong></h1>
                <div class="row">
                    <div class="col-12">
                        <form action="" method="post">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Nama Pelanggan</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="namaPelanggan" class="form-control" placeholder="Nama Pelanggan">
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Alamat</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Nomor Telepon</h5>
                                </div>
                                <div class="card-body">
                                    <input type="number" name="nomorTelepon" class="form-control" placeholder="Nomor Telepon">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Tambah Pelanggan">
                        </form>
                    </div>
                </div>
            </div>
        </main>
        @include('layouts.footer')
    </div>
</div>
