@extends('kerangka.master')
@section('title', 'SPOP')
@section('content')

<div class="bgn">
	<h1 class="title">Selamat Datang, {{ $fullname }}!</h1>
	<p class="greet">Selamat Datang di Sistem Informasi Pajak Bumi Bangunan</p>
</div>

<div class="data">
	<div class="box-container">
		<div class="detail">
			<div class="recentOrders">
				<div class="cardHeader">
					<h3>SPOP</h3>
					<!-- <div aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Beranda</a></li>
							<li class="breadcrumb-item"><a href="#">Laporan</a></li>
							<li class="breadcrumb-item active" aria-current="page">SPOP</li>
						</ol>
					</div> -->
					<div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Dokumen</a></li>
                            <li class="breadcrumb-item active" aria-current="page">SPOP</li>
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
					<p class="m-0">Menampilkan <b>{{ $data_spop->count() }}</b> data dari total <b>{{ $data_spop->total() }}</b> </p>
					<a href="{{ route('spop.create') }}"><button type="button">Buat Baru</button></a>

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
							<td>{{ $spop->nop }}</td>
							<td>{{ $spop->SUBJEK_PAJAK_ID }}</td>
							<td>{{ $spop->JALAN_OP }}</td>
							<td>{{ $spop->LUAS_BUMI }}</td>
							<td>
								<ul class="list-inline">
									<li class="list-inline-item"><a href="{{ route('spop.show', ['NOP' => $spop->nop]) }}" class="active"><i class='bx bxs-show'></i></a></li>
									<li class="list-inline-item"><a href="{{ route('spop.edit') }}" class="active"><i class='bx bxs-edit'></i></a></li>
									<li class="list-inline-item">
										<form id="deleteForm_{{ $spop->nop }}" action="{{ route('spop.destroy', ['spop' => $spop->nop]) }}" method="POST">
											@csrf
											@method('DELETE')
										</form>

										<a href="#" onclick="deleteConfirmation('{{ $spop->nop }}')">
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
					<div class="pagination">
						{{ $data_spop->links() }}
					</div>
				</div>

			</div>
		</div>
	</div>
	@endsection