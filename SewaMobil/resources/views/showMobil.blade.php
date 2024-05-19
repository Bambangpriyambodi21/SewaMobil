@extends('layouts.app')

@section('content')
<section>
    <div class="container ">
        <h1>Edit Mobil</h1>
        <div class="row">
            <div class="col-lg-8">
                <form action="{{ url('/updateMobil/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-grup">
                        <label for="nama">Merek *</label>
                        <input type="text" name="merek" class="form-control" value="{{ $data->merek }}">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Model *</label>
                        <input type="text" name="model" class="form-control" value="{{ $data->model }}">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Nomor Plat *</label>
                        <input type="text" name="no_plat" class="form-control" value="{{ $data->no_plat }}">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Tarif *</label>
                        <input type="text" name="tarif" class="form-control" value="{{ $data->tarif }}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Ketersediaan *</label>
                        <select name="ketersediaan" class="form-control">
                            <option value="tersedia" {{ $data->ketersediaan === 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                            <option value="tidak tersedia" {{ $data->ketersediaan === 'tidak tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
                        </select>
                    </div>

                    <div class="form-grup mt-2">
                        <button type="submit" class="btn btn-primary">Ubah Mobil</button>
                    </div>

                    <div class="form-grup mt-2">
                        <a href="{{ url('/indexMobil') }}">Kembali ke halaman utama</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection