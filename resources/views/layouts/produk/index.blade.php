@include('layouts.header')
<title>Produk</title>
<div class="wrapper">
    @include('layouts.sidebar')
    <div class="main">
        @include('layouts.navbar')
        <main class="content">
            <div class="container-fluid p-0 row">
                <div class="text-end">
                    <br><a href="{{ route('produk.create') }}" class="btn btn-primary col">Tambah Data Produk</a>
                    @if (Auth()->user()->roles == "Administrator")
                    <button id="btnExport" onclick="exportReportToExcel(this)" class="btn btn-primary">Export Report</button>
                    @endif
                </div>

                <h1 class="h3 mb-3"><strong>Produk</strong></h1>

                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th class="d-none d-xl-table-cell">Nama Produk</th>
                            <th class="d-none d-xl-table-cell">Harga</th>
                            <th class="d-none d-xl-table-cell">Stok</th>
                            <th class="d-none d-xl-table-cell">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produk as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="d-none d-xl-table-cell">{{ $data->namaProduk }}</td>
                                <td class="d-none d-xl-table-cell">{{ $data->harga }}</td>
                                <td><span class="badge bg-success">{{ $data->stok }}</span></td>
                                <td>
                                    <a href="/produk/{{ $data->id }}/edit" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('produk.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
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

<script>
    function exportReportToExcel() {
        let table = document.getElementsByTagName(
        "table");
        TableToExcel.convert(table[
        0], { // html code may contain multiple tables so here we are refering to 1st table tag
            name: `PelangganReport.xlsx`,
            sheet: {
                name: 'Pelanggan'
            }
        })
    };
</script>
