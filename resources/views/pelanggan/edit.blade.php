@extends('layouts.app')

@section('content')
<h2>Edit Pelanggan</h2>

<form action="{{ url('pelanggan/' . $row->pel_id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="mb-3">
        <label for="pel_no">NOMOR PELANGGAN</label>
        <input type="text" name="pel_no" id="pel_no" class="form-control" value="{{ $row->pel_no }}" required>
    </div>
    <div class="mb-3">
        <label for="gol_id">GOLONGAN</label>
        <select name="gol_id" id="gol_id" class="form-control" required>
            @foreach($getgol as $gol)
            <option value="{{ $gol->gol_id }}" {{ $gol->gol_id == $row->gol_id ? 'selected' : '' }}>
                {{ $gol->gol_nama }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="pel_nama">NAMA</label>
        <input type="text" name="pel_nama" id="pel_nama" class="form-control" value="{{ $row->pel_nama }}" required>
    </div>
    <div class="mb-3">
        <label for="pel_alamat">ALAMAT</label>
        <input type="text" name="pel_alamat" id="pel_alamat" class="form-control" value="{{ $row->pel_alamat }}"
            required>
    </div>
    <div class="mb-3">
        <label for="pel_ktp">NOMOR KTP</label>
        <input type="text" name="pel_ktp" id="pel_ktp" class="form-control" value="{{ $row->pel_ktp }}" required>
    </div>
    <div class="mb-3">
        <label for="pel_meteran">METERAN</label>
        <input type="text" name="pel_meteran" id="pel_meteran" class="form-control" value="{{ $row->pel_meteran }}"
            required>
    </div>
    <div class="mb-3">
        <label for="id">PETUGAS</label>
        <select name="id" id="id" class="form-control" disabled>
            <option value="{{ $currentUser->id }}" selected>{{ $currentUser->name }}</option>
        </select>
    </div>
    <div class="mb-3">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
</form>
@endsection