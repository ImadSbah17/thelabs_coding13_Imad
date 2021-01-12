@extends('adminlte::page')

@section('content')

<form action="/caroussel/{{$bannerimg->id}}" method="POST" enctype="multipart/form-data">
@method('PUT')
@csrf

<div class="container w-50">
    <h1 class="text-center mb-5">Modifier l'image dans la caroussel</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col" class="text-center">Image</th>
          <th scope="col"> méthode</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">{{$bannerimg->id}}</th>
          <td><input type="file" name="src"></td>
          <td><button type="submit" class="btn btn-success">modifier</button></td>
        </tbody>
    </table>
  </div>

</form>
    
@endsection