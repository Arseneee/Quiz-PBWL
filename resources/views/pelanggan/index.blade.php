@extends('layouts.app')

@section('content')
<h2>Data Pelanggan</h2>

<a href="{{ url('pelanggan/create') }}" class="btn btn-primary mb-3 float-end">+ Tambah Pelanggan</a>
<table class="table table-bordered" style="border-color: black;">
    <thead style="background-color: #add8e6;">
        <tr>
            <th>NOMOR</th>
            <th>ID</th>
            <th>GOLONGAN</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>KTP</th>
            <th>METERAN</th>
            <th>PETUGAS</th>
            <th style="width: 10%;">ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach ($rows as $row)
        <tr>
            <td>{{ $row->pel_no }}</td>
            <td>{{ $row->pel_id }}</td>
            <td>{{ optional($row->golongan)->gol_nama }}</td>
            <td>{{ $row->pel_nama }}</td>
            <td>{{ $row->pel_alamat }}</td>
            <td>{{ $row->pel_ktp }}</td>
            <td>{{ $row->pel_meteran }}</td>
            <td>{{ optional($row->users)->name }}</td>
            <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('pelanggan/edit/' . $row->pel_id) }}">Edit</a></li>
                        <li>
                            <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                @csrf
                                <button type="submit" class="dropdown-item"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection