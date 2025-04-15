@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="animate__animated animate__fadeInLeft">Liste des Commandes</h2>
    <a href="{{ route('commandes.create') }}" class="btn btn-success animate__animated animate__fadeInRight">Ajouter Commande</a>
</div>
    <h2 class="animate__animated animate__fadeInUp"></h2>

    @if(session('success'))
        <div class="alert success">{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Utilisateur</th>
                <th>Date</th>
                <th>Total</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commandes as $commande)
                <tr>
                    <td>{{ $commande->ID_commande }}</td>
                    <td>{{ $commande->ID_utilisateur }}</td>
                    <td>{{ $commande->Date_commande }}</td>
                    <td>{{ $commande->Total }}</td>
                    <td>{{ $commande->Statut }}</td>
                    <td>
                        <a href="{{ route('commandes.edit', $commande->ID_commande) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('commandes.destroy', $commande->ID_commande) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Confirm delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
