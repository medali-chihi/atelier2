@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Information Etudiant</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('etudiant') }}">
                Back
            </a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nom :</strong>
            {{ $etudiant->nom }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Prénom :</strong> <!-- Corrigé ici pour le label -->
            {{ $etudiant->prenom }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Classe :</strong> <!-- Ajouter un affichage pour la classe, si nécessaire -->
            {{ $etudiant->classe->libelle }} <!-- Assuming there's a relationship with Classe -->
        </div>
    </div>
</div>
@endsection
