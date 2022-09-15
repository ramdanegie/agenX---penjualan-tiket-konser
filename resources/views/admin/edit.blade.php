@extends('admin.layouts.main')
@section('container')
    <div class="row my-3">
        <h3 class="my-2 mb-4">Edit Detail Pesanan</h3>
        <div class="ms-3 col-5">
            <form action="{{ route('tickets.update', $ticket->id) }}" method="post">
                <div class="mb-1 row">
                    <label for="id" class="col-sm-4 col-form-label" name="id"> Nomor Tiket</label>
                    <div class="col-sm-8">
                        <input type="text" disabled readonly class="form-control" id="id"
                            value="{{ $ticket->id }}">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="created_at" class="col-sm-4 col-form-label" name="created_at"> Tanggal Pesan</label>
                    <div class="col-sm-8">
                        <input type="text" disabled readonly class="form-control" id="created_at"
                            value="{{ $ticket->created_at }}">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="nama" class="col-sm-4 col-form-label" name="nama">Nama Pemesan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama" value="{{ $ticket->nama }}">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="ktp" class="col-sm-4 col-form-label" name="ktp">No KTP</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="ktp" value="{{ $ticket->ktp }}">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="email" class="col-sm-4 col-form-label" name="email">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" value="{{ $ticket->email }}">
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="status" class="col-sm-4 col-form-label" name="status">Status</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="status"
                            value="{{ $ticket->checked === 'yes' ? 'Tidak Tersedia' : 'Tersedia' }}">
                    </div>
                </div>
                @csrf
                @method('PUT')
                <div class="d-flex justify-content-end mt-2 ">
                    <a href="/admin" class="btn btn-sm btn-warning px-3  py-1">Cancel</a>
                    <button class="btn btn-primary btn-sm px-3 py-1 ms-2" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
