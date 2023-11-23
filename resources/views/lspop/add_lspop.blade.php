@extends('kerangka.master')

@section('title', 'Tambah Data LSPOP')

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
                    <h3>Tambah Data LSPOP</h3>
                    <!-- <div aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Beranda</a></li>
								<li class="breadcrumb-item"><a href="#">Dokumen</a></li>
								<li class="breadcrumb-item"><a href="{{ route('kelurahan.index') }}">LSPOP</a></li>
								<li class="breadcrumb-item active" aria-current="page">Tambah Data LSPOP</li>
							</ol>
							</div> -->
                    <div class=" p-0 d-flex align-items-start" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('lspop.index') }}">LSPOP</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Data LSPOP</li>
                        </ol>
                    </div>
                </div>

                <form id="addlspop" method="POST" action="{{ route('lspop.store') }}" enctype="multipart/form-data" class="row g-4 p-5 needs-validation" novalidate>
                    @csrf
                    <div class="col-md-6">
                        <label for="KodeProvinsi" class="form-label">Kode Provinsi</label>
                        <input type="text" class="form-control @error('KodeProvinsi') is-invalid @enderror" id="KodeProvinsi" name="KodeProvinsi" required>
                        @error('KodeProvinsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="KodeDati2" class="form-label">Kode Dati 2</label>
                        <input type="text" class="form-control @error('KodeDati2') is-invalid @enderror" id="KodeDati2" name="KodeDati2" required>
                        @error('KodeDati2')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="KodeKecamatan" class="form-label">Kode Kecamatan</label>
                        <input type="text" class="form-control @error('KodeKecamatan') is-invalid @enderror" id="KodeKecamatan" name="KodeKecamatan" required>
                        @error('KodeKecamatan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="KodeKelurahan" class="form-label">Kode Kelurahan</label>
                        <input type="text" class="form-control @error('KodeKelurahan') is-invalid @enderror" id="KodeKelurahan" name="KodeKelurahan" required>
                        @error('KodeKelurahan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="KodeBlok" class="form-label">Kode Blok</label>
                        <input type="text" class="form-control @error('KodeBlok') is-invalid @enderror" id="KodeBlok" name="KodeBlok" required>
                        @error('KodeBlok')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="NoUrut" class="form-label">No Urut</label>
                        <input type="text" class="form-control @error('NoUrut') is-invalid @enderror" id="NoUrut" name="NoUrut" required>
                        @error('NoUrut')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="KodeJenisOp" class="form-label">Kode Jenis Op</label>
                        <input type="text" class="form-control @error('KodeJenisOp') is-invalid @enderror" id="KodeJenisOp" name="KodeJenisOp" required>
                        @error('KodeJenisOp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="NoBangunan" class="form-label">No Bangunan</label>
                        <input type="text" class="form-control @error('NoBangunan') is-invalid @enderror" id="NoBangunan" name="NoBangunan" required>
                        @error('NoBangunan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="KodeJpb" class="form-label">Kode Jpb</label>
                        <input type="text" class="form-control @error('KodeJpb') is-invalid @enderror" id="KodeJpb" name="KodeJpb" required>
                        @error('KodeJpb')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="NoFormulirLspop" class="form-label">No Formulir Lspop</label>
                        <input type="text" class="form-control @error('NoFormulirLspop') is-invalid @enderror" id="NoFormulirLspop" name="NoFormulirLspop" required>
                        @error('NoFormulirLspop')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="TahunDibangunBangunan" class="form-label">Tahun Dibangun Bangunan</label>
                        <input type="text" class="form-control @error('TahunDibangunBangunan') is-invalid @enderror" id="TahunDibangunBangunan" name="TahunDibangunBangunan" required>
                        @error('TahunDibangunBangunan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="TahunRenovasiBangunan" class="form-label">Tahun Renovasi Bangunan</label>
                        <input type="text" class="form-control @error('TahunRenovasiBangunan') is-invalid @enderror" id="TahunRenovasiBangunan" name="TahunRenovasiBangunan" required>
                        @error('TahunRenovasiBangunan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="LuasBangunan" class="form-label">Luas Bangunan</label>
                        <input type="text" class="form-control @error('LuasBangunan') is-invalid @enderror" id="LuasBangunan" name="LuasBangunan" required>
                        @error('LuasBangunan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="JumlahLantaiBangunan" class="form-label">Jumlah Lantai Bangunan</label>
                        <input type="text" class="form-control @error('JumlahLantaiBangunan') is-invalid @enderror" id="JumlahLantaiBangunan" name="JumlahLantaiBangunan" required>
                        @error('JumlahLantaiBangunan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="KondisiBangunan" class="form-label">Kondisi Bangunan</label>
                        <input type="text" class="form-control @error('KondisiBangunan') is-invalid @enderror" id="KondisiBangunan" name="KondisiBangunan" required>
                        @error('KondisiBangunan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="JenisKonstruksiBangunan" class="form-label">Jenis Konstruksi Bangunan</label>
                        <input type="text" class="form-control @error('JenisKonstruksiBangunan') is-invalid @enderror" id="JenisKonstruksiBangunan" name="JenisKonstruksiBangunan" required>
                        @error('JenisKonstruksiBangunan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="JenisAtapBangunan" class="form-label">Jenis Atap Bangunan</label>
                        <input type="text" class="form-control @error('JenisAtapBangunan') is-invalid @enderror" id="JenisAtapBangunan" name="JenisAtapBangunan" required>
                        @error('JenisAtapBangunan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="KdDinding" class="form-label">Kd Dinding</label>
                        <input type="text" class="form-control @error('KdDinding') is-invalid @enderror" id="KdDinding" name="KdDinding" required>
                        @error('KdDinding')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="KdLantai" class="form-label">Kd Lantai</label>
                        <input type="text" class="form-control @error('KdLantai') is-invalid @enderror" id="KdLantai" name="KdLantai" required>
                        @error('KdLantai')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="KdLangitLangit" class="form-label">Kd Langit-Langit</label>
                        <input type="text" class="form-control @error('KdLangitLangit') is-invalid @enderror" id="KdLangitLangit" name="KdLangit_Langit" required>
                        @error('KdLangitLangit')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="NilaiSistemBangunan" class="form-label">Nilai Sistem Bangunan</label>
                        <input type="text" class="form-control @error('NilaiSistemBangunan') is-invalid @enderror" id="NilaiSistemBangunan" name="NilaiSistemBangunan" required>
                        @error('NilaiSistemBangunan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="JenisTransaksiKelurahan" class="form-label">Jenis Transaksi Bangunan</label>
                        <input type="text" class="form-control @error('JenisTransaksiKelurahan') is-invalid @enderror" id="JenisTransaksiKelurahan" name="JenisTransaksiKelurahan" required>
                        @error('JenisTransaksiKelurahan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="TanggalPendataanBangunan" class="form-label">Tanggal Pendataan Bangunan</label>
                        <input type="text" class="form-control @error('TanggalPendataanBangunan') is-invalid @enderror" id="TanggalPendataanBangunan" name="TanggalPendataanBangunan" required>
                        @error('TanggalPendataanBangunan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="NIPPendataBangunan" class="form-label">NIP Pendata Bangunan</label>
                        <input type="text" class="form-control @error('NIPPendataBangunan') is-invalid @enderror" id="NIPPendataBangunan" name="NIPPendataBangunan" required>
                        @error('NIPPendataBangunan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="TanggalPemeriksaanBangunan" class="form-label">Tanggal Pemeriksaan Bangunan</label>
                        <input type="text" class="form-control @error('TanggalPemeriksaanBangunan') is-invalid @enderror" id="TanggalPemeriksaanBangunan" name="TanggalPemeriksaanBangunan" required>
                        @error('TanggalPemeriksaanBangunan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="NIPPemeriksaBangunan" class="form-label">NIP Pemeriksa Bangunan</label>
                        <input type="text" class="form-control @error('NIPPemeriksaBangunan') is-invalid @enderror" id="NIPPemeriksaBangunan" name="NIPPemeriksaBangunan" required>
                        @error('NIPPemeriksaBangunan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="TanggalPerekamanBangunan" class="form-label">Tanggal Perekaman Bangunan</label>
                        <input type="text" class="form-control @error('TanggalPerekamanBangunan') is-invalid @enderror" id="TanggalPerekamanBangunan" name="TanggalPerekamanBangunan" required>
                        @error('TanggalPerekamanBangunan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="NIPPerekamBangunan" class="form-label">NIP Perekam Bangunan</label>
                        <input type="text" class="form-control @error('NIPPerekamBangunan') is-invalid @enderror" id="NIPPerekamBangunan" name="NIPPerekamBangunan" required>
                        @error('NIPPerekamBangunan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="TanggalKunjunganKembali" class="form-label">Tanggal Kunjungan Kembali</label>
                        <input type="text" class="form-control @error('TanggalKunjunganKembali') is-invalid @enderror" id="TanggalKunjunganKembali" name="TanggalKunjunganKembali" required>
                        @error('TanggalKunjunganKembali')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="NilaiIndividu" class="form-label">Nilai Individu</label>
                        <input type="text" class="form-control @error('NilaiIndividu') is-invalid @enderror" id="NilaiIndividu" name="NilaiIndividu" required>
                        @error('NilaiIndividu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="Aktif" class="form-label">Aktif</label>
                        <input type="text" class="form-control @error('Aktif') is-invalid @enderror" id="Aktif" name="Aktif" required>
                        @error('Aktif')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary" style="width:150px;">Tambah</button>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('addlspop'); // Ganti 'yourFormId' dengan ID formulir Anda

            form.addEventListener('input', function(event) {
                const inputElement = event.target;

                // Hanya lakukan validasi jika input memiliki class 'form-control'
                if (inputElement.classList.contains('form-control')) {
                    const fieldName = inputElement.name;
                    const fieldValue = inputElement.value.trim();
                    const errorContainer = document.getElementById(fieldName + 'Error'); // Sesuaikan dengan nama field

                    // Bersihkan pesan kesalahan sebelumnya
                    errorContainer.textContent = '';

                    // Validasi sesuai kebutuhan Anda
                    if (fieldName === 'KodeProvinsi' && fieldValue.length === 0) {
                        errorContainer.textContent = 'Kode Provinsi is required';
                    }
                    // Tambahkan validasi untuk kolom lain sesuai kebutuhan

                    // Anda juga dapat melakukan validasi dengan AJAX jika diperlukan
                    // Contoh: panggil endpoint Laravel untuk validasi data
                }
            });
        });
    </script>
    @endsection