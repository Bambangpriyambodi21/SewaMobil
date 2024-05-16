@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Tambah Mobil</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/storeMobil') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="form-grup">
                        <label for="nama">Merek *</label>
                        <input type="text" name="merek" class="form-control">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Model *</label>
                        <input type="text" name="model" class="form-control">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Nomor Plat *</label>
                        <input type="text" name="no_plat" class="form-control">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Tarif *</label>
                        <input type="text" name="tarif" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama">Ketersediaan *</label>
                        <select name="ketersediaan" class="form-control">
                            <option value="tersedia">Tersedia</option>
                            <option value="tidak tersedia">Tidak Tersedia</option>
                        </select>
                    </div>


                    <div class="form-grup mt-2">
                        <button type="submit" class="btn btn-primary">Tambah Mobil</button>
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