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
                    <a href="">
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
                    <p class="m-0">Menampilkan <b>{{ $dataProvider->count() }}</b> data dari total <b>{{ $dataProvider->total() }}</b></p>
                    <div class="tombol">
                        <a href="{{ route('pelayanan.laporan') }}"><button class="bg-success" type="button">Laporan Pelayanan</button></a>
                        <a href="{{ route('pelayanan.create') }}"><button type="button">Buat Pelayanan</button></a>
                    </div>
                </div>

                <div class="dataTable2" style="overflow-x: scroll;">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <td width="50px">No</td>
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
                                <td width="100px" class="text-center">Opsi</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($dataProvider as $key => $pelayanan)
                            <tr>
                                <td class="text-center">{{ $dataProvider->firstItem() + $key }}</td>
                                <td>{{ $pelayanan->NO_PELAYANAN }}</td>
                                <td>{{ $pelayanan->NAMA_PEMOHON }}</td>
                                <td>{{ $pelayanan->TANGGAL_PELAYANAN }}</td>
                                <td>{{ $pelayanan->KECAMATAN }}</td>
                                <td>{{ $pelayanan->KELURAHAN }}</td>
                                <td>{{ $pelayanan->KD_BLOK }}</td>
                                <td>{{ $pelayanan->NO_URUT }}</td>
                                <td>
                                    <?php
                                    $kd = \App\Models\RefJnsPelayanan::all()->pluck('NM_JENIS_PELAYANAN', 'KD_JNS_PELAYANAN')->toArray();
                                    echo $kd[$pelayanan->KD_JNS_PELAYANAN] ?? '';
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $status = \App\Models\StatusPelayanan::orderBy('urutan')->pluck('nama', 'id')->toArray();
                                    if (!isset($pelayanan->STATUS_PELAYANAN)) {
                                        echo $status[1];
                                    } else {
                                        echo $status[$pelayanan->STATUS_PELAYANAN];
                                    }
                                    ?>
                                </td>
                                <td>{{ $pelayanan->KETERANGAN_BERKAS }}</td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="{{ route('pelayanan.show', $pelayanan->id) }}" class="active"><i class='bx bx-show'></i></a></li>
                                        <li class="list-inline-item"><a href="{{ route('pelayanan.edit', $pelayanan->id) }}" class="active"><i class='bx bxs-edit'></i></a></li>
                                        <!-- Add your delete route here -->
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    {{ $dataProvider->links() }}
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
	

    jQuery(document).ready(function ($) {
    $('#myTable').DataTable({
        processing: true,
        serverSide: false, // Set this to false
        ajax: "{{ route('pelayanan.data') }}",
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'NO_PELAYANAN', name: 'NO_PELAYANAN', searchable: true },
            { data: 'NAMA_PEMOHON', name: 'NAMA_PEMOHON' },
            { data: 'TANGGAL_PELAYANAN', name: 'TANGGAL_PELAYANAN' },
            { data: 'KECAMATAN', name: 'KECAMATAN' },
            { data: 'KELURAHAN', name: 'KELURAHAN' },
            { data: 'KD_BLOK', name: 'KD_BLOK' },
            { data: 'NO_URUT', name: 'NO_URUT' },
            { data: 'KD_JNS_PELAYANAN', name: 'KD_JNS_PELAYANAN' },
            { data: 'STATUS_PELAYANAN', name: 'STATUS_PELAYANAN' },
            { data: 'KETERANGAN_BERKAS', name: 'KETERANGAN_BERKAS' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ],
    });
});

</script>


@endsection
