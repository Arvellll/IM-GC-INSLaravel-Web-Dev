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
    <h1>Detail Pemain Film</h1>
    <p><strong>Nama:</strong> {{ $cast->name }}</p>
    <p><strong>Peran:</strong> {{ $cast->role }}</p>
    <a href="{{ url('/cast/'.$cast->id.'/edit') }}" class="btn btn-warning">Edit</a>
    <form action="{{ url('/cast/'.$cast->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
</div>
@endsection

</body>
</html>