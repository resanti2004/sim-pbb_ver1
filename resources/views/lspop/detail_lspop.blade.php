@extends('kerangka.master')

@section('title', 'Detail Data LSPOP')

@section('content')

			<div class="bgn">
				<h1 class="title">Selamat Datang</h1>
				<p class="greet">Selamat Datang di Sistem Informasi Pajak Bumi Bangunan</p>
			</div>

			<div class="data">
				<div class="box-container">
				<div class="detail">
					<div class="recentOrders">
						<div class="cardHeader">
							<h3>Detail Data LSPOP</h3>
							<!-- <div aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item"><a href="#">Daerah</a></li>
								<li class="breadcrumb-item"><a href=" {{ route('provinsi.index') }}">Provinsi</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tambah Data Provinsi</li>
							</ol>
							</div> -->
							<div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                    <li class="breadcrumb-item"><a href="#">Dokumen</a></li>
									<li class="breadcrumb-item"><a href=" {{ route('user.index') }}">LSPOP</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Detail Data LSPOP</li>
                                </ol>
                            </div>
						</div>
						
						<div class="table-detail d-flex flex-column align-items-center justify-content-center">
							<div class="no-detail">
								<b class="fs-3">-- {{ $no }} --</b>
							</div>
							<table class="table table-borderless custom-table">
								<tbody>
									<tr class="mb-3">

										<th width="200" class="align-middle table-primary border-bottom border-top-left ">Kode Provinsi</th>
										<td class="border-top-right"> {{ $data_users->id }} </td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Kode Dati2</th>
										<td>  {{ $data_users->username }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Kode Kecamatan</th>
										<td>12</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Kode Kelurahan</th>
										<td>12</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Kode Blok</th>
										<td>12</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">No Urut</th>
										<td> {{ $data_users->email}}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Kode Jenis Op</th>
										<td>  {{ $data_users->status }} </td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">No Bangunan</th>
										<td>  {{ $data_users->jabatan }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Kode Jpb</th>
										<td>  {{ $data_users->role }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">No Formulir Lspop</th>
										<td>  {{ $data_users->fullname }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Tahun Dibangun Bangunan</th>
										<td>  {{ $data_users->nip }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Tahun Renovasi Bangunan</th>
										<td>  {{ $data_users->nomor_ponsel }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Luas Bangunan</th>
										<td>{{ $data_users->created_at }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Jumlah Lantai Bagunan</th>
										<td>{{ $data_users->created_at }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Kondisi Bangunan</th>
										<td>{{ $data_users->created_at }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Jenis Konstruksi Bangunan</th>
										<td>{{ $data_users->created_at }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Jenis Atap Bangunan</th>
										<td>{{ $data_users->created_at }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Kd Dinding</th>
										<td>{{ $data_users->created_at }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Kd Lantai</th>
										<td>{{ $data_users->created_at }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Kd Langit-Langit</th>
										<td>{{ $data_users->created_at }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Nilai Sistem Bangunan</th>
										<td>{{ $data_users->created_at }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Jenis Transaksi Bangunan</th>
										<td>{{ $data_users->created_at }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Tanggal Pendataan Bangunan</th>
										<td>{{ $data_users->created_at }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">NIP Pendata Bangunan</th>
										<td>{{ $data_users->created_at }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Tanggal Pemeriksaan Bangunan</th>
										<td>{{ $data_users->created_at }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">NIP Pemeriksa Bangunan</th>
										<td>{{ $data_users->created_at }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Tanggal Perekaman Bangunan</th>
										<td>{{ $data_users->created_at }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">NIP Perekam Bangunan</th>
										<td>{{ $data_users->created_at }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Tanggal Kunjungan Kembali</th>
										<td>{{ $data_users->created_at }}</td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle table-primary border-bottom">Nilai Individu</th>
										<td>{{ $data_users->created_at }}</td>
									</tr>
									<tr>
										<th  class="align-middle table-primary border-bottom-left">Aktif</th>
										<td class="border-bottom-right">{{ $data_users->updated_at }}</td>
									</tr>
									</tr>
								</tbody>
							</table>
							<div class="tombol d-flex justify-content-center align-items-center gap-2">
								<a href="#"><button type="button">Update</button></a>
								<a href="#"><button type="button" class="bg-danger">Delete</button></a>
							</div>
						</div>

					</div>
				</div>
			</div>
@endsection