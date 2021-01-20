@extends('adminlte::page')

@section('content')

<form action="/servicevrai/{{$servicevrai->id}}" method="POST">
@method('PUT')
@csrf

<div class="container ">
    <h1 class="text-center mb-5">Modifier le service</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">icon</th>
          <th scope="col">titre</th>
          <th scope="col">texte</th>

          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">{{$servicevrai->id}}</th>

          <td> <input type="text" name="icon" placeholder="{{$servicevrai->icon}}"></td>


          <td> <input type="text" name="titre" placeholder="{{$servicevrai->titre}}"></td>

          <td> <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="texte" placeholder="{{$servicevrai->texte}}"></textarea></td>

     

          <td><button type="submit" class="btn btn-success">modifier</button></td>
        </tbody>
    </table>
  </div>

</form>
    
@endsection