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
							<a href=""><h3>Pelayanan</h3></a> 
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
						<div class="pencarian">
							<a href="{{ route('pelayananLap.index')}}"><button class="bg-success" type="button">Laporan Pelayanan</button></a>
							<a href="{{ route('pelayanan.create') }}"><button type="button">+ Buat Baru</button></a>
						</div>
						<table>
							<thead>
								<tr>
									<td>No</td>
									<td>No Pelayanan</td>
									<td>Nama Pemohon</td>
									<td>Tanggal Pelayanan</td>
									<td>Kecamatan</td>
									<td>Kelurahan</td>
									<td>Blok</td>
									<td>No Urut</td>
									<td>Kode Jenis Pelayanan</td>
									<td>Status Pelayanan</td>
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
									<td></td>
									<td></td>
									<td>
										<ul class="list-inline">									
											<li class="list-inline-item"><a href="{{ route('pelayanan.show') }}" class="active"><i class='bx bxs-show' ></i></a></li>
											<li class="list-inline-item"><a href="#" class="active"><i class='bx bxs-edit' ></i></a></li>
											<li class="list-inline-item"><a href="#" class="active"><i class='bx bxs-trash' ></i></a></li>
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