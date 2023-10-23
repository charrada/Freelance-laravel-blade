@extends('layouts.me')

@section('content')
    <div class="container">
        <h1>Modifier l'offre</h1>

        <form action="{{ route('offres.update', ['offre' => $offre->id]) }}" method="POST">
            @csrf <!-- Inclure le jeton CSRF -->
            @method('PUT') <!-- Utiliser la méthode HTTP PUT pour la mise à jour -->

            <div class="form-group">
                <label for="titre">Titre de l'offre</label>
                <input type="text" name="titre" id="titre" class="form-control" value="{{ $offre->titre }}" required>
            </div>

            <div class="form-group">
                <label for="commentaire">Commentaire</label>
                <textarea name="commentaire" id="commentaire" class="form-control" required>{{ $offre->commentaire }}</textarea>
            </div>

            <div class="form-group">
                <label for="etudes">Études requises</label>
                <input type="text" name="etudes" id="etudes" class="form-control" value="{{ $offre->etudes }}" required>
            </div>

            <div class="form-group">
                <label for="competences">Compétences nécessaires</label>
                <input type="text" name="competences" id="competences" class="form-control" value="{{ $offre->competences }}" required>
            </div>

            <div class="form-group">
                <label for="periode">Période de travail</label>
                <input type="text" name="periode" id="periode" class="form-control" value="{{ $offre->periode }}" required>
            </div>

            <div class="form-group">
                <label for="remuneration">Rémunération</label>
                <input type="number" name="remuneration" id="remuneration" class="form-control" value="{{ $offre->remuneration }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour l'offre</button>
        </form>
    </div>
@endsection
