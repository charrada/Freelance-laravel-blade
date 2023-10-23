@extends('layouts.me')

@section('content')
    <h1>Edit contract</h1>
    <form action="{{ route('contrats.update', $contrat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titre">Title :</label>
            <input type="text" name="titre" class="form-control" value="{{ $contrat->titre }}" required>
        </div>
        <div class="form-group">
            <label for="poste">Poste :</label>
            <input type="text" name="poste" class="form-control" value="{{ $contrat->poste }}" required>
        </div>
        <div class="form-group">
            <label for="date_debut">Date de début :</label>
            <input type="date" name="date_debut" class="form-control" value="{{ $contrat->date_debut }}" required>
        </div>
        <div class="form-group">
            <label for="date_fin">Date de fin :</label>
            <input type="date" name="date_fin" class="form-control" value="{{ $contrat->date_fin }}" required>
        </div>
        <div class="form-group">
            <label for="remuneration">Rémunération :</label>
            <input type="number" name="remuneration" class="form-control" value="{{ $contrat->remuneration }}" required>
        </div>
        <div class="form-group">
            <label for="remarque">Remarque :</label>
            <textarea name="remarque" class="form-control">{{ $contrat->remarque }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection
