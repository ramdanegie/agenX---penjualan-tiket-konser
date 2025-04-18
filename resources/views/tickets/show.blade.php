@extends('layouts.main')
@section('container')
    <div class="col-lg-6 shadow mx-auto my-5 py-4 ps-4 pe-3 border-rounded">
        <div class="row text-center">
            <h4>Rekapan Pemesanan</h4>
        </div>
        <table class="mt-3 ms-4">
            <tr>
                <td><strong>Nomor Tiket</strong></td>
                <td><strong>:</strong> {{ $ticket->id }}</td>
            </tr>
            <tr>
                <td><strong>Tanggal Pesan</strong></td>
                <td><strong>:</strong> {{ $ticket->created_at }}</td>
            </tr>
            <tr>
                <td><strong>Nama Pemesan</strong></td>
                <td><strong>:</strong> {{ $ticket->nama }}</td>
            </tr>
            <tr>
                <td><strong>No KTP</strong></td>
                <td><strong>:</strong> {{ $ticket->ktp }}</td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td><strong>:</strong> {{ $ticket->email }}</td>
            </tr>
            <tr>
                <td><strong>Status</strong></td>
                <td><strong>:</strong> {{ $ticket->checked === 'yes' ? 'Tidak Tersedia' : 'Tersedia' }}</td>
            </tr>
        </table>
        <div class="d-flex justify-content-end me-4">
            <a class="btn-sm btn-primary btn" href="/">Kembali ke Beranda</a>
        </div>
    </div>
@endsection
