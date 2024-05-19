@extends('layouts.app')

@section('content')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Data Pengembalian</h1>
                <a href="{{ url('createPengembalian') }}" class="btn btn-primary">+ Pengembalian</a>
            </div>

            <div class="col-lg-8 mt-5">
                <table class="table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>ID Pengguna</th>
                        <th>Nomor Plat</th>
                        <th>Jumlah Hari</th>
                        <th>Jumlah Harga</th>
                        <th>Aksi</th>
                    </tr>

                    @foreach($data as $dataPengembalian)
                    <tr>
                        <td>{{ $dataPengembalian->id }}</td>
                        <td>{{ $dataPengembalian->id_pengguna }}</td>
                        <td>{{ $dataPengembalian->no_plat }}</td>
                        <td>{{ $dataPengembalian->jml_hari }}</td>
                        <td>{{ $dataPengembalian->jml_harga }}</td>
                        <td>
                            <a href="{{ url('/showPengembalian/'.$dataPengembalian->id) }}" class="btn btn-warning">Hitung Harga</a>
                            <a href="{{ url('/destroyPengembalian/'.$dataPengembalian->id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection