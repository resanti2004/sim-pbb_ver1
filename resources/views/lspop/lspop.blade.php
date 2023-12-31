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
					<!-- <div aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Beranda</a></li>
							<li class="breadcrumb-item"><a href="#">Laporan</a></li>
							<li class="breadcrumb-item active" aria-current="page">LSPOP</li>
						</ol>
					</div> -->
					<div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Dokumen</a></li>
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
				<div class="pencarian d-flex justify-content-between align-items-end">
					<p class="m-0">Menampilkan <b>{{ $data_lspop->count() }}</b> data dari total <b>{{ $data_lspop->total() }}</b> </p>
					<a href="{{ route('lspop.create')}}"><button type="button">Buat Baru</button></a>
				</div>

				<table>
					<thead>
						<tr>
							<td width="50px">No</td>
							<td>NOP</td>
							<td>Nomor Bangunan</td>
							<td>Luas Bangunan</td>
							<td>Jumlah Lantai Bangunan</td>
							<td width="100px" class="text-center">Opsi</td>
						</tr>
					</thead>

					<tbody>
						@foreach($data_lspop as $lspop)
						<tr>
							<td class="text-center">{{ $no++ }}</td>
							<td>{{ $lspop->nop }}</td>
							<td>{{ $lspop->NO_BNG }}</td>
							<td>{{ $lspop->LUAS_BNG }}</td>
							<td>{{ $lspop->JML_LANTAI_BNG }}</td>
							<td>
								<ul class="list-inline">
									<li class="list-inline-item"><a href="{{ route('lspop.show') }}" class="active"><i class='bx bx-show'></i></a></li>
									<li class="list-inline-item"><a href="{{ route('lspop.edit') }}" class="active"><i class='bx bxs-edit'></i></a></li>
									<li class="list-inline-item">

										<form id="deleteForm_{{ $lspop->nop }}" action="{{ route('lspop.destroy', ['lspop' => $lspop->nop]) }}" method="POST">
											@csrf
											@method('DELETE')
										</form>

										<a href="#" onclick="deleteConfirmation('{{ $lspop->nop }}')">
											<i class='bx bx-trash'></i>
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

				<div class="d-flex justify-content-center mt-3">
					{{ $data_lspop->links() }}
				</div>

			</div>
		</div>
	</div>
	@endsection