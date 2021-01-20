@extends('adminlte::page')

@section('content')

<form action="/presentationHome/{{$presentation->id}}" method="POST" enctype="multipart/form-data">
@method('PUT')
@csrf

<div class="container">
    <h1 class="text-center mb-5">Modifier l'image dans la caroussel</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col" class="text-center">texte 1</th>
          <th scope="col" class="text-center">texte 2</th>
          <th scope="col" class="text-center">boutons</th>

          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">{{$presentation->id}}</th>

          <td> <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="texte" placeholder="{{$presentation->texte}}"></textarea></td>

          <td> <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="textebis" placeholder="{{$presentation->textebis}}"></textarea></td>

          <td><input type="texte" class="text-center" name="bouton" placeholder="{{$presentation->bouton}}"></td>

          <td><button type="submit" class="btn btn-success">modifier</button></td>
        </tbody>
    </table>
  </div>

</form>
    
@endsection