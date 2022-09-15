@extends('dashboard.layouts.main')
@section('container')
    <div class="col-lg-6 shadow mx-auto my-5 p-3 border-rounded">
        <div class="row text-center">
            <h4>Rekapan Pemesanan</h4>
        </div>
        <div class="row">
            <div class="col">
                <small>No Tiket: {{ $ticket->tiket_id }}</small>
            </div>
            <div class="col">
                <small>Tanggal Pemesan: {{ $ticket->created_at }}</small>
            </div>
        </div>
        <div class="row">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nomor Tiket : {{ $ticket->tiket_id }}</li>
                <li class="list-group-item">Nama Pemesan : {{ $ticket->nama }}</li>
                <li class="list-group-item">Nomor KTP : {{ $ticket->ktp }}</li>
                <li class="list-group-item">Email : {{ $ticket->email }}</li>

            </ul>
        </div>
    </div>
    <div class="row">
        <a class="" href="/">Kembali ke Beranda</a>
    </div>
@endsection
