<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CastController extends Controller
{
    use App\Models\Cast;

public function index()
{
    $casts = Cast::all();
    return view('cast.index', compact('casts'));
}

public function create()
{
    return view('cast.create');
}

public function store(Request $request)
{
    

    $cast = new Cast();
    $cast->umur = $request->input('umur');
    $cast->bio = $request->input('bio');
    $cast->save();

    return redirect('/cast');
}

public function show($cast_id)
{
    $cast = Cast::findOrFail($cast_id);
    return view('cast.show', compact('cast'));
}

public function edit($cast_id)
{
    $cast = Cast::findOrFail($cast_id);
    return view('cast.edit', compact('cast'));
}

public function update(Request $request, $cast_id)
{
    // Validasi inputan di sini jika diperlukan

    $cast = Cast::findOrFail($cast_id);
    $cast->name = $request->input('name');
    $cast->bio = $request->input('bio');
    $cast->save();

    return redirect('/cast');
}

public function destroy($cast_id)
{
    $cast = Cast::findOrFail($cast_id);
    $cast->delete();

    return redirect('/cast');
}

}
