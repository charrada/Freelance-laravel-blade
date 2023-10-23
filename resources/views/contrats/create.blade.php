@extends('layouts.me')
@section('content')
    <h1>Créer un Contrat</h1>
    <form action="{{ route('contrats.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titre">Titre :</label>
            <input type="text" name="titre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="poste">position :</label>
            <input type="text" name="poste" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date_debut">start date  :</label>
            <input type="date" name="date_debut" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date_fin">end date :</label>
            <input type="date" name="date_fin" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="remuneration">salary :</label>
            <input type="number" name="remuneration" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="remarque">comment :</label>
            <textarea name="remarque" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
