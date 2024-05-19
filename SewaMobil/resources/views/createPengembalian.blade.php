@extends('layouts.app')

@section('content')
<section>
    <div class="container ">
        <h1>Tambah Pengembalian</h1>
        <div class="row">
            <div class="col-lg-8">
                <form action="{{ url('/storePengembalian') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-grup">
                        <label for="nama">ID Pengguna *</label>
                        <input type="text" name="id_pengguna" class="form-control">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Nomor Plat *</label>
                        <input type="text" name="no_plat" class="form-control">
                    </div>

                    <div class="form-grup mt-2">
                        <button type="submit" class="btn btn-primary">Tambah Pengembalian</button>
                    </div>

                    <div class="form-grup mt-2">
                        <a href="{{ url('/indexPengembalian') }}">Kembali ke halaman utama</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection