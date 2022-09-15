@extends('layouts.main')

@section('container')
    @if (session()->has('success'))
        <script>
            alert("Tiket berhasil dipesan.");
        </script>
    @endif
    <div class="col-lg-6 shadow mx-auto my-5 p-3 border-rounded">
        <div class="row text-center">
            <h4>Selamat Datang...</h4>
            <a href="{{ route('tickets.create') }}" class="decoration-non">Silahkan pesan tiket konser Anda. </a>
        </div>
    </div>
@endsection
