@extends('layouts.app')

@section('content')
<?php $no = 1 ?>
<h2>Data Golongan</h2>

<a href="{{ url('golongan/create') }}" class="btn btn-primary mb-3 float-end">+ Tambah Golongan</a>
<table class="table table-bordered" style="border-color: black;">
    <thead style="background-color: #add8e6;">
        <tr>
            <th>NO</th>
            <th>KODE</th>
            <th>ID</th>
            <th>NAMA</th>
            <th style="width: 10%;">ACTION</th>
        </tr>
    </thead>
    <tbody> 
        @foreach ($rows as $row)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $row->gol_kode }}</td>
            <td>{{ $row->gol_id }}</td>
            <td>{{ $row->gol_nama }}</td>
            <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('golongan/edit/' . $row->gol_id) }}">Edit</a></li>
                        <li>
                            <form action="{{ url('golongan/' . $row->gol_id) }}" method="post">
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