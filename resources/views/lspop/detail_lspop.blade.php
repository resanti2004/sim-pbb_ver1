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
							<table class="table table-striped table-hover table-bordered">
								<tbody>
									<tr class="mb-3">
										<th  scope="row" class="align-middle" width="300px">Kode Provinsi</th>
										<td > 12 </td>
									</tr>
									<tr class="mb-3">
										<th width="200" class="align-middle">Kode Dati2</th>
										<td > </td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Kode Kecamatan</th>
										<td>12</td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Kode Kelurahan</th>
										<td>12</td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Kode Blok</th>
										<td>12</td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">No Urut</th>
										<td></td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Kode Jenis Op</th>
										<td>  </td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">No Bangunan</th>
										<td> </td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Kode Jpb</th>
										<td>  </td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">No Formulir Lspop</th>
										<td>  </td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Tahun Dibangun Bangunan</th>
										<td>  </td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Tahun Renovasi Bangunan</th>
										<td>  </td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Luas Bangunan</th>
										<td></td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Jumlah Lantai Bagunan</th>
										<td></td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Kondisi Bangunan</th>
										<td></td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Jenis Konstruksi Bangunan</th>
										<td></td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Jenis Atap Bangunan</th>
										<td></td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Kd Dinding</th>
										<td></td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Kd Lantai</th>
										<td></td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Kd Langit-Langit</th>
										<td></td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Nilai Sistem Bangunan</th>
										<td></td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Jenis Transaksi Bangunan</th>
										<td></td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Tanggal Pendataan Bangunan</th>
										<td></td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">NIP Pendata Bangunan</th>
										<td></td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Tanggal Pemeriksaan Bangunan</th>
										<td></td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">NIP Pemeriksa Bangunan</th>
										<td></td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Tanggal Perekaman Bangunan</th>
										<td></td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">NIP Perekam Bangunan</th>
										<td></td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Tanggal Kunjungan Kembali</th>
										<td></td>
									</tr>
									<tr class="mb-3">
										<th scope="row" class="align-middle">Nilai Individu</th>
										<td></td>
									</tr>
									<tr>
										<th  class="align-middle ">Aktif</th>
										<td class="border-bottom-right"></td>
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