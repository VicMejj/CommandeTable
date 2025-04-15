<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index()
    {
        $commandes = Commande::all();
        return view('commandes.index', compact('commandes'));
    }

    public function create()
    {
        return view('commandes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_utilisateur' => 'required|integer',
            'Total' => 'required|numeric',
            'Statut' => 'required|string'
        ]);

        Commande::create([
            'ID_utilisateur' => $request->ID_utilisateur,
            'Date_commande' => now(),
            'Total' => $request->Total,
            'Statut' => $request->Statut,
        ]);

        return redirect()->route('commandes.index')->with('success', 'Commande ajoutée avec succès!');
    }

    public function edit($id)
    {
        $commande = Commande::findOrFail($id);
        return view('commandes.edit', compact('commande'));
    }

    public function update(Request $request, $id)
    {
        $commande = Commande::findOrFail($id);

        $request->validate([
            'ID_utilisateur' => 'required|integer',
            'Total' => 'required|numeric',
            'Statut' => 'required|string'
        ]);

        $commande->update($request->all());

        return redirect()->route('commandes.index')->with('success', 'Commande mise à jour!');
    }

    public function destroy($id)
    {
        $commande = Commande::findOrFail($id);
        $commande->delete();
        return redirect()->route('commandes.index')->with('success', 'Commande supprimée.');
    }
}

