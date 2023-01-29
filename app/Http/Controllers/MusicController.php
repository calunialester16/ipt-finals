<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class MusicController extends Controller
{
    public function index() {
        $musics = Music::with('composer')->get();
        return response()->json([
            'musics' => $musics
        ]);
    }

    public function show(Music $music) {
        $music->load('composer');
        return response()->json($music);
    }

    public function update(Music $music, Request $request) {
        $music->update($request->all());
        return response()->json($music);
    }

    public function store(Request $request) {
        $request->validate([
            'cid' => 'required',
            'name' => 'string|required',
            'release' => 'required|date_format:Y-m-d',
            'album' => 'string|required',
            'genre' => 'string|required',
        ]);

        $music = Music::create($request->all());
        return response()->json($music);
    }

    public function destroy(Music $music) {
        $music->delete();
        return response()->json(['message'=>'This music has been deleted.']);
    }
}
