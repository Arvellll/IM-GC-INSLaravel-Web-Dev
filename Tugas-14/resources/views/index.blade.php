<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app') <!-- Jika Anda menggunakan layout -->
@section('content')
<div class="container">
    <h1>Daftar Pemain Film</h1>
    <a href="{{ url('/cast/create') }}" class="btn btn-primary">Tambah Pemain Film</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Bio</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($casts as $cast)
            <tr>
                <td>{{ $cast->name }}</td>
                <td>{{ $cast->umur }}</td>
                <td>{{ $cast->bio }}</td>
                <td>
                    <a href="{{ url('/cast/'.$cast->id) }}" class="btn btn-info">Lihat Detail</a>
                    <a href="{{ url('/cast/'.$cast->id.'/edit') }}" class="btn btn-warning">Edit</a>
                    <form action="{{ url('/cast/'.$cast->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

</body>
</html>