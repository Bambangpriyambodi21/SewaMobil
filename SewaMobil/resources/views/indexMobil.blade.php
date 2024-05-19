@extends('layouts.app')

@section('content')
<section>
    <div class="container ">
        <div class="row">
            <div class="col-lg-8">
                <h1>Data Mobil</h1>
                <a href="{{ url('createMobil') }}" class="btn btn-primary">+ Mobil</a>
            </div>
            <div class="col-lg-8">
                <form class="form" method="get" action="{{ route('search') }}">
                    <div class="form-group w-100 mb-3">
                        <label for="search" class="d-block mr-2">Pencarian</label>
                        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
                        <button type="submit" class="btn btn-primary mb-1">Cari</button>
                    </div>
                </form>
            </div>

            <div class="col-lg-8 ">
                <table class="table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Merek</th>
                        <th>Model</th>
                        <th>Nomor Plat</th>
                        <th>Tarif</th>
                        <th>Ketersediaan</th>
                        <th>Aksi</th>
                    </tr>

                    @foreach($data as $dataMobil)
                    <tr>
                        <td>{{ $dataMobil->id }}</td>
                        <td>{{ $dataMobil->merek }}</td>
                        <td>{{ $dataMobil->model }}</td>
                        <td>{{ $dataMobil->no_plat }}</td>
                        <td>{{ $dataMobil->tarif }}</td>
                        <td>{{ $dataMobil->ketersediaan }}</td>
                        <td>
                            <a href="{{ url('/showMobil/'.$dataMobil->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('/destroyMobil/'.$dataMobil->id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection