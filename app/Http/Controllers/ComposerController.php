<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Composer;

class ComposerController extends Controller
{
    public function index() {
        return response()->json([
            'composers' => Composer::orderBy('id')->get()
        ]);
    }

    public function show(Composer $composer) {
        $composer->load('musics');
        return response()->json($composer);
    }

    public function update(Composer $composer, Request $request) {
        $composer->update($request->all());
        return response()->json($composer);
    }

    public function store(Request $request) {
        $request->validate([
            'lname' => 'string|required',
            'fname' => 'string|required'
        ]);

        $composer = Composer::create($request->all());
        return response()->json($composer);
    }

    public function destroy(Composer $composer) {
        $composer->delete();
        return response()->json(['message'=>'This composer has been deleted.']);
    }
}
