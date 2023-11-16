@extends('kerangka.master')
@section('title', 'LSPOP')
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
					<h3>LSPOP</h3>
					<div aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Beranda</a></li>
							<li class="breadcrumb-item"><a href="#">Laporan</a></li>
							<li class="breadcrumb-item active" aria-current="page">LSPOP</li>
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
									<li class="list-inline-item"><a href="#" class="active"><i class='bx bxs-show'></i></a></li>
									<li class="list-inline-item"><a href="{{ route('lspop.edit', ['lspop' => $lspop->nop]) }}" class="active"><i class='bx bxs-edit'></i></a></li>
									<li class="list-inline-item">

										<form id="deleteForm_{{ $lspop->nop }}" action="{{ route('lspop.destroy', ['lspop' => $lspop->nop]) }}" method="POST">
											@csrf
											@method('DELETE')
										</form>

										<a href="#" onclick="deleteConfirmation('{{ $lspop->nop }}')">
											<i class='bx bxs-trash'></i>
										</a>

										<script>
											function deleteConfirmation(nop) {
												if (confirm('Anda yakin untuk menghapus?')) {
													document.getElementById('deleteForm_' + nop).submit();
												}
											}
										</script>
									</li>
								</ul>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="d-flex justify-content-center">
					{{ $data_lspop->links() }}
				</div>

			</div>
		</div>
	</div>
	@endsection