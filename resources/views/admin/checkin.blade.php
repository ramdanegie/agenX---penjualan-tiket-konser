@extends('admin.layouts.main')
@section('container')
    <div class="row my-3">
        <h3>Cek Tiket</h3>
        <form action="/admin/cek" method="get">
            <div class="input-group row my-4">
                <div class="col-lg-3">
                    <input name="search" type="text" class=" form-control" placeholder="Nomor Tiket" aria-label="Nomor Tiket"
                        aria-describedby="button-addon2">
                </div>
                <div class="col">
                    <button class="btn btn-primary" type="submit" id="">Check</button>
                </div>
            </div>
        </form>
    </div>
    @if (session()->has('result'))
        <div class="card mb-4 text-center">
            <div class="card-body">
                <form action="" method="post">
                    <h3 class="card-title">No: {{ $tiket->id }}</h3>
                    <p>
                        <small>
                            dipesan pada: {{ $tiket->created_at }}
                        </small>
                    </p>
                    <p class="card-text">{{ $tiket->nama }}</p>
                    <p class="card-text">{{ $tiket->ktp }}</p>
                    <p class="card-text">{{ $tiket->email }}</p>
                    <p class="card-text">{{ $ticket->checked === 'yes' ? 'Tidak Tersedia' : 'Tersedia' }}</p>

                    <button class="btn btn-primary" type="submit" {{ $ticket->checked === 'yes' ? 'disabled' : '' }}>Check
                        In</button>
                </form>
            </div>
        </div>
    @endif
@endsection
