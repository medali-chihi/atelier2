@extends('layout')
@section('content')
<div class="ligne">
    <div class="col-lg-12 marge-tb">
        <div class="pull-gauche">
            <h2>Ajout nouvel Etudiant</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-
primaire" href="{{ route('etudiant') }}">Retour</a>
        </div>
    </div>
</div>
@if ($erreurs->any())
    <div class="alerte alerte-danger">
        <strong>Oups !</strong> Des problèmes sont survenus avec votre saisie.<br>
<br>
        <ul>
            @foreach ($errors->all() comme $error)
                <li>{{ $erreur}></li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('etudiant.ajouter') }}" method="POST">
    @csrf

        <div class="ligne">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Nom :</strong>
                <input type="text" name="nom" class="form-control">
            </div>
        </div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
            <strong>Nom :</strong>
            <input type="text" name="prenom" class="form-control">
        </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
        <strong>Classe :</strong>
        <select name="classe_id" class="form-control">
        <option></option>
            @foreach($classes comme $classes)
                <option value="{{$classes->id}}">{{$classes-
>libelle}}</option>
            @endforeach
         </select>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Soumettre</button>
    </div>
  </div>
</form>
@endsection