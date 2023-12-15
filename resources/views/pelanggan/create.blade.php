@extends('layouts.app')

@section('content')
<h2>Tambah Pelanggan</h2>

<form action="{{ url('pelanggan') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="pel_no">NOMOR PELANGGAN</label>
        <input type="text" name="pel_no" id="pel_no" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="gol_id">GOLONGAN</label>
        <select name="gol_id" id="gol_id" class="form-control" required>
            @foreach($getgol as $gol)
            <option value="{{ $gol->gol_id }}">{{ $gol->gol_nama }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="pel_nama">NAMA</label>
        <input type="text" name="pel_nama" id="pel_nama" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="pel_nama">ALAMAT</label>
        <input type="text" name="pel_alamat" id="pel_alamat" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="pel_ktp">NOMOR KTP</label>
        <input type="text" name="pel_ktp" id="pel_ktp" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="pel_meteran">METERAN</label>
        <input type="text" name="pel_meteran" id="pel_meteran" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="id">PETUGAS</label>
        <select name="id" id="id" class="form-control" disabled>
            <option value="{{ $currentUser->id }}" selected>{{ $currentUser->name }}</option>
        </select>
    </div>
    <div class="mb-3">
        <input type="submit" value="SAVE" class="btn btn-primary">
    </div>
</form>
@endsection