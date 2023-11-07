@extends('kerangka.master')
@section('title', 'Kelurahan')
@section('content')

			<div class="bgn">
				<h1 class="title">Selamat Datang, Arviansyah Eka!</h1>
				<p class="greet">Selamat Datang di Sistem Informasi Pajak Bumi Bangunan</p>
			</div>

			<div class="data">
				<div class="box-container">
				<div class="detail">
					<div class="recentOrders">
						<div class="cardHeader">
							<h3>Kelurahan</h3>
							<div aria-label="breadcrumb">
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
						<div class="pencarian">
							<button type="button">Buat Baru</button>
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
								@foreach($data_spop as $spop)
								<tr>
									<td>{{ $no++ }}</td>
									<td>{{ $spop->NO_URUT }}</td>
									<td>{{ $spop->SUBJEK_PAJAK_ID }}</td>
									<td>{{ $spop->JALAN_OP }}</td>
									<td>{{ $spop->LUAS_BUMI }}</td>
									<td>
										<ul class="list-inline">									
											<li class="list-inline-item"><a href="#" class="active"><i class='bx bxs-show' ></i></a></li>
											<li class="list-inline-item"><a href="#" class="active"><i class='bx bxs-edit' ></i></a></li>
											<li class="list-inline-item"><a href="#" class="active"><i class='bx bxs-trash' ></i></a></li>
										</ul>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<div class="d-flex justify-content-center">
							{{ $data_spop->links() }}
						</div>
						
					</div>
				</div>
			</div>
@endsection