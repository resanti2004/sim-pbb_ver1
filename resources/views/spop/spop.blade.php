@extends('kerangka.master')
@section('title', 'SPOP')
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
							<h3>SPOP</h3>
							<a href="#" class="btr">Beranda/Laporan/SPOP</a>
						</div>

						<div class="pencarian">
							<button type="button">Buat Baru</button>
						</div>

						<table>
							<thead>
								<tr>
									<td>No</td>
									<td>NOP</td>
									<td>Subjek Pajak ID</td>
									<td>Jalan Objek Pajak</td>
									<td>Luas Bumi</td>
									<td>Opsi</td>
								</tr>
							</thead>

							<tbody>
								@foreach($data_spop as $spop)
								<tr>
									<td>{{ $no++ }}</td>
									<td>{{ $spop->no_urut }}</td>
									<td>{{ $spop->SUBJEK_PAJAK_ID }}</td>
									<td>{{ $spop->JALAN_OP }}</td>
									<td>{{ $spop->LUAS_BUMI }}</td>
									<td>
										<ul>									
											<li><a href="#" class="active"><i class='bx bxs-trash' ></i></a></li>
											<li><a href="#" class="active"><i class='bx bxs-trash' ></i></a></li>
											<!-- <li><a href="#" class="active"><i class='bx bxs-trash' ></i></a></li> -->
										</ul>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<div class="d-flex justify-content-center">
							{{ $data_spop->links() }}
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