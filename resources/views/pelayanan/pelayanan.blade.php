@extends('kerangka.master')

@section('title', 'Pelayanan')

@section('content')
    <div class="bgn">
        <h1 class="title">Selamat Datang, {{ $fullname }}!</h1>
        <p class="greet">Selamat Datang di Sistem Informasi Pajak Bumi Bangunan</p>
    </div>

    <div class="data">
        <div class="box-container">
            <div class="detail">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <a href="#">
                            <h3>Pelayanan</h3>
                        </a>
                        <div class="p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pelayanan</li>
                            </ol>
                        </div>
                    </div>

                    <div class="pencarian d-flex justify-content-between align-items-end">
                        <div class="tombol">
                            <a href="{{ route('pelayanan.laporan') }}">
                                <button class="bg-success" type="button">Laporan Pelayanan</button>
                            </a>
                            <a href="{{ route('pelayanan.create') }}">
                                <button type="button">Buat Pelayanan</button>
                            </a>
                        </div>
                    </div>

                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <td width="30px">No</td>
                                <td>No Pelayanan</td>
                                <td>Nama Pemohon</td>
                                <td>Tanggal Pelayanan</td>
                                <td>Kecamatan</td>
                                <td>Kelurahan</td>
                                <td>Blok</td>
                                <td>No Urut</td>
                                <td>Kode Jenis Pelayanan</td>
                                <td>Status Pelayanan</td>
                                <td>Keterangan Berkas</td>
                                <td width="60px" class="text-center">Opsi</td>
                            </tr>
                        </thead>
                    </table>
				
				<div class="d-flex justify-content-center mt-3">
					
				</div>
			</div>
		</div>
	</div>
</div> 
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>

<script>
    $.noConflict();
    jQuery(document).ready(function ($) {
        $('#example').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('pelayanan.data') }}", // Replace with your actual route for server-side processing
            "columns": [
                { "data": "DT_RowIndex" },  // Replace "id" with the actual column name
                { "data": "NO_PELAYANAN" },
                { "data": "NAMA_PEMOHON" },
                { "data": "TANGGAL_PELAYANAN" },
                { "data": "KECAMATAN" },
                { "data": "KELURAHAN" },
                { "data": "KD_BLOK" },
                { "data": "NO_URUT" },
                { "data": "KD_JNS_PELAYANAN" },
                { "data": "STATUS_PELAYANAN" },
                { "data": "KETERANGAN_BERKAS" },
                {
                    "data": null,
                    "render": function (data, type, row) {
                        // Customize the rendering of the "Opsi" column
                        return `
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="{{ route('pelayanan.show') }}/${row.id}" class="active"><i class='bx bx-show'></i></a></li>
                                <li class="list-inline-item"><a href="{{ route('pelayanan.edit') }}/${row.id}" class="active"><i class='bx bxs-edit'></i></a></li>
                                <li class="list-inline-item"><a href="#" class="active"><i class='bx bx-trash'></i></a></li>
                            </ul>
                        `;
                    }
                }
            ]
            // Add other DataTables configurations as needed
        });
    });
</script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
@endsection