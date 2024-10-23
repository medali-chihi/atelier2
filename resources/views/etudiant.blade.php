@extends('layout')
@section('content')
<div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 marge-tb">
        <div class="pull-left">
            <h2>Liste des Etudiants</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('etudiant.create') }}">create new Student</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered table-hover">
    <tr>
        <th>Numero</th>
        <th>nom</th>
        <th>prenom</th>
        <th>classe</th>
        <th width="280px">Action</th>
    </tr>

    @foreach($liste as $value)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $value->nom }}</td>
        <td>{{ $value->prenom }}</td>
        <td>{{ $value->classe ? $value->classe->libelle : 'N/A' }}</td> 

        <td>
            <a class="btn btn-info" href="{{ route('etudiant.show', $value->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('etudiant.edit', $value->id) }}">Edit</a>
            <form action="{{ route('etudiant.delete', $value->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input type= "hidden"name="_method"value= "delete">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir effectuer cette opération?');">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
