@extends('adminlte::page')

@section('content')

<form action="/service/{{$service->id}}" method="POST">
@method('PUT')
@csrf

<div class="container w-50 ">
    <h1 class="text-center mb-5">Modifier le service</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">titre</th>
          <th scope="col">bouton</th>

          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">{{$service->id}}</th>

          <td> <input type="text" name="titre" placeholder="{{$service->titre}}"></td>


          <td> <input type="text" name="bouton" placeholder="{{$service->bouton}}"></td>

          <td><button type="submit" class="btn btn-success">modifier</button></td>
        </tbody>
    </table>
  </div>

</form>
    
@endsection