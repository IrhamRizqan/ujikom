@include('layouts.header')
<title>Pelanggan</title>
<div class="wrapper">
    @include('layouts.sidebar')
    <div class="main">
        @include('layouts.navbar')
        <main class="content">
            <div class="container-fluid p-0 row">
                <div class="text-end">
                    <br><a href="{{ route('pelanggan.create') }}" class="btn btn-primary col">Tambah Data Pelanggan</a>
                    <button id="btnExport" onclick="exportReportToExcel(this)" class="btn btn-primary">Export Report</button>
                </div>

                <h1 class="h3 mb-3"><strong>Pelanggan</strong></h1>

                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th class="d-none d-xl-table-cell">Nama Pelanggan</th>
                            <th class="d-none d-xl-table-cell">Alamat</th>
                            <th class="d-none d-xl-table-cell">Nomor Telepon</th>
                            <th class="d-none d-xl-table-cell">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pelanggan as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="d-none d-xl-table-cell">{{ $data->namaPelanggan }}</td>
                                <td class="d-none d-xl-table-cell">{{ $data->alamat }}</td>
                                <td>{{ $data->nomorTelepon }}</td>
                                <td>
                                    <a href="/pelanggan/{{ $data->id }}/edit" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('pelanggan.destroy', $data->id) }}" method="POST">
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
        "table"); // you can use document.getElementById('tableId') as well by providing id to the table tag
        TableToExcel.convert(table[
        0], { // html code may contain multiple tables so here we are refering to 1st table tag
            name: `PelangganReport.xlsx`, // fileName you could use any name
            sheet: {
                name: 'Pelanggan' // sheetName
            }
        })
    };
</script>
