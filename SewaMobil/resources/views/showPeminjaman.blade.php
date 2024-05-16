@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Edit Peminjaman</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/updatePeminjaman/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-grup">
                        <label for="nama">ID Pengguna *</label>
                        <input type="text" name="id_pengguna" class="form-control" value="{{ $data->id_pengguna }}">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Tanggal Mulai *</label>
                        <input type="Date" name="tgl_mulai" class="form-control" value="{{ $data->tgl_mulai }}">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Tanggal Selesai *</label>
                        <input type="Date" name="tgl_selesai" class="form-control" value="{{ $data->tgl_selesai }}">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Mobil *</label>
                        <input type="text" name="mobil" class="form-control" value="{{ $data->mobil }}">
                    </div>

                    <div class="form-grup mt-2">
                        <button type="submit" class="btn btn-primary">Ubah Peminjaman</button>
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