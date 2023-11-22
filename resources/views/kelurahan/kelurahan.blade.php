@extends('kerangka.master')
@section('title', 'Kelurahan')
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
					<h3>Kelurahan</h3>
					<!-- <div aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item"><a href="#">Daerah</a></li>
								<li class="breadcrumb-item active" aria-current="page">Kelurahan</li>
							</ol>
							</div> -->
					<div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Beranda</a></li>
							<li class="breadcrumb-item"><a href="#">Daerah</a></li>
							<li class="breadcrumb-item active" aria-current="page">Kelurahan</li>
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
					<p class="m-0">Menampilkan <b>{{ $data_kelurahan->count() }}</b> data dari total <b>{{ $data_kelurahan->total() }}</b> </p>
					<a href="{{ route('kelurahan.create') }}"><button type="button">+ Buat Baru</button></a>
				</div>

				<table>
					<thead>
						<tr>
							<td>No</td>
							<td>Kode Provinsi</td>
							<td>Kode Dati II</td>
							<td>Kode Kecamatan</td>
							<td>Kode Kelurahan</td>
							<td>Kode Sektor</td>
							<td>Nama Kelurahan</td>
							<td>Nomor Kelurahan</td>
							<td>Kode Pos Kelurahan</td>
							<td>Opsi</td>
						</tr>
					</thead>

					<tbody>
						@foreach($data_kelurahan as $kelurahan)
						<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $kelurahan->KD_PROPINSI }}</td>
							<td>{{ $kelurahan->KD_DATI2 }}</td>
							<td>{{ $kelurahan->KD_KECAMATAN }}</td>
							<td>{{ $kelurahan->KD_KELURAHAN }}</td>
							<td>{{ $kelurahan->KD_SEKTOR }}</td>
							<td>{{ $kelurahan->NM_KELURAHAN }}</td>
							<td>{{ $kelurahan->NO_KELURAHAN }}</td>
							<td>{{ $kelurahan->KD_POS_KELURAHAN }}</td>
							<td>
								<ul class="list-inline">
									<li class="list-inline-item"><a href="{{ route('kelurahan.show', [
										'kdPropinsi' => $kelurahan->KD_PROPINSI,
										'kdDati2' => $kelurahan->KD_DATI2,
										'kdKecamatan' => $kelurahan->KD_KECAMATAN,
										'kdKelurahan' => $kelurahan->KD_KELURAHAN,
										'no' => $no-1
									]) }}" class="active"><i class='bx bxs-show'></i></a></li>
									<li class="list-inline-item"><a href="#" class="active"><i class='bx bxs-edit'></i></a></li>
									<li class="list-inline-item"><a href="#" class="active"><i class='bx bxs-trash'></i></a></li>
								</ul>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="d-flex justify-content-center">
					{{ $data_kelurahan->links() }}
				</div>

			</div>
		</div>
	</div>
	@endsection