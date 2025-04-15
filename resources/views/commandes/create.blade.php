@extends('layouts.app')

@section('content')
    <h2 class="animate__animated animate__fadeInUp">Ajouter une Commande</h2>

    @if ($errors->any())
        <div class="alert error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="animate__animated animate__shakeX">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('commandes.store') }}" method="POST" class="form">
        @csrf
        <input type="number" name="ID_utilisateur" placeholder="ID Utilisateur" required>
        <input type="date" name="Date_commande" required>
        <input type="number" name="Total" step="0.01" placeholder="Total" required>
        <input type="text" name="Statut" placeholder="Statut" required>

        <button type="submit" class="btn btn-success animate__animated animate__fadeIn">Ajouter</button>
    </form>
@endsection
