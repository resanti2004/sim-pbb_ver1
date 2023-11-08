@extends('kerangka.master')
@section('title', 'LSPOP')
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
							<h3>LSPOP</h3>
							<div aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item"><a href="#">Laporan</a></li>
								<li class="breadcrumb-item active" aria-current="page">LSPOP</li>
							</ol>
							</div>
						</div>
						<form action="#">
								<div class="form-group">
									<input type="text" placeholder="Search...">
									<i class='bx bx-search icon' ></i>
								</div>
						</form>
						<div class="pencarian">
							<button type="button">Buat Baru</button>
						</div>

						<table>
							<thead>
								<tr>
									<td>No</td>
									<td>NOP</td>
									<td>Nomor Bangunan</td>
									<td>Luas Bangunan</td>
									<td>Jumlah Lantai Bangunan</td>
									<td>Opsi</td>
								</tr>
							</thead>

							<tbody>
								@foreach($data_lspop as $lspop)
								<tr>
									<td>{{ $no++ }}</td>
									<td>{{ $lspop->nop }}</td>
									<td>{{ $lspop->NO_BNG }}</td>
									<td>{{ $lspop->LUAS_BNG }}</td>
									<td>{{ $lspop->JML_LANTAI_BNG }}</td>
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
							{{ $data_lspop->links() }}
						</div>
						
						<!-- <div class="container">
							<button class="button" id="startBtn" disabled>
								<i class="fa-solid fa-angles-left"></i>
							</button>
							<button class="button prevNext" id="prev" disabled>
								<i class="fa-solid fa-angle-left"></i>
							</button>

							<div class="links">
								<a href="#" class="link active">1</a>
								<a href="#" class="link">2</a>
								<a href="#" class="link">3</a>
								<a href="#" class="link">4</a>
								<a href="#" class="link">5</a>
							</div>

							<button class="button prevNext" id="next">
								<i class="fa-solid fa-angle-right"></i>
							</button>
							<button class="button" id="endBtn">
								<i class="fa-solid fa-angles-right"></i>
							</button>
						</div> -->
							

					</div>
				</div>
			</div>
@endsection