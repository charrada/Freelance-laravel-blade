@extends('layouts.app') 

@section('content')
<div class="container">
    <div class="card" style="margin: 20px;">
        <div class="card-header">Edit Facture</div>
        <div class="card-body">
            <form action="{{ route('facture.update', $facture->id) }}" method="post">
                @csrf
                @method("PATCH")
                <div class="form-group">
                    <label for="client">Client</label>
                    <input type="text" name="client" id="client" value="{{ $facture->client }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="caissier">Caissier</label>
                    <input type="text" name="caissier" id="caissier" value="{{ $facture->caissier }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Montant">Montant</label>
                    <input type="text" name="Montant" id="Montant" value="{{ $facture->Montant }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Etat">Etat</label>
                    <select name="Etat" id="Etat" class="form-control" required>
                        <option value="Pending">Pending</option>
                        <option value="Paid">Paid</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" value="{{ $facture->date }}" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
