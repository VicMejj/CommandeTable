@extends('layouts.app')

@section('content')
    <h2 class="animate__animated animate__fadeInUp">Modifier la Commande</h2>

    <form action="{{ route('commandes.update', $commande->ID_commande) }}" method="POST" class="form">
        @csrf
        @method('PUT')

        <input type="number" name="ID_utilisateur" value="{{ $commande->ID_utilisateur }}" required>
        <input type="date" name="Date_commande" value="{{ $commande->Date_commande }}" required>
        <input type="number" name="Total" step="0.01" value="{{ $commande->Total }}" required>
        <input type="text" name="Statut" value="{{ $commande->Statut }}" required>

        <button type="submit" class="btn btn-primary animate__animated animate__fadeIn">Mettre à jour</button>
    </form>
@endsection
