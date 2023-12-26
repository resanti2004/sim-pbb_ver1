@extends('kerangka.master')

@section('title', 'Pelayanan')

@section('content')


	<div class="bgn">
		<h1 class="title">Selamat Datang, {{$fullname}}!</h1>
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
					<!-- <div aria-label="breadcrumb">
							<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Beranda</a></li>
							<li class="breadcrumb-item active" aria-current="page">Pelayanan</li>
							</ol>
							</div> -->
					<div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Beranda</a></li>
							<li class="breadcrumb-item active" aria-current="page">Pelayanan</li>
						</ol>
					</div>
				</div>
				<!-- <form action="#">
								<div class="form-group">
									<input type="text" placeholder="Search...">
									<i class='bx bx-search icon' ></i>
								</div>
						</form> -->
				<div class="pencarian d-flex justify-content-between align-items-end">
					<!-- <p class="m-0">Menampilkan <b>{{ $data_pelayanan->count() }}</b> data dari total <b>{{ $data_pelayanan->total() }}</b> </p> -->
					<div class="tombol">
						<a href="{{ route('pelayanan.laporan') }}"><button class="bg-success" type="button">Laporan Pelayanan</button></a>
						<a href="{{ route('pelayanan.create') }}"><button type="button">Buat Pelayanan</button></a>
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
					<tbody>
						@foreach($data_pelayanan as $pelayanan)
							<tr>
								<td  class="text-center">{{ $no++ }} </td>
								<td>{{ $pelayanan->NO_PELAYANAN }}</td>
								<td>{{ $pelayanan->NAMA_PEMOHON }}</td>
								<td>{{ $pelayanan->TANGGAL_PELAYANAN }}</td>
								<td>{{ $pelayanan->KECAMATAN }}</td>
								<td>{{ $pelayanan->KELURAHAN}}</td>
								<td>{{ $pelayanan->KD_BLOK }}</td>
								<td>{{ $pelayanan->NO_URUT }}</td>
								<td><?php
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
										<li class="list-inline-item"><a href="{{ route('pelayanan.show') }}" class="active"><i class='bx bx-show'></i></a></li>
										<li class="list-inline-item"><a href="{{ route('pelayanan.edit') }}" class="active"><i class='bx bxs-edit'></i></a></li>
										<li class="list-inline-item"><a href="#" class="active"><i class='bx bx-trash'></i></a></li>
									</ul>
								</td>
							</tr>
						@endforeach
				</table>

				
				<div class="d-flex justify-content-center mt-3">
					{{ $data_pelayanan->links() }}
				</div>
			</div>
		</div>
	</div>
</div> 

@endsection