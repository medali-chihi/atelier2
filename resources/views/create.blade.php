@extends('layout')
@section('content')
<div class="ligne">
    <div class="col-lg-12 marge-tb">
        <div class="pull-gauche">
            <h2>Ajout nouvel Etudiant</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primaire" href="{{ route('etudiant') }}">back</a>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alerte alerte-danger">
        <strong>Oups !</strong> Des problèmes sont survenus avec votre saisie.<br>
<br>
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li> 
    @endforeach
</ul>

    </div>
@endif
<form action="{{ route('etudiant.ajouter') }}" method="POST">
    @csrf

        <div class="row">
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
        <strong>Classe :</strong>
        <select name="classes_id" class="form-control">
        <option></option>
            @foreach($classes as $classes)
                <option value="{{$classes->id}}">{{$classes->libelle}}</option>
            @endforeach
         </select>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
          <button type="submit" class="btn btn-primary">submit</button>
    </div>
  </div>
</form>
@endsection