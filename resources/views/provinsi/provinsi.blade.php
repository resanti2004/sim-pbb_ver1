@extends('kerangka.master')
@section('title', 'Provinsi')
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
							<a href=""><h3>Provinsi</h3></a> 
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
                                    <li class="breadcrumb-item"><a href="#">Daerah</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Provinsi</li>
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
							<p class="m-0">Menampilkan <b>{{ $data_provinsi->count() }}</b> data dari total <b>{{ $data_provinsi->total() }}</b> </p>
							<a href="{{ route('provinsi.create') }}"><button type="button">+ Buat Baru</button></a>
						</div>
						<table>
							<thead>
								<tr>
									<td>No</td>
									<td>Kode Provinsi</td>
									<td>Nama Provinsi</td>
									<td>Opsi</td>
								</tr>
							</thead>

							<tbody>
								@foreach($data_provinsi as $provinsi)
								<tr>
									<td>{{ $no++ }}</td>
									<td>{{ $provinsi->KD_PROPINSI }}</td>
									<td>{{ $provinsi->NM_PROPINSI }}</td>
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
							{{ $data_provinsi->links() }}
						</div>
						
					</div>
				</div>
			</div>
@endsection