@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                <div class="card-footer">
                    <a href="{{ url('/indexMobil') }}" class="btn btn-danger">Data Mobil</a>
                    <a href="{{ url('/indexPeminjaman') }}" class="btn btn-warning">Data Peminjaman</a>
                    <a href="{{ url('/indexPengembalian') }}" class="btn btn-primary">Data Pengembalian</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
