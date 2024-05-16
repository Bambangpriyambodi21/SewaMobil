@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Data Peminjaman</h1>
                    <a href="{{ url('createPeminjaman') }}" class="btn btn-primary">+ Peminjaman</a>
                </div>
                <div class="col-lg-8">
                    <form class="form" method="get" action="{{ route('search') }}">
                        <div class="form-group w-100 mb-3">
                            <label for="search" class="d-block mr-2">Pencarian</label>
                            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan ID Pengguna">
                            <button type="submit" class="btn btn-primary mb-1">Cari</button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-8 mt-5">
                    <table class="table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>ID Pengguna</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Mobil</th>
                            <th>Aksi</th>
                        </tr>

                        @foreach($data as $dataPeminjaman)
                        <tr>
                            <td>{{ $dataPeminjaman->id }}</td>
                            <td>{{ $dataPeminjaman->id_pengguna }}</td>
                            <td>{{ $dataPeminjaman->tgl_mulai }}</td>
                            <td>{{ $dataPeminjaman->tgl_selesai }}</td>
                            <td>{{ $dataPeminjaman->mobil }}</td>
                            <td>
                                <a href="{{ url('/showPeminjaman/'.$dataPeminjaman->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ url('/destroyPeminjaman/'.$dataPeminjaman->id) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection