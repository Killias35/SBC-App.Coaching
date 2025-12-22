<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seance;
use App\Models\SeancesDone;
use Illuminate\Support\Facades\Redirect;

class SeanceController extends Controller
{

    public function index(Request $request)
    {
        return view('seances.index');
    }

    public function coach(Request $request)
    {
        $user = $request->user();
        if ($user->coach == null) {
            return Redirect()->route('seances.index');
        }
        $seances = Seance::where('user_id', $user->coach->id)->get();
        foreach ($seances as $seance) {
            $seance->done = $user->hasSeanceDone($seance->id);
        }
        return view('seances.coach', compact('seances'));
    }

    public function mines(Request $request)
    {
        $user_id = $request->user()->id;
        $seances = Seance::where('user_id', $user_id)->get();
        return view('seances.mines', compact('seances'));
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
        $user_id = $request->user()->id;

        Seance::create([
            'titre' => $titre,
            'description' => $description,
            'image' => $image,
            'user_id' => $user_id
        ]);

        return Redirect()->route('seances.index');
    }

    public function edit(Request $request, $id)
    {
        $user_id = $request->user()->id;
        $seance = Seance::where('id', $id)->first();
        $canEdit = $seance->user_id == $user_id;

        return view('seances.edit', compact('seance', 'canEdit'));
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
        $user_id = $request->user()->id;

        $seance = Seance::where('id', $id)->first();
        if ($seance->user_id != $user_id) {  // ne peut pas updater une seance dont il n'est pas le proprietaire
            return Redirect()->route('seances.index');
        }
        $seance->update([
            'titre' => $titre,
            'description' => $description,
            'image' => $image,
        ]);
        return Redirect()->route('seances.index');
    }

    public function done(Request $request)
    {
        $request->validate([
            'seance_id' => 'required',
        ]);

        $seance_id = $request->input('seance_id');
        auth()->user()->doneSeances()->toggle($seance_id);
        return back();
    }

    public function destroy(Request $request, $id)
    {
        $user_id = $request->user()->id;
        $seance = Seance::where('id', $id)->first();
        if ($seance->user_id != $user_id) {  // ne peut pas supprimer une seance dont il n'est pas le proprietaire
            return Redirect()->route('seances.index');
        }
        $seance->delete();
        return Redirect()->route('seances.index');
    }
}
