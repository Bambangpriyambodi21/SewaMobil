@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Tambah Peminjaman</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/storePeminjaman') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-grup">
                        <label for="nama">ID Pengguna *</label>
                        <input type="text" name="id_pengguna" class="form-control">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Tanggal Mulai *</label>
                        <input type="Date" name="tgl_mulai" class="form-control">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Tanggal Selesai *</label>
                        <input type="Date" name="tgl_selesai" class="form-control">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Mobil *</label>
                        <input type="text" name="mobil" class="form-control">
                    </div>

                    <div class="form-grup mt-2">
                        <button type="submit" class="btn btn-primary">Tambah Peminjaman</button>
                    </div>

                    <div class="form-grup mt-2">
                        <a href="{{ url('/indexPeminjaman') }}">Kembali ke halaman utama</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
@endsection