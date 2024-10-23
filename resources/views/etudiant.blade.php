@extends('layout')
@section('content')
<div class="row" style="margin-top: 5rem;">
       <div class="col-lg-12 marge-tb">
           <div class="pull-gauche">
               <h2>Liste des Etudiants</h2>
              </div>
               <div class="pull-right">
                    <a class="btn btn-success" href="#">Créer un nouvel étudiant</a>
              </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
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
    <td>{{$loop->index}}</td>
    <td>{{$value->nom}}</td>
    <td>{{$value->prenom}}</td>
    <td>{{$value->classes->libelle}}</td>

     <td>
        <a class="btn btn-info" href='#'>Show</a>
        <a class="btn btn-primary" href='#'>Edit</a>
        <button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>

</tr>
@endforeach
     
             <td>1</td>
             <td>Bouzaien</td>
             <td>Malek</td>
             <td>
                <a class="btn btn-info" href="#">Show</a>
                <a class="btn btn-primary" href="#">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</a>
            </td>
        </tr>
         <tr>
             <td>2</td>
             <td>Berrima</td>
             <td>Mouheb</td>
         </tr>
  </table>
@endsection
