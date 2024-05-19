@extends('layouts.app')

@section('content')
<section>
    <div class="container ">
        <h1>Edit Pengembalian</h1>
        <div class="row">
            <div class="col-lg-8">
                <form action="{{ url('/updatePengembalian/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-grup">
                        <label for="nama">ID Pengguna *</label>
                        <input type="text" name="id_pengguna" class="form-control" value="{{ $data->id_pengguna }}" readonly>
                    </div>
                    <div class="form-grup">
                        <label for="nama">Nomor Plat *</label>
                        <input type="text" name="no_plat" class="form-control" value="{{ $data->no_plat }}" readonly>
                    </div>
                    <div class="form-grup">
                        <label for="nama">Jumlah Tanggal *</label>
                        <input type="text" name="jml_hari" id="jml_hari" class="form-control" value="{{ old('jml_hari', $data->jml_hari) }}">
                    </div>
                    <div class="form-grup">
                        <label for="nama">Jumlah Harga *</label>
                        <input type="text" name="jml_harga" id="jml_harga" class="form-control" value="{{ $data->tarif * old('jml_hari', $data->jml_hari) }}" readonly>
                    </div>

                    <div class="form-grup mt-2">
                        <button type="submit" class="btn btn-primary">Ubah Pengembalian</button>
                    </div>

                    <div class="form-grup mt-2">
                        <a href="{{ url('/indexPengembalian') }}">Kembali ke halaman utama</a>
                    </div>
                    <script>
                        document.getElementById('jml_hari').addEventListener('input', function() {
                            var jml_hari = parseFloat(this.value);
                            var tarif = parseFloat("{{ $data->tarif }}");
                            document.getElementById('jml_harga').value = jml_hari * tarif;
                        });
                    </script>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection