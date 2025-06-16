@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pesanan</h1>

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" name="nama_pelanggan" value="{{ $order->nama_pelanggan }}" required>
        </div>
        <div class="mb-3">
            <label for="produk" class="form-label">Produk</label>
            <input type="text" class="form-control" name="produk" value="{{ $order->produk }}" required>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" name="jumlah" value="{{ $order->jumlah }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" required>{{ $order->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No HP</label>
            <input type="text" class="form-control" name="no_hp" value="{{ $order->no_hp }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
