<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit Pemain Film</h1>
    <form method="POST" action="{{ url('/cast/'.$cast->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $cast->name }}" required>
        </div>
        <div class="form-group">
            <label for="role">Peran</label>
            <input type="text" class="form-control" id="role" name="role" value="{{ $cast->role }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
</body>
</html>