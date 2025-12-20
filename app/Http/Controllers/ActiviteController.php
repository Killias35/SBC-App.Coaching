<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activite;
use Illuminate\Support\Facades\Redirect;

class ActiviteController extends Controller
{
    public function index(Request $request)
    {
        $user_id = $request->user()->id;

        $activites = Activite::where('user_id', $user_id)->get();

        return view('activites.index', compact('activites'));
    }

    public function create()
    {
        return view('activites.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'user_id' => 'required',
        ]);

        $nom = $request->input('nom');
        $description = $request->input('description');
        $image = $request->input('image');
        $user_id = $request->input('user_id');

        Activite::create([
            'nom' => $nom,
            'description' => $description,
            'image' => $image,
            'user_id' => $user_id,
        ]);

        return Redirect()->route('activites.index');
    }

    public function edit($id)
    {
        $activite = Activite::where('id', $id)->first();

        return view('activites.edit', compact('activite'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
        ]);

        $nom = $request->input('nom');
        $description = $request->input('description');
        $image = $request->input('image');

        Activite::where('id', $id)->update([
            'nom' => $nom,
            'description' => $description,
            'image' => $image,
        ]);

        return Redirect()->route('activites.index');
    }

    public function destroy($id)
    {
        Activite::where('id', $id)->delete();

        return Redirect()->route('activites.index');
    }
}
