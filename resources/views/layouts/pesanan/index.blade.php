@include('layouts.header')
<title>Pesanan</title>
<div class="wrapper">
    @include('layouts.sidebar')
    <div class="main">
        @include('layouts.navbar')
        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3"><strong>Pesanan</strong></h1>

                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th class="d-none d-xl-table-cell">Nama Pelanggan</th>
                            <th class="d-none d-xl-table-cell">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pelanggan as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td class="d-none d-xl-table-cell">{{$data->namaPelanggan}}</td>
                            <td>
                                <a href=" {{route('pesanan.create', $data->id)}}  " class="btn btn-warning">Tambah Pesanan</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
        @include('layouts.footer')
    </div>
</div>
