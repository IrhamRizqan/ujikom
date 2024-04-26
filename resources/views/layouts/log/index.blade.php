@include('layouts.header')
<title>Logs</title>
<div class="wrapper">
    @include('layouts.sidebar')
    <div class="main">
        @include('layouts.navbar')
        <main class="content">
            <div class="container-fluid p-0 row">
                <div class="text-end">
                    <button id="btnExport" onclick="exportReportToExcel(this)" class="btn btn-primary">Export Report</button>
                </div>

                <h1 class="h3 mb-3"><strong>Log</strong></h1>

                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th class="d-none d-xl-table-cell">Keterangan</th>
                            <th class="d-none d-xl-table-cell">Waktu</th>
                            <th class="d-none d-xl-table-cell">Nama Produk</th>
                            <th class="d-none d-xl-table-cell">Harga</th>
                            <th class="d-none d-xl-table-cell">Stok</th>
                        </tr>
                    </thead>
                    @foreach ($produk_log as $data)
                    <tbody>
                        <td class="d-none d-xl-table-cell">{{$loop->iteration}}</td>
                        <td class="d-none d-xl-table-cell">{{$data->keterangan}}</td>
                        <td class="d-none d-xl-table-cell">{{$data->waktu}}</td>
                        <td class="d-none d-xl-table-cell">{{$data->namaProduk}}</td>
                        <td class="d-none d-xl-table-cell">{{$data->harga}}</td>
                        <td class="d-none d-xl-table-cell">{{$data->stok}}</td>
                    </tbody>
                    @endforeach
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
            name: `LogReport.xlsx`, // fileName you could use any name
            sheet: {
                name: 'Log' // sheetName
            }
        })
    };
</script>

