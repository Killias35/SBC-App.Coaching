<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seance;
use Illuminate\Support\Facades\Redirect;

class SeanceController extends Controller
{

    public function index(Request $request)
    {
        $user_id = $request->user()->id;
        $seances = Seance::where('user_id', $user_id)->get();
        return view('seances.index', compact('seances'));
    }

    public function create()
    {
        return view('seances.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'user_id' => 'required'
        ]);

        $titre = $request->input('titre');
        $description = $request->input('description');
        $image = $request->input('image');
        $user_id = $request->input('user_id');

        Seance::create([
            'titre' => $titre,
            'description' => $description,
            'image' => $image,
            'user_id' => $user_id
        ]);

        return Redirect()->route('seances.index');
    }

    public function edit($id)
    {
        $seance = Seance::where('id', $id)->first();
        return view('seances.edit', compact('seance'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
        ]);

        $titre = $request->input('titre');
        $description = $request->input('description');
        $image = $request->input('image');

        Seance::where('id', $id)->update([
            'titre' => $titre,
            'description' => $description,
            'image' => $image,
        ]);
        return Redirect()->route('seances.index');
    }

    public function destroy($id)
    {
        Seance::where('id', $id)->delete();
        return Redirect()->route('seances.index');
    }
}
