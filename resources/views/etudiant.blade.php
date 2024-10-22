@extends('mise en page')
@section('contenu')
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
<table class="table table-bordered table-hover">
      <tr>
            <th>Numéro</th>
             <th>Nom </th>
             <th>Prenom </th>
             <th width="280px">Action</th>
       </tr>
       <tr>
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