@extends('kerangka.master')
@section('title', 'Tarif')
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
						<h3>Tarif</h3>
					</a>
					<!-- <div aria-label="breadcrumb">
							<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Beranda</a></li>
							<li class="breadcrumb-item"><a href="#">Daerah</a></li>
							<li class="breadcrumb-item active" aria-current="page">Provinsi</li>
							</ol>
							</div> -->
					<div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Beranda</a></li>
							<li class="breadcrumb-item"><a href="#">Keuangan</a></li>
							<li class="breadcrumb-item active" aria-current="page">Tarif</li>
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
					<p class="m-0">Menampilkan <b></b> data dari total <b></b> </p>
					<a href="{{ route('provinsi.create') }}"><button type="button">+ Buat Baru</button></a>
				</div>
				<table>
					<thead>
						<tr>
							<td>No</td>
							<td>Kode Provinsi</td>
							<td>Kode Dati2</td>
							<td>Tahun Awal</td>
							<td>Tahun Akhir</td>
							<td>NJOP Minimal</td>
							<td>NJOP Maximal</td>
							<td>Nilai Tarif</td>
							<td>Opsi</td>
						</tr>
					</thead>

					<tbody>
						
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<ul class="list-inline">
									<li class="list-inline-item"><a href="#" class="active"><i class='bx bxs-show'></i></a></li>
									<li class="list-inline-item"><a href="#" class="active"><i class='bx bxs-edit'></i></a></li>
									<li class="list-inline-item"><a href="#" class="active"><i class='bx bxs-trash'></i></a></li>
								</ul>
							</td>
						</tr>
						
					</tbody>
				</table>
				<div class="d-flex justify-content-center">
					
				</div>

			</div>
		</div>
	</div>
	@endsection